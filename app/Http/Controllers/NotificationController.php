<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = DB::table('notification')
            ->where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('notifications', compact('notifications'));
    }

    public function markAsRead($id)
    {
        try {
            DB::table('notification')
                ->where('notification_id', $id)
                ->where('user_id', Auth::id())
                ->update(['read' => 1]);

            return response()->json(['success' => true, 'message' => 'Notification marked as read']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to mark as read'], 500);
        }
    }

    public function destroy($id)
    {
        try {
            DB::table('notification')
                ->where('notification_id', $id)
                ->where('user_id', Auth::id())
                ->delete();

            return response()->json(['success' => true, 'message' => 'Notification deleted']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to delete notification'], 500);
        }
    }
}