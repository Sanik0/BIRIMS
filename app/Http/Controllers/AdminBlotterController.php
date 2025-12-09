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

        $blotters = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.blotters', compact('blotters'));
    }

    public function update(Request $request, $id)
    {
        $blotter = Blotter::find($id);

        if (!$blotter) {
            return redirect()->route('admin.blotters.index')->with('error', 'Blotter not found.');
        }

        $request->validate([
            'reporter_name' => 'required|string|max:255',
            'respondent_name' => 'required|string|max:255',
            'complaint' => 'required|string',
            'incident_date' => 'required|date',
        ]);

        $blotter->update($request->all());

        return redirect()->route('admin.blotters.index')->with('success', 'Blotter updated successfully.');
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