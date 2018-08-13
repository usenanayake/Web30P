<?php

if(!($this->session->userdata('loggedin'))){
    redirect('Users/Login');
}




?>



<html>
<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<style>
body {
    
    background-color: #adad85;
}
</style>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><b style="color: red">Welcome <?php echo $this->session->userdata('fname') ?></b> </a>
        </div>

        <ul class="nav navbar-nav navbar-right">

            <li><a href="<?php echo base_url().'index.php/Login/LogoutUser/'; ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
    </div>
</nav>
<div class="container">
 <br /><br />
 
 <div class="col-lg-12 col-md-12">
  <div class="table-responsive">
   <h3 align="center"><b style="color: #666600">Add Items To Your Cart</b></h3><br />
   <?php
   foreach($product as $row)
   {
    echo '
    <div class="col-md-4" style="padding:16px; background-color:#d9b18c; border:8px solid #ccc; margin-bottom:16px; height:400px" align="center">
     <img src="'.base_url().'template/img/'.$row->product_image.'" class="img-thumbnail" /><br />
     <h3 class="text-danger">'.$row->product_name.'</h3>
     <h4>Rs.'.$row->product_price.'</h4>
     
     <input type="text" name="quantity" placeholder="Enter Quantity" class="form-control quantity" id="'.$row->product_id.'" /><br />
     <button type="button" name="add_cart" class="btn btn-success add_cart" data-productname="'.$row->product_name.'" data-price="'.$row->product_price.'" data-productid="'.$row->product_id.'" /><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</button>
    </div>
    ';
   }
   ?>
      
  </div>
 </div>
 <div class="col-lg-12 col-md-12" >
  <div id="cart_details">
   <h3 align="center"><b>Cart is Empty</b></h3>
  </div>
 </div>
 
</div>
<div style="text-align: center; font-size: 30px; color: blue; font-family:'Open Sans','Helvetica Neue',Arial,sans-serif ">
  <a href="<?php echo base_url() ?>index.php/Register/questions">Special orders</a>
</div>

</body>
</html>
<script>
$(document).ready(function(){
 
 $('.add_cart').click(function(){
  var product_id = $(this).data("productid");
  var product_name = $(this).data("productname");
  var product_price = $(this).data("price");
  var quantity = $('#' + product_id).val();
  if(quantity != '' && quantity > 0)
  {
   $.ajax({
    url:"<?php echo base_url(); ?>index.php/shopping_cart/add",
    method:"POST",
    data:{product_id:product_id, product_name:product_name, product_price:product_price, quantity:quantity},
    success:function(data)
    {
     
     $('#cart_details').html(data);
     $('#' + product_id).val('');
    }
   });
  }
  else
  {
   alert("Please Enter quantity");
  }
 });

 $('#cart_details').load("<?php echo base_url(); ?>index.php/shopping_cart/load");

 $(document).on('click', '.remove_inventory', function(){
  var row_id = $(this).attr("id");
  if(confirm("Are you sure you want to remove this?"))
  {
   $.ajax({
    url:"<?php echo base_url(); ?>index.php/shopping_cart/remove",
    method:"POST",
    data:{row_id:row_id},
    success:function(data)
    {
     
     $('#cart_details').html(data);
    }
   });
  }
  else
  {
   return false;
  }
 });

 $(document).on('click', '#clear_cart', function(){
  if(confirm("Are you sure you want to clear cart?"))
  {
   $.ajax({
    url:"<?php echo base_url(); ?>index.php/shopping_cart/clear",
    success:function(data)
    {
     
     $('#cart_details').html(data);
    }
   });
  }
  else
  {
   return false;
  }
 });

});
</script>