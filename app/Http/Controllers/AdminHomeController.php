<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blotter;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AdminHomeController extends Controller
{
    public function index()
    {
        // Get blotter reports from the past year grouped by street
        $blotterData = Blotter::where('created_at', '>=', now()->subYear())
            ->select('reporter_address as street', DB::raw('count(*) as count'))
            ->groupBy('reporter_address')
            ->orderBy('count', 'desc')
            ->limit(5)
            ->get();

        // Calculate total for percentages
        $total = $blotterData->sum('count');

        // Clean up street names and prepare data
        $blotterData = $blotterData->map(function ($item) {
            // Extract just the street name (before the first comma)
            $streetParts = explode(',', $item->street);
            $item->street = trim($streetParts[0]);
            return $item;
        });

        // Prepare data for chart
        $streets = $blotterData->pluck('street')->toArray();
        $counts = $blotterData->pluck('count')->toArray();

        // Calculate percentages
        $percentages = $blotterData->map(function ($item) use ($total) {
            return $total > 0 ? round(($item->count / $total) * 100, 1) : 0;
        })->toArray();

        // Define colors
        $colors = ['#FF89D7', '#CF93FF', '#89C6FF', '#FFEBA5', '#8AFFC7'];

        // Get appointments from the past week grouped by day - FIXED
        $appointmentData = Appointment::where('created_at', '>=', now()->subWeek())
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
            ->groupBy(DB::raw('DATE(created_at)'))  // Changed this line
            ->orderBy('date', 'asc')
            ->get();

        // Create array for last 7 days
        $days = [];
        $appointmentCounts = [];

        for ($i = 6; $i >= 0; $i--) {
            $date = now()->subDays($i);
            $days[] = $date->format('D'); // Mon, Tue, Wed, etc.

            // Find count for this date
            $count = $appointmentData->firstWhere('date', $date->format('Y-m-d'));
            $appointmentCounts[] = $count ? $count->count : 0;
        }

        // Get total users count from the past year
        $totalUsers = \App\Models\User::where('created_at', '>=', now()->subYear())->count();
        $totalBlotters = \App\Models\Blotter::where('created_at', '>=', now()->subYear())->count();
        $totalAppointments = \App\Models\Appointment::where('created_at', '>=', now()->subYear())->count();

        return view('admin.home', compact('blotterData', 'streets', 'counts', 'percentages', 'colors', 'total', 'days', 'appointmentCounts', 'totalUsers', 'totalBlotters', 'totalAppointments'));
    }
}
