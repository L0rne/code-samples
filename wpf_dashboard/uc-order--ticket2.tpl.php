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

body {margin-top: 0px;margin-left: 0px;}

#page_1 {position:relative; overflow: hidden;margin: 44px 0px 72px 49px;padding: 0px;border: none;width: 697px;}

#page_1 #p1dimg1 {position:absolute;top:195px;left:0px;z-index:-1;width:697px;height:637px;}
#page_1 #p1dimg1 #p1img1 {width:697px;height:637px;}



#page_1 {

}


.input{color: black !important; margin-left: 5px;}
.input-textfield {
  border: 0;
    background: transparent;
    color: black !important;
    font-size: 30pt !important;
    line-height: 23px !important;

}
.testr{border: 1px solid red;}
.testb{border: 1px solid blue;}
.testg{border: 1px solid green;}
.debug td {border: 1px dashed green;}

.vertical {
  transform: rotate(-90deg);
  transform-origin: left top 0;
  float: left;
}

#press td {
  border-top: #548dd4 1px solid;

}

.letter-page {
  width: 8.5in;
  height: 11in;


}

.form-image {
  width: 8.5in;
  height: 10in;
  position: absolute;
  top: 35px;
  left: 18px;
  z-index: -1;

}

#proof-ok {
  width: 300px;
  position: absolute;
  top: 65px;
  left: 633px;

}

#job-due {
  width: 300px;
  position: absolute;
  top: 155px;
  left: 633px;

}



#date-in {
  width: 300px;
  position: absolute;
  top: 65px;
  left: 150px;

}

#due-date {
  width: 300px;
  position: absolute;
  top: 110px;
  left: 150px;
}


#due-date-guaranteed {
  font: bold 16px 'Arial Black';
  color: #ff0000;
  line-height: 17px;
  position: absolute;
  top: 140px;
  left: 152px;
  width: 30px;

}


#ink {
  width: 300px;
  position: absolute;
  top: 205px;
  left: 350px;
  font-size: 10pt;
  word-wrap: break-word;
}

 #job-type-WnT {
  font: bold 14px 'Arial Black';
  color: #ff0000;
  line-height: 14px;
  width: 20px;
  position: absolute;
  top: 209px;
  left: 719px;
  word-wrap: break-word;
}




 #job-type-1S {
  font: bold 14px 'Arial Black';
  color: #ff0000;
  line-height: 14px;
  width: 20px;
  position: absolute;
  top: 209px;
  left: 682px;
  word-wrap: break-word;
}

 #job-type-SW {
  font: bold 14px 'Arial Black';
  color: #ff0000;
  line-height: 14px;
  width: 20px;
  position: absolute;
  top: 209px;
  left: 757px;
  word-wrap: break-word;
}





#job-number {
  width: 250px;
  position: absolute;
  top: 198px;
  left: 80px;
  font-size: 30pt;

}

#job-number-field {
    width: 250px;

}


#quantity {
  width: 250px;
  position: absolute;
  top: 270px;
  left: 80px;
  font-size: 30pt;
}

#description {
  width: 300px;
  position: absolute;
  top: 340px;
  left: 30px;
  font-size: 15pt;
  word-wrap: break-word;

}



#stock-container {
  width: 8.25in;
  height: 200px;
  position: absolute;
  top: 390px;
  padding-top: 20px;
  padding-left: 30px;

}

#parent-sheet {


}
#parent-size {


}
#paper-stock {


}



#bindery-buyouts-container {
  width: 8.25in;
  height: 130px;
  position: relative;
  top: 555px;
}


#paid-rush {
  font: bold 80px 'Arial Black';
  color: #ff0000;
  opacity: 0.5;
  line-height: 80px;
  position: absolute;
  top: 718px;
  left: 60px;
  width: 30px;

}

#days-9 {
  font: bold 30px 'Arial Black';
  color: #ff0000;
  line-height: 30px;
  position: absolute;
  top: 758px;
  left: 152px;
  width: 30px;
}
#days-8 {
  font: bold 30px 'Arial Black';
  color: #ff0000;
  line-height: 30px;
  position: absolute;
  top: 758px;
  left: 209px;
  width: 30px;
}
#days-7 {
  font: bold 30px 'Arial Black';
  color: #ff0000;
  line-height: 30px;
  position: absolute;
  top: 758px;
  left: 268px;
  width: 30px;
}
#days-6 {
  font: bold 30px 'Arial Black';
  color: #ff0000;
  line-height: 30px;
  position: absolute;
  top: 758px;
  left: 324px;
  width: 30px;
}
#days-5 {
  font: bold 30px 'Arial Black';
  color: #ff0000;
  line-height: 30px;
  position: absolute;
  top: 758px;
  left: 383px;
  width: 30px;
}
#days-4 {
  font: bold 30px 'Arial Black';
  color: #ff0000;
  line-height: 30px;
  position: absolute;
  top: 758px;
  left: 440px;
  width: 30px;
}
#days-3 {
  font: bold 30px 'Arial Black';
  color: #ff0000;
  line-height: 30px;
  position: absolute;
  top: 758px;
  left: 498px;
  width: 30px;

}
#days-2 {
  font: bold 30px 'Arial Black';
  color: #ff0000;
  line-height: 30px;
  position: absolute;
  top: 758px;
  left: 555px;
  width: 30px;
}

#days-1 {
  font: bold 80px 'Arial Black';
  color: #ff0000;
  opacity: 0.5;
  line-height: 80px;
  position: absolute;
  top: 718px;
  left: 615px;
  width: 30px;
}

#days-0 {
  font: bold 80px 'Arial Black';
  color: #ff0000;
  opacity: 0.5;
  line-height: 80px;
  position: absolute;
  top: 718px;
  left: 707px;
  width: 30px;
}



#days2-6 {
  font: bold 30px 'Arial Black';
  color: #ff0000;
  line-height: 30px;
  position: absolute;
  top: 758px;
  left: 324px;
  width: 30px;
}
#days2-5 {
  font: bold 30px 'Arial Black';
  color: #ff0000;
  line-height: 30px;
  position: absolute;
  top: 758px;
  left: 383px;
  width: 30px;
}
#days2-4 {
  font: bold 30px 'Arial Black';
  color: #ff0000;
  line-height: 30px;
  position: absolute;
  top: 758px;
  left: 440px;
  width: 30px;
}
#days2-3 {
  font: bold 30px 'Arial Black';
  color: #ff0000;
  line-height: 30px;
  position: absolute;
  top: 758px;
  left: 498px;
  width: 30px;
}
#days2-2 {
  font: bold 30px 'Arial Black';
  color: #ff0000;
  line-height: 30px;
  position: absolute;
  top: 758px;
  left: 555px;
  width: 30px;
}

#days2- {
  font: bold 30px 'Arial Black';
  color: #ff0000;
  line-height: 30px;
  position: absolute;
  top: 758px;
  left: 555px;
  width: 30px;
}


#perf {
  font: bold 20px 'Arial Black';
  color: #ff0000;
  line-height: 20px;
  position: absolute;
  top: 610px;
  left: 28px;
}
#drill {
  font: bold 20px 'Arial Black';
  color: #ff0000;
  line-height: 20px;
  position: absolute;
  top: 657px;
  left: 28px;
}
#foil {
  font: bold 20px 'Arial Black';
  color: #ff0000;
  line-height: 20px;
  position: absolute;
  top: 610px;
  left: 213px; 
}
#emboss {
  font: bold 20px 'Arial Black';
  color: #ff0000;
  line-height: 20px;
  position: absolute;
  top: 634px;
  left: 213px;
}
#die-cut {
  font: bold 20px 'Arial Black';
  color: #ff0000;
  line-height: 20px;
  position: absolute;
  top: 657px;
  left: 213px; 
}
#numbering {
  font: bold 20px 'Arial Black';
  color: #ff0000;
  line-height: 20px;
  position: absolute;
  top: 682px;
  left: 213px; 
}
#fold {
  font: bold 20px 'Arial Black';
  color: #ff0000;
  line-height: 20px;
  position: absolute;
  top: 610px;
  left: 398px; 
}
#collate {
  font: bold 20px 'Arial Black';
  color: #ff0000;
  line-height: 20px;
  position: absolute;
  top: 634px;
  left: 398px; 
}
#stitch {
  font: bold 20px 'Arial Black';
  color: #ff0000;
  line-height: 20px;
  position: absolute;
  top: 657px;
  left: 398px; 
}
#perfect-bind {
  font: bold 20px 'Arial Black';
  color: #ff0000;
  line-height: 20px;
  position: absolute;
  top: 682px;
  left: 398px; 
}
#laminate {
  font: bold 20px 'Arial Black';
  color: #ff0000;
  line-height: 20px;
  position: absolute;
  top: 610px;
  left: 583px;  
}
#glue-pad {
  font: bold 20px 'Arial Black';
  color: #ff0000;
  line-height: 20px;
  position: absolute;
  top: 634px;
  left: 583px;
}
#shrink-wrap {
  font: bold 20px 'Arial Black';
  color: #ff0000;
  line-height: 20px;
  position: absolute;
  top: 657px;
  left: 583px;
}



</STYLE>
</HEAD>

<BODY>


<? 
// one page for each product
$product_num = 1;
foreach ($order->products as $pid =>$product) {
  
  $order_number = $order->order_id . "-" . $product_num;

  $job_number = "&nbsp;";
 
  $product_num++;
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
  //dpm($selected_turnaround, "selected_turnaround");



  // calculate REQUESTED DUE DATE AT ENTRY from order created date
  // and the turnaround option chosen for the product
  $due_date_guaranteed = FALSE;
  $paid_rush = FALSE;

  switch ($selected_turnaround_oid) {
    case 59: // Standard 5-Day Turnaround
      $days = 5;
      $hours = 120;
      $seconds = 432000;
      $created = date("F j, Y", $order->created);
      //dpm($created, "created");
      $job_due = date("F j, Y", $order->created + $seconds);
      //dpm($due_date, "due Date");
      break;
    case 48: // Standard 4-5 Day Turnaround
      $days = 4;
      $hours = 96;
      $seconds = 345600;
      $days2 = 5;
      $hours2 = 120;
      $seconds2 = 432000;
      $created = date("F j, Y", $order->created);
      //dpm($created, "created");
      $due_date = date("F j, Y", $order->created + $seconds);
      $due_date2 = date("F j, Y", $order->created + $seconds2);
      $job_due = $due_date2;
      //dpm($due_date, "due Date");
      break;
    case 60: // 4-Day Turnaround
      $days = 4;
      $hours = 96;
      $seconds = 345600;
      $created = date("F j, Y", $order->created);
      //dpm($created, "created");
      $job_due = date("F j, Y", $order->created + $seconds);
      //dpm($due_date, "due Date");
      break;
    case 49: // 3-Day Turnaround
      $days = 3;
      $hours = 72;
      $seconds = 259200;
      $created = date("F j, Y", $order->created);
      //dpm($created, "created");
      $job_due = date("F j, Y", $order->created + $seconds);
      //dpm($due_date, "due Date");
      break;
    case 130: // 2-4 Day Turnaround
      $days = 2;
      $hours = 48;
      $seconds = 172800; 
      $days2 = 4;
      $hours2 = 96;
      $seconds2 = 345600;
      $created = date("F j, Y", $order->created);
      //dpm($created, "created");
      $due_date = date("F j, Y", $order->created + $seconds);
      $due_date2 = date("F j, Y", $order->created + $seconds2);
      $job_due = $due_date2;
      //dpm($due_date, "due Date");
      break;
    case 126: // 2-3 Day Turnaround
      $days = 2;
      $hours = 48;
      $seconds = 172800; 
      $days2 = 3;     
      $hours2 = 72;
      $seconds2 = 259200;
      $created = date("F j, Y", $order->created);
      //dpm($created, "created");
      $due_date = date("F j, Y", $order->created + $seconds);
      $due_date2 = date("F j, Y", $order->created + $seconds2);
      $job_due = $due_date2;
      //dpm($due_date, "due Date");
      break;
    case 127: // 2-Day Guaranteed
      $paid_rush = TRUE;
      $days = 2;
      $hours = 48;
      $seconds = 172800;
      $created = date("F j, Y", $order->created);
      //dpm($created, "created");
      $job_due = date("F j, Y", $order->created + $seconds);
      //dpm($due_date, "due Date");
      $due_date_guaranteed = TRUE;
      break;
    case 50: // 2-Day Turnaround
      $days = 2;
      $hours = 48;
      $seconds = 172800;
      $created = date("F j, Y", $order->created);
      //dpm($created, "created");
      $job_due = date("F j, Y", $order->created + $seconds);
      //dpm($due_date, "due Date");      
      break;
    case 51: // Next Day Rush
      $paid_rush = TRUE;
      $due_next_day = TRUE;
      $days = 1;
      $hours = 24;
      $seconds = 86400;
      $created = date("F j, Y", $order->created);
      //dpm($created, "created");
      $job_due = date("F j, Y", $order->created + $seconds);
      //dpm($due_date, "due Date");
      $due_date_guaranteed = TRUE;
      break;
    case 52: // Same Day (Proof Approval By 9 A.M. MST)
      $paid_rush = TRUE;
      $days = 0;
      $due_today = TRUE;
      $hours = 0;
      $job_due = date("F j, Y", $order->created);
      $due_date_guaranteed = TRUE;
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

  $job_type_WnT_checked = "";
  $job_type_1S_checked = "";
  $job_type_SW_checked = "";

  $paper_stock_type = "&nbsp;";
  
  switch ($selected_color_oid) {
    case 9: // 4/0 Full Color on Outside and Pockets
      $ink_side_1 = "Full Color on Outside and Pockets";
      $ink_side_2 = "No Color Inside";
      $color_option = "4/0";
      $paper_stock_type = "C1";
      $color_number = 4;
      $up = 1;
      $parent_size = "20.5x35";
      $press_size = "17.5x20.5";
      $job_type = "1S";
      $job_type_css = "1S";
      $job_type_1S_checked = "checked";
      break;
    case 10: // 4/4 Full Color Outside and Inside
      $ink_side_1 = "Full Color on Outside and Pockets";
      $ink_side_2 = "Full Color Inside";
      $color_option = "4/4";
      $paper_stock_type = "C2";
      $color_number = 4;  
      $up = 2;
      $parent_size = "35x41";
      $press_size = "20.5x35";
      $job_type = "W&T";
      $job_type_css = "WnT";
      $job_type_WnT_checked = "checked";
      break;
    case 14: // 4/1 Full Color on Outside and Single Color on Inside
      $ink_side_1 = "Full Color on Outside and Pockets";
      $ink_side_2 = "Single Color Inside";
      $color_option = "4/1";    
      $color_number = 4;
      $up = 2;
      $parent_size = "35x41";
      $press_size = "20.5x35";
      $job_type = "W&T";
      $job_type_css = "WnT";
      $job_type_WnT_checked = "checked";
      break;
    case 15: // 5/0 Full Color Plus One PMS on Outside
      $ink_side_1 = "Full Color Plus One PMS on Outside";
      $ink_side_2 = "No Color Inside";
      $color_option = "5/0";
      $color_number = 5;
      $up = 1; 
      $parent_size = "20.5x35";
      $press_size = "17.5x20.5";
      $job_type = "1S";
      $job_type_css = "1S";
      $job_type_1S_checked = "checked";
      break;
    case 14: // 1/0 Single Color on Outside and Pockets
      $ink_side_1 = "Single Color on Outside and Pockets";
      $ink_side_2 = "No Color Inside";
      $color_option = "1/0";
      $color_number = 1;
      $up = 1; 
      $parent_size = "20.5x35";
      $press_size = "17.5x20.5";
      $job_type = "1S";
      $job_type_css = "1S";
      $job_type_1S_checked = "checked";
      break;     
    case 110: // 1/1 Single Color Outside and Inside
      $ink_side_1 = "Single Color Outside";
      $ink_side_2 = "Single Color Inside";
      $color_option = "1/1"; 
      $color_number = 1; 
      $up = 2;  
      $parent_size = "35x41";
      $press_size = "20.5x35";
      $job_type = "W&T";
      $job_type_css = "WnT";
      $job_type_WnT_checked = "checked";
      break;    
    case 111: // 2/0 Two-Colors on Outside and Pockets
      $ink_side_1 = "Two-Colors on Outside and Pockets";
      $ink_side_2 = "No Color Inside";
      $color_option = "2/0"; 
      $color_number = 2; 
      $up = 1;  
      $parent_size = "20.5x35";
      $press_size = "17.5x20.5";
      $job_type = "1S";
      $job_type_css = "1S";
      $job_type_1S_checked = "checked";
      break;
    case 112: // 2/2 Two-Colors on Outside and Inside
      $ink_side_1 = "Two-Colors Outside";
      $ink_side_2 = "Two-Colors Inside";
      $color_option = "2/2";  
      $color_number = 2;
      $up = 2; 
      $parent_size = "35x41";
      $press_size = "20.5x35";
      $job_type = "W&T";
      $job_type_css = "WnT";
      $job_type_WnT_checked = "checked";
      break;  
    case 129: // 4/0 Full Color On Both Sides 
      $ink_side_1 = "Full Color Outside";
      $ink_side_2 = "Full Color Inside";
      $color_option = "4/0"; 
      $paper_stock_type = "C1";
      $color_number = 4;
      $up = 1;
      $parent_size = "20.5x35";
      $press_size = "17.5x20.5";
      $job_type = "1S";
      $job_type_css = "1S";
      $job_type_1S_checked = "checked";
      break;  
    case 128: // 4/0 Full Color On One Side 
      $ink_side_1 = "Full Color Outside";
      $ink_side_2 = "No Color Inside";
      $color_option = "4/0"; 
       $paper_stock_type = "C1";  
      $color_number = 4;
      $up = 1;
      $parent_size = "20.5x35";
      $press_size = "17.5x20.5";
      $job_type = "1S";
      $job_type_css = "1S";
      $job_type_1S_checked = "checked";
      break;  
  }


  //$paper_stock_type = "&nbsp;";
  if (strpos($paper_stock, "C1S")) {
    $paper_stock_type = "C1";
  }
  if (strpos($paper_stock, "C2S")) {
    $paper_stock_type = "C2";
  }
  //dpm($paper_stock_type, "paper_stock_type");


  // #up 
  $up = "&nbsp;";
  // Up
  // single sided sheets will be running 1-up 
  // while double sided will run 2-up

  if ($paper_stock_type == "C1") {
    $up = 1;
  }
  if ($paper_stock_type == "C2") {
    $up = 2;
  }
  //dpm($up, "up");


    // Job type

 /*
  1S          4/0, one side
  W&T         4/4, two sided, work and turn
  Sheetwize   4/4, images different on each side.  Mostly Booklets.
  */

  // not sure when sheetwize will be

  // See above


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
  $out = 1;


  // Setup
  // For setup I’ll include 40 sheets per color

  $setup_sheets = $color_number * 40;


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

  $parent_sheet = "&nbsp;";
  $parent_sheet = ceil($press_sheet / $up);
  //dpm($parent_sheet, "parent_sheet");


  // Count

  // I'm adding the extra sheets here, because I'm not sure 
  // where else to put it

  $count = ceil($press_sheet + $extra_sheets);





    // Coating Option Data

  $coating_aid = 8;
  $coating_label = $attributes_full[$coating_aid]->label;
    $coating_oid = key($product->data['attributes'][$coating_label]);

    $coating = "&nbsp;";
    if (isset($product->data['attributes'][$coating_label][$coating_oid])) {
    $coating = $product->data['attributes'][$coating_label][$coating_oid];
    $ink .= "<br />" . $coating;
    } 

  //dpm($coating, "coating");
  //dpm($ink, "ink");
  $ink2 = $ink;

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

  $shipping_customer_pick_up = FALSE;
  $shipping_ups = FALSE;
  $shipping_ups_type = NULL;

  foreach ($line_items as $line_item) {

    if ($line_item['type'] == "shipping") {
      switch ($line_item['title']) {
        case "Customer Pick-up": 
          $shipping_customer_pick_up = TRUE;
          break; 
        case strstr($line_item['title'],"UPS"): 
          $shipping_ups = TRUE;
          $shipping_ups_type = $line_item['title'];
          break; 
      }
    }



  }


  // Paper Option Data

  /*
    100 Cover         103
    12pt Gloss C2S    4
    14pt Gloss C2S    3
    80 Cover          102
    Self               101

  */

  $paper_aid = 1;
  $paper_label = $attributes_full[$paper_aid]->label;
  $paper_oid = key($product->data['attributes'][$paper_label]);
  //dpm($paper_oid, "paper oid");
  $paper_weight = $product->data['attributes'][$paper_label][$paper_oid];
  $paper_stock = $paper_weight;

  if (!isset($paper_stock)) {
    // Default paper stock
    $paper_stock = "14PT WT C2S";
  }

  //$paper_stock_type = "&nbsp;";
  if (strpos($paper_stock, "C1S")) {
    $paper_stock_type = "C1";
  }
  if (strpos($paper_stock, "C2S")) {
    $paper_stock_type = "C2";
  }


  // if there is no $paper_label set, use the value from the product node field
  if (!isset($product->data['attributes'][$paper_label])) {
      //$paper_weight = $product_orig->field_paper_weight['und'][0]['value'];
  }




    // Pocket slits ("BC Slits")

  //dpm($attributes_full, "attributes full");
    $pocket_right_aid = 16;
    $pocket_right_label = $attributes_full[$pocket_right_aid]->label;
    $pocket_right_oid = key($product->data['attributes'][$pocket_right_label]);
    $pocket_right = $product->data['attributes'][$pocket_right_label][$pocket_right_oid];



    $pocket_left_aid = 7;
    $pocket_left_label = $attributes_full[$pocket_left_aid]->label;
    $pocket_left_oid = key($product->data['attributes'][$pocket_left_label]);
    $pocket_left = $product->data['attributes'][$pocket_left_label][$pocket_left_oid];



    // Glue
    // only X-11 gets glued

    if ($product_orig->nid == 248) {
        $glue = "x";
    } else {
        $glue = "&nbsp;";
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





  $proof_ok = "";
  if ($final_proof_date1) {
    $proof_ok = $final_proof_date1 . " / " . $final_proof_date2 . " / " . $final_proof_date3  . "  " . $final_proof_time1 . " : " . $final_proof_time2;
  }

?>



<div class="letter-page">

  <div id="proof-ok">
  <?php echo $proof_ok ?>
  </div>

  <div id="job-due">
  <?php echo $job_due ?>
  </div>

  <div id="date-in">
  <?php echo $date_in ?>
  </div>

  <div id="due-date">
  <?php echo $due_date ?>

  </div>

<div id="due-date-guaranteed">
  <?php
    if ($due_date_guaranteed) {
      echo "x";
    } else {
      echo "&nbsp;";
    }

  ?>
  </div>

  <div id="job-number">
  <input type="text" name="job_number" id="job-number-field" class="input-textfield" value="<?php echo $job_number ?>">
  </div>

  <div id="quantity">
  <?php echo $product_qty ?>
  </div>

  <div id="description">
  <?php echo $product_title ?>  
  </div>

  <div id="job-type-WnT">
  <input type="checkbox" name="job-type" value="job-type-WnT" <?php echo $job_type_WnT_checked ?>>
  </div>

  <div id="job-type-1S">
  <input type="checkbox" name="job-type" value="job-type-1S" <?php echo $job_type_1S_checked ?>>
  </div>

  <div id="job-type-SW">
  <input type="checkbox" name="job-type" value="job-type-SW" <?php echo $job_type_WnT_SW_checked ?>>
  </div>


  <div id="ink">
  
   <? //dpm($ink2, "ink 2"); ?>
  <?php echo $ink2 ?>
  </div>


  
  <div id="stock-container">
    <div id="parent-sheet" >
      <strong>Parent Sheet:</strong> <?php echo $parent_sheet ?>
    </div>
    <div id="parent-size" >
      <strong>Parent Size:</strong> <?php echo $parent_size ?>
    </div>
    <div id="paper-stock" >
      <strong>Paper Stock:</strong> <?php echo $paper_stock ?>
    </div>
  </div>

  

  <div id="bindery-buyouts-container">

  </div>


  <div id="paid-rush">
  <?php
    if ($paid_rush) {
      echo "x";
    }
  ?>  
  </div>


  <div id="days2-<?php echo $days2 ?>">
  <?php
    if ($days2) {
      echo "x";
    }
  ?>
  </div>

  <div id="days-<?php echo $days ?>">x</div>



  <div id="perf">
  <?php
    if ($score_perf) {
      echo "x";
    }
  ?>
  </div>

  <div id="drill">
  <?php
    if ($drill) {
      echo "x";
    }
  ?>
  </div>

  <div id="foil">
  <?php
    if ($foil_checkbox) {
      echo "x";
    }
  ?>
  </div>

  <div id="emboss">
  <?php
    if ($emboss) {
      echo "x";
    }
  ?>
  </div>


  <div id="die-cut">
  <?php
    if ($die_cut) {
      echo "x";
    }
  ?>
  </div>

  <div id="numbering">
  <?php
    if ($numbering) {
      echo "x";
    }
  ?>
  </div>

  <div id="fold">
  <?php
    if ($c_fold_roll_fold || $z_fold_accordion_fold || $double_paralell_fold || $right_angle_fold || $gate_fold) {
      echo "x";
    }
  ?>
  </div>

  <div id="collate">
  <?php
    if ($collate_checkbox) {
      echo "x";
    }
  ?>
  </div>


  <div id="stitch">
  <?php
    if ($saddle_stitch_checkbox) {
      echo "x";
    }
  ?>
  </div>

  <div id="perfect-bind">
  <?php
    if ($perfect_bind_checkbox) {
      echo "x";
    }
  ?>
  </div>

  <div id="laminate">
  <?php
    if ($flush_cut_laminate || $edge_seal_laminate || $one_point_five_mil || $three_mil || $five_mil) {
      echo "x";
    }
  ?>
  </div>

  <div id="glue-pad">
  <?php
    if ($glue) {
      echo "x";
    }
  ?>
  </div>


  <div id="shrink-wrap">
  <?php
    if ($shrink_wrap_checkbox) {
      echo "x";
    }
  ?>
  </div>




</div>

<div class="form-image">
<image src="http://devel.wholesalepocketfolders.com/sites/all/themes/stock/images/ticket2.png">
</div>


<? } // end of foreach $products ?>
</BODY>
</HTML>
