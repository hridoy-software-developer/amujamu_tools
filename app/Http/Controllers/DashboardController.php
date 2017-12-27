<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManualBooking;
use DB;
use Charts;

class DashboardController extends Controller
{
    public function login()
    {
        return view('Dashboard.login');
    }
    
    public function check()
    {
        return redirect()->action('DashboardController@index');
    }

    public function index()
    {
        $locations = DB::table('locations')->get();
        $tours = DB::table('tours')->get();
        $manual_bookings = DB::table('manual_bookings')->get();
        $clients = DB::table('clients')->get();

        $date = date('F Y');

        $chart = Charts::database(ManualBooking::all(), 'bar', 'highcharts')
        ->title('Sales Details - '.$date)
        ->elementLabel("Total Tour Solds")
        ->height(400)
        ->responsive(false)
        ->groupByDay();
        
        return view('Dashboard.index',compact('locations','tours','manual_bookings','clients','chart'));
    }
}
