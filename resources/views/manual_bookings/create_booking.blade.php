@extends('layouts.app')

@section('content')
<section class="content-header">
    <h3>
        Dashboard <small>Crezate New Manual Booking</small>
        <span id='current-time' class='pull-right'></span>
    </h3>
</section>

    <div class="row row-justified ml-0 mr-0">
        <!-- Dashboard: Visitors -->
        <div class="col-xs-12 pl-0 pr-0">
            <div class="panel panel-default mt-m-8">
                <div class="panel-body">
                    <a href="{{ URL::route('manual_bookings.manual_booking.index') }}" class="btn btn-info btn-sm pull-right">All Booking List</a>
                    <h4>Create New Manual Booking:</h4>
                    <hr style='margin: 15px 0px;'>
                    <form method="POST" action="#" accept-charset="UTF-8" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class='col-xs-12 col-md-7 p-l-0px p-r-5px'>
                            <table class='table table-striped table-bordered'>
                                    <tr>
                                        <td colspan=4>
                                            <h5 class='text-center' style='margin:0px;padding:5px;'>Booking Details</h5>
                                            <hr style='margin: 5px 0px;'>
                                            <p style='margin:0px;padding:5px;'><span style='color: #a94442;font-weight: bold'>Booked Code :</span> <span id='booking_code_id'></span>
                                            <p style='margin:0px;padding:5px;'><span style='color: #a94442;font-weight: bold'>Tour :</span> <?php echo session('tour_name');?></p>
                                        </td>
                                    </tr>
                            </table>
                                <table id='package_table' class='table table-striped table-bordered'>
                                <col width="220">
                                <col width="30">
                                <col width="70">
                                <col width="120">
                                <tr>
                                    <th>Package Name</th>
                                    <th class='text-center'>Currency</th>
                                    <th style='text-align: center !important;'>Price</th>
                                    <th class='text-center'>Action</th>
                                </tr>
                                <?php
                                    for($i=0;$i<count($tour_package);$i++)
                                    {?>
                                        <tr id='<?php echo $tour_package_price[$i]->id;?>'>
                                            <td><?php echo $tour_package[$i]->title;?></td>
                                            <td class='text-center'>THB</td>
                                            <td style='text-align: center !important;'><?php echo $tour_package_price[$i]->local_user;?></td>
                                            <td>
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button" style='padding: 3px 5px;'
                                                        onclick="subtract(this,'input_ticket_cnt_<?php echo ($i);?>',<?php echo $tour_package_price[$i]->local_user;?>)">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                    </span>
                                                    <input id='input_ticket_cnt_<?php echo ($i);?>' name='input_ticket_cnt_<?php echo ($i);?>' type="text" class="form-control text-center" placeholder="0" value='0' style='padding: 2px !important;' readonly>
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button" style='padding: 3px 5px;'
                                                        onclick="add(this,'input_ticket_cnt_<?php echo ($i);?>',<?php echo $tour_package_price[$i]->local_user;?>)">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                <?php }?>
                                </table>
                                <div>
                                    <h4>Lead Guest Informations :</h4>
                                </div>
                                <table id='guest_table' class='table'>
                                    <tr>
                                        <td>Booking Code:</td>
                                        <td colspan=2>
                                            <input id='booking_form_code_id' name='booking_form_code_id' type="text" class="form-control" placeholder="" style='padding: 5px 20px !important;' readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Full Name:</td>
                                        <td colspan=2>
                                            <input id='full_name' name='full_name' type="text" class="form-control" placeholder="" style='padding: 5px 20px !important;'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td colspan=2>
                                            <input id='email' name='email' type="text" class="form-control" placeholder="" style='padding: 5px 20px !important;'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nationality :</td>
                                        <td colspan=2>
                                            <input id='nationlity' name='nationlity' type="text" class="form-control" placeholder="" style='padding: 5px 20px !important;'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Contact no:</td>
                                        <td colspan=2>
                                            <input id='contact_no' name='contact_no' type="text" class="form-control" placeholder="" style='padding: 5px 20px !important;'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Payment Status:</td>
                                        <td colspan=2>
                                            <input type="radio" name="payment_status" value="Cash Payment" checked> Cash Payment
                                            <input type="radio" name="payment_status" value="Card Payment" style='margin-left: 20px;'> Card Payment
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Payment Link:</td>
                                        <td colspan=2>
                                            <input id='payment_link' name='paid_amount' type="text" class="form-control" placeholder="" style='padding: 5px 20px !important;'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Total Paid Amount:</td>
                                        <td colspan=2>
                                            <input id='total_paid_amount' name='total_paid_amount' type="text" class="form-control" value='0.00' placeholder="" style='padding: 5px 20px !important;' readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Paid Amount:</td>
                                        <td colspan=2>
                                            <input id='paid_amount' name='paid_amount' type="text" class="form-control" placeholder="" value='0.00' style='padding: 5px 20px !important;'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Due Amount:</td>
                                        <td colspan=2>
                                            <input id='due_amount' name='due_amount' type="text" class="form-control" placeholder="" value='0.00' style='padding: 5px 20px !important;'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Status:</td>
                                        <td colspan=2>
                                        <select id='status' name='status' class="form-control" style='padding: 15px 20px !important;'>
                                            <option value='PAID'>PAID</option>
                                            <option value='FAILED'>FAILED</option>
                                            <option value='REQUEST_DENIED'>REQUEST_DENIED</option>
                                            <option value='PROCESSING'>PROCESSING</option>
                                        </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=3>
                                            <button id='submit_btn' type='button' class='btn btn-info btn-sm pull-right' data-url='<?php echo $path;?>'>
                                                Pay Now
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                        <div class='col-xs-12 col-md-5 p-l-5px p-r-5px'>
                            <table name='pricing_table_data' class='table table-striped table-bordered'>
                                <tr>
                                    <td colspan=4>
                                        <h5 class='text-center' style='margin:0px;padding:5px;'>Confirm Booking</h5>
                                        <hr style='margin: 5px 0px;'>
                                        <p style='margin:0px;padding:5px;'><span style='color: #a94442;'>Tour :</span> <?php echo session('tour_name');?></p>
                                        <p style='margin:0px;padding:5px;'><span style='color: #a94442;'>Booked Date :</span> <span id='tour_date'><?php echo session('tour_date');?></p></span>
                                    </td>
                                </tr>
                            </table>
                            <table id='buy_package' class='table table-striped table-bordered'>
                                <col width="70">
                                <col width="40">
                                <col width="40">
                                <tr>
                                    <th>Package</th>
                                    <th>Description</th>
                                    <th>Total Price</th>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> <!-- / .container-fluid -->
@endsection