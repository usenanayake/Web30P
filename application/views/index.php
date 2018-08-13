<!DOCTYPE html>
<html>
<head>
  <title>Shopping Cart</title>
</head>
<body>

<table>

<thead>
<tr>
<td>id</td>
<td>name</td>
<td>price</td>
<td>Qty</td>
<td>Description</td>
<td>Buy Now</td>


</tr>
</thead>
<?php
foreach($result as $p){
	?><tr>
		<td><?php echo $p->id; ?></td>
		<td><?php echo $p->name; ?></td>
		<td><?php echo $p->price; ?></td>
		<td><?php echo $p->quantity; ?></td>
		<td><?php echo $p->description; ?></td>
		<td><?php anchor('shoppingcart/buy/'.$p->$id,'Order Now'); ?></td>
	</tr>

<?php
  
}
$template = array(
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">'
);
$this->table->set_template($template);

?>
</table>
</body>
</html>