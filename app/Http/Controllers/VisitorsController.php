<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorsController extends Controller
{
    public function trackVisitor(Request $request)
    {
        $ipAddress = $request->ip();
        $visitedAt = now();

        // Check if the visitor has already been counted in the last 24 hours
        $visitor = DB::table('unique_visitors')
            ->where('ip_address', $ipAddress)
            ->where('visited_at', '>=', now()->subDay())
            ->first();

        // If not counted, insert the visitor record
        if (!$visitor) {
            DB::table('unique_visitors')->insert([
                'ip_address' => $ipAddress,
                'visited_at' => $visitedAt,
                'created_at' => $visitedAt,
                'updated_at' => $visitedAt,
            ]);
        }
        $visitorCount = DB::table('unique_visitors')->count(); // Get the visitor count
        return view('home', [
            'visitorCount' => $visitorCount, // Pass the visitor count to the view
        ]);
    }
}
