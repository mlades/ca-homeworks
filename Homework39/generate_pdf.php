<?php
if(isset($_POST['button'])){
    $name = ($_POST['name']);
    $address = ($_POST['address']);
    $city = ($_POST['city']);
    $country = ($_POST['country']);
    $postal = ($_POST['postal']);
}
$html = '
<html>
<head>
<style>
.header {
    background-color: #5e3791;
    padding: 20px;
    color: white;
    margin-botton: 50px;
}
</style>
</head>
<body>

<htmlpageheader name="myheader">
    <table width="100%" class="header">
        <tr>
            <td width="50%" ><span style="font-weight: bold; font-size: 40pt;">Invoice</span></td>
            <td width="50%" style="text-align: right;">
                <p style="font-weight: bold; font-size: 14pt; padding-bottom: 20px">'.$name.'</p><br>
                <p style="font-size: 12pt; ">'.$address.'</p><br>
                <p style="font-size: 12pt; ">'.$city.'</p><br>
                <p style="font-size: 12pt; ">'.$country.'</p><br>
                <p style="font-size: 12pt; ">'.$postal.'</p> <br>
            </td>
        </tr>
    </table>
</htmlpageheader>

<htmlpagefooter name="myfooter">
    <table width="100%" >
        <tr>
            <td width="60%" style="text-align: left; color: white; background-color: #5dbcd2; padding-left: 20px; padding-top: 20px">
                <p style="font-weight: bold; font-size: 20pt;">NOTES:</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae vel odit fuga quisquam quidem.</p>
            </td>
            <td width="40%" style="text-align: right; color: white; background-color: #5e3791; padding-right: 20px; padding-top: 20px">
                <p style="font-weight: bold; font-size: 14pt;">TOTAL</p><br> 
                <p style="font-weight: bold; font-size: 40pt;  ">$101</p>
            </td>
        </tr>
    </table>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />



<table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; " cellpadding="8">
    <thead>
            <tr>
            <td style="font-weight: bold; width: 15%" >ITEMS</td>        
            <td style="font-weight: bold; width: 40%">DESCRIPTION</td>
            <td style="font-weight: bold; width: 10%; text-align: right">QUANTITY</td>
            <td style="font-weight: bold; width: 15%; text-align: right">PRICE</td>
            <td style="font-weight: bold; width: 5%;  text-align: right">TAX</td>
            <td style="font-weight: bold; width: 15%; text-align: right">AMOUNT</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>ITEM1</td>
            <td>Website development</td>
            <td style="text-align: right">1</td>
            <td style="text-align: right">$100</td>
            <td style="text-align: right">1%</td>
            <td style="text-align: right">$101</td>
        </tr>
    </tbody>
</table>

</body>
</html>
';


require_once  __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'margin_left' => 20,
	'margin_right' => 15,
	'margin_top' => 80,
	'margin_bottom' => 70,
	'margin_header' => 20,
	'margin_footer' => 20
]);



$mpdf->WriteHTML($html);

$mpdf->Output();