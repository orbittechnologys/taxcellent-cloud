<!DOCTYPE html>
<html>
<head>
   
</head>
<style type="text/css">
    body{
        font-family: 'Roboto Condensed', sans-serif;
    }
    .m-0{
        margin: 1px;
    }
    .p-0{
        padding-top: 5px;
    }
    .pt-5{
        padding-top:5px;
        font-size:15px;
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
        width:10%;   
    }
    .logo img{
        width:100px;
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
        padding:7px ;
    }
    table tr th{
        background: #F4F4F4;
        font-size:14px;
    }
    table tr td{
        font-size:14px;
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
    .float-right{
        float:right;
    }
    .total-part{
        font-size:16px;
        line-height:12px;
    }
    .total-right p{
        padding-right:20px;
    }
    .head-title{
  padding: 6px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 18px;
}
.page-break {
    page-break-after: always;
}
@page { margin-top: 50px; }
    #header { position: fixed; top: -50px; left: 0px; right: 0px; padding: 10px; text-align: center; font-weight: bold; }
  

</style>
<body>

<div class="add-detail mt-10">
    <div class="w-100  logo mt-80">
        <img src="https://i.ibb.co/8XpvJRW/Taxcellent-logo2.png">     
    </div>
    <div class="w-50 float-left mt-10">
        <p class="m-0 pt-5 text-bold w-10">TAXCELLENT INFRA PRIVATE LIMITED</p>
        <p class="m-0 pt-5 text-bold w-100">Registered Address : 923, 2nd Floor, 12th Cross, BTM 4th Stage, 2nd Block Bengaluru, Karnataka 560076</p>
        <p class="m-0 pt-5 text-bold w-100">CIN: U67100KA2021PTC150805 </p>
    </div>
    <div class="w-50 float-left mt-10">
        <p class="m-0 pt-5 text-bold w-100">Contact No : 8431736664</p>
        <p class="m-0 pt-5 text-bold w-100">Email ID  : admin@taxcellentglobal.com</p>
        
    </div>
   
    <div style="clear: both;"></div>
</div>

<div class="table-section bill-tbl w-100 mt-10">
    <div class="head-title">
        <h3 class="text-center m-0 p-0">INVOICE</h3>
    </div>
    <table class="table w-100 mt-10">
        <tr>
            <th class="w-50">BILL TO</th>
            <th class="w-50">INVOICE DETAILS</th>
        </tr>
        <tr>
            <td>
                <div class="box-text">
                    <p>{{$dataArray['name1']}} {{$dataArray['name2']}}</p>
                    <p>{{$dataArray['address']}}</p>
                    <p>{{$dataArray['city']}}-{{$dataArray['pin']}}</p>
                    <p>{{$dataArray['state']}},{{$dataArray['country']}}</p>
                    
                    <p>{{$dataArray['mobile']}}</p>
                    <p>{{$dataArray['email']}}</p>
                </div>
            </td>
            <td>
                <div class="box-text">
                    <p>Invoice number:{{$dataArray['invoice_id']}}</p>
                    <p>Invoice date :{{$dataArray['invoice_date']}}</p>
                    <p>Place of Supply</p>
                    
                    
                </div>
            </td>
        </tr>
        
    </table>
</div>
{{-- <div class="table-section bill-tbl w-100 mt-10">
    <table class="table w-100 mt-10">
        <tr>
            <th class="w-50">Payment Method</th>
            
        </tr>
        <tr>
            <td>UPI</td>
            
        </tr>
    </table>
</div> --}}

    


   
<div class="table-section bill-tbl w-100 mt-10" >
    {{-- <div id="header"> --}}
    <table class="table w-100 mt-10">
        <tr>
            
            <th  id="header" class="">Sr No</th>
            <th id="header" class="w-15">SAC</th>
            <th id="header" class="w-15" >Service Category</th>
            <th id="header" class="w-100">Description of services</th>
            <th id="header" class="w-15">Amount (INR)</th>
            <th id="header" class="w-15">Discount (INR)</th>
            <th id="header" class="w-15">Amount (INR)</th>
           
            <th id="header"class="">Total(INR)</th>
        </tr>
    
        @php
        $count=0;
        $subtotal=0;
        @endphp
        @foreach ($purchasedetails as $item)

        <tr >
            <td>{{$count=$count+1}}</td>

            <td></td>
            <td>{{$item['service_sub_category']}}</td>
            
            <td> 
                {!! html_entity_decode($item['services']) !!}
                {{-- 1. DSC (Digital Signature Certificate) (2 nos.)<br>
2. DIN (Director Identification Number) allotment (2 nos.)<br>
3. PAN application<br>
4. TAN registration<br>
5. GST registration<br>
6. EPFO Registration<br>
7. ESIC Registration<br>
8. Professional tax registration<br>
9. #Opening bank account<br>
10. Name reservation and approval <br>
11. Includes Government Fee & Stamp duty for Authorized Capital up to Rs. 15 Lakh
12. Drafting of MOA and AOA<br>
13. Business Incorporation certificate<br>
14. Issue of Share certificate (4 nos.)<br>
15. Regular updates on the service status<br>  --}}
           </td>
            <td>{{$item['price']}}</td>
            <td>0</td>
            <td>{{$item['price']}}</td>
            <td>{{$item['price']}}</td>
           @php
           $subtotal=$subtotal+$item['price'];
           @endphp
        </tr>
       @endforeach 
        <tr>
            <td colspan="7">
                
                <div class=" w-85 float-right total-part" align="right">
                    <p>Sub total</p>
                    
                    
                </div>
            
        </td>
        <td>
                
            <div class=" w-85 float-right total-part" align="right"> 
                    <p>{{round(($subtotal),2)}}</p>
            </div>
                <div style="clear: both;"></div>
            
        </td>
        </tr>
       
        @if(Str::contains($dataArray['state'], ['Karnataka']))
        <tr>
            <td colspan="7">
                
                <div class=" w-85 float-right total-part" align="right">
                    <p>CGST @ 9%</p>
                    
                    
                </div>
            
        </td>
        <td>
                
            <div class=" w-85 float-right total-part" align="right"> 
                    <p>{{round((($subtotal*9)/100),2)}}</p>
            </div>
                <div style="clear: both;"></div>
            
        </td>
        </tr>
        <tr>
            <td colspan="7">
                
                <div class=" w-85 float-right total-part" align="right">
                    <p>SGST @ 9%</p>
                    
                    
                </div>
            
        </td>
        <td>
                
            <div class=" w-85 float-right total-part" align="right"> 
                    <p><p>{{round((($subtotal*9)/100),2)}}</p></p>
            </div>
                <div style="clear: both;"></div>
            
        </td>
        </tr>
        @else
        <tr>
            <td colspan="7">
                
                <div class=" w-85 float-right total-part" align="right">
                    <p>IGST @ 18%</p>
                    
                    
                </div>
            
        </td>
        <td>
                
            <div class=" w-85 float-right total-part" align="right"> 
                    <p></p><p>{{round((($subtotal*18)/100),2)}}</p>
            </div>
                <div style="clear: both;"></div>
            
        </td>
        </tr>
        @endif
        <tr>
            
            <td colspan="7">
                
                    <div class=" w-85 float-right total-part" align="right">
                        <p>Total amount paid inclusive of GST tax </p>
                        
                        
                    </div>
                
            </td>
            <td>
                    
                <div class=" w-85 float-right total-part" align="right"> 
                        <p>{{($dataArray['total_amount']/100)}}</p>
                </div>
                    <div style="clear: both;"></div>
                
            </td>
        </tr>
        
        <tr>
            <td colspan="8">
                
                <div class=" w-85 float-left total-part" align="left">
                    <p>Invoice total in words - </p>
                    
                    
                </div>
                <div class=" w-85 float-right total-part" align="right"> 
                    <p>@php 
                   
                   $f = new NumberFormatter("EN", NumberFormatter::SPELLOUT);
echo $f->format($dataArray['total_amount']/100);@endphp</p>
            </div>
                <div style="clear: both;"></div>
            
        </td>
        
    </tr>
        
        
</tr>
    </table>
    
</div>
<div class="table-section bill-tbl w-100 mt-10">
    <table class="table w-100 mt-10">
        <tr>
            <td colspan="8">
                
                <div class=" w-85 float-left total-part" align="left">
                    <p>Debited from Bank </p>
                    
                    
                </div>
                <div class=" w-85 float-right total-part" align="right"> 
                    <p>ICICI</p>
            </div>
                <div style="clear: both;"></div>
            
        </td>
        </tr>
        <tr>
            <td colspan="8">
                
                <div class=" w-85 float-left total-part" align="left">
                    <p>Transaction ID :</p>
                    
                    
                </div>
                <div class=" w-85 float-right total-part" align="right"> 
                    <p>1234567891</p>
            </div>
                <div style="clear: both;"></div>
            
        </td>
            
        </tr>
    </table>
</div>
<div class="table-section bill-tbl w-100 mt-10">
    <table class="table w-100 mt-10">
        <tr>
            <th id="header" class="w-50">Payment has been made to:</th>
            <th  id="header" class="w-50">For TAXCELLENT INFRA PRIVATE LIMITED</th>
        </tr>
        <tr>
            <td>
                <div class="box-text">
                    <p>A/C Name             &nbsp;: </p>
                    <p>Account no        &nbsp;   :</p>
                    
                    <p>CRN                &nbsp;  : </p>
                    <p>Account Type      &nbsp;   : INR</p>
                    <p>Branch Code      &nbsp;    : </p>
                    <p>IFSC Code       &nbsp;     : </p>
                    <p>Branch Name     &nbsp;     : </p>
                    <p>Branch Address   &nbsp;    : </p>
                    <p>Bank Swift Code  &nbsp;    : </p>
                </div>
            </td>
            <td>
                <div class="box-text">
                    <p>Authorised Signatory:                     </p>
                    <p>Place:</p>
                    <p>Date:{{$dataArray['invoice_date']}}
                    </p>
                    
                    
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                
                <div class=" w-85  " align="center">
                    <p>This is a digitally signed invoice and does not require manual signature</p>
                    
                    
                </div>
               
                {{-- <div style="clear: both;"></div> --}}
            
        </td>
        </tr>
        
    </table>
</div>
</html>