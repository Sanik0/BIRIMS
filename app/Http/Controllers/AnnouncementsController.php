<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementsController extends Controller
{
    public function index()
    {
        // Fetch all announcements, newest first
        $announcements = Announcement::orderBy('created_at', 'desc')->get();

        // Pass to view
        return view('announcements', compact('announcements'));
    }
}
