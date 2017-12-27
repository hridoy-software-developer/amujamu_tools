// =========
// Custom.js
// =========

// Use this file to add your custom scripts

$('#datatable').DataTable();

$('#payment_link').attr("disabled",true);

$('input[type=radio][name=payment_status]').change(function() {
    if (this.value == 'Cash Payment') {
        $('#payment_link').attr("disabled",true);
    }
    else
    {
        $('#payment_link').attr("disabled",false);
    }
});

setInterval(function() {
    var now = new Date();
    $('#current-time').html(now);
}, 1000);

$('.check_date_btn').click(function()
{
    var row_index = $(this).parent().index();
    var tour_id   = $('#datatable_id tr').eq(row_index + 1).find('td').eq(1).html();
    
    $.ajax({
        url        : './tours/check_date',
        type       : 'get',
        data       : { 'tour_id': tour_id},
        contentType: 'application/json',
        success    : function (data) {
            if(data.data == null)
            {
                $('#check_date_txt').val('0000-00-00');
            }
            else
            {
                $('#check_date_txt').val(data.data.tour_date);
            }
        },
        error: function (response) {
            console.log(response);
        }
    });

});

$("select").select2(
    {
        placeholder: "Select One",
        allowClear : true
    }
);

$( ".datepicker" ).datepicker(
    { dateFormat: 'yy-mm-dd' }
);

var ticket     = [];
var ticket_cnt = 0;

var package_info      = [];
var package_list_info = [];

function add(element,input_field,price)
{
    var field_value = parseInt($('#'+input_field).val());
    $('#'+input_field).val(field_value + 1);

    $("#buy_package tr").remove();
    $('#buy_package').append('<tr><th>Package</th><th>Price</th><th>Total Price</th></tr>');

    var row_num = document.getElementById('package_table').getElementsByTagName("tr").length;
    $('#total_paid_amount').val('0.00');

    package_list_info = [];

    if(row_num > 1)
    {
        var total_price = 0.00;
        for($i=0;$i<row_num -1;$i++)
        {
            if(parseInt($('#input_ticket_cnt_'+$i).val()) != 0)
            {
                var package_id          = document.getElementById("package_table").rows[$i+1].id;
                var package_name        = document.getElementById("package_table").rows[$i+1].cells[0].innerHTML;
                var currency            = document.getElementById("package_table").rows[$i+1].cells[1].innerHTML;
                var price               = parseInt(document.getElementById("package_table").rows[$i+1].cells[2].innerHTML);
                var package_quantity    = parseInt($('#input_ticket_cnt_'+$i).val());
                var total_package_price = price * package_quantity;
                    total_price         = total_price + (price * package_quantity);
                $('#buy_package').append('<tr><td>'+package_name+'</td><td>'+package_quantity+' X THB '+price+'</td><td>THB '+total_package_price+'</td></tr>');
                $('#total_paid_amount').val(total_price);
                $('#due_amount').val(total_price);
                var       temp_data = [];
                temp_data[0]        = booking_code;
                temp_data[1]        = package_id;
                temp_data[2]        = currency;
                temp_data[3]        = price;
                temp_data[4]        = package_quantity;
                temp_data[5]        = total_package_price;
                package_list_info.push(temp_data);
            }
        }
        $('#buy_package').append('<tr><td colspan=2><p class="text-right" style="margin:0px;">Total Price:</p> </td><td>THB '+total_price+'</td></tr>');
        console.log(package_list_info);
    }
}

function subtract(element,input_field,price)
{
    var field_value = parseInt($('#'+input_field).val());
    $('#'+input_field).val(field_value - 1)
    if(parseInt($('#'+input_field).val()) < 0)
    {
        $('#'+input_field).val('0');
    }
    else
    {
        $('#'+input_field).val(field_value - 1);
    }

    $("#buy_package tr").remove();
    $('#buy_package').append('<tr><th>Package</th><th>Price</th><th>Total Price</th></tr>');

    var row_num = document.getElementById('package_table').getElementsByTagName("tr").length;
    $('#total_paid_amount').val('0.00');

    package_list_info = [];

    if(row_num > 1)
    {
        var total_price = 0.00;
        for($i=0;$i<row_num -1;$i++)
        {
            if(parseInt($('#input_ticket_cnt_'+$i).val()) != 0)
            {
                var package_id          = document.getElementById("package_table").rows[$i+1].id;
                var package_name        = document.getElementById("package_table").rows[$i+1].cells[0].innerHTML;
                var currency            = document.getElementById("package_table").rows[$i+1].cells[1].innerHTML;
                var price               = parseInt(document.getElementById("package_table").rows[$i+1].cells[2].innerHTML);
                var package_quantity    = parseInt($('#input_ticket_cnt_'+$i).val());
                var total_package_price = price * package_quantity;
                    total_price         = total_price + (price * package_quantity);
                $('#buy_package').append('<tr><td>'+package_name+'</td><td>'+package_quantity+' X THB '+price+'</td><td>THB '+total_package_price+'</td></tr>');
                $('#total_paid_amount').val(total_price);
                $('#due_amount').val(total_price);
                var       temp_data = [];
                temp_data[0]        = booking_code;
                temp_data[1]        = package_id;
                temp_data[2]        = currency;
                temp_data[3]        = price;
                temp_data[4]        = package_quantity;
                temp_data[5]        = total_package_price;
                package_list_info.push(temp_data);
            }
        }
        $('#buy_package').append('<tr><td colspan=2><p class="text-right" style="margin:0px;">Total Price:</p> </td><td>THB '+total_price+'</td></tr>');
        console.log(package_list_info);
    }
    
}

$('#paid_amount').keyup(function()
{
    if(parseInt($('#total_paid_amount').val()) == 0)
    {
        $('#paid_amount').val('0.00');
        $('#due_amount').val('0.00');
    }
    else
    {
        $('#due_amount').val(parseInt($('#total_paid_amount').val()) - parseInt($('#paid_amount').val()));
    }
});

function guid() {
    function s4() {
      return Math.floor((1 + Math.random()) * 0x10000)
        .toString(16)
        .substring(1);
    }
    return 'MB'+s4()+''+s4();
  }

var booking_code = guid();
$('#booking_code_id').html(booking_code);
$('#booking_form_code_id').val(booking_code);

$('#submit_btn').click(function()
{

    if(package_list_info.length <= 0)
    {
        alert('Please Select Package');
    }
    else
    {
        // Tour Info
        var tour_code = $('#tour_code').html();
        $.ajax({
            type: 'get',
            url : './booking_save',
            data: 
            {
                booking_code  : $('#booking_form_code_id').val(),
                tours_id      : tour_code,
                tour_date     : $('#tour_date').html(),
                total_price   : $('#total_paid_amount').val(),
                payment_status: $('input[name=payment_status]:checked').val(),
                payment_link  : $('#payment_link').val(),
                paid_amount   : $('#paid_amount').val(),
                due_amount    : $('#due_amount').val(),
                full_name     : $('#full_name').val(),
                email         : $('#email').val(),
                nationality   : $('#nationlity').val(),
                contact       : $('#contact_no').val(),
                status        : $('#status').val(),
                created_by    : 0,
                updated_by    : 0,
            },
            success: function(data){
            },
            error: function()
            {
                console.log(data)
            }
        });
        
        // package List Info

        for($i=0 ; $i < package_list_info.length ; $i++)
        {
            $.ajax({
                type: 'get',
                url : './booking_list_save',
                data: 
                {
                    booking_code: package_list_info[$i][0],
                    package_id  : package_list_info[$i][1],
                    currency    : package_list_info[$i][2],
                    price       : package_list_info[$i][3],
                    quantity    : package_list_info[$i][4],
                    total_price : package_list_info[$i][5],
                    created_by  : 0,
                    updated_by  : 0,
                },
                success: function(data){
                    window.location.href = './';
                },
                error: function()
                {
                    console.log(data)
                }
            });
        }
    }
});
function details_show(booking_code)
{
    window.location.href = './manual_bookings/deatils?booking_code='+booking_code;
}
