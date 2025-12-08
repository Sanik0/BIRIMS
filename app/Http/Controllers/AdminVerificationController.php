<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminVerificationController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('verification')
            ->leftJoin('user', 'verification.user_id', '=', 'user.user_id')
            ->select(
                'verification.*',
                'user.firstname',
                'user.lastname',
                'user.middlename',
                'user.email'
            )
            ->orderBy('verification.submitted_at', 'desc');

        // Filter by document type if provided
        if ($request->has('type') && $request->type != '') {
            $query->where('verification.type', $request->type);
        }

        // Search by user name or email
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('user.firstname', 'like', "%{$search}%")
                    ->orWhere('user.lastname', 'like', "%{$search}%")
                    ->orWhere('user.email', 'like', "%{$search}%");
            });
        }

        $verifications = $query->get();

        return view('admin.verifications', compact('verifications'));
    }

    public function show($id)
    {
        $verification = DB::table('verification')
            ->where('verification.verification_id', $id)
            ->leftJoin('user', 'verification.user_id', '=', 'user.user_id')
            ->select(
                'verification.*',
                'user.firstname',
                'user.lastname',
                'user.middlename',
                'user.email',
                'user.contact',
                'user.birthdate',
                'user.house_number',
                'user.street'
            )
            ->first();

        if (!$verification) {
            abort(404, 'Verification request not found');
        }

        return response()->json([
            'success' => true,
            'verification' => $verification
        ]);
    }

    public function verify(Request $request, $id)
    {
        try {
            $verification = DB::table('verification')
                ->where('verification_id', $id)
                ->first();

            if (!$verification) {
                return back()->withErrors(['error' => 'Verification request not found.']);
            }

            // Update verification status
            DB::table('verification')
                ->where('verification_id', $id)
                ->update([
                    'status' => 'verified'
                ]);

            // Update user's verified status
            DB::table('user')
                ->where('user_id', $verification->user_id)
                ->update([
                    'verified' => 1
                ]);

            // Create notification
            $this->createVerificationNotification($verification, 'verified');

            return redirect()->route('admin.verifications.index')
                ->with('success', 'User verified successfully!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to verify user: ' . $e->getMessage()]);
        }
    }

    public function reject(Request $request, $id)
    {
        try {
            $verification = DB::table('verification')
                ->where('verification_id', $id)
                ->first();

            if (!$verification) {
                return back()->withErrors(['error' => 'Verification request not found.']);
            }

            // Update verification status
            DB::table('verification')
                ->where('verification_id', $id)
                ->update([
                    'status' => 'rejected'
                ]);

            // Create notification
            $this->createVerificationNotification($verification, 'rejected');

            return redirect()->route('admin.verifications.index')
                ->with('success', 'Verification request rejected!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to reject verification: ' . $e->getMessage()]);
        }
    }

    private function createVerificationNotification($verification, $status)
    {
        if ($status === 'verified') {
            $title = "Account Verified Successfully";
            $body = "Congratulations! Your account has been verified. You now have full access to all barangay services.";
        } else {
            $title = "Verification Request Rejected";
            $body = "Your verification request has been rejected. Please submit a clearer document or contact the barangay office for assistance.";
        }

        DB::table('notification')->insert([
            'user_id' => $verification->user_id,
            'title' => $title,
            'body' => $body,
            'read' => 0,
            'created_at' => now()
        ]);
    }
}