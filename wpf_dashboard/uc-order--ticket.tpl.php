<?php

/**
 * @file
 */

$border = 0;

// dpm($order, "order");
// dpm($products, "products");
// dpm($line_items, "line_items");
// $display_name = $order->delivery_first_name . " " . $order->delivery_last_name; // moved to template.php, stock_preprocess_uc_order
// $date_in = date("F j, Y", $order->created); // moved to template.php, stock_preprocess_uc_order.
/**
 * @file
 * This file is the default customer invoice template for Ubercart.
 *
 * Available variables:
 * - $products: An array of product objects in the order, with the following
 *   members:
 *   - title: The product title.
 *   - model: The product SKU.
 *   - qty: The quantity ordered.
 *   - total_price: The formatted total price for the quantity ordered.
 *   - individual_price: If quantity is more than 1, the formatted product
 *     price of a single item.
 *   - details: Any extra details about the product, such as attributes.
 * - $line_items: An array of line item arrays attached to the order, each with
 *   the following keys:
 *   - line_item_id: The type of line item (subtotal, shipping, etc.).
 *   - title: The line item display title.
 *   - formatted_amount: The formatted amount of the line item.
 * - $shippable: TRUE if the order is shippable.
 *
 * Tokens: All site, store and order tokens are also available as
 * variables, such as $site_logo, $store_name and $order_first_name.
 *
 * Display options:
 * - $op: 'view', 'print', 'checkout-mail' or 'admin-mail', depending on
 *   which variant of the invoice is being rendered.
 * - $business_header: TRUE if the invoice header should be displayed.
 * - $shipping_method: TRUE if shipping information should be displayed.
 * - $help_text: TRUE if the store help message should be displayed.
 * - $email_text: TRUE if the "do not reply to this email" message should
 *   be displayed.
 * - $store_footer: TRUE if the store URL should be displayed.
 * - $thank_you_message: TRUE if the 'thank you for your order' message
 *   should be displayed.
 *
 * @see template_preprocess_uc_order()
 */

/*
  added some variables using stock_preprocess_uc_order
  $display_name
    $date_in


*/

  // Echo "<pre>";
  // print_r($variables['products'][337]->data[node_checkout_nid]);
  // print_r($products);
  // echo "</pre>";.
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<META http-equiv="X-UA-Compatible" content="IE=8">
<TITLE>bcl_1511814538.htm</TITLE>
<!-- #include virtual="/convert-pdf-to-html/includes/pdf-to-word-head-tag.htm" -->
<META name="generator" content="BCL easyConverter SDK 5.0.08">
<STYLE type="text/css">

@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}

body {margin-top: 0px;margin-left: 0px;}

#page_1 {position:relative; overflow: hidden;margin: 44px 0px 72px 49px;padding: 0px;border: none;width: 916px;}

#page_1 #p1dimg1 {position:absolute;top:195px;left:0px;z-index:-1;width:697px;height:637px;}
#page_1 #p1dimg1 #p1img1 {width:916px;height:637px;}


.input{color: red !important; margin-left: 5px; font-size: 20px !important;line-height: 23px !important;}
.input-textfield {
    width:127px;  
      border: 0;
   background: transparent;
   color: red !important;
   font-size: 20px !important;
   line-height: 23px !important;

}
.input-smaller {
    font-size: 15px !important;
   line-height: 18px !important;
   color: red !important;
   margin-left: 5px;
}
.textfield-short1 {
    width: 45px;
}
.textfield-long1 {
    width: 230px;
}
#final-proof-time1, #final-proof-time2, #final-proof-date2, #final-proof-date3, #due-time1, #due-time2, #due-date2, #due-date3, #total-time1, #total-time2, #total-date2, #total-date3 {
    width: 25px;
}
.textfield-time {
    width: 25px;
}
.textfield-date2, .textfield-date3 {
    width: 25px;
}
.textfield-tiny-time {
    width: 20px;
    height: 14px;
    font-size: 14px !important;
}
.textfield-tiny-date1 {
    width: 36px;
    height: 14px;
    font-size: 14px !important;
}
.textfield-tiny-date2, .textfield-tiny-date3 {
    width: 20px;
    height: 14px;
    font-size: 14px !important;
}

.textfield-ini {
    width: 100%;
    height: 18px;
    font-size: 18px !important;
}

.textfield-tiny {
    height: 12px;
    font-size: 12px !important;
}
.textfield-medium {
    height: 15px;
    width: 100px;
    font-size: 15px !important;
}
.textfield-stretch {
    width: 100%;
}

#pocket-left, #pocket-right {
    height: 12px;
    width: 30px;
    font-size: 12px !important;
}

.tiny-text {
    height: 12px;
    font-size: 12px !important;
}

.textfield-boxnumber {
    width: 50px;
    height: 17px;
    font-size: 17px !important;
}
.textfield-boxweight {
    width: 40px;
    height: 17px;
    font-size: 17px !important;
}


.testr{border: 1px solid red;}
.testb{border: 1px solid blue;}
.testg{border: 1px solid green;}
.debug td {border: 1px dashed green;}

.border-right {
    border-right: #548dd4 1px solid;
}
.border-left {
    border-left: #548dd4 1px solid;
}
.border-top {
    border-top: #548dd4 1px solid;
}
.border-bottom {
    border-bottom: #548dd4 1px solid;
}


.vertical {
  transform: rotate(-90deg);
  transform-origin: left top 0;
  float: left;
}

#paper {
    width: 916px;
}


#date-in {
    font-size: 15px !important;
    width: 200px;
}
#due-date {
    font-size: 15px !important;
    width: 200px;
}
#phone-alt {
    width: 150px;
}
#press td {
  border-top: #548dd4 1px solid;
}

#product-title {
    font-size: 15px !important;
    width: 270px;
}
#ink {
    font-size: 15px !important;
    width: 240px;
}
#coating {
    font-size: 15px !important;
    width: 240px;
}

#previous-job-num {
    width: 65px;
    font-size: 15px !important;
}

#paper-stock {
    width: 490px;
}
#parent-size {
    width: 70px;
}
#parent-sheet {
    width: 64px;
}
#press-size {
    width: 73px;
}
#out {
    width: 33px;
}
#press-sheet {
    width: 60px;
}
#up {
    width: 37px;
}


.ft0{font: bold 24px 'Arial Black';color: #548dd4;line-height: 33px;}
.ft1{font: 1px 'Arial Narrow';line-height: 1px;}
.ft2{font: 8px 'Arial Narrow';color: #548dd4;line-height: 13px;}
.ft3{font: 1px 'Arial Narrow';line-height: 7px;}
.ft4{font: 1px 'Arial Narrow';line-height: 5px;}
.ft5{font: 1px 'Arial Narrow';line-height: 17px;}
.ft6{font: bold 8px 'Arial Narrow';color: #548dd4;line-height: 13px;}
.ft7{font: 1px 'Arial Narrow';line-height: 9px;}
.ft8{font: 1px 'Arial Narrow';line-height: 8px;}
.ft9{font: 16px 'Arial Narrow';color: #548dd4;line-height: 20px;}
.ft10{font: 1px 'Arial Narrow';line-height: 3px;}
.ft11{font: 1px 'Arial Narrow';line-height: 2px;}
.ft12{font: 1px 'Arial Narrow';line-height: 6px;}
.ft13{font: 1px 'Arial Narrow';line-height: 12px;}
.ft14{font: bold 8px 'Arial Narrow';color: #548dd4;line-height: 12px;}
.ft15{font: bold 7px 'Arial Narrow';color: #548dd4;line-height: 8px;}
.ft16{font: 1px 'Arial Narrow';line-height: 14px;}
.ft17{font: bold 6px 'Arial Narrow';color: #548dd4;line-height: 7px;}
.ft18{font: 15px 'Arial Narrow';color: #548dd4;line-height: 20px;}
.ft19{font: 8px 'Arial Narrow';color: #548dd4;line-height: 12px;}
.ft20{font: bold 16px 'Arial Black';color: #ff0000;line-height: 12px;}
.ft21{font: bold 16px 'Arial Black';color: #ff0000;line-height: 17px;}
.ft22{font: 1px 'Arial Narrow';line-height: 4px;}
.ft23{font: bold 8px 'Arial Narrow';color: #548dd4;line-height: 10px;}
.ft24{font: bold 16px 'Arial Black';color: #ff0000;line-height: 10px;}
.ft25{font: 8px 'Arial Narrow';color: #548dd4;line-height: 10px;}
.ft26{font: 6px 'Arial Narrow';color: #548dd4;line-height: 7px;}
.ft27{font: bold 16px 'Arial Black';color: #ff0000;line-height: 11px;}
.ft28{font: bold 8px 'Arial Narrow';color: #548dd4;line-height: 11px;}
.ft29{font: bold 8px 'Arial Narrow';color: #548dd4;line-height: 5px;}
.ft30{font: 1px 'Arial Narrow';line-height: 11px;}
.ft31{font: 15px 'Calibri';color: #548dd4;line-height: 17px;}
.ft32{font: bold 16px 'Arial Black';color: #ff0000;line-height: 5px;}
.ft33{font: 7px 'Arial Narrow';color: #548dd4;line-height: 7px;}
.ft34{font: 16px 'Arial';color: #548dd4;line-height: 17px;}
.ft35{font: 8px 'Arial Narrow';color: #548dd4;line-height: 8px;}
.ft36{font: bold 16px 'Arial Black';color: #ff0000;line-height: 6px;}
.ft37{font: bold 7px 'Arial Narrow';color: #548dd4;line-height: 6px;}
.ft38{font: 15px 'Calibri';color: #548dd4;line-height: 18px;}
.ft39{font: bold 7px 'Arial Narrow';color: #548dd4;line-height: 5px;}
.ft40{font: 8px 'Arial Narrow';color: #548dd4;line-height: 11px;}
.ft41{font: bold 8px 'Arial Narrow';color: #548dd4;line-height: 9px;}
.ft42{font: bold 8px 'Arial Narrow';color: #548dd4;line-height: 6px;}

.p0{text-align: left;padding-left: 4px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p1{text-align: left;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p2{text-align: right;padding-right: 52px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p3{text-align: left;padding-left: 6px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p4{text-align: right;padding-right: 19px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p5{text-align: right;padding-right: 16px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p6{text-align: right;padding-right: 35px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p7{text-align: right;padding-right: 30px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p8{text-align: center;padding-left: 11px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p9{text-align: left;padding-left: 3px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p10{text-align: right;padding-right: 4px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p11{text-align: right;padding-right: 8px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p12{text-align: left;padding-left: 2px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p13{text-align: center;padding-right: 17px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p14{text-align: left;padding-left: 8px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p15{text-align: center;padding-right: 30px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p16{text-align: right;padding-right: 12px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p17{text-align: right;padding-right: 17px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p18{text-align: right;padding-right: 9px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p19{text-align: left;padding-left: 1px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p20{text-align: center;padding-right: 1px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p21{text-align: left;padding-left: 14px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p22{text-align: left;padding-left: 11px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p23{text-align: right;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p24{text-align: right;padding-right: 13px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p25{text-align: left;padding-left: 29px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p26{text-align: left;padding-left: 5px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p27{text-align: center;padding-right: 37px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p28{text-align: left;padding-left: 10px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p29{text-align: center;padding-right: 39px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p30{text-align: left;padding-left: 25px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p31{text-align: center;padding-left: 25px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p32{text-align: center;padding-left: 23px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p33{text-align: center;padding-right: 7px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p34{text-align: center;padding-left: 17px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p35{text-align: center;padding-right: 13px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p36{text-align: center;padding-right: 5px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p37{text-align: left;padding-left: 17px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p38{text-align: center;padding-left: 10px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p39{text-align: right;padding-right: 28px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p40{text-align: center;padding-right: 2px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p41{text-align: center;padding-right: 14px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p42{text-align: left;padding-left: 15px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p43{text-align: left;padding-left: 30px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p44{text-align: center;padding-right: 11px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p45{text-align: right;padding-right: 18px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p46{text-align: right;padding-right: 11px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p47{text-align: center;padding-left: 38px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p48{text-align: right;padding-right: 22px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p49{text-align: center;padding-left: 26px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p50{text-align: right;padding-right: 5px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p51{text-align: center;padding-left: 22px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p52{text-align: center;padding-right: 6px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p53{text-align: center;padding-left: 1px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p54{text-align: right;padding-right: 2px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p55{text-align: center;padding-left: 12px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p56{text-align: center;padding-right: 15px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p57{text-align: left;padding-left: 24px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p58{text-align: left;padding-left: 26px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p59{text-align: center;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p60{text-align: center;padding-right: 12px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p61{text-align: left;padding-left: 31px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p62{text-align: right;padding-right: 1px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p63{text-align: left;padding-left: 7px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}

.td0{padding: 0px;margin: 0px;width: 313px;vertical-align: bottom;}
.td1{padding: 0px;margin: 0px;width: 18px;vertical-align: bottom;}
.td2{padding: 0px;margin: 0px;width: 36px;vertical-align: bottom;}
.td3{padding: 0px;margin: 0px;width: 6px;vertical-align: bottom;}
.td4{padding: 0px;margin: 0px;width: 72px;vertical-align: bottom;}
.td5{padding: 0px;margin: 0px;width: 43px;vertical-align: bottom;}
.td6{padding: 0px;margin: 0px;width: 41px;vertical-align: bottom;}
.td7{padding: 0px;margin: 0px;width: 19px;vertical-align: bottom;}
.td8{padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;}
.td9{padding: 0px;margin: 0px;width: 84px;vertical-align: bottom;}
.td10{padding: 0px;margin: 0px;width: 9px;vertical-align: bottom;}
.td11{padding: 0px;margin: 0px;width: 57px;vertical-align: bottom;}
.td12{padding: 0px;margin: 0px;width: 24px;vertical-align: bottom;}
.td13{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 6px;vertical-align: bottom;}
.td14{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 36px;vertical-align: bottom;}
.td15{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 18px;vertical-align: bottom;}
.td16{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 43px;vertical-align: bottom;}
.td17{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 41px;vertical-align: bottom;}
.td18{padding: 0px;margin: 0px;width: 42px;vertical-align: bottom;}
.td19{border-bottom: #538dd5 1px solid;padding: 0px;margin: 0px;width: 168px;vertical-align: bottom;}
.td20{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 23px;vertical-align: bottom;}
.td21{border-right: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;background: #d8d8d8;}
.td22{border-right: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 35px;vertical-align: bottom;background: #d8d8d8;}
.td23{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 71px;vertical-align: bottom;background: #d8d8d8;}
.td24{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 119px;vertical-align: bottom;}
.td25{border-bottom: #538dd5 1px solid;padding: 0px;margin: 0px;width: 6px;vertical-align: bottom;}
.td26{border-bottom: #538dd5 1px solid;padding: 0px;margin: 0px;width: 9px;vertical-align: bottom;}
.td27{border-bottom: #538dd5 1px solid;padding: 0px;margin: 0px;width: 57px;vertical-align: bottom;}
.td28{border-bottom: #538dd5 1px solid;padding: 0px;margin: 0px;width: 18px;vertical-align: bottom;}
.td29{border-bottom: #538dd5 1px solid;padding: 0px;margin: 0px;width: 36px;vertical-align: bottom;}
.td30{border-right: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;background: #d8d8d8;}
.td31{border-right: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 35px;vertical-align: bottom;background: #d8d8d8;}
.td32{border-right: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;background: #d8d8d8;}
.td33{border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;background: #d8d8d8;}
.td34{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 43px;vertical-align: bottom;}
.td35{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 41px;vertical-align: bottom;}
.td36{border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 35px;vertical-align: bottom;}
.td37{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;}
.td38{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 35px;vertical-align: bottom;}
.td39{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 6px;vertical-align: bottom;}
.td40{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 36px;vertical-align: bottom;}
.td41{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 18px;vertical-align: bottom;}
.td42{border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;}
.td43{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 168px;vertical-align: bottom;}
.td44{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 84px;vertical-align: bottom;}
.td45{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 119px;vertical-align: bottom;background: #d8d8d8;}
.td46{padding: 0px;margin: 0px;width: 192px;vertical-align: bottom;}
.td47{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 19px;vertical-align: bottom;}
.td48{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;}
.td49{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 84px;vertical-align: bottom;}
.td50{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 9px;vertical-align: bottom;}
.td51{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 57px;vertical-align: bottom;}
.td52{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 24px;vertical-align: bottom;}
.td53{border-left: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 18px;vertical-align: bottom;background: #d8d8d8;}
.td54{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 6px;vertical-align: bottom;background: #d8d8d8;}
.td55{border-right: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 11px;vertical-align: bottom;background: #d8d8d8;}
.td56{border-right: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 119px;vertical-align: bottom;background: #d8d8d8;}
.td57{border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;background: #d8d8d8;}
.td58{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 9px;vertical-align: bottom;background: #d8d8d8;}
.td59{border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 56px;vertical-align: bottom;background: #d8d8d8;}
.td60{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 42px;vertical-align: bottom;background: #d8d8d8;}
.td61{border-right: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 23px;vertical-align: bottom;background: #d8d8d8;}
.td62{border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 35px;vertical-align: bottom;background: #d8d8d8;}
.td63{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 43px;vertical-align: bottom;background: #d8d8d8;}
.td64{border-right: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 40px;vertical-align: bottom;background: #d8d8d8;}
.td65{border-left: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 18px;vertical-align: bottom;}
.td66{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;}
.td67{border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;}
.td68{border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 65px;vertical-align: bottom;}
.td69{border-left: #548dd4 1px solid;padding: 0px;margin: 0px;width: 18px;vertical-align: bottom;background: #d8d8d8;}
.td70{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;background: #d8d8d8;}
.td71{padding: 0px;margin: 0px;width: 6px;vertical-align: bottom;background: #d8d8d8;}
.td72{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 11px;vertical-align: bottom;background: #d8d8d8;}
.td73{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 83px;vertical-align: bottom;background: #d8d8d8;}
.td74{border-right: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 65px;vertical-align: bottom;background: #d8d8d8;}
.td75{border-right: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;background: #d8d8d8;}
.td76{padding: 0px;margin: 0px;width: 78px;vertical-align: bottom;background: #d8d8d8;}
.td77{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;background: #d8d8d8;}
.td78{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 77px;vertical-align: bottom;}
.td79{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 40px;vertical-align: bottom;}
.td80{border-left: #548dd4 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 18px;vertical-align: bottom;background: #d8d8d8;}
.td81{border-right: #548dd4 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;background: #d8d8d8;}
.td82{border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 6px;vertical-align: bottom;background: #d8d8d8;}
.td83{border-right: #548dd4 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 11px;vertical-align: bottom;background: #d8d8d8;}
.td84{border-right: #548dd4 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 83px;vertical-align: bottom;background: #d8d8d8;}
.td85{border-right: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 56px;vertical-align: bottom;background: #d8d8d8;}
.td86{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 18px;vertical-align: bottom;background: #d8d8d8;}
.td87{border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 40px;vertical-align: bottom;}
.td88{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;}
.td89{border-left: #548dd4 1px solid;border-right: #548dd4 1px solid;border-top: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 35px;vertical-align: bottom;background: #d8d8d8;}
.td90{border-right: #548dd4 1px solid;border-top: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;background: #d8d8d8;}
.td91{border-right: #548dd4 1px solid;border-top: #548dd4 1px solid;padding: 0px;margin: 0px;width: 83px;vertical-align: bottom;background: #d8d8d8;}
.td92{border-right: #d8d8d8 1px solid;border-top: #548dd4 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;background: #d8d8d8;}
.td93{border-right: #548dd4 1px solid;border-top: #548dd4 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;background: #d8d8d8;}
.td94{border-top: #548dd4 1px solid;padding: 0px;margin: 0px;width: 9px;vertical-align: bottom;}
.td95{border-top: #548dd4 1px solid;padding: 0px;margin: 0px;width: 75px;vertical-align: bottom;}
.td96{border-right: #548dd4 1px solid;border-top: #548dd4 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;}
.td97{border-right: #548dd4 1px solid;border-top: #548dd4 1px solid;padding: 0px;margin: 0px;width: 35px;vertical-align: bottom;}
.td98{border-right: #548dd4 1px solid;border-top: #548dd4 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;background: #d8d8d8;}
.td99{border-top: #548dd4 1px solid;padding: 0px;margin: 0px;width: 18px;vertical-align: bottom;}
.td100{border-top: #548dd4 1px solid;padding: 0px;margin: 0px;width: 6px;vertical-align: bottom;}
.td101{border-right: #548dd4 1px solid;border-top: #548dd4 1px solid;padding: 0px;margin: 0px;width: 77px;vertical-align: bottom;}
.td102{border-right: #548dd4 1px solid;border-top: #548dd4 1px solid;padding: 0px;margin: 0px;width: 83px;vertical-align: bottom;}
.td103{border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 83px;vertical-align: bottom;background: #d8d8d8;}
.td104{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 9px;vertical-align: bottom;}
.td105{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 57px;vertical-align: bottom;}
.td106{border-left: #548dd4 1px solid;padding: 0px;margin: 0px;width: 18px;vertical-align: bottom;}
.td107{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 11px;vertical-align: bottom;}
.td108{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 83px;vertical-align: bottom;}
.td109{padding: 0px;margin: 0px;width: 27px;vertical-align: bottom;}
.td110{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 71px;vertical-align: bottom;}
.td111{border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 11px;vertical-align: bottom;}
.td112{border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 83px;vertical-align: bottom;}
.td113{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 35px;vertical-align: bottom;background: #d8d8d8;}
.td114{border-right: #548dd4 1px solid;border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 37px;vertical-align: bottom;background: #d8d8d8;}
.td115{border-right: #548dd4 1px solid;border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 83px;vertical-align: bottom;background: #d8d8d8;}
.td116{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 155px;vertical-align: bottom;background: #d8d8d8;}
.td117{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 80px;vertical-align: bottom;background: #d8d8d8;}
.td118{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 91px;vertical-align: bottom;background: #d8d8d8;}
.td119{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 66px;vertical-align: bottom;background: #d8d8d8;}
.td120{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 38px;vertical-align: bottom;background: #d8d8d8;}
.td121{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 79px;vertical-align: bottom;background: #d8d8d8;}
.td122{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 31px;vertical-align: bottom;background: #d8d8d8;}
.td123{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 13px;vertical-align: bottom;}
.td124{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 48px;vertical-align: bottom;}
.td125{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 3px;vertical-align: bottom;}
.td126{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 21px;vertical-align: bottom;}
.td127{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 42px;vertical-align: bottom;}
.td128{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;}
.td129{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 30px;vertical-align: bottom;}
.td130{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 90px;vertical-align: bottom;}
.td131{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 63px;vertical-align: bottom;}
.td132{border-left: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 63px;vertical-align: bottom;background: #d8d8d8;}
.td133{border-right: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 20px;vertical-align: bottom;background: #d8d8d8;}
.td134{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 107px;vertical-align: bottom;background: #d8d8d8;}
.td135{border-left: #d8d8d8 1px solid;border-right: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;background: #d8d8d8;}
.td136{border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 11px;vertical-align: bottom;background: #d8d8d8;}
.td137{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 30px;vertical-align: bottom;background: #d8d8d8;}
.td138{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;background: #d8d8d8;}
.td139{border-left: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 101px;vertical-align: bottom;background: #d8d8d8;}
.td140{border-left: #d8d8d8 1px solid;border-right: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;background: #d8d8d8;}
.td141{border-right: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 83px;vertical-align: bottom;background: #d8d8d8;}
.td142{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 63px;vertical-align: bottom;background: #d8d8d8;}
.td143{padding: 0px;margin: 0px;width: 64px;vertical-align: bottom;}
.td144{padding: 0px;margin: 0px;width: 21px;vertical-align: bottom;}
.td145{padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;}
.td146{padding: 0px;margin: 0px;width: 30px;vertical-align: bottom;}
.td147{padding: 0px;margin: 0px;width: 13px;vertical-align: bottom;}
.td148{padding: 0px;margin: 0px;width: 23px;vertical-align: bottom;}
.td149{padding: 0px;margin: 0px;width: 49px;vertical-align: bottom;}
.td150{padding: 0px;margin: 0px;width: 48px;vertical-align: bottom;}
.td151{padding: 0px;margin: 0px;width: 63px;vertical-align: bottom;}
.td152{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 23px;vertical-align: bottom;}
.td153{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 49px;vertical-align: bottom;}
.td154{border-left: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;background: #d8d8d8;}
.td155{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 51px;vertical-align: bottom;background: #d8d8d8;}
.td156{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;background: #d8d8d8;}
.td157{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 53px;vertical-align: bottom;background: #d8d8d8;}
.td158{border-right: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;background: #d8d8d8;}
.td159{border-left: #d8d8d8 1px solid;border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;background: #d8d8d8;}
.td160{border-left: #548dd4 1px solid;border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;}
.td161{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;}
.td162{border-right: #d8d8d8 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 83px;vertical-align: bottom;background: #d8d8d8;}
.td163{border-left: #548dd4 1px solid;padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;}
.td164{padding: 0px;margin: 0px;width: 3px;vertical-align: bottom;}
.td165{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 20px;vertical-align: bottom;}
.td166{border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;background: #d8d8d8;}
.td167{border-right: #548dd4 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;background: #d8d8d8;}
.td168{border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 30px;vertical-align: bottom;background: #d8d8d8;}
.td169{border-right: #d8d8d8 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;background: #d8d8d8;}
.td170{border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;background: #d8d8d8;}
.td171{border-left: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 23px;vertical-align: bottom;background: #d8d8d8;}
.td172{border-right: #d8d8d8 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;background: #d8d8d8;}
.td173{border-left: #d8d8d8 1px solid;border-right: #548dd4 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;background: #d8d8d8;}
.td174{border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;}
.td175{border-right: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;background: #d8d8d8;}
.td176{border-left: #548dd4 1px solid;border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;}
.td177{border-right: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 41px;vertical-align: bottom;background: #d8d8d8;}
.td178{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 29px;vertical-align: bottom;background: #d8d8d8;}
.td179{border-left: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;}
.td180{border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 20px;vertical-align: bottom;}
.td181{border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 30px;vertical-align: bottom;}
.td182{border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 6px;vertical-align: bottom;}
.td183{border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;}
.td184{border-right: #548dd4 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 18px;vertical-align: bottom;}
.td185{border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 63px;vertical-align: bottom;}
.td186{border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 9px;vertical-align: bottom;}
.td187{border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;}
.td188{border-right: #548dd4 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;}
.td189{border-left: #548dd4 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;background: #d8d8d8;}
.td190{border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 89px;vertical-align: bottom;background: #d8d8d8;}
.td191{border-right: #548dd4 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 59px;vertical-align: bottom;background: #d8d8d8;}
.td192{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 41px;vertical-align: bottom;}
.td193{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 11px;vertical-align: bottom;}
.td194{border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 9px;vertical-align: bottom;background: #d8d8d8;}
.td195{border-right: #d8d8d8 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 11px;vertical-align: bottom;background: #d8d8d8;}
.td196{border-right: #d8d8d8 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 20px;vertical-align: bottom;background: #d8d8d8;}
.td197{border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 41px;vertical-align: bottom;}
.td198{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 18px;vertical-align: bottom;}
.td199{border-left: #d8d8d8 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 23px;vertical-align: bottom;background: #d8d8d8;}
.td200{border-left: #548dd4 1px solid;border-top: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;background: #d8d8d8;}
.td201{border-right: #d8d8d8 1px solid;border-top: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 20px;vertical-align: bottom;background: #d8d8d8;}
.td202{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 42px;vertical-align: bottom;}
.td203{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;}
.td204{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 19px;vertical-align: bottom;}
.td205{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 30px;vertical-align: bottom;}
.td206{border-top: #548dd4 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;}
.td207{border-top: #548dd4 1px solid;padding: 0px;margin: 0px;width: 19px;vertical-align: bottom;}
.td208{border-top: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 13px;vertical-align: bottom;}
.td209{border-left: #548dd4 1px solid;border-top: #548dd4 1px solid;padding: 0px;margin: 0px;width: 18px;vertical-align: bottom;}
.td210{border-left: #548dd4 1px solid;border-right: #548dd4 1px solid;border-top: #548dd4 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;}
.td211{border-top: #548dd4 1px solid;padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;}
.td212{border-right: #548dd4 1px solid;border-top: #548dd4 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;}
.td213{border-left: #548dd4 1px solid;padding: 0px;margin: 0px;width: 48px;vertical-align: bottom;}
.td214{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 111px;vertical-align: bottom;}
.td215{border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 18px;vertical-align: bottom;}
.td216{border-left: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 48px;vertical-align: bottom;}
.td217{border-left: #548dd4 1px solid;border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 35px;vertical-align: bottom;}
.td218{border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;}
.td219{border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 89px;vertical-align: bottom;}
.td220{border-right: #d8d8d8 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;background: #d8d8d8;}
.td221{border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 3px;vertical-align: bottom;background: #d8d8d8;}
.td222{border-left: #548dd4 1px solid;padding: 0px;margin: 0px;width: 23px;vertical-align: bottom;}
.td223{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;}
.td224{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 3px;vertical-align: bottom;background: #d8d8d8;}
.td225{padding: 0px;margin: 0px;width: 29px;vertical-align: bottom;}
.td226{border-left: #548dd4 1px solid;border-top: #d8d8d8 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;background: #d8d8d8;}
.td227{border-right: #548dd4 1px solid;border-top: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 89px;vertical-align: bottom;background: #d8d8d8;}
.td228{padding: 0px;margin: 0px;width: 11px;vertical-align: bottom;}
.td229{border-bottom: #ff0000 1px solid;padding: 0px;margin: 0px;width: 49px;vertical-align: bottom;}
.td230{border-bottom: #ff0000 1px solid;padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;}
.td231{border-bottom: #ff0000 1px solid;padding: 0px;margin: 0px;width: 36px;vertical-align: bottom;}
.td232{border-bottom: #ff0000 1px solid;padding: 0px;margin: 0px;width: 48px;vertical-align: bottom;}
.td233{border-bottom: #ff0000 1px solid;padding: 0px;margin: 0px;width: 63px;vertical-align: bottom;}
.td234{border-bottom: #ff0000 1px solid;padding: 0px;margin: 0px;width: 9px;vertical-align: bottom;}
.td235{border-bottom: #ff0000 1px solid;padding: 0px;margin: 0px;width: 18px;vertical-align: bottom;}
.td236{border-left: #548dd4 1px solid;border-top: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;background: #d8d8d8;}
.td237{border-right: #548dd4 1px solid;border-top: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;background: #d8d8d8;}
.td238{padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;background: #548dd4;}
.td239{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 41px;vertical-align: bottom;background: #548dd4;}
.td240{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;background: #548dd4;}
.td241{padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;background: #548dd4;}
.td242{border-left: #548dd4 1px solid;border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;background: #548dd4;}
.td243{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;background: #548dd4;}
.td244{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 11px;vertical-align: bottom;background: #548dd4;}
.td245{border-left: #ff0000 1px solid;border-right: #d8d8d8 1px solid;border-top: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;background: #d8d8d8;}
.td246{border-right: #d8d8d8 1px solid;border-top: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 11px;vertical-align: bottom;background: #d8d8d8;}
.td247{border-right: #d8d8d8 1px solid;border-top: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 35px;vertical-align: bottom;background: #d8d8d8;}
.td248{border-right: #d8d8d8 1px solid;border-top: #d8d8d8 1px solid;border-bottom: #ff0000 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;background: #d8d8d8;}
.td249{border-top: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 63px;vertical-align: bottom;background: #d8d8d8;}
.td250{border-top: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 9px;vertical-align: bottom;background: #d8d8d8;}
.td251{border-right: #d8d8d8 1px solid;border-top: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;background: #d8d8d8;}
.td252{border-right: #ff0000 1px solid;border-top: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;background: #d8d8d8;}
.td253{border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;background: #d8d8d8;}
.td254{border-left: #ff0000 1px solid;border-right: #d8d8d8 1px solid;border-bottom: #ff0000 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;background: #d8d8d8;}
.td255{border-right: #d8d8d8 1px solid;border-bottom: #ff0000 1px solid;padding: 0px;margin: 0px;width: 11px;vertical-align: bottom;background: #d8d8d8;}
.td256{border-right: #d8d8d8 1px solid;border-bottom: #ff0000 1px solid;padding: 0px;margin: 0px;width: 35px;vertical-align: bottom;background: #d8d8d8;}
.td257{border-bottom: #ff0000 1px solid;padding: 0px;margin: 0px;width: 63px;vertical-align: bottom;background: #d8d8d8;}
.td258{border-bottom: #ff0000 1px solid;padding: 0px;margin: 0px;width: 9px;vertical-align: bottom;background: #d8d8d8;}
.td259{border-right: #d8d8d8 1px solid;border-bottom: #ff0000 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;background: #d8d8d8;}
.td260{border-right: #ff0000 1px solid;border-bottom: #ff0000 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;background: #d8d8d8;}
.td261{border-left: #ff0000 1px solid;padding: 0px;margin: 0px;width: 48px;vertical-align: bottom;}
.td262{border-right: #ff0000 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;}
.td263{border-right: #d8d8d8 1px solid;border-top: #d8d8d8 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 77px;vertical-align: bottom;background: #d8d8d8;}
.td264{border-top: #d8d8d8 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;background: #d8d8d8;}
.td265{border-left: #d8d8d8 1px solid;border-right: #548dd4 1px solid;border-top: #d8d8d8 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;background: #d8d8d8;}
.td266{border-top: #548dd4 1px solid;padding: 0px;margin: 0px;width: 30px;vertical-align: bottom;}
.td267{border-left: #548dd4 1px solid;border-right: #548dd4 1px solid;border-top: #548dd4 1px solid;padding: 0px;margin: 0px;width: 35px;vertical-align: bottom;}
.td268{border-left: #ff0000 1px solid;border-bottom: #ff0000 1px solid;padding: 0px;margin: 0px;width: 48px;vertical-align: bottom;}
.td269{border-right: #ff0000 1px solid;border-bottom: #ff0000 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;}
.td270{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 89px;vertical-align: bottom;}
.td271{border-top: #d8d8d8 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 51px;vertical-align: bottom;background: #d8d8d8;}
.td272{border-right: #d8d8d8 1px solid;border-top: #d8d8d8 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 20px;vertical-align: bottom;background: #d8d8d8;}
.td273{border-right: #548dd4 1px solid;border-top: #d8d8d8 1px solid;border-bottom: #d8d8d8 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;background: #d8d8d8;}
.td274{border-right: #548dd4 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;background: #d8d8d8;}
.td275{border-left: #548dd4 1px solid;padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;background: #d8d8d8;}
.td276{padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;background: #d8d8d8;}
.td277{border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 37px;vertical-align: bottom;}
.td278{border-left: #548dd4 1px solid;border-right: #548dd4 1px solid;border-bottom: #548dd4 1px solid;padding: 0px;margin: 0px;width: 35px;vertical-align: bottom;}

.tr0{height: 40px;}
.tr1{height: 7px;}
.tr2{height: 5px;}
.tr3{height: 17px;}
.tr4{height: 26px;}
.tr5{height: 25px;}
.tr6{height: 9px;}
.tr7{height: 8px;}
.tr8{height: 23px;}
.tr9{height: 3px;}
.tr10{height: 2px;}
.tr11{height: 6px;}
.tr12{height: 12px;}
.tr13{height: 14px;}
.tr14{height: 24px;}
.tr15{height: 19px;}
.tr16{height: 153px;}
.tr17{height: 154px;}
.tr18{height: 15px;}
.tr19{height: 13px;}
.tr20{height: 18px;}
.tr21{height: 4px;}
.tr22{height: 10px;}
.tr23{height: 11px;}
.tr24{height: 16px;}

.t0{width: 916px;font: 16px 'Arial Narrow';color: #548dd4;}
.t1{width: 916px;margin-top: 2px;font: bold 8px 'Arial Narrow';color: #548dd4;}
.t2{width: 916px;font: 8px 'Arial Narrow';color: #548dd4;}

</STYLE>
</HEAD>

<BODY>


<? 
// one page for each product
$product_num = 1;
foreach ($order->products as $pid =>$product) {
  
      $order_number = $order->order_id . "-" . $product_num; 

      // get zone from zone ID
      $zone_data = db_select('uc_zones')
      ->condition('zone_id', $order->delivery_zone)
      ->fields('uc_zones')
      ->execute()
      ->fetchAssoc();

    //dpm($zone_data, "zone data");

    $zone = $zone_data['zone_code'];

    //dpm($zone, "zone");

      $delivery_company = $order->delivery_company;
      $delivery_name = $order->delivery_first_name . " " . $order->delivery_last_name;
      $delivery_street = $order->delivery_street1 . " " . $order->delivery_street2;
      $delivery_city_zone_code = $order->delivery_city . ", " . $zone . ", " . $order->delivery_postal_code;

      $product_title = $product->title;

    $product_qty = $product->qty;

    // get full product details
    $product_orig = node_load($product->nid);
    //dpm($product_orig, "product orig");
    $attributes_full = $product_orig->attributes;
    //dpm($attributes_full, "attributes_full");

    // I need to build a reference from aid to attribute label
    // because the labels are editable, and yet I need the use the 
    // label to reference the chosen option, as in
    // $product->data['attributes']['Turnaround Options']
    // where the label is 'Turnaround Options'

    // $attributes_full has a full listing of attributes.
    // I can loop through it and build my reference array

    // ah, I don't need to do this, though, because I can get 
    // the aid from the attributes table /admin/store/products/attributes

    // I can use that aid to reference the correct label like this:

    // $attrib_label = $attributes_full[$aid]->label


    $turnaround_aid = 9;
    $turnaround_label = $attributes_full[$turnaround_aid]->label;
    $selected_turnaround = $product->data['attributes'][$turnaround_label];
    $selected_turnaround_oid = key($selected_turnaround);
    //dpm($selected_turnaround_oid, "selected_turnaround_oid");

    // calculate REQUESTED DUE DATE AT ENTRY from order created date
    // and the turnaround option chosen for the product

    switch ($selected_turnaround_oid) {
    case 59: // Standard 5-Day Turnaround
      $hours = 120;
      $seconds = 432000;
      $created = date("F j, Y", $order->created);
      //dpm($created, "created");
      $due_date = date("F j, Y", $order->created + $seconds);
      //dpm($due_date, "due Date");
      break;
    case 48: // Standard 4-5 Day Turnaround
      $hours = 96;
      $seconds = 345600;
      $hours2 = 120;
      $seconds2 = 432000;
      $created = date("F j, Y", $order->created);
      //dpm($created, "created");
      $due_date = date("F j, Y", $order->created + $seconds);
      //$due_date2 = date("F j, Y", $order->created + $seconds2);
      //dpm($due_date, "due Date");
      break;
    case 60: // 4-Day Turnaround
      $hours = 96;
      $seconds = 345600;
      $created = date("F j, Y", $order->created);
      //dpm($created, "created");
      $due_date = date("F j, Y", $order->created + $seconds);
      //dpm($due_date, "due Date");
      break;
    case 49: // 3-Day Turnaround
      $hours = 72;
      $seconds = 259200;
      $created = date("F j, Y", $order->created);
      //dpm($created, "created");
      $due_date = date("F j, Y", $order->created + $seconds);
      //dpm($due_date, "due Date");
      break;
    case 130: // 2-4 Day Turnaround
      $hours = 48;
      $seconds = 172800; 
      $hours2 = 96;
      $seconds2 = 345600;
      $created = date("F j, Y", $order->created);
      //dpm($created, "created");
      $due_date = date("F j, Y", $order->created + $seconds);
      //$due_date2 = date("F j, Y", $order->created + $seconds2);
      //dpm($due_date, "due Date");
      break;
    case 126: // 2-3 Day Turnaround
      $hours = 48;
      $seconds = 172800;      
      $hours2 = 72;
      $seconds2 = 259200;
      $created = date("F j, Y", $order->created);
      //dpm($created, "created");
      $due_date = date("F j, Y", $order->created + $seconds);
      //$due_date2 = date("F j, Y", $order->created + $seconds2);
      //dpm($due_date, "due Date");
      break;
    case 127: // 2-Day Guaranteed
      $hours = 48;
      $seconds = 172800;
      $created = date("F j, Y", $order->created);
      //dpm($created, "created");
      $due_date = date("F j, Y", $order->created + $seconds);
      //dpm($due_date, "due Date");      
      break;
    case 50: // 2-Day Turnaround
      $hours = 48;
      $seconds = 172800;
      $created = date("F j, Y", $order->created);
      //dpm($created, "created");
      $due_date = date("F j, Y", $order->created + $seconds);
      //dpm($due_date, "due Date");      
      break;
    case 51: // Next Day Rush
      $hours = 24;
      $seconds = 86400;
      $created = date("F j, Y", $order->created);
      //dpm($created, "created");
      $due_date = date("F j, Y", $order->created + $seconds);
      //dpm($due_date, "due Date");
      break;
    case 52: // Same Day (Proof Approval By 9 A.M. MST)
      $hours = 0;
      $due_date = date("F j, Y", $order->created);
      break;
    }

    // use turnaround label instead of calculated date
    $due_date = $selected_turnaround[$selected_turnaround_oid];


    // Color Options

    $color_aid = 2;
    $color_label = $attributes_full[$color_aid]->label;
    $selected_color = $product->data['attributes'][$color_label];
    $selected_color_oid = key($selected_color);
    //dpm($selected_color_oid, "selected_color_oid");

    $ink = "&nbsp;";
    if (isset($product->data['attributes'][$color_label][$selected_color_oid])) {
    $ink = $product->data['attributes'][$color_label][$selected_color_oid];
    } 

    $paper_stock_type = "&nbsp;";
    //dpm($selected_color_oid, "color_oid");

    switch ($selected_color_oid) {
    case 9: // 4/0 Full Color on Outside and Pockets
      $ink_side_1 = "Full Color on Outside and Pockets";
      $ink_side_2 = "No Color Inside";
      $color_option = "4/0";
      $paper_stock_type = "C1";
      $color_number = 4;
      $up = 1;
      $num_out = 4;
      $press_size = "17.5x20.5";
      $job_type = "1S";
      break;
    case 10: // 4/4 Full Color Outside and Inside
      $ink_side_1 = "Full Color on Outside and Pockets";
      $ink_side_2 = "Full Color Inside";
      $color_option = "4/4";
      $paper_stock_type = "C2";
      $color_number = 4;  
      $up = 2;
      $num_out = 2;
      $press_size = "20.5x35";
      $job_type = "W&T";
      break;
    case 14: // 4/1 Full Color on Outside and Single Color on Inside
      $ink_side_1 = "Full Color on Outside and Pockets";
      $ink_side_2 = "Single Color Inside";
      $color_option = "4/1";    
      $color_number = 4;
      $up = 2;
      $num_out = 2;
      $press_size = "20.5x35";
      $job_type = "W&T";
      break;
    case 15: // 5/0 Full Color Plus One PMS on Outside
      $ink_side_1 = "Full Color Plus One PMS on Outside";
      $ink_side_2 = "No Color Inside";
      $color_option = "5/0";
      $color_number = 5;
      $up = 1; 
      $num_out = 4;
      $press_size = "17.5x20.5";
      $job_type = "1S";
      break;
    case 14: // 1/0 Single Color on Outside and Pockets
      $ink_side_1 = "Single Color on Outside and Pockets";
      $ink_side_2 = "No Color Inside";
      $color_option = "1/0";
      $color_number = 1;
      $up = 1; 
      $num_out = 4;
      $press_size = "17.5x20.5";
      $job_type = "1S";
      break;     
    case 110: // 1/1 Single Color Outside and Inside
      $ink_side_1 = "Single Color Outside";
      $ink_side_2 = "Single Color Inside";
      $color_option = "1/1"; 
      $color_number = 1; 
      $up = 2;  
      $num_out = 2;
      $press_size = "20.5x35";
      $job_type = "W&T";
      break;    
    case 111: // 2/0 Two-Colors on Outside and Pockets
      $ink_side_1 = "Two-Colors on Outside and Pockets";
      $ink_side_2 = "No Color Inside";
      $color_option = "2/0"; 
      $color_number = 2; 
      $up = 1;  
      $num_out = 4;
      $press_size = "17.5x20.5";
      $job_type = "1S";
      break;
    case 112: // 2/2 Two-Colors on Outside and Inside
      $ink_side_1 = "Two-Colors Outside";
      $ink_side_2 = "Two-Colors Inside";
      $color_option = "2/2";  
      $color_number = 2;
      $up = 2; 
      $num_out = 2;
      $press_size = "20.5x35";
      $job_type = "W&T";
      break;  
    case 129: // 4/0 Full Color On Both Sides 
      $ink_side_1 = "Full Color Outside";
      $ink_side_2 = "Full Color Inside";
      $color_option = "4/0"; 
      $paper_stock_type = "C1";
      $color_number = 4;
      $up = 1;
      $num_out = 4;
      $press_size = "17.5x20.5";
      $job_type = "1S";
      break;  
    case 128: // 4/0 Full Color On One Side 
      $ink_side_1 = "Full Color Outside";
      $ink_side_2 = "No Color Inside";
      $color_option = "4/0";   
      $paper_stock_type = "C1";
      $color_number = 4;
      $up = 1;
      $num_out = 4;
      $press_size = "17.5x20.5";
      $job_type = "1S";
      break;  
    }

    // set "PRESS" value for 4 color
    if ($color_number == 4) {
        $press = "R925";
    } else {
        $press = "&nbsp;";
    }


    // Paper Option Data

    /*
    100 Cover         103
    12pt Gloss C1S    137
    12pt Gloss C2S    4
    14pt Gloss C2S    3
    80 Cover          102
    Self            101

    */

    $paper_aid = 1;
    $paper_label = $attributes_full[$paper_aid]->label;
    $paper_oid = key($product->data['attributes'][$paper_label]);
    $paper_stock = $product->data['attributes'][$paper_label][$paper_oid];

    if (!isset($paper_stock)) {
        // Default paper stock
        $paper_stock = "14PT WT C2S";
    }


    //dpm($paper_stock, "paper_stock");


    //$paper_stock_type = "&nbsp;";
    //if (strpos($paper_stock, "C1S")) {
    //    $paper_stock_type = "C1";
    //}
    //if (strpos($paper_stock, "C2S")) {
    //    $paper_stock_type = "C2";
    //}
    //dpm($paper_stock_type, "paper_stock_type");

    // above sets they printing type based on paper stock, but that 
    // has not been reliable.  Go back to using the case settings from above.




    // press size 
    $press_size = "&nbsp;";
    if ($paper_stock_type == "C1") {
        $press_size = "17½ x 20½";
    }
    if ($paper_stock_type == "C2") {
        $press_size = "20½ x 35";
    }
    //dpm($press_size, "press_size");

    // #up 
    //$up = "&nbsp;";
    // Up
    // single sided sheets will be running 1-up 
    // while double sided will run 2-up

    //if ($paper_stock_type == "C1") {
    //    $up = 1;
    //}
    //if ($paper_stock_type == "C2") {
    //    $up = 2;
    //}
    //dpm($up, "up");

    // Job type

    /*
    1S          4/0, one side
    W&T         4/4, two sided, work and turn
    Sheetwize   4/4, images different on each side.  Mostly Booklets.
    */

    // not sure when sheetwize will be

    // 1S/W&T/SW
    $job_type = "&nbsp;";
    if ($paper_stock_type == "C1") {
        $job_type = "1-S";
    }
    if ($paper_stock_type == "C2") {
        $job_type = "TURN";
    }
    //dpm($job_type, "job type");


    // Not sure what this is
    $ahx = "A";



    // Parent Size

    //dpm($attributes_full, "attributes_full");
    $parent_size_aid = 26;
    $parent_size_label = $attributes_full[$parent_size_aid]->label;
    //dpm($parent_size_label, "parent_size_label");
    $selected_parent_size = $product->data['attributes'][$parent_size_label];
    //dpm($selected_parent_size, "selected_parent_size");
    $selected_parent_size_oid = key($selected_parent_size);
    //dpm($selected_parent_size_oid, "selected_parent_size_oid");

    //dpm($product->data['attributes'], "product attributes");

    //dpm($product->data['attributes'][$parent_size_label][$selected_parent_size_oid], "parent size value");

    if (isset($product->data['attributes'][$parent_size_label][$selected_parent_size_oid])) {
        $parent_size = $product->data['attributes'][$parent_size_label][$selected_parent_size_oid];

    } else {
        $parent_size = "35x41";
    }

    //dpm($parent_size, "parent_size");

    // Out
    // ???
    //$out = 1; // leave this blank for now

    //$num_out = "&nbsp;";
    //if ($paper_stock_type == "C1") {
    //    $num_out = 4;
    //}
    //if ($paper_stock_type == "C2") {
    //    $num_out = 2;
    //}

    // Setup
    // For setup I’ll include 40 sheets per color

    //$setup_sheets = $color_number * 40;

    // Calculate Extra Sheets needed
    //$extra_sheets = $setup_sheets + $sheet_loss;

    // Sheet Loss
    // when figuring sheet loss I’ll usually give 1.5% of the impressions (15 additional sheets per 1000)
    //dpm($product->qty, "qty");
    $sheet_loss = ceil($product->qty * .015);
    //dpm($sheet_loss, "sheet_loss");
    if ($sheet_loss < 100) {
        $sheet_loss = 100;
    }
    //dpm($sheet_loss, "sheet_loss2");


    // Sheets Needed
    // “Quantity” / “#UP”, rounded up

    //$sheets_needed = ceil($product->qty / $up); // leave this blank for now
    $sheets_needed = "&nbsp;";
    // recalculating using formula given by client
    // Q(1.015) (Q=quantity?) (min 100)
    $sheets_needed = $product->qty + $sheet_loss;
    


    if ($paper_stock_type == "C2") {
        $sheets_needed = $sheets_needed / $up;
    }

    //dpm($press_size, "press_size");
    //dpm($job_type, "job_type");
    //dpm($paper_stock_type, "paper stock type");
    //dpm($up, "up");
    //dpm($num_out, "num_out");
    //dpm($sheets_needed, "sheets_needed");

    // Press Sheet
    //$press_sheet = $product->qty / $up; // leave this blank for now
    $press_sheet = "&nbsp;";
    //if C1 (sheets needed)(1.015)+150
    //If C2 (sheets needed)(1.03)+150
    //(min 200)



    if ($paper_stock_type == "C1") {
        $press_sheet_loss = ceil(($sheets_needed * .015) + 150);
        //dpm($press_sheet_loss, "press_sheet_loss");
        if ($press_sheet_loss < 200) {
            $press_sheet_loss = 200;
        }
        //dpm($press_sheet_loss, "press_sheet_loss 2");
        $press_sheet = $sheets_needed + $press_sheet_loss;
        //dpm($press_sheet, "press_sheet");
    }
    if ($paper_stock_type == "C2") {
        $press_sheet_loss = ceil(($sheets_needed * .03) + 150);
        //dpm($press_sheet_loss, "press_sheet_loss");
        if ($press_sheet_loss < 200) {
            $press_sheet_loss = 200;
        }
        //dpm($press_sheet_loss, "press_sheet_loss 2");
        $press_sheet = $sheets_needed + $press_sheet_loss;
        //dpm($press_sheet, "press_sheet");
    }

    //dpm($press_sheet, "press sheet");

    // Parent Sheet
    // "Press Sheet" / "#OUT", rounded up


    //$parent_sheet = ceil($press_sheet / $up); // leave this blank for now
    $parent_sheet = "&nbsp;";
    //(Press Sheet / #out)
    //$parent_sheet = ceil($press_sheet / $up);
    $parent_sheet = ceil($press_sheet / $num_out);
    //dpm($parent_sheet, "parent_sheet");

    // Count

    // I'm adding the extra sheets here, because I'm not sure 
    // where else to put it

    // $count = ceil($press_sheet + $extra_sheets); // leave blank for now
    $count = "&nbsp;";


    //“QC” box should always be toggled on
    $qc = 1;


    // Coating Option Data

    $coating_aid = 8;
    $coating_label = $attributes_full[$coating_aid]->label;
    $coating_oid = key($product->data['attributes'][$coating_label]);

    $coating = "&nbsp;";
    if (isset($product->data['attributes'][$coating_label][$coating_oid])) {
    $coating = $product->data['attributes'][$coating_label][$coating_oid];
    } 

    $uv_coat_one_side = FALSE;
    $uv_coat_both_sides = FALSE;

    $uv_coat_label = "UV COAT";


    $ink_coating_both_sides = TRUE;

    switch ($coating_oid) {
    case 46: // Flood UV 1 Side
      $uv_coat_one_side = TRUE;
      $ink_coating_both_sides = FALSE;
      $uv_coat_label = "FLOOD UV";
      break;
    case 125: // Flood UV 2 Sides
      $uv_coat_both_sides = TRUE;
      $uv_coat_label = "FLOOD UV";
      break;
    case 113: // Spot UV 1 Side
      $uv_coat_one_side = TRUE;
      $ink_coating_both_sides = FALSE;
      $uv_coat_label = "SPOT UV";
      break;
    case 124: // Spot UV 2 Side
      $uv_coat_both_sides = TRUE;
      $uv_coat_label = "SPOT UV";
      break;
    case 124: // Soft Feel AQ 1 Side
      $ink_coating_both_sides = FALSE;
      break;

    }

    $ink_coating_front = "NONE";
    $ink_coating_back = "NONE";

    if (isset($product->data['attributes'][$coating_label][$coating_oid])) {
    $ink_coating_front = $product->data['attributes'][$coating_label][$coating_oid];
    if ($ink_coating_both_sides) {
      $ink_coating_back = $product->data['attributes'][$coating_label][$coating_oid];
    }

    }



    // Folding Option Data

    /*
    Accordion         117`
    Closed Gate       120
    Double Parallel   121`
    Gate Fold         119`
    Half Fold         115
    None(Flat)        114
    Tri Fold          116
    Z Fold            118`
    */

    $folding_aid = 24;
    $folding_label = $attributes_full[$folding_aid]->label;
    $folding_oid = key($product->data['attributes'][$folding_label]);
    //dpm($folding_oid, "folding oid");


    $c_fold_roll_fold = FALSE;
    $z_fold_accordion_fold = FALSE;
    $double_paralell_fold = FALSE;
    $right_angle_fold = FALSE;
    $gate_fold = FALSE;

    switch ($folding_oid) {
    case 999999: // don't know what c fold or roll fold is
      $c_fold_roll_fold = TRUE;
      break;
    case 117: // Accordion
      $z_fold_accordion_fold = TRUE;
      break;
    case 118: // Z fold
      $z_fold_accordion_fold = TRUE;
      break;
    case 121: // Double Parallel
      $double_paralell_fold = TRUE;
      break;
    case 999999: // don't know what right angle fold is
      $right_angle_fold = TRUE;
      break;
    case 119: // Double Parallel
      $gate_fold = TRUE;
      break;    
    }


    // Box info
    //$product_orig
    $full_box_number = intval($product->qty / $product_orig->pkg_qty);
    $full_box_count = $product_orig->pkg_qty;
    $full_box_weight = $full_box_count * $product_orig->weight;
    //dpm($product_orig->pkg_qty, "pkg_qty");
    //dpm($product_orig->weight, "weight");


    $partial_box_count = $product->qty - ($full_box_number * $product_orig->pkg_qty);
    if ($partial_box_count > 0) {
    $partial_box_number = 1;
    }
    $partial_box_weight = $partial_box_count * $product_orig->weight;


    // Shipping info

    $shipping_customer_pick_up = "FALSE";
    $shipping_ups = FALSE;
    $shipping_ups_type = NULL;

    foreach ($line_items as $line_item) {

        if ($line_item['type'] == "shipping") {
          switch ($line_item['title']) {
            case "Customer Pick-up": 
              //dpm($line_item, "Customer Pick-up");
              $shipping_customer_pick_up = "TRUE";
              break; 
            case strstr($line_item['title'],"UPS"): 
            //dpm($line_item, $line_item['title']);
              $shipping_ups = TRUE;
              $shipping_ups_type = $line_item['title'];
              break; 
          }
        }



    }
    //dpm($shipping_customer_pick_up, "shipping_customer_pick_up");





    // Pocket slits ("BC Slits") 

    //dpm($attributes_full, "attributes full");
    $pocket_right_aid = 16;
    $pocket_right_label = $attributes_full[$pocket_right_aid]->label;
    $pocket_right_oid = key($product->data['attributes'][$pocket_right_label]);
    $pocket_right = $product->data['attributes'][$pocket_right_label][$pocket_right_oid];



    $pocket_left_aid = 7;
    $pocket_left_label = $attributes_full[$pocket_left_aid]->label;
    if (isset($product->data['attributes']['Business Card Slits'])) {
        $pocket_left_label = 'Business Card Slits';
    }
    $pocket_left_oid = key($product->data['attributes'][$pocket_left_label]);
    $pocket_left = $product->data['attributes'][$pocket_left_label][$pocket_left_oid];




    // die cut should always be checked

    $die_cut = 1;

    $die_num = "$product_title";
    
    $die_dimensions1 = 9;
    $die_dimensions2 = 12;



    //dpm($pocket_left, "pocket_left");

    // Glue
    // only X-11 gets glued

    if ($product_orig->nid == 248) {
    $glue = "x";
    } else {
    $glue = "&nbsp;";
    }



    $product_details = $product->details;


    // Proofing Options

    $proofing_aid = 10;
    $proofing_label = $attributes_full[$proofing_aid]->label;
    $proofing_oid = key($product->data['attributes'][$proofing_label]);
    $proofing = $product->data['attributes'][$proofing_label][$proofing_oid];

    //dpm($proofing_label, "proofing_label");
    //dpm($proofing_oid, "proofing_oid");
    //dpm($proofing, "proofing");

    $epson_proof = 0;
    $mail_epson = 0;
    if ($proofing_oid == 54 || $proofing_oid == 106) {
        $epson_proof = 1;
        $mail_epson = 1;
    }



  
    // if there is any edited data stored in the db table, fetch it, and use the
    // info to replace any existing values
    $ticket_data = db_select('wpf_dashboard_ticket_data', 'ticket_data')
        ->fields('ticket_data')
        ->condition('oid', $order_number,'=') 
        ->execute()
        ->fetchAssoc();

    //dpm($order_number, "order_number");
    //dpm($ticket_data, "ticket_data");

    //$ticket_data['job_number']

    // set up variables for each value, based on the field name
    // these values will replace any existing values from the order or product.
    foreach($ticket_data as $field_name => $field_value) {
       if ($field_value) {
           $$field_name = $field_value;
           //dpm($field_name, "retured field name");
       }
       
    }






?>



<!-- #include virtual="/convert-pdf-to-html/includes/pdf-to-word-body-tag-02242014.htm" -->

<form action="/admin/store/orders/<?php echo $order->order_id ?>/ticket/save" method="post" name="<?php echo $order_number ?>">

<TABLE cellpadding=0 cellspacing=0 class="t0" border=<?php echo $border?>>
<TR >
  <TD colspan=15 class="tr0 td0" ><P class="p0 ft0"><NOBR>CAN-DO</NOBR> JOB TICKET</P></TD>
  <TD colspan=2 class="tr0 td1" style="border-bottom: red 1px solid"><P class="p2 ft2" style="padding-right: 10px; color: red;">ORDER#</P></TD>

  <TD colspan=4 class="tr0 td2" style="border-bottom: red 1px solid"><P class="p1 ft2 input"><?php echo $order_number ?></P></TD>
     <input type="hidden" name="order_number" value="<?php echo $order_number ?>">
  <TD class="tr0 td3"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=2 class="tr0 td4" ><P class="p2 ft2" style="padding-right: 10px;">JOB#</P></TD>
  <TD colspan=8 class="tr0 td2" ><P class="p1 ft2 input">
    <input type="text" name="job_number" id="job-number" class="input-textfield" value="<?php echo $job_number ?>">
  </P></TD>

</TR>
<TR>
  <TD class="tr1 td7"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td1"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td1"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td3"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td8"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td1"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td1"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td1"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td1"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td9"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td3"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td3"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td3"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td10"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td11"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td1"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td1"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td2"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td1"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td1"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td3"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td3"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td12"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr2 td13"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td13"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td14"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td14"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td15"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td15"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td16"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td17"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td14"><P class="p1 ft4">&nbsp;</P></TD>
</TR>
<TR>
  <TD class="tr3 td7"><P class="p1 ft5">&nbsp;</P></TD>
  <TD colspan=3 rowspan=2 class="tr4 td18"><P class="p3 ft2">COMPANY</P></TD>
  <TD colspan=18 rowspan=2 class="tr5 td19"><P style="max-width:325px; overflow: hidden;" class="p1 ft2 input"><?php echo $order->billing_company ?></P></TD>
  
 
  <TD class="tr3 td20"><P class="p1 ft5">&nbsp;</P></TD>
  <TD class="tr3 td21"><P class="p1 ft5">&nbsp;</P></TD>
  <TD class="tr3 td21"><P class="p1 ft5">&nbsp;</P></TD>
  <TD class="tr3 td22"><P class="p1 ft5">&nbsp;</P></TD>
  <TD colspan=3 class="tr3 td23"><P class="p1 ft6">DATE IN</P></TD>
  <TD colspan=3 class="tr3 td24"><P class="p4 ft2">FINAL PROOF APPROVAL</P></TD>
</TR>
<TR>
  <TD class="tr6 td7"><P class="p1 ft7">&nbsp;</P></TD>
  
 
  <TD class="tr6 td20"><P class="p1 ft7">&nbsp;</P></TD>
  <TD class="tr7 td30"><P class="p1 ft8">&nbsp;</P></TD>
  <TD class="tr7 td30"><P class="p1 ft8">&nbsp;</P></TD>
  <TD class="tr7 td31"><P class="p1 ft8">&nbsp;</P></TD>
  <TD class="tr7 td31"><P class="p1 ft8">&nbsp;</P></TD>
  <TD class="tr7 td32"><P class="p1 ft8">&nbsp;</P></TD>
  <TD class="tr7 td33"><P class="p1 ft8">&nbsp;</P></TD>
  <TD class="tr7 td34"><P class="p1 ft8">&nbsp;</P></TD>
  <TD class="tr7 td35"><P class="p1 ft8">&nbsp;</P></TD>
  <TD class="tr7 td36"><P class="p1 ft8">&nbsp;</P></TD>
</TR>
<TR>
  <TD class="tr8 td7"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=3 rowspan=2 class="tr4 td18"><P class="p3 ft2">CONTACT</P></TD>
  <TD colspan=18 rowspan=2 class="tr5 td19"><P style="max-width:325px; overflow: hidden;" class="p1 ft2 input"><?php echo $order->billing_first_name . " " . $order->billing_last_name?></P></TD>
  
  <TD class="tr8 td20"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=5 class="tr8 td3" ><P class="p1 ft2 input" style="width: 200px;"><input type="text" name="date_in" id="date-in" class="input-textfield" value="<?php echo $date_in ?>"></P></TD>


  <TD class="tr8 td37"><P class="p1 ft1">&nbsp;</P></TD>

  <TD colspan=2 class="tr8 td5"><P class="p5 ft9"><input type="text" name="final_proof_date1" id="final-proof-date1" class="input-textfield textfield-short1" value="<?php echo $final_proof_date1 ?>">/<input type="text" name="final_proof_date2" id="final-proof-date2" class="input-textfield textfield-short1" value="<?php echo $final_proof_date2 ?>">/<input type="text" name="final_proof_date3" id="final-proof-date3" class="input-textfield textfield-short1" value="<?php echo $final_proof_date3 ?>"></P></TD>

  <TD class="tr8 td38"><P class="p7 ft9" style="padding-right: 0px"><input type="text" name="final_proof_time1" id="final-proof-time1" class="input-textfield textfield-short1" value="<?php echo $final_proof_time1 ?>">:<input type="text" name="final_proof_time2" id="final-proof-time2" class="input-textfield textfield-short1" value="<?php echo $final_proof_time2 ?>"></P></TD>
</TR>
<TR>
  <TD class="tr9 td7"><P class="p1 ft10">&nbsp;</P></TD>
  
  <TD class="tr9 td20"><P class="p1 ft10">&nbsp;</P></TD>
  <TD class="tr10 td39"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td39"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td40"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td40"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td41"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td42"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td34"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td35"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td36"><P class="p1 ft11">&nbsp;</P></TD>
</TR>
<TR>
  <TD class="tr3 td7"><P class="p1 ft5">&nbsp;</P></TD>
  <TD colspan=3 rowspan=2 class="tr4 td18"><P class="p8 ft2">PHONE</P></TD>
  <TD colspan=6 rowspan=2 class="tr5 td19"><P style="max-width:325px; overflow: hidden;" class="p1 ft2 input "><?php echo $order->billing_phone?> </P></TD>
  <TD colspan=2 rowspan=2 class="tr5 td43"><P class="p9 ft2">CELL / FAX</P></TD>
  <TD colspan=10 rowspan=2 class="tr5 td44"><P class="p1 ft2 input"><input type="text" name="phone_alt" id="phone-alt" class="input-textfield" value="<?php echo $phone_alt ?>"></P></TD>

 
  
  

  <TD class="tr3 td20"><P class="p1 ft5">&nbsp;</P></TD>
  <TD colspan=6 class="tr3 td45"><P class="p10 ft6">REQUESTED DUE DATE AT ENTRY</P></TD>
  <TD class="tr3 td5"><P class="p1 ft5">&nbsp;</P></TD>
  <TD class="tr3 td6"><P class="p11 ft2">DUE DATE</P></TD>
  <TD class="tr3 td38"><P class="p1 ft5">&nbsp;</P></TD>
</TR>
<TR >
  <TD colspan=3 class="tr6 td7"><P class="p1 ft7">&nbsp;</P></TD>



  <TD class="tr6 td20"><P class="p1 ft7">&nbsp;</P></TD>
  <TD class="tr7 td30"><P class="p1 ft8">&nbsp;</P></TD>
  <TD class="tr7 td30"><P class="p1 ft8">&nbsp;</P></TD>
  <TD class="tr7 td31"><P class="p1 ft8">&nbsp;</P></TD>
  <TD class="tr7 td31"><P class="p1 ft8">&nbsp;</P></TD>
  <TD class="tr7 td32"><P class="p1 ft8">&nbsp;</P></TD>
  <TD class="tr7 td33"><P class="p1 ft8">&nbsp;</P></TD>
  <TD class="tr7 td34"><P class="p1 ft8">&nbsp;</P></TD>
  <TD class="tr7 td35"><P class="p1 ft8">&nbsp;</P></TD>
  <TD class="tr7 td36"><P class="p1 ft8">&nbsp;</P></TD>
</TR>
<TR >
  <TD class="tr8 td7"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr8 td1"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=2 rowspan=2 class="tr5 td46"><P class="p1 ft2"><NOBR>E-MAIL</NOBR></P></TD>
  <TD colspan=15 class="tr8 td3"><P class="p1 ft2 input"><?php echo $order->primary_email?></P></TD>
  
  <TD class="tr8 td1"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr8 td3"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr8 td3"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr8 td20"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=5 class="tr8 td3"><P class="p1 ft2 input"><input type="text" name="due_date" id="due-date" class="input-textfield" value="<?php echo $due_date ?>"></P></TD>

  <TD class="tr8 td37"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=2 class="tr8 td5"><P class="p5 ft9"><input type="text" name="due_date1" id="due-date1" class="input-textfield textfield-short1" value="<?php echo $due_date1 ?>">/<input type="text" name="due_date2" id="due-date2" class="input-textfield textfield-short1" value="<?php echo $due_date2 ?>">/<input type="text" name="due_date3" id="due-date3" class="input-textfield textfield-short1" value="<?php echo $due_date3 ?>"></P></TD>

  <TD class="tr8 td38"><P class="p7 ft9"  style="padding-right: 0px"><input type="text" name="due_time1" id="due-time1" class="input-textfield textfield-short1" value="<?php echo $due_time1 ?>">:<input type="text" name="due_time2" id="due-time2" class="input-textfield textfield-short1" value="<?php echo $due_time2 ?>"></P></TD>
</TR>
<TR >
  <TD class="tr10 td7"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td1"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td3"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td3"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td3"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td10"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td11"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td1"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td1"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td2"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td1"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td1"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td3"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td3"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td20"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td3"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td3"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td2"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td2"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td1"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td37"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td5"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td6"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td38"><P class="p1 ft11">&nbsp;</P></TD>
</TR>
<TR >
  <TD class="tr11 td47"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td41"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td41"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td39"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td48"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td15"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td15"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td15"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td15"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td49"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td13"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td13"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td13"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td50"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td51"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td15"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td15"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td14"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td15"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td15"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td39"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td39"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td52"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td13"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td13"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td14"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td14"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td15"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td15"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td16"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td17"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td14"><P class="p1 ft4">&nbsp;</P></TD>
</TR>
<TR>
  <TD class="tr12 td53"><P class="p1 ft13">&nbsp;</P></TD>
  <TD class="tr12 td32"><P class="p1 ft13">&nbsp;</P></TD>
  <TD class="tr12 td32"><P class="p1 ft13">&nbsp;</P></TD>
  <TD class="tr12 td54"><P class="p1 ft13">&nbsp;</P></TD>
  <TD class="tr12 td55"><P class="p1 ft13">&nbsp;</P></TD>
  <TD class="tr12 td32"><P class="p1 ft13">&nbsp;</P></TD>
  <TD class="tr12 td32"><P class="p1 ft13">&nbsp;</P></TD>
  <TD colspan=3 class="tr12 td56"><P class="p12 ft14">TITLE</P></TD>
  <TD class="tr12 td30"><P class="p1 ft13">&nbsp;</P></TD>
  <TD class="tr12 td57"><P class="p1 ft13">&nbsp;</P></TD>
  <TD class="tr12 td30"><P class="p1 ft13">&nbsp;</P></TD>
  <TD class="tr12 td58"><P class="p1 ft13">&nbsp;</P></TD>
  <TD class="tr12 td59"><P class="p13 ft15">QUANTITY</P></TD>
  <TD class="tr12 td32"><P class="p1 ft13">&nbsp;</P></TD>
  <TD class="tr12 td32"><P class="p1 ft13">&nbsp;</P></TD>
  <TD class="tr12 td31"><P class="p1 ft13">&nbsp;</P></TD>
  <TD colspan=3 class="tr12 td60"><P class="p3 ft14">INK</P></TD>
  <TD class="tr12 td30"><P class="p1 ft13">&nbsp;</P></TD>
  <TD class="tr12 td61"><P class="p1 ft13">&nbsp;</P></TD>
  <TD class="tr12 td30"><P class="p1 ft13">&nbsp;</P></TD>
  <TD class="tr12 td30"><P class="p1 ft13">&nbsp;</P></TD>
  <TD class="tr12 td62"><P class="p1 ft13">&nbsp;</P></TD>
  <TD class="tr12 td31"><P class="p1 ft13">&nbsp;</P></TD>
  <TD class="tr12 td32"><P class="p1 ft13">&nbsp;</P></TD>
  <TD class="tr12 td32"><P class="p1 ft13">&nbsp;</P></TD>
  <TD class="tr12 td63"><P class="p3 ft14">Coating</P></TD>
  <TD class="tr12 td64"><P class="p1 ft13">&nbsp;</P></TD>
  <TD class="tr12 td62"><P class="p1 ft13">&nbsp;</P></TD>
</TR>
<TR >
  <TD colspan=12 class="tr5 td65" style="border-right: #548dd4 1px solid;"><P class="p1 ft2 input"><input type="text" name="product_title" id="product-title" class="input-textfield textfield-long1" value="<?php echo $product_title ?>"></P></TD>
  

  <TD class="tr5 td39"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=2 class="tr5 td68"><P class="p1 ft2 input"><input type="text" name="product_qty" id="product-qty" class="input-textfield textfield-short1" value="<?php echo $product_qty ?>"></P></TD>
  <TD colspan=11 class="tr5 td41" style="border-right: #548dd4 1px solid;"><P class="p1 ft2 input"><input type="text" name="ink" id="ink" class="input-textfield textfield-long1" value="<?php echo $ink ?>"></P></TD>
  
  
  <TD colspan=6 class="tr5 td40" style="border-right: #548dd4 1px solid;"><P class="p1 ft2 input"><input type="text" name="coating" id="coating" class="input-textfield textfield-long1" value="<?php echo $coating ?>"></P></TD>

  

</TR>
<TR>
  <TD class="tr13 td69 td70"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td70"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td70"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td71"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td72"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td70"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td70"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td70"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td70"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td73"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td21"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td21"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td21"><P class="p1 ft16">&nbsp;</P></TD>
  <TD colspan=2 class="tr13 td74"><P class="p14 ft6">EST PREP TIME</P></TD>
  <TD class="tr13 td70"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td75"><P class="p1 ft16">&nbsp;</P></TD>
  <TD colspan=4 class="tr13 td76"><P class="p3 ft6">+ EST ART DEPT</P></TD>
  <TD class="tr13 td77"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td12"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td3"><P class="p1 ft16">&nbsp;</P></TD>
  <TD colspan=2 class="tr13 td78"><P class="p15 ft2">TOTAL TIME</P></TD>
  <TD class="tr13 td1"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td1"><P class="p1 ft16">&nbsp;</P></TD>
  <TD colspan=2 class="tr13 td5"><P class="p3 ft2">DATE/TIME</P></TD>
  <TD class="tr13 td79"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td38"><P class="p16 ft2">INIT</P></TD>
</TR>
<TR>
  <TD class="tr2 td80 td81"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td81"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td81"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td82"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td83"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td81"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td81"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td81"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td81"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td84"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td30"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td30"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td30"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td58"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td85"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td33"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td32"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td31"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td32"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td86"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td54"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td57"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td52"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  
  <TD class="tr2 td36"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td34"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td87"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td36"><P class="p1 ft4">&nbsp;</P></TD>
</TR>
<TR >
  <TD class="tr14 td80 td81"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr14 td81"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr14 td81"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr14 td82"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr14 td83"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr14 td81"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr14 td81"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr14 td81"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr14 td81"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr14 td84"><P class="p1 ft1">&nbsp;</P></TD>

  <TD colspan=6 class="tr5 td3" style="border-right: #548dd4 1px solid;"><P class="p17 ft9" style="padding-right: 0px;"><input type="text" name="est_prep_time" id="est-prep-time" class="input-textfield textfield-time" value="<?php echo $est_prep_time ?>">:<input type="text" name="est_prep_time2" id="est-prep-time2" class="input-textfield textfield-time" value="<?php echo $est_prep_time2 ?>"></P></TD>
  
  
  <TD colspan=6 class="tr5 td1" style="border-right: #548dd4 1px solid; border-right: #548dd4 1px solid;"><P class="p17 ft9" style="padding-right: 0px;">  <input type="text" name="est_art_dept" id="est-art-dept" class="input-textfield textfield-time" value="<?php echo $est_art_dept ?>">:<input type="text" name="est_art_dept2" id="est-art-dept2" class="input-textfield textfield-time" value="<?php echo $est_art_dept2 ?>"></P></TD>
  
  <TD colspan=4 class="tr5 td4"><P class="p17 ft9" style="padding-right: 60px; border-right: #548dd4 1px solid;"> <input type="text" name="total_time1" id="total-time1" class="input-textfield textfield-short1" value="<?php echo $total_time1 ?>">:<input type="text" name="total_time2" id="total-time2" class="input-textfield textfield-short1" value="<?php echo $total_time2 ?>"></P></TD>
  
  <TD colspan=5 class="tr5 td2" style="border-right: #548dd4 1px solid; padding-right: 0px;"
><P class="p18 ft9"><input type="text" name="date_time1" id="date-time1" class="input-textfield textfield-short1" value="<?php echo $date_time1 ?>">/<input type="text" name="date_time2" id="date-time2" class="input-textfield textfield-date2" value="<?php echo $date_time2 ?>">/<input type="text" name="date_time3" id="date-time3" class="input-textfield textfield-date3" value="<?php echo $date_time3 ?>">  <input type="text" name="date_time_time1" id="date-time-time1" class="input-textfield textfield-time" value="<?php echo $date_time_time1 ?>">:<input type="text" name="date_time_time2" id="date-time-time2" class="input-textfield textfield-time" value="<?php echo $date_time_time2 ?>"></P></TD>

  <TD class="tr5 td38"><P class="p18 ft9"><input type="text" name="time_init" id="time-init" class="input-textfield textfield-time" value="<?php echo $time_init ?>"></P></TD>
</TR>
<TR>
  <TD rowspan=2 class="tr15 td89"><P class="p19 ft15 vertical">EMAIL</P></TD>
  <TD rowspan=2 class="tr15 td89" style="border-left: none;"><P class="p19 ft15 vertical">OP B</P></TD>
  <TD rowspan=2 class="tr15 td90"><P class="p20 ft6 vertical">FTP</P></TD>
  <TD colspan=2 rowspan=2 class="tr15 td90"><P class="p19 ft6 vertical">ST F</P></TD>
  <TD rowspan=2 class="tr15 td90"><P class="p1 ft15 vertical">D/DIS</P></TD>
  <TD rowspan=2 class="tr15 td90"><P class="p1 ft17 vertical">M REA</P></TD>
  <TD rowspan=2 class="tr15 td90"><P class="p19 ft6 vertical">CRE</P></TD>
  <TD rowspan=2 class="tr15 td90"><P class="p1 ft6 vertical">N FIL</P></TD>
  <TD class="tr13 td91"><P class="p21 ft6">PREVIOUS JOB #</P></TD>
  <TD class="tr13 td92"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td92"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td93"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td94"><P class="p1 ft16">&nbsp;</P></TD>
  <TD colspan=2 class="tr13 td95"><P class="p5 ft2">EMAIL PDF</P></TD>
  <TD class="tr13 td96"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td97"><P class="p22 ft2">INIT</P></TD>
  <TD class="tr13 td98"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td99"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td100"><P class="p1 ft16">
    <input type="hidden" name="epson_proof" value=0 />
    <input type="checkbox" name="epson_proof" value=1 
    <?php
        if ($epson_proof == 1) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD colspan=5 class="tr13 td101"><P class="p9 ft2">EPSON PROOF</P></TD>
  <TD class="tr13 td97"><P class="p16 ft2">INIT</P></TD>
  <TD class="tr13 td98"><P class="p1 ft16">&nbsp;</P></TD>
  <TD class="tr13 td99"><P class="p1 ft16">
    <input type="hidden" name="mail_epson" value=0 />
    <input type="checkbox" name="mail_epson" value=1 
    <?php
        if ($mail_epson == 1) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD colspan=2 class="tr13 td102"><P class="p7 ft2" style="text-align: left;">MAIL EPSON</P></TD>
  <TD class="tr13 td97"><P class="p16 ft2">INIT</P></TD>
</TR>
<TR >
  <TD class="tr2 td103"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td30"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td30"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td57"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td104"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td105"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td42"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td36"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td33"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td52"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td36"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td36"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td33"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td34"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td87"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td36"><P class="p1 ft4">&nbsp;</P></TD>
</TR>
<TR >
  <TD class="tr8 td106"><P class="p23 ft9" style="border-right: #548dd4 1px solid; padding-right: 5px">
      <input type="hidden" name="file_email_checkbox" value=0 />
      <input type="checkbox" name="file_email_checkbox" value=1 
    <?php
        if ($file_email_checkbox) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr8 td37"><P class="p1 ft1" style="padding-left: 4px;">
      <input type="hidden" name="file_op_b_checkbox" value=0 />
      <input type="checkbox" name="file_op_b_checkbox" value=1 
    <?php
        if ($file_op_b_checkbox) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr8 td37"><P class="p1 ft1">
      <input type="hidden" name="file_ftp_checkbox" value=0 />
      <input type="checkbox" name="file_ftp_checkbox" value=1 
    <?php
        if ($file_ftp_checkbox) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD colspan=2 class="tr8 td3" style="border-right: #548dd4 1px solid;"><P class="p1 ft1">
      <input type="hidden" name="file_stf_checkbox" value=0 />
      <input type="checkbox" name="file_stf_checkbox" value=1 
    <?php
        if ($file_stf_checkbox) {
            echo "checked";
        }
    ?>
    >    
  </P></TD>
  
  <TD class="tr8 td37"><P class="p1 ft1">
      <input type="hidden" name="file_d_dis_checkbox" value=0 />
      <input type="checkbox" name="file_d_dis_checkbox" value=1 
    <?php
        if ($file_d_dis_checkbox) {
            echo "checked";
        }
    ?>
    >    
  </P></TD>
  <TD class="tr8 td37"><P class="p1 ft1">
     <input type="hidden" name="file_m_rea_checkbox" value=0 />
      <input type="checkbox" name="file_m_rea_checkbox" value=1 
    <?php
        if ($file_m_rea_checkbox) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr8 td37"><P class="p1 ft1">
      <input type="hidden" name="file_cre_checkbox" value=0 />
      <input type="checkbox" name="file_cre_checkbox" value=1 
    <?php
        if ($file_cre_checkbox) {
            echo "checked";
        }
    ?>
    >    
  </P></TD>
  <TD class="tr8 td37" style="padding-left: 8px;"><P class="p1 ft1">
      <input type="hidden" name="file_n_fil_checkbox" value=0 />
      <input type="checkbox" name="file_n_fil_checkbox" value=1 
    <?php
        if ($file_n_fil_checkbox) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr8 td108"><P class="p1 ft1"><input type="text" name="previous_job_num" id="previous-job-num" class="input-textfield textfield-short1" value="<?php echo $previous_job_num ?>"></P></TD>
  <TD colspan=7 class="tr8 td109" style="border-right: #548dd4 1px solid;"><P class="p23 ft9">
  <input type="text" name="email_pdf1" id="email-pdf1" class="input-textfield textfield-short1" value="<?php echo $email_pdf1 ?>">/<input type="text" name="email_pdf2" id="email-pdf2" class="input-textfield textfield-date2" value="<?php echo $email_pdf2 ?>">/<input type="text" name="email_pdf3" id="email-pdf3" class="input-textfield textfield-date3" value="<?php echo $email_pdf3 ?>">  <input type="text" name="email_pdf_time1" id="email-pdf-time1" class="input-textfield textfield-time" value="<?php echo $email_pdf_time1 ?>">:<input type="text" name="email_pdf_time2" id="email-pdf-time2" class="input-textfield textfield-time" value="<?php echo $email_pdf_time2 ?>">
  </P></TD>

  
  <TD class="tr8 td38"><P class="p1 ft1"><input type="text" name="email_pdf_init" id="email-pdf-init" class="input-textfield textfield-time" value="<?php echo $email_pdf_init ?>"></P></TD>
  <TD colspan=8 class="tr8 td2" style="border-right: #548dd4 1px solid;"><P class="p18 ft9">
  <input type="text" name="epson_proof1" id="epson-proof1" class="input-textfield textfield-short1" value="<?php echo $epson_proof1 ?>">/<input type="text" name="epson_proof2" id="epson-proof2" class="input-textfield textfield-date2" value="<?php echo $epson_proof2 ?>">/<input type="text" name="epson_proof3" id="epson-proof3" class="input-textfield textfield-date3" value="<?php echo $epson_proof3 ?>">  <input type="text" name="epson_proof_time1" id="epson-proof-time1" class="input-textfield textfield-time" value="<?php echo $epson_proof_time1 ?>">:<input type="text" name="epson_proof_time2" id="epson-proof-time2" class="input-textfield textfield-time" value="<?php echo $epson_proof_time2 ?>">
  </P></TD>

  <TD class="tr8 td38"><P class="p1 ft1"><input type="text" name="epson_proof_init" id="epson-proof-init" class="input-textfield textfield-time" value="<?php echo $epson_proof_init ?>"></P></TD>
  <TD colspan=4 class="tr8 td2" style="border-right: #548dd4 1px solid;"><P class="p18 ft9">
    <input type="text" name="mail_epson1" id="mail-epson1" class="input-textfield textfield-short1" value="<?php echo $mail_epson1 ?>">/<input type="text" name="mail_epson2" id="mail-epson2" class="input-textfield textfield-date2" value="<?php echo $mail_epson2 ?>">/<input type="text" name="mail_epson3" id="mail-epson3" class="input-textfield textfield-date3" value="<?php echo $mail_epson3 ?>">  <input type="text" name="mail_epson_time1" id="mail-epson-time1" class="input-textfield textfield-time" value="<?php echo $mail_epson_time1 ?>">:<input type="text" name="mail_epson_time2" id="mail-epson-time2" class="input-textfield textfield-time" value="<?php echo $mail_epson_time2 ?>">
      </P></TD>
  
  <TD class="tr8 td38"><P class="p1 ft1" style="padding-left: 15px;"><input type="text" name="mail_epson_init" id="mail-epson-init" class="input-textfield textfield-time" value="<?php echo $mail_epson_init ?>"></P></TD>
</TR>
<TR>
  <TD class="tr10 td65"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td42"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td42"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td39"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td111"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td42"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td42"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td42"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td42"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td112"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td39"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td39"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td39"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td104"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td105"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td41"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td42"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td36"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td41"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td41"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td39"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td39"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td52"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td39"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td39"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td36"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td36"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td41"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td41"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td34"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td87"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td36"><P class="p1 ft11">&nbsp;</P></TD>
</TR>
<TR>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td44"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td3"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td104"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td105"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td40"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td52"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td3"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td40"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td40"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td34"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td35"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td40"><P class="p1 ft4">&nbsp;</P></TD>
</TR>
<TR >
  <TD colspan=10 class="tr16 td65"  style="vertical-align: top; color: red; font-size: 11px; "><P class=" input-smaller">
      <?php echo $product_details ?>
  </P></TD>

  <TD  class="tr16 td65" style=""><P class="p1 ft1"></P></TD>

  <TD colspan=13 class="tr16 td65" style="vertical-align: top;  "><P class="  input-smaller" style="width: 280px; "> 

<?php echo $order_comments ?>
  </P></TD>
  
  <TD class="tr17 td65" style=""><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=7 class="tr16 td40" style="border-left: #548dd4 1px solid; padding-left: 54px; border-right: #548dd4 1px solid; "><P class="p1 ft1">&nbsp;</P></TD>

  
</TR>
</TABLE>
<TABLE cellpadding=0 cellspacing=0 class="t1" id="paper" style="margin-bottom: 5px;">
<TR >
  <TD class="tr18 td113" style="border-right: #548dd4 1px solid; width: 25px;"><P class="p3 ft6">SUP</P></TD>
  <TD colspan=3 class="tr18 td114"><P class="p3 ft6">PAPER STOCK</P></TD>
  
 
  <TD class="tr18 td117" style="border-right: #548dd4 1px solid; width: 75px"><P class="p25 ft6" style="padding-left:25px;">PARENT SIZE</P></TD>
  <TD class="tr18 td118" style="border-right: #548dd4 1px solid; width: 70px"><P class="p3 ft6" style="padding-left:18px;">PARENT SHEET</P></TD>
  <TD class="tr18 td119" style="border-right: #548dd4 1px solid; width: 85px"><P class="p25 ft6">PRESS SIZE</P></TD>
  <TD class="tr18 td120" style="border-right: #548dd4 1px solid; width: 20px"><P class="p1 ft6" style="padding-left:8px;">#OUT</P></TD>
  <TD class="tr18 td121" style="border-right: #548dd4 1px solid; width: 64px"><P class="p1 ft6" style="padding-left:15px;">PRESS SHEET</P></TD>
  <TD class="tr18 td122" style="border-right: #548dd4 1px solid; width: 40px"><P class="p3 ft6" style="padding-left:12px;">#UP</P></TD>
</TR>
<TR>
  <TD class="tr8 td144" style="border-right: #548dd4 1px solid; width: 25px; border-bottom: #548dd4 1px solid;"><P class="p1 ft2 input"><input type="text" name="sup" id="sup" class="input-textfield textfield-time" value="<?php echo $sup ?>"></P></TD>
  <TD colspan=3 class="tr8 td144" style=" border-bottom: #548dd4 1px solid; border-right: #548dd4 1px solid;"><P class="p1 ft2 input"><input type="text" name="paper_stock" id="paper-stock" class="input-textfield " value="<?php echo $paper_stock ?>"></P></TD>
 

  <TD class="tr8 td144" style="border-right: #548dd4 1px solid; width: 75px; border-bottom: #548dd4 1px solid;"><P class="p1 ft2 input" style="padding-left:0px;"><input type="text" name="parent_size" id="parent-size" class="input-textfield textfield-short1" value="<?php echo $parent_size ?>"></P></TD>
  <TD class="tr8 td144" style="border-right: #548dd4 1px solid; width: 70px; border-bottom: #548dd4 1px solid;"><P class="p1 ft2 input" style="padding-left:0px;"><input type="text" name="parent_sheet" id="parent-sheet" class="input-textfield textfield-short1" value="<?php echo $parent_sheet ?>"></P></TD>
  <TD class="tr8 td144" style="border-right: #548dd4 1px solid; width: 85px; border-bottom: #548dd4 1px solid;"><P class="p1 ft2 input-smaller"><input type="text" name="press_size" id="press-size" class="input-textfield textfield-short1 input-smaller" value="<?php echo $press_size ?>"></P></TD>
  <TD class="tr8 td144" style="border-right: #548dd4 1px solid; width: 20px; border-bottom: #548dd4 1px solid;"><P class="p1 ft2 input" style="padding-left:0px;"><input type="text" name="num_out" id="num-out" class="input-textfield textfield-time" value="<?php echo $num_out ?>"></P></TD>
  <TD class="p1 ft2 input" style="border-right: #548dd4 1px solid; width: 64px;  border-bottom: #548dd4 1px solid;"><P class="p1 ft2 input" style="padding-left:0px;"><input type="text" name="press_sheet" id="press-sheet" class="input-textfield textfield-short1" value="<?php echo $press_sheet ?>"></P></TD>
  <TD class="tr8 td144" style="border-right: #548dd4 1px solid; width: 40px; border-bottom: #548dd4 1px solid;"><P class="p1 ft2 input" style="padding-left:0px;"><input type="text" name="up" id="up" class="input-textfield textfield-time" value="<?php echo $up ?>"></P></TD>
</TR>

</TABLE>
<TABLE cellpadding=0 cellspacing=0 class="t2" border=0>

<TR id="press">
  <TD colspan=3 class="tr12 td132" style="border-right: #548dd4 1px solid;"><P class="p27 ft14">PRESS</P></TD>
  <TD class="tr12 td133"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td32"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=6 class="tr12 td134"><P class="p19 ft14">INK</P></TD>
  <TD class="tr12 td135"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td32"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td136"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td30"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td61"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td137"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td30"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td138"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=7 class="tr12 td139"><P class="p28 ft14">COATING</P></TD>
  <TD class="tr12 td140"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td136"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=2 class="tr12 td141"><P class="p0 ft14">1S / W&T / SW A/H/X</P></TD>
  <TD class="tr12 td142"><P class="p26 ft14">SHEETS NEEDED</P></TD>
  <TD class="tr12 td58"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td66"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=2 class="tr12 td40"><P class="p1 ft19">COUNT</P></TD>
</TR>
<TR>
  <TD colspan=3 class="tr8 td143" style="border-right: #548dd4 1px solid;"><P class="p1 ft2 input"><input type="text" name="press" id="press" class="input-textfield " value="<?php echo $press ?>"></P></TD>
  <TD colspan=11 class="tr8 td144" style="border-right: #548dd4 1px solid;"><P class="p1 ft2 input-smaller"><?php echo $ink ?></P></TD>

   
  <TD colspan=14 class="tr8 td3" style="border-right: #548dd4 1px solid;"><P class="p1 ft2 input-smaller"><?php echo $coating ?></P></TD>

  
  <TD class="tr8 td2" style="border-right: #548dd4 1px solid;"><P class="p1 ft2 input"><input type="text" name="job_type" id="job-type" class="input-textfield textfield-short1 input-smaller" value="<?php echo $job_type ?>"></P></TD>

  <TD class="tr8 td150" style="border-right: #548dd4 1px solid;"><P class="p1 ft2 input"><input type="text" name="ahx" id="ahx" class="input-textfield textfield-short1" value="<?php echo $ahx ?>"></P></TD>
  <TD colspan=2 class="tr8 td151" style="border-right: #548dd4 1px solid;"><P class="p1 ft2 input"><input type="text" name="sheets_needed" id="sheets-needed" class="input-textfield textfield-short1" value="<?php echo $sheets_needed ?>"></P></TD>
  
  <TD colspan=3 class="tr8 td8" style="border-right: #548dd4 1px solid;"><P class="p1 ft2 input"><input type="text" name="count" id="count" class="input-textfield textfield-short1" value="<?php echo $count ?>"></P></TD>
  
</TR>
<TR>
  <TD class="tr10 td123"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td124"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td125"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td126"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td41"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td41"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td52"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td66"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td127"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td39"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td128"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td47"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td41"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td111"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td39"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td52"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td129"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td39"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td128"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td47"><P class="p1 ft11">&nbsp;</P></TD>
  <TD colspan=2 class="tr10 td41"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td128"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td47"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td41"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td152"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td153"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td111"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td40"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td124"><P class="p1 ft11">&nbsp;</P></TD>
  <TD colspan=3 class="tr10 td44"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td41"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td41"><P class="p1 ft11">&nbsp;</P></TD>
</TR>
<TR>
  <TD class="tr2 td123"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td124"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td125"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td126"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td12"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td127"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td12"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td129"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td123"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td153"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td40"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td124"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td131"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td104"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
</TR>
<TR>
  <TD class="tr12 td154"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=2 class="tr12 td155"><P class="p31 ft14">QC</P></TD>
  <TD class="tr12 td133"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td33"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td42"><P class="p9 ft20">
    <input type="hidden" name="qc" value=0 />
    <input type="checkbox" name="qc" value=1 
    <?php
        if ($qc) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr19 td20"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td156"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=3 class="tr12 td157"><P class="p32 ft15">DIE CUT</P></TD>
  <TD class="tr12 td135"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td33"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=2 class="tr12 td42"><P class="p9 ft20">
    <input type="hidden" name="die_cut" value=0 />
    <input type="checkbox" name="die_cut" value=1 
    <?php
        if ($die_cut) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr19 td20"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td137"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=5 class="tr12 td158"><P class="p33 ft15">NUMBERING</P></TD>
  <TD class="tr12 td138"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td159"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td42"><P class="p9 ft20">
    <input type="hidden" name="numbering" value=0 />
    <input type="checkbox" name="numbering" value=1 
    <?php
        if ($numbering) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr19 td148"><P class="p1 ft1">&nbsp;</P></TD>
  <TD rowspan=2 class="tr20 td160"><P class="p26 ft2"># OF BOXES</P></TD>
  <TD colspan=2 class="tr19 td161"><P class="p9 ft2">COUNT PER</P></TD>
  <TD class="tr19 td161"><P class="p12 ft2">WEIGHT PER</P></TD>
  <TD colspan=3 class="tr12 td162"><P class="p34 ft14">CUSTOMER PICK UP</P></TD>
  <TD class="tr12 td81"><P class="p1 ft1">&nbsp;</P></TD>
  <TD rowspan=2 class="tr3 td42"><P class="p9 ft21">
    <input type="hidden" name="shipping_customer_pick_up" value="FALSE" />
    <input type="checkbox" name="shipping_customer_pick_up" value="TRUE" 
    <?php
        if ($shipping_customer_pick_up == "TRUE") {
            echo "checked";
        }
    ?>
    >
  </P></TD>
</TR>
<TR>
  <TD class="tr2 td163"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td150"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td164"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td165"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td1"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td37"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td20"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr21 td166"><P class="p1 ft22">&nbsp;</P></TD>
  <TD colspan=2 rowspan=2 class="tr22 td167"><P class="p35 ft15">DIE #</P></TD>
  <TD rowspan=3 colspan=5 class="tr2 td145 border-right border-bottom"><P class="p1 ft4"><input type="text" name="die_num" id="die-num" class="input-textfield textfield-medium" value="<?php echo $die_num ?>"></P></TD>

  <TD class="tr2 td20"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr21 td168"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td169"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td170"><P class="p1 ft22">&nbsp;</P></TD>
  <TD colspan=2 rowspan=2 class="tr22 td171"><P class="p36 ft23">RED</P></TD>
  <TD class="tr21 td172"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td170"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td173"><P class="p1 ft22">&nbsp;</P></TD>
  <TD rowspan=2 class="tr22 td42"><P class="p9 ft24">
    <input type="hidden" name="numbering_red" value=0 />
    <input type="checkbox" name="numbering_red" value=1 
    <?php
        if ($numbering_red) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr2 td148"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td8"><P class="p1 ft4">&nbsp;</P></TD>
  <TD rowspan=2 class="tr22 td36"><P class="p26 ft25">BOX</P></TD>
  <TD rowspan=2 class="tr22 td174"><P class="p37 ft25">BOX</P></TD>
  <TD class="tr21 td142"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td58"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td55"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td33"><P class="p1 ft22">&nbsp;</P></TD>
</TR>
<TR>
  <TD colspan=4 rowspan=2 class="tr12 td163 border-right"><P class="p38 ft26">
    <input type="text" name="qc1" id="qc1" class="input-textfield textfield-tiny-date1" value="<?php echo $qc1 ?>">/<input type="text" name="qc2" id="qc2" class="input-textfield textfield-tiny-date2" value="<?php echo $qc2 ?>">/<input type="text" name="qc3" id="qc3" class="input-textfield textfield-tiny-date3" value="<?php echo $qc3 ?>">  <input type="text" name="qc_time1" id="qc-time1" class="input-textfield textfield-tiny-time" value="<?php echo $qc_time1 ?>">:<input type="text" name="qc_time2" id="qc-time2" class="input-textfield textfield-tiny-time" value="<?php echo $qc_time2 ?>">    
  </P></TD>

  <TD colspan=2 rowspan=2 class="tr11 td1 border-right"><P class="p1 ft12"><input type="text" name="qc_init" id="qc-init" class="input-textfield textfield-ini" value="<?php echo $qc_init ?>">
</P></TD>

  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td166"><P class="p1 ft4">&nbsp;</P></TD>



  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td137"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td30"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td138"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td175"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td138"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td159"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td176"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD colspan=3 rowspan=2 class="tr23 td162"><P class="p34 ft15">
  <?php
    if ($shipping_ups_type) {
      echo strtoupper($shipping_ups_type);
    } else {
      echo "UPS / FREIGHT";
    }
  ?>
  

  </P></TD>
  <TD class="tr2 td81"><P class="p1 ft4">&nbsp;</P></TD>
  <TD rowspan=3 class="tr3 td42"><P class="p9 ft21">
    <input type="hidden" name="shipping_ups" value="FALSE" />
    <input type="checkbox" name="shipping_ups" value="TRUE" 
    <?php
        if ($shipping_ups == "TRUE") {
            echo "checked";
        }
    ?>
    >
  </P></TD>
</TR>
<TR>
  
 
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td156"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td177"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td57"><P class="p1 ft4">&nbsp;</P></TD>

  
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td168"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td169"><P class="p1 ft4">&nbsp;</P></TD>
  <TD colspan=3 rowspan=2 class="tr23 td178"><P class="p40 ft15">BLACK</P></TD>
  <TD class="tr2 td172"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td170"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td173"><P class="p1 ft4">&nbsp;</P></TD>
  <TD rowspan=2 class="tr23 td42"><P class="p9 ft27">
    <input type="hidden" name="numbering_black" value=0 />
    <input type="checkbox" name="numbering_black" value=1 
    <?php
        if ($numbering_black) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  <TD rowspan=3 class="tr11 td160" ><P class="p26 ft2 input">

  <?php
    if ($full_box_number <= 0) {
      $full_box_number = "";
    }
  ?>
  <input type="text" name="full_box_number" id="full-box-number" class="input-textfield textfield-boxnumber" value="<?php echo $full_box_number ?>">
    

  </P></TD>
  <TD rowspan=3 colspan=2 class="tr11 td8" style="border-right: #548dd4 1px solid;"><P class="p26 ft2 input">

  <?php
    if ($full_box_number <= 0) {
      $full_box_count = "";
    }
  ?>
  <input type="text" name="full_box_count" id="full-box-count" class="input-textfield textfield-boxnumber" value="<?php echo $full_box_count ?>">

  </P></TD>
  
  <TD rowspan=3 class="tr11 td161"><P class="p26 ft2 input">
  <?php
    if ($full_box_number <= 0) {
      $full_box_weight = "";
    }
  ?>
  <input type="text" name="full_box_weight" id="full-box-weight" class="input-textfield textfield-boxweight" value="<?php echo $full_box_weight ?>">
  </P></TD>

  <TD class="tr2 td81"><P class="p1 ft4">&nbsp;</P></TD>
</TR>
<TR>
  <TD class="tr2 td179"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td124"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td125"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td180"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td42"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td166"><P class="p1 ft4">&nbsp;</P></TD>
  <TD colspan=2 rowspan=2 class="tr23 td167"><P class="p35 ft28">BC SLITS</P></TD>
  <TD rowspan=2 colspan=4 class="tr11 td145 "><P class="p1 ft2 input tiny-text">L: <input type="text" name="pocket_left" id="pocket-left" class="input-textfield" value="<?php echo $pocket_left ?>"> R: <input type="text" name="pocket_right" id="pocket-right" class="input-textfield" value="<?php echo $pocket_right ?>"></P></TD>
  
  <TD class="tr11 td88 "><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td20 "><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td137"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td30"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td175"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td138"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td159"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  

  

  <TD class="tr2 td142"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td58"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td55"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td33"><P class="p1 ft4">&nbsp;</P></TD>
</TR>
<TR >
  <TD class="tr2 td123"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td124"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td125"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td126"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td166"><P class="p1 ft4">&nbsp;</P></TD>

  
  <TD class="tr11 td88"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td181" style="background: #d8d8d8;"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td182" style="background: #d8d8d8;"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td183" style="background: #d8d8d8;"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td184" style="background: #d8d8d8;"><P class="p1 ft4">&nbsp;</P></TD>
  <TD rowspan=3 colspan=5 class="tr11 td145 border-right border-bottom"><P class="p1 ft12"><input type="text" name="numbering_start_number" id="numbering-start-number" class="input-textfield" value="<?php echo $numbering_start_number ?>"></P></TD>

  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  
  <TD class="tr2 td185" style="background: #d8d8d8;"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td186" style="background: #d8d8d8;"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td187" style="background: #d8d8d8;"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td188" style="background: #d8d8d8;"><P class="p1 ft4">&nbsp;</P></TD>
  <TD rowspan=3 class="tr3 td42"><P class="p9 ft21">
    <input type="hidden" name="shipping_we_deliver" value="FALSE" />
    <input type="checkbox" name="shipping_we_deliver" value="TRUE" 
    <?php
        if ($shipping_we_deliver == "TRUE") {
            echo "checked";
        }
    ?>
    >
  </P></TD>
</TR>
<TR >
  <TD class="tr2 td189"><P class="p1 ft4">&nbsp;</P></TD>
  <TD colspan=4 rowspan=2 class="tr23 td190"><P class="p41 ft15">FLUSH CUT LAMINATE</P></TD>
  <TD rowspan=2 class="tr23 td42"><P class="p9 ft27">
    <input type="hidden" name="flush_cut_laminate" value=0 />
    <input type="checkbox" name="flush_cut_laminate" value=1 
    <?php
        if ($flush_cut_laminate) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td156"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td177"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td57"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td67"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD colspan=4 class="tr2 td191"><P class="p42 ft29">START #</P></TD>
  

 
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td176"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td36"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td174"><P class="p1 ft4">&nbsp;</P></TD>
  <TD colspan=3 class="tr2 td162"><P class="p43 ft29">WE DELIVER</P></TD>
  <TD class="tr2 td81"><P class="p1 ft4">&nbsp;</P></TD>
</TR>
<TR  >
  <TD class="tr2 td154"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD colspan=2 class="tr11 td8 border-right"><P class="p1 ft12">&nbsp;</P></TD>
  
  <TD class="tr11 td3"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td145"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td106"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td1"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td8"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td88"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td137"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td30"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td138"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td159"><P class="p1 ft4">&nbsp;</P></TD>

  
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  <TD rowspan=2 class="tr11 td160"><P class="p26 ft2 input">
  <?php
    if (!$partial_box_number) {
      $partial_box_number = "";
    }
  ?>
  <input type="text" name="partial_box_number" id="partial-box-number" class="input-textfield textfield-boxnumber" value="<?php echo $partial_box_number ?>">
  </P></TD>
  <TD rowspan=2 colspan=2 class="tr11 td8" style="border-right: #548dd4 1px solid;"><P class="p26 ft2 input">
  <?php
    if (!$partial_box_number) {
      $partial_box_count = "";
    }
  ?>
  <input type="text" name="partial_box_count" id="partial-box-count" class="input-textfield textfield-boxnumber" value="<?php echo $partial_box_count ?>">
  </P></TD>
  
  <TD rowspan=2 class="tr11 td161"><P class="p26 ft2 input">
  <?php
    if (!$partial_box_number) {
      $partial_box_weight = "";
    }
  ?>
  <input type="text" name="partial_box_weight" id="partial-box-weight" class="input-textfield textfield-boxweight" value="<?php echo $partial_box_weight ?>">
  </P></TD>

  <TD class="tr2 td142"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td58"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td55"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td33"><P class="p1 ft4">&nbsp;</P></TD>
</TR>
<TR >
  <TD class="tr23 td154"><P class="p1 ft30">&nbsp;</P></TD>
  <TD colspan=4 class="tr23 td190"><P class="p44 ft28">EDGE SEAL LAMINATE</P></TD>
  <TD class="tr23 td42"><P class="p9 ft27">
    <input type="hidden" name="edge_seal_laminate" value=0 />
    <input type="checkbox" name="edge_seal_laminate" value=1 
    <?php
        if ($edge_seal_laminate) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr12 td20"><P class="p1 ft1">&nbsp;</P></TD>
  <TD rowspan=2 colspan=2 class="tr12 td8 border-right border-bottom"><P class="p1 ft1" style="text-align: right;"><input type="text" name="die_dimensions1" id="die-dimensions1" class="input-textfield textfield-short1" value="<?php echo $die_dimensions1 ?>"></P></TD>
  
  <TD colspan=2 rowspan=2 class="tr3 td193"><P class="p12 ft31">x</P></TD>
  <TD rowspan=2 colspan=4 class="tr12 td106 border-right border-bottom"><P class="p1 ft1"><input type="text" name="die_dimensions2" id="die-dimensions2" class="input-textfield textfield-short1" value="<?php echo $die_dimensions2 ?>"></P></TD>
  
  <TD class="tr12 td20"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=8 rowspan=2 class="tr20 td146 border-right"><P class="p45 ft2">
    <input type="text" name="numbering_date1" id="numbering-date1" class="input-textfield textfield-tiny-date1" value="<?php echo $numbering_date1 ?>">/<input type="text" name="numbering_date2" id="numbering-date" class="input-textfield textfield-tiny-date2" value="<?php echo $numbering_date2 ?>">/<input type="text" name="numbering_date3" id="numbering-date3" class="input-textfield textfield-tiny-date3" value="<?php echo $numbering_date3 ?>">  <input type="text" name="numbering_time1" id="numbering-time1" class="input-textfield textfield-tiny-time" value="<?php echo $numbering_time1 ?>">:<input type="text" name="numbering_time2" id="numbering-time2" class="input-textfield textfield-tiny-time" value="<?php echo $numbering_time2 ?>">
  </P></TD>

 
  
  <TD rowspan=2 class="tr12 td148 border-right"><P class="p1 ft1"><input type="text" name="numbering_init" id="numbering-init" class="input-textfield textfield-ini"  value="<?php echo $numbering_init ?>"></P></TD>
  
  <TD class="tr12 td148"><P class="p1 ft1">&nbsp;</P></TD>

  
  

  <TD rowspan=2 class="tr3 td142"><P class="p47 ft6">OTHER</P></TD>
  <TD class="tr23 td194"><P class="p1 ft30">&nbsp;</P></TD>
  <TD class="tr23 td195"><P class="p1 ft30">&nbsp;</P></TD>
  <TD class="tr23 td81"><P class="p1 ft30">&nbsp;</P></TD>
  <TD rowspan=2 class="tr3 td42"><P class="p9 ft21">
    <input type="hidden" name="shipping_other" value="FALSE" />
    <input type="checkbox" name="shipping_other" value="TRUE" 
    <?php
        if ($shipping_other == "TRUE") {
            echo "checked";
        }
    ?>
    >
  </P></TD>
</TR>
<TR >
  <TD class="tr2 td189"><P class="p1 ft4">&nbsp;</P></TD>
  <TD colspan=2 rowspan=2 class="tr23 td155"><P class="p31 ft15">1.5 MIL</P></TD>
  <TD class="tr2 td196"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td81"><P class="p1 ft4">&nbsp;</P></TD>
  <TD rowspan=2 class="tr23 td42"><P class="p9 ft27">
    <input type="hidden" name="one_point_five_mil" value=0 />
    <input type="checkbox" name="one_point_five_mil" value=1 
    <?php
        if ($one_point_five_mil) {
            echo "checked";
        }
    ?>
    >

  </P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  
  
 

  <TD class="tr11 td37"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td176"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td36"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td174"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td58"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td55"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td33"><P class="p1 ft4">&nbsp;</P></TD>
</TR>
<TR >
  <TD class="tr2 td154"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td133"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td33"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD colspan=5 rowspan=3 class="tr20 td8 border-right"><P class="p23 ft2">
    <input type="text" name="die_date1" id="die-date1" class="input-textfield textfield-tiny-date1" value="<?php echo $die_date1 ?>">/<input type="text" name="die_date2" id="die-date2" class="input-textfield textfield-tiny-date2" value="<?php echo $die_date2 ?>">/<input type="text" name="die_date3" id="die-date3" class="input-textfield textfield-tiny-date3" value="<?php echo $die_date3 ?>">  <input type="text" name="die_date_time1" id="die-date-time1" class="input-textfield textfield-tiny-time" value="<?php echo $die_date_time1 ?>">:<input type="text" name="die_date_time2" id="die-date-time2" class="input-textfield textfield-tiny-time" value="<?php echo $die_date_time2 ?>">

  </P></TD>
  
  <TD rowspan=3 colspan=3 class="tr11 td1 border-right"><P class="p1 ft12"><input type="text" name="die_init" id="die-init" class="input-textfield textfield-ini"  value="<?php echo $die_init ?>"></P></TD>
  
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td129"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td123"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128" ><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td65 border-right" style="border-left: 0px;"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td42"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  <TD rowspan=3 class="tr11 td160 "><P class="p1 ft12" style="padding-left: 10px;"><input type="text" name="extra_box_number1" id="extra-box-number1" class="input-textfield textfield-boxnumber" value="<?php echo $extra_box_number1 ?>"></P></TD>
  

  <TD rowspan=3 colspan=2 class="tr11 td8 border-right"><P class="p1 ft12" style="padding-left: 10px;"><input type="text" name="extra_box_count1" id="extra-box-count1" class="input-textfield textfield-boxnumber" value="<?php echo $extra_box_count1 ?>"></P></TD>
  
  <TD rowspan=3 class="tr11 td161"><P class="p1 ft12" style="padding-left: 10px;"><input type="text" name="extra_box_weight1" id="extra-box-weight1" class="input-textfield textfield-boxweight" value="<?php echo $extra_box_weight1 ?>"></P></TD>

  <TD rowspan=4 colspan=3 class="tr11 td151 border-right  border-bottom"><P class="p38 ft26">
    <input type="text" name="delivery_date1" id="delivery-date1" class="input-textfield textfield-tiny-date1" value="<?php echo $delivery_date1 ?>">/<input type="text" name="delivery_date2" id="delivery-date2" class="input-textfield textfield-tiny-date2" value="<?php echo $delivery_date2 ?>">/<input type="text" name="delivery_date3" id="delivery-date3" class="input-textfield textfield-tiny-date3" value="<?php echo $delivery_date3 ?>"> <br /> <input type="text" name="delivery_date_time1" id="delivery-date-time1" class="input-textfield textfield-tiny-time" value="<?php echo $delivery_date_time1 ?>">:<input type="text" name="delivery_date_time2" id="delivery-date-time2" class="input-textfield textfield-tiny-time" value="<?php echo $delivery_date_time2 ?>">    
  </P></TD>

  <TD rowspan=4 colspan=2 class="tr11 td1 border-right border-bottom"><P class="p1 ft12"><input type="text" name="delivery_date_init" id="delivery-date-init" class="input-textfield textfield-ini" value="<?php echo $delivery_date_init ?>"></P></TD>
 
</TR>
<TR >
  <TD class="tr2 td189"><P class="p1 ft4">&nbsp;</P></TD>
  <TD colspan=2 rowspan=2 class="tr23 td155"><P class="p49 ft28">3 MIL</P></TD>
  <TD class="tr2 td196"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td81"><P class="p1 ft4">&nbsp;</P></TD>
  <TD rowspan=2 class="tr23 td42"><P class="p9 ft27">
    <input type="hidden" name="three_mil" value=0 />
    <input type="checkbox" name="three_mil" value=1 
    <?php
        if ($three_mil) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>

  <TD class="tr11 td12"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td129"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td123"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>

  

  

</TR>
<TR >
  <TD class="tr2 td154"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td133"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td33"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  
 
  
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td168"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td169"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td170"><P class="p1 ft4">&nbsp;</P></TD>
  <TD colspan=2 rowspan=2 class="tr22 td199"><P class="p1 ft23">GLUE</P></TD>
  <TD class="tr2 td172"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td170"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td173"><P class="p1 ft4">&nbsp;</P></TD>
  <TD rowspan=2 class="tr23 td37"><P class="p9 ft27">
    <input type="hidden" name="glue" value=0 />
    <input type="checkbox" name="glue" value=1 
    <?php
        if ($glue) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  
  

  
  
</TR>
<TR >
  <TD class="tr21 td189"><P class="p1 ft22">&nbsp;</P></TD>
  <TD colspan=2 rowspan=2 class="tr23 td155"><P class="p49 ft28">5 MIL</P></TD>
  <TD class="tr21 td196"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td81"><P class="p1 ft22">&nbsp;</P></TD>
  <TD rowspan=2 class="tr2 td37"><P class="p9 ft32">
    <input type="hidden" name="five_mil" value=0 />
    <input type="checkbox" name="five_mil" value=1 
    <?php
        if ($five_mil) {
            echo "checked";
        }
    ?>
    >
  </P></TD>

  <TD class="tr2 td20"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td8"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td18"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td3"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td145"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td198"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td1"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td8"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td88"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td20"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr21 td168"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td169"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td170"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td172"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td170"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td173"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr2 td148"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td160"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td8"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td38"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td161"><P class="p1 ft4">&nbsp;</P></TD>
  
 

</TR>
<TR >
  <TD class="tr2 td200"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td201"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td90"><P class="p1 ft4">&nbsp;</P></TD>
  
  <TD class="tr1 td12"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr2 td48"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td202"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td13"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td203"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td204"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td15"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td48"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td13"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr1 td20"><P class="p1 ft3">&nbsp;</P></TD>
  <TD colspan=7 rowspan=2 class="tr8 td205"><P class="p45 ft2">
    <input type="text" name="glue1" id="glue1" class="input-textfield textfield-tiny-date1" value="<?php echo $glue1 ?>">/<input type="text" name="glue2" id="glue2" class="input-textfield textfield-tiny-date2" value="<?php echo $glue2 ?>">/<input type="text" name="glue3" id="glue3" class="input-textfield textfield-tiny-date3" value="<?php echo $glue3 ?>">  <input type="text" name="glue_time1" id="glue-time1" class="input-textfield textfield-tiny-time" value="<?php echo $glue_time1 ?>">:<input type="text" name="glue_time2" id="glue-time2" class="input-textfield textfield-tiny-time" value="<?php echo $glue_time2 ?>">

  </P></TD>

  <TD rowspan=2 colspan=2 class="tr11 td209"><P class="p1 ft12"><input type="text" name="glue_init" id="glue-init" class="input-textfield textfield-ini border-bottom"  value="<?php echo $glue_init ?>"></P></TD>
 
  <TD class="tr1 td148"><P class="p1 ft3">&nbsp;</P></TD>
  <TD rowspan=2 class="tr11 td210 border-bottom"><P class="p1 ft12" style="padding-left: 10px;"><input type="text" name="extra_box_number2" id="extra-box-number2" class="input-textfield textfield-boxnumber" value="<?php echo $extra_box_number2 ?>"></P></TD>

  <TD rowspan=2 colspan=2 class="tr11 td211 border-bottom border-right"><P class="p1 ft12" style="padding-left: 10px;"><input type="text" name="extra_box_count2" id="extra-box-count2" class="input-textfield textfield-boxnumber" value="<?php echo $extra_box_count2 ?>"></P></TD>
  
  <TD rowspan=2 class="tr11 td212 border-bottom"><P class="p1 ft12" style="padding-left: 10px;"><input type="text" name="extra_box_weight2" id="extra-box-weight2" class="input-textfield textfield-boxweight" value="<?php echo $extra_box_weight2 ?>"></P></TD>

  <TD class="tr2 td107 " style="border-right: none;"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td1 " style="border-right: none;"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr1 td107" style="border-right: none;"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td1"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td37" style="border-right: none;"><P class="p1 ft3">&nbsp;</P></TD>
</TR>
<TR>
  <TD colspan=4 class="tr20 td163 border-right"><P class="p38 ft26">
    <input type="text" name="laminate_date1" id="laminate-date1" class="input-textfield textfield-tiny-date1" value="<?php echo $laminate_date1 ?>">/<input type="text" name="laminate_date2" id="laminate-date2" class="input-textfield textfield-tiny-date2" value="<?php echo $laminate_date2 ?>">/<input type="text" name="laminate_date3" id="laminate-date3" class="input-textfield textfield-tiny-date3" value="<?php echo $laminate_date3 ?>">  <input type="text" name="laminate_date_time1" id="laminate-date-time1" class="input-textfield textfield-tiny-time" value="<?php echo $laminate_date_time1 ?>">:<input type="text" name="laminate_date_time2" id="laminate-date-time2" class="input-textfield textfield-tiny-time" value="<?php echo $laminate_date_time2 ?>">    
  </P></TD>
  
  <TD colspan=2 class="tr20 td1 border-right border-top"><P class="p1 ft1"><input type="text" name="laminate_date_init" id="laminate-date-init" class="input-textfield textfield-ini" value="<?php echo $laminate_date_init ?>"></P></TD>

  
  <TD class="tr20 td20"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr3 td156"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=3 class="tr3 td157"><P class="p51 ft15">CUT</P></TD>
  <TD class="tr3 td135"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr3 td33"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=2 class="tr3 td42"><P class="p9 ft21">
    <input type="hidden" name="cut" value=0 />
    <input type="checkbox" name="cut" value=1 
    <?php
        if ($cut) {
            echo "checked";
        }
    ?>
    >
  
  </P></TD>
  <TD class="tr20 td20"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr20 td148"><P class="p1 ft1">&nbsp;</P></TD>


  <TD class="tr3 td131" style="border-bottom: none; border-right: none;"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr3 td104" style="border-bottom: none; border-right: none;"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr3 td111" style="border-bottom: none; border-right: none;"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr3 td41" style="border-bottom: none; border-right: none;"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr3 td42" style="border-bottom: none; border-right: none;"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR >
  <TD class="tr2 td179"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td124"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td125"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td180"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td42"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td8"><P class="p1 ft12">&nbsp;</P></TD>
  <TD rowspan=3 class="tr3 td197"><P class="p1 ft1" style="text-align: right;"><input type="text" name="cut_dimensions1" id="cut-dimensions1" class="input-textfield textfield-short1" value="<?php echo $cut_dimensions1 ?>"></P></TD>
  <TD colspan=2 rowspan=3 class="tr3 td193"><P class="p12 ft31">x</P></TD>
  <TD rowspan=3 colspan=3 class="tr11 td106 border-bottom"><P class="p1 ft12"><input type="text" name="cut_dimensions2" id="cut-dimensions2" class="input-textfield textfield-short1" value="<?php echo $cut_dimensions2 ?>"></P></TD>

  <TD class="tr11 td88"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td12"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td129"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td123"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD rowspan=4 class="tr14 td148"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr2 td153"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td40"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td124"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td131"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td104"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
</TR>
<TR >
  <TD class="tr2 td123"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td124"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td125"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td126"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td8"><P class="p1 ft12">&nbsp;</P></TD>



  <TD class="tr11 td88"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td146"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td3"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td145"><P class="p1 ft12">&nbsp;</P></TD>
  <TD colspan=2 rowspan=2 class="tr23 td52"><P class="p52 ft28">PAD</P></TD>
  <TD class="tr11 td147"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td145"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td198"><P class="p1 ft12">&nbsp;</P></TD>
  <TD rowspan=2 class="tr23 td42"><P class="p9 ft27">
    <input type="hidden" name="pad" value=0 />
    <input type="checkbox" name="pad" value=1 
    <?php
        if ($pad) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr11 td213"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td8"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td2"><P class="p1 ft12">&nbsp;</P></TD>
  <TD colspan=2 rowspan=2 class="tr23 td214"><P class="p9 ft28">SHIPPING ADDRESS</P></TD>
  <TD class="tr11 td10"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td8"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td1"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td37"><P class="p1 ft12">&nbsp;</P></TD>
</TR>
<TR >
  <TD class="tr2 td189"><P class="p1 ft4">&nbsp;</P></TD>
  <TD colspan=4 rowspan=2 class="tr23 td190"><P class="p35 ft28">SCORE / PERF</P></TD>
  <TD rowspan=2 class="tr23 td42"><P class="p9 ft27">
    <input type="hidden" name="score_perf" value=0 />
    <input type="checkbox" name="score_perf" value=1 
    <?php
        if ($score_perf) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>

  

  <TD class="tr2 td67"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td129"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td123"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td215"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td216"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td40"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td104"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td42"><P class="p1 ft4">&nbsp;</P></TD>
</TR>
<TR>
  <TD class="tr2 td154"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD colspan=5 rowspan=3 class="tr20 td8 border-right"><P class="p23 ft2">
<input type="text" name="cut_date1" id="cut-date1" class="input-textfield textfield-tiny-date1" value="<?php echo $cut_date1 ?>">/<input type="text" name="cut_date2" id="cut-date2" class="input-textfield textfield-tiny-date2" value="<?php echo $cut_date2 ?>">/<input type="text" name="cut_date3" id="cut-date3" class="input-textfield textfield-tiny-date3" value="<?php echo $cut_date3 ?>">  <input type="text" name="cut_date_time1" id="cut-date-time1" class="input-textfield textfield-tiny-time" value="<?php echo $cut_date_time1 ?>">:<input type="text" name="cut_date_time2" id="cut-date-time2" class="input-textfield textfield-tiny-time" value="<?php echo $cut_date_time2 ?>">
  </P></TD>

  <TD rowspan=3 colspan=2 class="tr11 td1"><P class="p1 ft12"><input type="text" name="cut_date_init" id="cut-date-init" class="input-textfield textfield-ini" value="<?php echo $cut_date_init ?>"></P></TD>

  <TD class="tr11 td88"><P class="p1 ft12">&nbsp;</P></TD>

  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>

  <TD rowspan=3 colspan=3 class="tr11 td146 border-bottom"><P class="p1 ft12"  style="text-align: right;"><input type="text" name="pads1" id="pads1" class="input-textfield textfield-short1" value="<?php echo $pads1 ?>"></P></TD>

  <TD colspan=3 rowspan=2 class="tr19 td217"><P class="p53 ft33">pads of</P></TD>

  <TD rowspan=3 colspan=3 class="tr11 td145 border-bottom"><P class="p1 ft12"><input type="text" name="pads2" id="pads2" class="input-textfield textfield-short1" value="<?php echo $pads2 ?>"></P></TD>



  <TD rowspan=3 colspan=9 class="tr11 td213 " style="border-right: #548dd4 1px solid;"><P class="p9 ft28 input"><input type="text" name="delivery_company" id="delivery-company" class="input-textfield textfield-stretch" value="<?php echo $delivery_company ?>"></P></TD>
  
</TR>
<TR>
  <TD colspan=4 rowspan=3 class="tr20 td163 border-right"><P class="p38 ft26">
    <input type="text" name="score_perf_date1" id="score-perf_date1" class="input-textfield textfield-tiny-date1" value="<?php echo $score_perf_date1 ?>">/<input type="text" name="score_perf_date2" id="score-perf_date2" class="input-textfield textfield-tiny-date2" value="<?php echo $score_perf_date2 ?>">/<input type="text" name="score_perf_date3" id="score_perf_date3" class="input-textfield textfield-tiny-date3" value="<?php echo $score_perf_date3 ?>">  <input type="text" name="score_perf_date_time1" id="score-perf-date-time1" class="input-textfield textfield-tiny-time" value="<?php echo $score_perf_date_time1 ?>">:<input type="text" name="score_perf_date_time2" id="score-perf-date-time2" class="input-textfield textfield-tiny-time" value="<?php echo $score_perf_date_time2 ?>">
  </P></TD>
  
  <TD rowspan=3 colspan=2 class="tr1 td1 border-right"><P class="p1 ft3"><input type="text" name="score_perf_date_init" id="score-perf-date-init" class="input-textfield textfield-ini" value="<?php echo $score_perf_date_init ?>"></P></TD>

  <TD class="tr1 td20"><P class="p1 ft3">&nbsp;</P></TD>
  
 
  <TD class="tr1 td88"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr1 td20"><P class="p1 ft3">&nbsp;</P></TD>




  <TD class="tr1 td148"><P class="p1 ft3">&nbsp;</P></TD>
  
  
</TR>
<TR >
  

  
  <TD class="tr2 td20"><P class="p1 ft4">&nbsp;</P></TD>



  
  <TD class="tr2 td88"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td20"><P class="p1 ft4">&nbsp;</P></TD>


  <TD class="tr21 td65"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td128"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td218"><P class="p1 ft22">&nbsp;</P></TD>


  <TD class="tr2 td148"><P class="p1 ft4">&nbsp;</P></TD>
  

</TR>
<TR >

  
 
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td127"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td215"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td67"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td12"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td129"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td123"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td216"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td40"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td124"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td131"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td104"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td42"><P class="p1 ft4">&nbsp;</P></TD>
</TR>
<TR >
  <TD class="tr2 td179"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td124"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td125"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td180"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td42"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td12"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td127"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td146"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td3"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td145"><P class="p1 ft12">&nbsp;</P></TD>
  <TD colspan=2 rowspan=2 class="tr23 td52"><P class="p36 ft28">KIT</P></TD>
  <TD class="tr11 td147"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td145"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td198"><P class="p1 ft12">&nbsp;</P></TD>
  <TD rowspan=2 class="tr23 td42"><P class="p9 ft27">
    <input type="hidden" name="kit" value=0 />
    <input type="checkbox" name="kit" value=1 
    <?php
        if ($kit) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  <TD rowspan=3 colspan=9 class="tr11 td213 " style="border-right: #548dd4 1px solid;"><P class="p9 ft28 input"><input type="text" name="delivery_name" id="delivery-name" class="input-textfield textfield-stretch" value="<?php echo $delivery_name ?>"></P></TD>
  
</TR>
<TR>
  <TD class="tr2 td123"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td124"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td125"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td126"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td8"><P class="p1 ft12">&nbsp;</P></TD>
  <TD colspan=5 rowspan=2 class="tr23 td219"><P class="p35 ft15"><NOBR>C-FOLD /</NOBR> ROLL FOLD</P></TD>
  <TD colspan=2 rowspan=2 class="tr23 td42"><P class="p9 ft27">
      <input type="hidden" name="c_fold_roll_fold" value=0 />
    <input type="checkbox" name="c_fold_roll_fold" value=1 
    <?php
        if ($c_fold_roll_fold) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td129"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td123"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td215"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>

  
</TR>
<TR>
  <TD class="tr2 td189"><P class="p1 ft4">&nbsp;</P></TD>
  <TD colspan=4 rowspan=2 class="tr2 td220" style="border-bottom: #548dd4 1px solid;"><P class="p41 ft15"><?php echo $uv_coat_label ?> ONE SIDE</P></TD>
  
  <TD rowspan=2 class="tr11 td37" style="border-left: #548dd4 1px solid;"><P class="p9 ft27">
    <input type="hidden" name="uv_coat_one_side" value=0 />
    <input type="checkbox" name="uv_coat_one_side" value=1 
    <?php
        if ($uv_coat_one_side) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD rowspan=2 class="tr12 td20"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=3 rowspan=3 class="tr3 td40"><P class="p54 ft34" style="text-align: right;"><input type="text" name="kit1" id="kit1" class="input-textfield textfield-short1" value="<?php echo $kit1 ?>"></P></TD>
  
  <TD colspan=2 rowspan=2 class="tr12 td222"><P class="p55 ft33">of</P></TD>

  <TD class="tr11 td223"><P class="p1 ft12">&nbsp;</P></TD>
  <TD rowspan=3 colspan=3 class="tr11 td145 border-bottom"><P class="p1 ft12"><input type="text" name="kit2" id="kit2" class="input-textfield textfield-short1" value="<?php echo $kit2 ?>"></P></TD>

 
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>


</TR>
<TR>
  <TD class="tr2 td154"><P class="p1 ft4">&nbsp;</P></TD>


  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td8"><P class="p1 ft12">&nbsp;</P></TD>
  <TD colspan=5 rowspan=2 class="tr23 td219"><P class="p56 ft15"><NOBR>Z-FOLD /</NOBR> ACCORDION</P></TD>
  <TD colspan=2 rowspan=2 class="tr23 td42"><P class="p9 ft27">
    <input type="hidden" name="z_fold_accordion_fold" value=0 />
    <input type="checkbox" name="z_fold_accordion_fold" value=1 
    <?php
        if ($z_fold_accordion_fold) {
            echo "checked";
        }
    ?>
    >

  </P></TD>
  <TD class="tr11 td223"><P class="p1 ft12">&nbsp;</P></TD>



  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td216"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td40"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td124"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td131"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td104"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td42"><P class="p1 ft4">&nbsp;</P></TD>
</TR>
<TR >
  <TD class="tr2 td189" ><P class="p1 ft4">&nbsp;</P></TD>
  <TD colspan=4 rowspan=2 class="tr23 td190" ><P class="p41 ft15"><?php echo $uv_coat_label ?> BOTH SIDES</P></TD>
  <TD rowspan=2 class="tr23 td42"><P class="p9 ft27">

    <input type="hidden" name="uv_coat_both_sides" value=0 />
    <input type="checkbox" name="uv_coat_both_sides" value=1 
    <?php
        if ($uv_coat_both_sides) {
            echo "checked";
        }
    ?>
    >

  </P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>


  <TD class="tr2 td65"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td218"><P class="p1 ft4">&nbsp;</P></TD>



  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  <TD rowspan=3 colspan=9 class="tr11 td213 " style="border-right: #548dd4 1px solid;"><P class="p9 ft28 input"><input type="text" name="delivery_street" id="delivery-street" class="input-textfield textfield-stretch" value="<?php echo $delivery_street ?>"></P></TD>
  
</TR>
<TR>
  <TD class="tr2 td154"><P class="p1 ft4">&nbsp;</P></TD>
  <TD rowspan=2 class="tr12 td20"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr11 td8"><P class="p1 ft12">&nbsp;</P></TD>
  <TD colspan=5 rowspan=2 class="tr23 td219"><P class="p35 ft15">DOUBLE PARALLEL</P></TD>
  <TD colspan=2 rowspan=2 class="tr23 td42"><P class="p9 ft27">

      <input type="hidden" name="double_paralell_fold" value=0 />
    <input type="checkbox" name="double_paralell_fold" value=1 
    <?php
        if ($double_paralell_fold) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD rowspan=4 colspan=7 class="tr11 td2"><P class="p38 ft26">
    <input type="text" name="kit_date1" id="kit-date1" class="input-textfield textfield-tiny-date1" value="<?php echo $kit_date1 ?>">/<input type="text" name="kit_date2" id="kit-date2" class="input-textfield textfield-tiny-date2" value="<?php echo $kit_date2 ?>">/<input type="text" name="kit_date3" id="kit-date3" class="input-textfield textfield-tiny-date3" value="<?php echo $kit_date3 ?>">  <input type="text" name="kit_date_time1" id="kit-date-time1" class="input-textfield textfield-tiny-time" value="<?php echo $kit_date_time1 ?>">:<input type="text" name="kit_date_time2" id="kit-date-time2" class="input-textfield textfield-tiny-time" value="<?php echo $kit_date_time2 ?>">    
  </P></TD>

  
  <TD rowspan=4 colspan=2 class="tr11 td106 border-right" ><P class="p1 ft12"><input type="text" name="kit_date_init" id="kit-date-init" class="input-textfield textfield-ini" value="<?php echo $kit_date_init ?>"></P></TD>

 
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>

  
</TR>
<TR >
  <TD rowspan=4 colspan=4 class="tr11 td163 border-right"><P class="p38 ft26">
    <input type="text" name="uv_date1" id="uv-date1" class="input-textfield textfield-tiny-date1" value="<?php echo $uv_date1 ?>">/<input type="text" name="uv_date2" id="uv-date2" class="input-textfield textfield-tiny-date2" value="<?php echo $uv_date2 ?>">/<input type="text" name="uv_date3" id="uv-date3" class="input-textfield textfield-tiny-date3" value="<?php echo $uv_date3 ?>">  <input type="text" name="uv_date_time1" id="uv-date-time1" class="input-textfield textfield-tiny-time" value="<?php echo $uv_date_time1 ?>">:<input type="text" name="uv_date_time2" id="uv-date-time2" class="input-textfield textfield-tiny-time" value="<?php echo $uv_date_time2 ?>">    
  </P></TD>

  <TD rowspan=4 colspan=2 class="tr11 td1 border-right"><P class="p1 ft12"><input type="text" name="uv_date_init" id="uv_date-init" class="input-textfield textfield-ini" value="<?php echo $uv_date_init ?>"></P></TD>


  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>




  
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>

  
</TR>
<TR >

  


  <TD class="tr10 td20"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td8"><P class="p1 ft11">&nbsp;</P></TD>
  <TD colspan=5 rowspan=3 class="tr23 td219"><P class="p41 ft15">RIGHT ANGLE FOLD</P></TD>
  <TD colspan=2 rowspan=3 class="tr11 td37"><P class="p9 ft36">
    <input type="hidden" name="right_angle_fold" value=0 />
    <input type="checkbox" name="right_angle_fold" value=1 
    <?php
        if ($right_angle_fold) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr10 td20"><P class="p1 ft11">&nbsp;</P></TD>
  
  
 
  <TD class="tr10 td148"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td213"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td8"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td2"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td150"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td151"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td10"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td8"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td1"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td37"><P class="p1 ft11">&nbsp;</P></TD>
</TR>
<TR >


  
  <TD class="tr21 td20"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td8"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td20"><P class="p1 ft22">&nbsp;</P></TD>
  
  
  
  <TD class="tr21 td37"><P class="p1 ft22">&nbsp;</P></TD>

  <TD class="tr9 td216"><P class="p1 ft10">&nbsp;</P></TD>
  <TD class="tr9 td66"><P class="p1 ft10">&nbsp;</P></TD>
  <TD class="tr9 td40"><P class="p1 ft10">&nbsp;</P></TD>
  <TD class="tr9 td124"><P class="p1 ft10">&nbsp;</P></TD>
  <TD class="tr9 td131"><P class="p1 ft10">&nbsp;</P></TD>
  <TD class="tr9 td104"><P class="p1 ft10">&nbsp;</P></TD>
  <TD class="tr9 td66"><P class="p1 ft10">&nbsp;</P></TD>
  <TD class="tr9 td41"><P class="p1 ft10">&nbsp;</P></TD>
  <TD class="tr9 td42"><P class="p1 ft10">&nbsp;</P></TD>
</TR>
<TR >
  


  
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  

  
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td129"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td123"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td65"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td42"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  <TD rowspan=3 colspan=9 class="tr11 td213" style="border-right: #548dd4 1px solid;"><P class="p9 ft28 input"><input type="text" name="delivery_city_zone_code" id="delivery-city_zone_code" class="input-textfield textfield-stretch" value="<?php echo $delivery_city_zone_code ?>"></P></TD>
  
</TR>
<TR >
  <TD class="tr2 td179"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td124"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td125"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td180"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td42"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td8"><P class="p1 ft12">&nbsp;</P></TD>
  <TD colspan=5 rowspan=2 class="tr23 td219"><P class="p35 ft28">GATE FOLD</P></TD>
  <TD colspan=2 rowspan=2 class="tr23 td42"><P class="p9 ft27">
    <input type="hidden" name="gate_fold" value=0 />
    <input type="checkbox" name="gate_fold" value=1 
    <?php
        if ($gate_fold) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr11 td12"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td129"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td123"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>

  
</TR>
<TR >
  <TD class="tr2 td123"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td124"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td125"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td126"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td146"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td3"><P class="p1 ft12">&nbsp;</P></TD>
  <TD colspan=3 class="tr11 td225"><P class="p40 ft37">DRILL</P></TD>
  <TD class="tr11 td147"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td145"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td198"><P class="p1 ft12">&nbsp;</P></TD>
  <TD rowspan=2 class="tr23 td42"><P class="p9 ft27">
    <input type="hidden" name="drill" value=0 />
    <input type="checkbox" name="drill" value=1 
    <?php
        if ($drill) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>

  
</TR>
<TR >
  <TD class="tr21 td226"><P class="p1 ft22">&nbsp;</P></TD>
  <TD colspan=4 rowspan=2 class="tr22 td227"><P class="p30 ft23">EMBOSS</P></TD>
  <TD rowspan=2 class="tr11 td37 border-bottom"><P class="p9 ft36">
    <input type="hidden" name="emboss" value=0 />
    <input type="checkbox" name="emboss" value=1 
    <?php
        if ($emboss) {
            echo "checked";
        }
    ?>
    >
  </P></TD>

  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td8"><P class="p1 ft12">&nbsp;</P></TD>
  <TD rowspan=3 class="tr11 td192"><P class="p1 ft12" style="text-align: right;"><input type="text" name="fold_dimensions1" id="fold-dimensions1" class="input-textfield textfield-short1" value="<?php echo $fold_dimensions1 ?>"></P></TD>

  <TD colspan=2 rowspan=3 class="tr20 td228"><P class="p12 ft38">x</P></TD>

  <TD rowspan=3 colspan=3 class="tr11 td106"><P class="p1 ft12"><input type="text" name="fold_dimensions2" id="fold-dimensions2" class="input-textfield textfield-short1" value="<?php echo $fold_dimensions2 ?>"></P></TD>


  <TD class="tr11 td88"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td129"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td123"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td215"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td216"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td40"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td124"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td131"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td104"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td42"><P class="p1 ft4">&nbsp;</P></TD>
</TR>
<TR >
  <TD class="tr2 td154"><P class="p1 ft4">&nbsp;</P></TD>
  
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td8"><P class="p1 ft12">&nbsp;</P></TD>



  <TD class="tr11 td88"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD colspan=7 rowspan=3 class="tr12 td146"><P class="p45 ft19">
    <input type="text" name="drill_date1" id="drill-date1" class="input-textfield textfield-tiny-date1" value="<?php echo $drill_date1 ?>">/<input type="text" name="drill_date2" id="drill-date2" class="input-textfield textfield-tiny-date2" value="<?php echo $drill_date2 ?>">/<input type="text" name="drill_date3" id="drill-date3" class="input-textfield textfield-tiny-date3" value="<?php echo $drill_date3 ?>">  <input type="text" name="drill_date_time1" id="drill-date-time1" class="input-textfield textfield-tiny-time" value="<?php echo $drill_date_time1 ?>">:<input type="text" name="drill_date_time2" id="drill-date-time2" class="input-textfield textfield-tiny-time" value="<?php echo $drill_date_time2 ?>">
  </P></TD>


  <TD rowspan=3 colspan=2 class="tr11 td106 border-right"><P class="p1 ft12"><input type="text" name="drill_date_init" id="drill-date-init" class="input-textfield textfield-ini" value="<?php echo $drill_date_init ?>"></P></TD>

  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td149"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td8"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td2"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td150"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td151"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td10"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td8"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td1"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td1"><P class="p1 ft12">&nbsp;</P></TD>
</TR>
<TR >
  <TD class="tr2 td189"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td167"><P class="p35 ft39">DIE #</P></TD>
  <TD rowspan=3 colspan=4 class="tr11 td164 border-right border-bottom"><P class="p1 ft12"><input type="text" name="emboss_die_number" id="emboss-die-number" class="input-textfield textfield-stretch" value="<?php echo $emboss_die_number ?>"></P></TD>

  
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td8"><P class="p1 ft12">&nbsp;</P></TD>


 
  <TD class="tr11 td88"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>



  

  
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td229"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td230"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td231"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td232"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td233"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td234"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td230"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td235"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td235"><P class="p1 ft4">&nbsp;</P></TD>
</TR>
<TR >
  <TD class="tr2 td236"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td237"><P class="p1 ft4">&nbsp;</P></TD>
  

  
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td238"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td239"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td240"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td241"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td242"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td243"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td244"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td240"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>


  

 
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td245"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td246"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td247"><P class="p1 ft4">&nbsp;</P></TD>
  <TD rowspan=2 class="tr22 td248"><P class="p57 ft23">NOTES</P></TD>
  <TD class="tr2 td249"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td250"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td246"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td251"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td252"><P class="p1 ft4">&nbsp;</P></TD>
</TR>
<TR>
  <TD class="tr2 td154"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td253"><P class="p1 ft4">&nbsp;</P></TD>


  
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD colspan=5 rowspan=3 class="tr12 td8 border-right "><P class="p23 ft19">
    <input type="text" name="fold_date1" id="fold-date1" class="input-textfield textfield-tiny-date1" value="<?php echo $fold_date1 ?>">/<input type="text" name="fold_date2" id="fold-date2" class="input-textfield textfield-tiny-date2" value="<?php echo $fold_date2 ?>">/<input type="text" name="fold_date3" id="fold-date3" class="input-textfield textfield-tiny-date3" value="<?php echo $fold_date3 ?>">  <input type="text" name="fold_date_time1" id="fold-date-time1" class="input-textfield textfield-tiny-time" value="<?php echo $fold_date_time1 ?>">:<input type="text" name="fold_date_time2" id="fold-date-time2" class="input-textfield textfield-tiny-time" value="<?php echo $fold_date_time2 ?>">    

  </P></TD>


  <TD rowspan=3 colspan=2 class="tr11 td1"><P class="p1 ft12"><input type="text" name="fold_date_init" id="fold-date-init" class="input-textfield textfield-ini" value="<?php echo $fold_date_init ?>"></P></TD>

  
  <TD class="tr11 td88"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD colspan=7 class="tr2 td129 border-right"><P class="p1 ft4">&nbsp;</P></TD>

  
  <TD class="tr2 td65"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td42"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td254"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td255"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td256"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td257"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td258"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td255"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td259"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td260"><P class="p1 ft4">&nbsp;</P></TD>
</TR>
<TR >
  <TD rowspan=2 colspan=4 class="tr11 td163 border-right"><P class="p1 ft12">
    <input type="text" name="emboss_date1" id="emboss-date1" class="input-textfield textfield-tiny-date1" value="<?php echo $emboss_date1 ?>">/<input type="text" name="emboss_date2" id="emboss-date2" class="input-textfield textfield-tiny-date2" value="<?php echo $emboss_date2 ?>">/<input type="text" name="emboss_date3" id="emboss-date3" class="input-textfield textfield-tiny-date3" value="<?php echo $emboss_date3 ?>">  <input type="text" name="emboss_date_time1" id="emboss-date-time1" class="input-textfield textfield-tiny-time" value="<?php echo $emboss_date_time1 ?>">:<input type="text" name="emboss_date_time2" id="emboss-date-time2" class="input-textfield textfield-tiny-time" value="<?php echo $emboss_date_time2 ?>">    
  </P></TD>

  
  <TD rowspan=2 colspan=2 class="tr11 td1 border-right"><P class="p1 ft12"><input type="text" name="emboss_date_init" id="emboss-date-init" class="input-textfield textfield-ini" value="<?php echo $emboss_date_init ?>"></P></TD>

 
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>



 
  <TD class="tr11 td88"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td12"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td129"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td123"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  <TD rowspan=21 colspan=9 class="tr11 td261 border-right" style="border-right:1px solid red; border-bottom: 1px solid red;"><P class="p1 ft12">
      <textarea name="notes" style="width: 97%; height: 197px; color: red; font-size: 15px; border: 0; background: transparent; resize: none;"><?php echo $notes ?></textarea>
  </P></TD>


  
</TR>
<TR >

  
  <TD class="tr23 td20"><P class="p1 ft30">&nbsp;</P></TD>


 
 

  <TD class="tr23 td88"><P class="p1 ft30">&nbsp;</P></TD>
  <TD class="tr23 td20"><P class="p1 ft30">&nbsp;</P></TD>
  <TD colspan=6 class="tr6 td263"><P class="p58 ft41">SHRINK WRAP</P></TD>
  <TD class="tr6 td264"><P class="p1 ft7">&nbsp;</P></TD>
  <TD class="tr6 td265"><P class="p1 ft7">&nbsp;</P></TD>
  <TD class="tr23 td37"><P class="p9 ft27">
    <input type="hidden" name="shrink_wrap_checkbox" value=0 />
    <input type="checkbox" name="shrink_wrap_checkbox" value=1 
    <?php
        if ($shrink_wrap_checkbox) {
            echo "checked";
        }
    ?>
    >    
  </P></TD>
  <TD class="tr23 td148"><P class="p1 ft30">&nbsp;</P></TD>



</TR>
<TR >
  <TD class="tr11 td179"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td124"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td125"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td180"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td41"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td42"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr1 td12"><P class="p1 ft3">&nbsp;</P></TD>
  <TD class="tr2 td48"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td202"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td13"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td203"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td204"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td15"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td48"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td13"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr1 td20"><P class="p1 ft3">&nbsp;</P></TD>
  <TD rowspan=3 colspan=2 class="tr11 td266 border-bottom border-right"><P class="p1 ft12" style="text-align: right;"><input type="text" name="shrink_wrap_dimensions1" id="shrink_wrap-dimensions1" class="input-textfield textfield-short1" value="<?php echo $shrink_wrap_dimensions1 ?>"></P></TD>


  <TD rowspan=2 class="tr12 td206"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=3 rowspan=2 class="tr12 td267"><P class="p59 ft33">pks of</P></TD>
  <TD class="tr11 td206"><P class="p1 ft12">&nbsp;</P></TD>
  <TD rowspan=3 colspan=2 class="tr11 td207 border-bottom border-right"><P class="p1 ft12"><input type="text" name="shrink_wrap_dimensions2" id="shrink_wrap-dimensions2" class="input-textfield textfield-short1" value="<?php echo $shrink_wrap_dimensions2 ?>"></P></TD>

 
  <TD class="tr1 td148"><P class="p1 ft3">&nbsp;</P></TD>

  

</TR>
<TR >
  <TD class="tr2 td123"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td124"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td125"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td126"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td8"><P class="p1 ft12">&nbsp;</P></TD>
  <TD colspan=5 class="tr11 td270"><P class="p60 ft42">COLLATE</P></TD>
  <TD colspan=2 rowspan=2 class="tr23 td42"><P class="p9 ft27">
    <input type="hidden" name="collate_checkbox" value=0 />
    <input type="checkbox" name="collate_checkbox" value=1 
    <?php
        if ($collate_checkbox) {
            echo "checked";
        }
    ?>
    >
  </P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
 

  <TD class="tr11 td145"><P class="p1 ft12">&nbsp;</P></TD>

  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>

  

</TR>
<TR >
  <TD class="tr21 td226"><P class="p1 ft22">&nbsp;</P></TD>
  <TD colspan=2 rowspan=2 class="tr22 td271"><P class="p61 ft23">FOIL</P></TD>
  <TD class="tr21 td272"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td273"><P class="p1 ft22">&nbsp;</P></TD>
  <TD rowspan=2 class="tr11 td37 border-bottom"><P class="p9 ft36">
  <input type="hidden" name="foil_checkbox" value=0 />
    <input type="checkbox" name="foil_checkbox" value=1 
    <?php
        if ($foil_checkbox) {
            echo "checked";
        }
    ?>
    >
  </P></TD>

  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td127"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td42"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>


  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td65"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td218"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>


  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>

  
</TR>
<TR >
  <TD class="tr2 td154"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td133"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td33"><P class="p1 ft4">&nbsp;</P></TD>


  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD colspan=5 rowspan=4 class="tr24 td8 border-right"><P class="p23 ft2">
    <input type="text" name="collate_date1" id="collate-date1" class="input-textfield textfield-tiny-date1" value="<?php echo $collate_date1 ?>">/<input type="text" name="collate_date2" id="collate-date2" class="input-textfield textfield-tiny-date2" value="<?php echo $collate_date2 ?>">/<input type="text" name="collate_date3" id="collate_date3" class="input-textfield textfield-tiny-date3" value="<?php echo $collate_date3 ?>">  <input type="text" name="collate_date_time1" id="collate-date-time1" class="input-textfield textfield-tiny-time" value="<?php echo $collate_date_time1 ?>">:<input type="text" name="collate_date_time2" id="collate-date-time2" class="input-textfield textfield-tiny-time" value="<?php echo $collate_date_time2 ?>">
  </P></TD>

 
  <TD colspan=2 rowspan=4 class="tr11 td1"><P class="p1 ft12"><input type="text" name="collate_date_init" id="collate-date-init" class="input-textfield textfield-ini" value="<?php echo $collate_date_init ?>"></P></TD>
  
  <TD class="tr11 td37"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD colspan=7 rowspan=4 class="tr24 td146 "><P class="p45 ft2">
    <input type="text" name="shrink_wrap_date1" id="shrink-wrap-date1" class="input-textfield textfield-tiny-date1" value="<?php echo $shrink_wrap_date1 ?>">/<input type="text" name="shrink_wrap_date2" id="shrink-wrap-date2" class="input-textfield textfield-tiny-date2" value="<?php echo $shrink_wrap_date2 ?>">/<input type="text" name="shrink_wrap_date3" id="shrink-wrap-date3" class="input-textfield textfield-tiny-date3" value="<?php echo $shrink_wrap_date3 ?>">  <input type="text" name="shrink_wrap_date_time1" id="shrink-wrap-date-time1" class="input-textfield textfield-tiny-time" value="<?php echo $shrink_wrap_date_time1 ?>">:<input type="text" name="shrink_wrap_date_time2" id="shrink-wrap-date-time2" class="input-textfield textfield-tiny-time" value="<?php echo $shrink_wrap_date_time2 ?>">    

  </P></TD>


  <TD rowspan=4 colspan=2 class="tr11 td145 border-right border-left"><P class="p1 ft12">
  <input type="text" name="shrink_wrap_date_init" id="shrink-wrap-date-init" class="input-textfield textfield-ini" value="<?php echo $shrink_wrap_date_init ?>"></P></TD>


  <TD class="tr11 td37"><P class="p1 ft12">&nbsp;</P></TD>
  



  
</TR>
<TR >
  <TD class="tr2 td189"><P class="p1 ft4">&nbsp;</P></TD>
  <TD rowspan=3 class="tr19 td274"><P class="p35 ft15">DIE #</P></TD>
  <TD rowspan=4 colspan=4 class="tr11 td164 border-right  border-bottom"><P class="p1 ft12"><input type="text" name="foil_die_number" id="foil-die-number" class="input-textfield textfield-ini" value="<?php echo $foil_die_number ?>"></P></TD>

  
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>


  <TD class="tr11 td88"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>






  
</TR>
<TR >
  <TD class="tr21 td275"><P class="p1 ft22">&nbsp;</P></TD>

  
  <TD class="tr21 td20"><P class="p1 ft22">&nbsp;</P></TD>
 



  <TD class="tr21 td88"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td20"><P class="p1 ft22">&nbsp;</P></TD>

  




  
</TR>
<TR >
  <TD class="tr9 td275"><P class="p1 ft10">&nbsp;</P></TD>
 
  
  <TD class="tr9 td20"><P class="p1 ft10">&nbsp;</P></TD>


 


  <TD class="tr9 td88"><P class="p1 ft10">&nbsp;</P></TD>
  <TD class="tr9 td20"><P class="p1 ft10">&nbsp;</P></TD>




  

</TR>
<TR >
  <TD class="tr21 td154"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td253"><P class="p1 ft22">&nbsp;</P></TD>

 
  <TD class="tr2 td20"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr21 td66"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td127"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td39"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td128"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td215"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td41"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td66"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td67"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr2 td20"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr21 td129"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td39"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td128"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td47"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td128"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td123"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td128"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td65"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr21 td42"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr2 td148"><P class="p1 ft4">&nbsp;</P></TD>

</TR>
<TR >
  <TD class="tr2 td189"><P class="p1 ft4">&nbsp;</P></TD>
  <TD rowspan=2 class="tr23 td167"><P class="p35 ft28">COLOR</P></TD>
  <TD rowspan=3 colspan=4 class="tr11 td164 border-bottom border-right"><P class="p1 ft12"><input type="text" name="foil_color" id="foil-color" class="input-textfield textfield-ini" value="<?php echo $foil_color ?>"></P></TD>

  
  <TD class="tr11 td12"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td127"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td12"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td129"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td123"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td47"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>

  
</TR>
<TR >
  <TD class="tr2 td189"><P class="p1 ft4">&nbsp;</P></TD>


  
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td166"><P class="p1 ft4">&nbsp;</P></TD>
  <TD colspan=5 rowspan=2 class="tr23 td190"><P class="p35 ft15">SADDLE STITCH</P></TD>
  <TD colspan=2 rowspan=2 class="tr11 td37 border-bottom" ><P class="p9 ft36">
    <input type="hidden" name="saddle_stitch_checkbox" value=0 />
    <input type="checkbox" name="saddle_stitch_checkbox" value=1 
    <?php
        if ($saddle_stitch_checkbox) {
            echo "checked";
        }
    ?>
    >
  </P></TD>

  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td168"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td169"><P class="p1 ft4">&nbsp;</P></TD>
  <TD colspan=3 rowspan=2 class="tr23 td178"><P class="p1 ft15">BUY OUT</P></TD>
  <TD class="tr2 td172"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td170"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td173"><P class="p1 ft4">&nbsp;</P></TD>
  <TD rowspan=2 class="tr11 td37 border-right border-bottom"><P class="p9 ft36">
    <input type="hidden" name="buy_out_checkbox" value=0 />
    <input type="checkbox" name="buy_out_checkbox" value=1 
    <?php
        if ($buy_out_checkbox) {
            echo "checked";
        }
    ?>
    >
  </P></TD>

  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>

  
</TR>
<TR >
  <TD class="tr2 td154"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td253"><P class="p1 ft4">&nbsp;</P></TD>
 
  
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td156"><P class="p1 ft4">&nbsp;</P></TD>

 
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td137"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td30"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td175"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td138"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td159"><P class="p1 ft4">&nbsp;</P></TD>
 

  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
 

</TR>
<TR >
  <TD colspan=4 rowspan=3 class="tr13 td163 border-right"><P class="p38 ft26">
    <input type="text" name="foil_date1" id="foil-date1" class="input-textfield textfield-tiny-date1" value="<?php echo $foil_date1 ?>">/<input type="text" name="foil_date2" id="foil-date2" class="input-textfield textfield-tiny-date2" value="<?php echo $foil_date2 ?>">/<input type="text" name="foil_date3" id="foil-date3" class="input-textfield textfield-tiny-date3" value="<?php echo $foil_date3 ?>">  <input type="text" name="foil_date_time1" id="foil-date-time1" class="input-textfield textfield-tiny-time" value="<?php echo $foil_date_time1 ?>">:<input type="text" name="foil_date_time2" id="foil-date-time2" class="input-textfield textfield-tiny-time" value="<?php echo $foil_date_time2 ?>">    
  </P></TD>

  
  <TD rowspan=3 colspan=2 class="tr12 td1 border-right"><P class="p1 ft1"><input type="text" name="foil_date_init" id="foil-date-init" class="input-textfield textfield-ini" value="<?php echo $foil_date_init ?>"></P></TD>
 
  <TD class="tr12 td20"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr23 td156"><P class="p1 ft30">&nbsp;</P></TD>
  <TD colspan=5 class="tr23 td190"><P class="p35 ft15">PERFECT BIND</P></TD>
  <TD colspan=2 class="tr23 td42 border-bottom"><P class="p9 ft27">
    <input type="hidden" name="perfect_bind_checkbox" value=0 />
    <input type="checkbox" name="perfect_bind_checkbox" value=1 
    <?php
        if ($perfect_bind_checkbox) {
            echo "checked";
        }
    ?>
    >
     </P></TD>
  <TD class="tr12 td20"><P class="p1 ft1">&nbsp;</P></TD>
  <TD rowspan=4 colspan=9 class="tr12 td146 border-bottom border-right"><P class="p1 ft1">
<textarea name="buy_out_text" style="width: 96%; height: 39px; color: red; font-size: 15px; border: 0; background: transparent; resize: none;"><?php echo $buy_out_text ?></textarea>
  </P></TD>

 
  <TD class="tr12 td148"><P class="p1 ft1">&nbsp;</P></TD>


</TR>
<TR >
 
  <TD class="tr10 td20"><P class="p1 ft11">&nbsp;</P></TD>
  <TD class="tr10 td276"><P class="p1 ft11">&nbsp;</P></TD>
  <TD colspan=5 rowspan=3 class="tr23 td190"><P class="p35 ft15"><NOBR>WIR-O /</NOBR> PLASTICOIL</P></TD>
  <TD colspan=2 rowspan=3 class="tr11 td37 border-bottom"><P class="p9 ft36">
    <input type="hidden" name="wir_o_plasticoil_checkbox" value=0 />
    <input type="checkbox" name="wir_o_plasticoil_checkbox" value=1 
    <?php
        if ($wir_o_plasticoil_checkbox) {
            echo "checked";
        }
    ?>
    >
  </P></TD>

  <TD class="tr10 td20"><P class="p1 ft11">&nbsp;</P></TD>
 

  
  <TD class="tr10 td148"><P class="p1 ft11">&nbsp;</P></TD>

 
</TR>
<TR>
 
 
 
  <TD class="tr21 td20"><P class="p1 ft22">&nbsp;</P></TD>
  <TD class="tr9 td166"><P class="p1 ft10">&nbsp;</P></TD>
  <TD class="tr21 td20"><P class="p1 ft22">&nbsp;</P></TD>
 

 
  <TD class="tr21 td148"><P class="p1 ft22">&nbsp;</P></TD>

  
</TR>
<TR>
  <TD class="tr2 td179"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td124"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td125"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td180"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td42"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td156"><P class="p1 ft4">&nbsp;</P></TD>
  

   
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>


  
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>


 
</TR>
<TR >
  <TD class="tr11 td147"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td150"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td164"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td144"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td1"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td1"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD rowspan=2 colspan=5 class="tr20 td8  border-right"><P class="p23 ft2">
    <input type="text" name="binding_date1" id="binding-date1" class="input-textfield textfield-tiny-date1" value="<?php echo $binding_date1 ?>">/<input type="text" name="binding_date2" id="binding-date2" class="input-textfield textfield-tiny-date2" value="<?php echo $binding_date2 ?>">/<input type="text" name="binding_date3" id="binding-date3" class="input-textfield textfield-tiny-date3" value="<?php echo $binding_date3 ?>">  <input type="text" name="binding_date_time1" id="binding-date-time1" class="input-textfield textfield-tiny-time" value="<?php echo $binding_date_time1 ?>">:<input type="text" name="binding_date_time2" id="binding-date-time2" class="input-textfield textfield-tiny-time" value="<?php echo $binding_date_time2 ?>">    
  </P></TD>



  <TD rowspan=2 colspan=3 class="tr11 td1 border-right"><P class="p1 ft12"><input type="text" name="binding_date_init" id="binding-date-init" class="input-textfield textfield-ini" value="<?php echo $binding_date_init ?>"></P></TD>

  
  <TD class="tr11 td12"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td129"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD rowspan=2 class="tr20 td145"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=3 class="tr2 td277"><P class="p1 ft4">&nbsp;</P></TD>
  <TD rowspan=2 class="tr20 td145"><P class="p1 ft1">&nbsp;</P></TD>
  <TD colspan=2 class="tr2 td277"><P class="p1 ft4">&nbsp;</P></TD>
  <TD rowspan=2 class="tr20 td148"><P class="p1 ft1">&nbsp;</P></TD>


 
</TR>
<TR >
  <TD class="tr12 td147"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td150"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td164"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td144"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td1"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td1"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr12 td20"><P class="p1 ft1">&nbsp;</P></TD>

 

  
  <TD class="tr12 td20"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr23 td129"><P class="p62 ft40">QUOTE</P></TD>
  <TD class="tr23 td67"><P class="p1 ft30">&nbsp;</P></TD>
  <TD colspan=3 class="tr23 td278"><P class="p53 ft33">FIN.</P></TD>
  <TD colspan=2 class="tr23 td278"><P class="p63 ft40">PROOF</P></TD>
 

  
</TR>
<TR >
  <TD class="tr11 td147"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td150"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td164"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td144"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td1"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td1"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td127"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td39"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td128"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td215"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td41"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td66"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr2 td67"><P class="p1 ft4">&nbsp;</P></TD>
  <TD class="tr11 td20"><P class="p1 ft12">&nbsp;</P></TD>
  <TD colspan=2 rowspan=2 class="tr11 td146 border-right border-bottom"><P class="p1 ft12"><input type="text" name="quote" id="quote" class="input-textfield textfield-ini" value="<?php echo $quote ?>"></P></TD>

  
  <TD class="tr11 td145"><P class="p1 ft12">&nbsp;</P></TD>
  <TD colspan=3 rowspan=2 class="tr11 td106 border-right border-bottom"><P class="p1 ft12"><input type="text" name="fin" id="fin" class="input-textfield textfield-ini" value="<?php echo $fin ?>"></P></TD>

  
  <TD class="tr11 td145"><P class="p1 ft12">&nbsp;</P></TD>
  <TD colspan=2 rowspan=2 class="tr11 td106 border-right border-bottom"><P class="p1 ft12"><input type="text" name="proof" id="proof" class="input-textfield textfield-ini" value="<?php echo $proof ?>"></P></TD>

 
  <TD class="tr11 td148"><P class="p1 ft12">&nbsp;</P></TD>
  

 
</TR>
<TR >
  <TD class="tr20 td147"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr20 td150"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr20 td164"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr20 td144"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr20 td1"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr20 td1"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr20 td12"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr20 td8"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr20 td18"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr20 td3"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr20 td145"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr20 td7"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr20 td1"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr20 td8"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr20 td3"><P class="p1 ft1">&nbsp;</P></TD>
  <TD class="tr20 td20"><P class="p1 ft1">&nbsp;</P></TD>
  


  <TD class="tr20 td145"><P class="p1 ft1">&nbsp;</P></TD>
  

  
  <TD class="tr20 td145"><P class="p1 ft1">&nbsp;</P></TD>


  
  <TD class="tr20 td148"><P class="p1 ft1">&nbsp;</P></TD>


  
</TR>
</TABLE>
</DIV>
<!-- #include virtual="/convert-pdf-to-html/includes/pdf-to-word-body-tag-between-content.htm" -->
<? 
    $product_num++;
    } // end of foreach $products 
?>
<input type="submit" class='no-print'>
</form>
</BODY>
</HTML>
