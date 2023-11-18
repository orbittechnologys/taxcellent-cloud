<!DOCTYPE html>
<html>
<head>
   
</head>
<style type="text/css">
    body{
        font-family: 'Roboto Condensed', sans-serif;
    }
    .m-0{
        margin: 0px;
    }
    .p-0{
        padding: 0px;
    }
    .pt-5{
        padding-top:5px;
    }
    .mt-10{
        margin-top:10px;
    }
    .text-center{
        text-align:center !important;
    }
    .w-100{
        width: 100%;
    }
    .w-50{
        width:50%;   
    }
    .w-85{
        width:85%;   
    }
    .w-15{
        width:15%;   
    }
    .logo img{
        width:45px;
        height:45px;
        padding-top:30px;
    }
    .logo span{
        margin-left:8px;
        top:19px;
        position: absolute;
        font-weight: bold;
        font-size:25px;
    }
    .gray-color{
        color:#5D5D5D;
    }
    .text-bold{
        font-weight: bold;
    }
    .border{
        border:1px solid black;
    }
    table tr,th,td{
        border: 1px solid #d2d2d2;
        border-collapse:collapse;
        padding:7px 8px;
    }
    table tr th{
        background: #F4F4F4;
        font-size:15px;
    }
    table tr td{
        font-size:13px;
    }
    table{
        border-collapse:collapse;
    }
    .box-text p{
        line-height:10px;
    }
    .float-left{
        float:left;
    }
    .total-part{
        font-size:16px;
        line-height:12px;
    }
    .total-right p{
        padding-right:20px;
    }
</style>
<body>
<div class="head-title">
    <h1 class="text-center m-0 p-0">Invoice</h1>
</div>
<div class="add-detail mt-10">
    <div class="w-50 float-left mt-10">
        <p class="m-0 pt-5 text-bold w-100">Invoice Id - <span class="gray-color">{{$invoice_id}}</span></p>
        <p class="m-0 pt-5 text-bold w-100">Date <span class="gray-color">{{$invoice_date}}</span></p>
        <p class="m-0 pt-5 text-bold w-100">Payment Status <span class="gray-color">{{$payment_status}}</span></p>
    </div>
    <div class="w-50 float-left logo mt-10">
        <img src="https://i.ibb.co/8XpvJRW/Taxcellent-logo2.png"> <span>Taxcellent.com</span>     
    </div>
    <div style="clear: both;"></div>
</div>
<div class="table-section bill-tbl w-100 mt-10">
    <table class="table w-100 mt-10">
        <tr>
            <th class="w-50">From</th>
            <th class="w-50">To</th>
        </tr>
        <tr>
            <td>
                <div class="box-text">
                    <p>TaxCellent</p>
                    <p>Gujarat-360004</p>
                    <p>India</p>
                    <p>Contact : 9818644558</p>
                </div>
            </td>
            <td>
                <div class="box-text">
                    <p>{{$name1}} {{$name2}}</p>
                    <p>{{$address}}</p>
                    <p>{{$city}}-{{$pin}}</p>
                    <p>{{$state}},{{$country}}</p>
                    
                </div>
            </td>
        </tr>
    </table>
</div>
<div class="table-section bill-tbl w-100 mt-10">
    <table class="table w-100 mt-10">
        <tr>
            <th class="w-50">Payment Method</th>
            
        </tr>
        <tr>
            <td>UPI</td>
            
        </tr>
    </table>
</div>
<div class="table-section bill-tbl w-100 mt-10">
    <table class="table w-100 mt-10">
        <tr>
            
            <th class="w-50">Service Name</th>
            <th class="w-50">Price</th>
            
            <th class="w-50">Subtotal</th>
           
            <th class="w-50">Grand Total</th>
        </tr>
        <tr align="center">
            <td>{{$service_name}}-{{$service_sub_category}}</td>
            <td><span style="font-family: DejaVu Sans; sans-serif;">₹</span>{{$price}}</td>
            <td><span style="font-family: DejaVu Sans; sans-serif;">₹</span>{{$price}}</td>
           
            <td><span style="font-family: DejaVu Sans; sans-serif;">₹</span>{{$price}}</td>
        </tr>
        
        <tr>
            <td colspan="7">
                <div class="total-part">
                    <div class="total-left w-85 float-left" align="right">
                        <p>Sub Total</p>
                        
                        <p>Total Payable</p>
                    </div>
                    <div class="total-right w-15 float-left text-bold" align="right">
                        <p><span style="font-family: DejaVu Sans; sans-serif;">₹</span>{{$price}}</p>
                        
                        <p><span style="font-family: DejaVu Sans; sans-serif;">₹</span>{{$price}}</p>
                    </div>
                    <div style="clear: both;"></div>
                </div> 
            </td>
        </tr>
    </table>
</div>
</html>