<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blotter;

class AdminBlotterController extends Controller
{

    public function index(Request $request)
    {
        $query = Blotter::with('user');

        // Search
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('reporter_name', 'LIKE', "%{$search}%")
                    ->orWhere('respondent_name', 'LIKE', "%{$search}%")
                    ->orWhere('complaint', 'LIKE', "%{$search}%");
            });
        }

        // Filter by status
        if ($request->has('status') && $request->status != '') {
            $query->where('status', $request->status);
        }

        $blotters = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.blotters', compact('blotters'));
    }
    public function update(Request $request, $id)
    {
        $blotter = Blotter::with('user')->find($id);

        if (!$blotter) {
            return redirect()->route('admin.blotters.index')->with('error', 'Blotter not found.');
        }

        $request->validate([
            'status' => 'required|string|in:pending,resolved,rejected',
        ]);

        $oldStatus = $blotter->status;
        $newStatus = $request->status;

        $blotter->update([
            'status' => $newStatus
        ]);

        // Create notification for the user
        if ($oldStatus !== $newStatus) {
            $statusMessages = [
                'resolved' => 'Your blotter report has been resolved.',
                'rejected' => 'Your blotter report has been rejected.',
                'pending' => 'Your blotter report status has been changed to pending.',
            ];

            \App\Models\Notification::create([
                'user_id' => $blotter->user_id,
                'title' => 'Blotter Report Status Update',
                'body' => $statusMessages[$newStatus] ?? 'Your blotter report status has been updated.',
                'read' => false,
                'created_at' => now()
            ]);
        }

        return redirect()->route('admin.blotters.index')->with('success', 'Blotter status updated successfully.');
    }

    public function destroy($id)
    {
        $blotter = Blotter::find($id);

        if (!$blotter) {
            return redirect()->route('admin.blotters.index')->with('error', 'Blotter not found.');
        }

        $blotter->delete();

        return redirect()->route('admin.blotters.index')->with('success', 'Blotter deleted successfully.');
    }
}
