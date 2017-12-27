<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\ManualBooking;
use App\Models\Client;
use App\Models\ManualBookingList;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Input;
use Response;
use Session;
use Charts;

class ManualBookingController extends Controller
{

    /**
     * Display a listing of the manual bookings.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $manual_booking = DB::table('manual_bookings')->get();
        return view('manual_bookings.index',compact('manual_booking'));
    }

    /**
     * Show the form for creating a new manual booking.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $locations = DB::table('locations')->get();
        $tours = DB::table('tours')->get();
        
        return view('manual_bookings.create',['locations'=>$locations,'tours'=>$tours]);
    }

    public function create_booking(Request $request)
    {
        Session::put('location_id', $request->input('location_id'));
        Session::put('tour_id', $request->input('tour_id'));
        Session::put('tour_date', $request->input('date_id'));

        $tour_package = DB::table('pricingcategory')
        ->where('pricingcategory.tour_id','=',$request->input('tour_id'))
        ->get();

        $tour_package_price = DB::table('pricing')
        ->where('pricing.tour_id','=',$request->input('tour_id'))
        ->get();
        
        $tour_title = DB::table('tours')
        ->where('tours.tour_id_pick','=',$request->input('tour_id'))
        ->get();

        Session::put('tour_name', $tour_title[0]->title);

        $path = $request->root();

        return view('manual_bookings.create_booking',compact('tour_package','tour_package_price','path'));
    }

    public function booking_save(Request $request)
    {

        $booking = new ManualBooking;
        $booking ->booking_code=$_GET['booking_code'];
        $booking ->tours_id=Session::get('tour_id');
        $booking ->tour_date=$_GET['tour_date'];
        $booking ->total_price=$_GET['total_price'];
        $booking ->payment_status=$_GET['payment_status'];
        $booking ->payment_link=$_GET['payment_link'];
        $booking ->paid_amount=$_GET['paid_amount'];
        $booking ->due_amount=$_GET['due_amount'];
        $booking ->full_name=$_GET['full_name'];
        $booking ->email=$_GET['email'];
        $booking ->nationality=$_GET['nationality'];
        $booking ->contact=$_GET['contact'];
        $booking ->status=$_GET['status'];
        $booking ->created_by=$_GET['created_by'];
        $booking ->updated_by=$_GET['updated_by'];
        $booking->save();

        $client = new Client;
        $client ->booking_code=$_GET['booking_code'];
        $client ->name=$_GET['full_name'];
        $client ->email=$_GET['email'];
        $client ->nationality=$_GET['nationality'];
        $client ->contact_no=$_GET['contact'];
        $client->save();

        return redirect()->route('manual_bookings.manual_booking.index');
    }

    public function booking_list_save()
    {
        $package_list = new ManualBookingList;
        $package_list->booking_code = $_GET['booking_code'];
        $package_list->package_id = $_GET['package_id'];
        $package_list->currency = $_GET['currency'];
        $package_list->price = $_GET['price'];
        $package_list->quantity = $_GET['quantity'];
        $package_list->total_price = $_GET['total_price'];
        $package_list->created_by = $_GET['created_by'];
        $package_list->updated_by = $_GET['updated_by'];
        $package_list->save();
    }

    public function deatils(Request $request)
    {
        $booking_code = $request->input('booking_code');

        $manual_booking = DB::table('manual_bookings')
        ->where('booking_code','=',$booking_code)
        ->get();

        $tour_id = $manual_booking[0]->tours_id;
        
        $tour_name = DB::table('tours')
        ->where('tour_id_pick','=',$tour_id)
        ->get();

        // $tour_package = DB::table('pricingcategory')
        // >join('manual_booking_lists','manual_booking_lists.package_id','=','pricingcategory.id')
        // ->where('pricingcategory.tour_id','=',$tour_id)
        // ->get();

        $manual_booking_list = DB::table('manual_booking_lists')
        ->where('booking_code','=',$booking_code)
        ->get();

        return view('manual_bookings.invoice',compact('manual_booking','tour_name','manual_booking_list'));
    }
}