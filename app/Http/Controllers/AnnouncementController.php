<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    // Show announcements
    public function index(Request $request)
    {
        $query = Announcement::query();

        // Search by title or body
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                    ->orWhere('body', 'LIKE', "%{$search}%");
            });
        }

        $announcements = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.announcements', compact('announcements'));
    }
    // Store new announcement
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'type' => 'required|string|in:general,emergency,event',
        ]);

        Announcement::create([
            'title' => $request->title,
            'body' => $request->body,
            'type' => $request->type,
            'user_id' => 1, // Assuming admin user ID is 1
        ]);

        return redirect()->route('announcements.index')->with('success', 'Announcement created successfully.');
    }

    // Update announcement
    public function update(Request $request, $id)
    {
        $announcement = Announcement::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'type' => 'required|string|in:general,emergency,event',
        ]);

        $announcement->update([
            'title' => $request->title,
            'body' => $request->body,
            'type' => $request->type,
        ]);

        return redirect()->route('announcements.index')->with('success', 'Announcement updated successfully.');
    }

    // Delete announcement
    public function destroy($id)
    {
        $announcement = Announcement::findOrFail($id);
        $announcement->delete();

        return redirect()->route('announcements.index')->with('success', 'Announcement deleted successfully.');
    }
}
