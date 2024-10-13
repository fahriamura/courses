<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Video;
use App\Models\ZoomCourse;

class UserDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Check if the user has an active subscription
        $hasActiveSubscription = $user->subscription && $user->subscription->isActive();

        if (!$hasActiveSubscription) {
            return redirect()->route('about');
        }

        
        // Get courses based on subscription level
        $videos = Video::where('level', '<=', $user->subscription->level)
            ->orderBy('start_date', 'asc')
            ->get();

        // Get zoom courses based on subscription level
        $zoomClasses = ZoomCourse::where('level', '<=', $user->subscription->level)
            ->orderBy('date', 'asc')
            ->get();

        return view('user.dashboard', compact('user', 'videos', 'zoomClasses'));
    }
}