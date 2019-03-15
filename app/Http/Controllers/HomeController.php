<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Analytics;
use Illuminate\Support\Facades\Auth;
use Spatie\Analytics\Period;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            $analyticsActive = Analytics::getAnalyticsService()->data_realtime->get('ga:' . env('ANALYTICS_VIEW_ID'), 'rt:activeVisitors')->totalsForAllResults['rt:activeVisitors'];
            $analytics7day = Analytics::fetchVisitorsAndPageViews(Period::days(7));
            $test = Analytics::fetchMostVisitedPages(Period::days(7), 20);
            $test1 = Analytics::fetchTotalVisitorsAndPageViews(Period::days(7));
            return view('admin.home', [
                'usersActive' => $analyticsActive,
                'mostPage' => $test,
                'test' => $test1,
            ]);
        }

        else{
            return redirect ('/');
        }
    }
}
