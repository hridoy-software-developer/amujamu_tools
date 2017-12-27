<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>AmuJamu invoice</title>
    <link rel="stylesheet" href="{{ asset('/resources/assets/doc_file/bootstrap.min.css')}}">
    <style>
        html,body
        {
            padding: 0px;
            margin: 0px;
            font-family: 'consolas';
        }
        .row {
            margin-right: 0px;
            margin-left: 0px;
        }
        ol {
            width: 100%;
            display: table;
            table-layout: fixed;
            margin-bottom: 5px;   
            padding:  0px;
        }
        ol > li {
            display: table-cell;
            /* border: 1px dashed red; */
        }
        .invoice_logo
        {
            width: 150px;
            height: 50px;
        }
        p {
    margin: 0px;
}
pre {
    width: 100%;
    padding: 9.5px;
    margin-left: 0px;
    font-size: 13px;
    line-height: 1.5;
    color: #333;
    word-break: break-all;
    word-wrap: break-word;
    background-color: transparent;
    border: 0px solid #ccc;
    border-radius: 0px;
    text-align: justify;
    white-space: pre-line;
}
.text_left
{
    text-align: left;
}
.text_right
{
    text-align: right;
}
@media print {
    .printarea {
        background-color: white;
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        margin: 0;
        padding: 15px;
        font-size: 14px;
        line-height: 18px;
    }
}
    </style>
</head>

<body>
    <div id='printarea'>
        <div class="col-xs-12">
            <ol>
                <li>
                    <img class='invoice_logo' src="{{ asset('/resources/assets/icons/invoice_logo.png')}}" alt=''>
                </li>
                <li>
                    <p style='text-align: right;'>Date: <?php echo date('d-M-Y');?></p>
                </li>
            </ol>
        </div>
        <div class="col-xs-12">
            <ol>
                <li>
                    <pre class='text_left'>
                        Form
                        AmuJamu.com
                        Tower Hamlet (8th floor), 16, Kemal
                        Ataturk avenue, Bonnani, Dhaka - 1213
                        Phone: +880 2 9820011, +880 2 9820081-2 
                        Email: info@prochitoit.com
                    </pre>
                </li>
                <li>
                    <pre class='text_right'>
                        Form
                        <span><?php echo $manual_booking[0]->full_name;?></span>
                        <span><?php echo $manual_booking[0]->nationality;?></span>
                        <span>Contact: <?php echo $manual_booking[0]->contact;?></span>
                        <span>Email: <?php echo $manual_booking[0]->email;?></span>
                    </pre>
                </li>
            </ol>
        </div>
        <div class='col-xs-12'>
            <table class='table table-striped table-bordered'>
                <tr>
                    <td colspan=4>
                        <ol>
                            <li>
                                <pre class='text-left'>
                                    <span>Tour Name: <?php echo $tour_name[0]->title;?></span>
                                    <span>Total Price: <?php echo $manual_booking[0]->total_price;?></span>
                                    <span>Booking Code: <?php echo $manual_booking[0]->booking_code;?></span>
                                    <span>Booking Date: <?php echo $manual_booking[0]->tour_date;?></span>
                                </pre>
                            </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <th class='text-center'>No.</th>
                    <th>Package Name</th>
                    <th class='text-center'>Quantity * Price</th>
                    <th class='text-right'>Total Sub Price</th>
                </tr>
                <?php $sub_total = 0.00;?>
                @foreach($manual_booking_list as $row=>$result)
                <tr>
                    <td class='text-center'>{{$row + 1}}</td>
                    <td>{{$result->package_id}}</td>
                    <td class='text-center'>{{$result->quantity}} X THB {{$result->price}}</td>
                    <td class='text-right'>THB {{$result->total_price}}</td>
                    <?php $sub_total = $sub_total + $result->total_price;?>
                </tr>
                @endforeach
                <tr>
                    <td colspan=3 class='text-right'>Subtotal: </td>
                    <td class='text-right'>THB <?php echo $sub_total;?></td>
                </tr>
            </table>
            <button id='print_invoice_btn' onclick='print_invoice()' type="button" class="btn btn-primary btn-sm pull-right">Print Invoice</button>
        </div>
    </div>
    <script src="{{ asset('/resources/assets/doc_file/jquery.min.js')}}"></script>
    <script src="{{ asset('/resources/assets/doc_file/bootstrap.min.js')}}"></script>
    <script>
        function print_invoice()
        { 
            $('#print_invoice_btn').hide();
            window.print(); 
        }
    </script>
</body>
</html>