<?php
	include("connection.php");
	session_start();
	//session_destroy();
	function display_cart()
	{
		global $conn;
		$q = mysql_query("SELECT `id`, `images` , `name`, `desc`, `price` FROM cart WHERE `quantity` > 0");
		$num = mysql_num_rows($q);
		while($fetch = mysql_fetch_assoc($q))
		{
			
			echo '
			<div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
					<div class="pull-left">
							<img class="img-responsive" src="images/'.$fetch['images'].'"/>
					</div>
					<div class="media-body">
						<h3 class="media-heading">'.$fetch['name'].'</h3>
							<p>'.$fetch['desc'].'</p>
							<p>$ '.$fetch['price'].'
							&nbsp&nbsp&nbsp<a href="cart.php?add='.$fetch['id'].'">Add to Cart</a>
							</p>
					</div>
				</div>
				</div>
				';          
		}
	}
	if(isset($_GET['add']) && !empty($_GET['add']))
	{
		$id = $_GET['add'];
		$q = mysql_query("SELECT `id`, `quantity` FROM cart WHERE `id`='".$id."'");
		while($quantity = mysql_fetch_assoc($q))
		{
			if($quantity['quantity'] !=@$_SESSION['cart_'.$id])
			{
				echo @$_SESSION['cart_'.$id]+=1;
				
			}
			header('Location:cartpage.php');
		}
	}
	if(isset($_GET['remove']))
	{
		$_SESSION['cart_'.$_GET['remove']]-=1;
		header('Location:cartpage.php');
	}
	if(isset($_GET['delete']))
	{
		$_SESSION['cart_'.$_GET['delete']]=0;
		header('Location:cartpage.php');
	}
	function paypal_item()
	{
		$num=0;
		foreach($_SESSION as $name => $value)
		{
			if($value > 0)
			{
				if(substr ($name,0,5) == 'cart_')
				{
					$id = substr($name,5,(strlen($name-5)));
					//echo $id;
					$q = mysql_query("SELECT `id`, `shipping`, `name`, `price` FROM cart WHERE `id`='".$id."'");
					while($get_row = mysql_fetch_assoc($q))
					{
						$num++;
						echo '<input type="hidden" name="item_number_'.$num.'" value="'.$id.'">';
						echo '<input type="hidden" name="item_name_'.$num.'" value="'.$get_row['name'].'">';
						echo '<input type="hidden" name="amount_'.$num.'" value="'.$get_row['price'].'">';
						echo '<input type="hidden" name="shipping_'.$num.'" value="'.$get_row['shipping'].'">';
						echo '<input type="hidden" name="quantity_'.$num.'" value="'.$value.'">';
					}
				}
			}
		}
	}
	function product()
	{
		$net_payment=0;
		foreach($_SESSION as $name => $value)
		{
			if($value > 0)
			{
				if(substr ($name,0,5) == 'cart_')
				{
					$id = substr($name,5,(strlen($name-5)));
					//echo $id;
					$q = mysql_query("SELECT `id`, `shipping`, `name`, `price` FROM cart WHERE `id`='".$id."'");
					echo'<table align="center"><tr><td>Name</td><td>Quantity</td><td>Price</td><td>Total</td><td>Add</td><td>Discard</td><td>Delete</td></tr>';
					while($get = mysql_fetch_assoc($q))
					{
						$total = $value * $get['price'];
						
						echo '<tr><td>'.$get['name'].'</td><td>'.$value.'</td><td> $'.$get['price'].'</td><td> $'.$total.'</td><td><a href="cart.php?add='.$id.'">[+]</a></td><td><a href="cart.php?remove='.$id.'">[-]</a></td><td><a href="cart.php?delete='.$id.'">[Delete]</a></td></tr></table>';
					}
				}
				$net_payment+=$total;
			}
		}
		if($net_payment == 0)
		{
			echo "Your cart is Empty";
			?>
			<a href="products.php"><h2>Shop Here</h2></a>
			<?php
		}
		else
		{
			echo "<br /><h2>Total = $".$net_payment.'</h2><br />';
			
			?>
			<a href="products.php"><button class="btn btn-pri btn-lg" width="150" height="100">Shop More</button></a>
			<br /><br />
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_cart">
			<input type="hidden" name="business" value="decoratehome@gmail.com">
			<input type="hidden" name="upload" value="1">
			<?php paypal_item(); ?>
			<input type="hidden" name="currency_code" value="NZD">
			<input type="hidden" name="amount" value="<?php echo $net_payment?>">
			<input type="hidden" name="amount" value="<?php echo $net_payment?>">
			<input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but03.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" >
			</form>
			
			<?php
		}
	}
	function check_cart()
	{
		$net_payment=0;
		
		foreach($_SESSION as $name => $value)
		{
			
			if($value > 0)
			{
				if(substr ($name,0,5) == 'cart_')
				{
					$id = substr($name,5,(strlen($name-5)));
					//echo $id;
					$q = mysql_query("SELECT `id`, `shipping`, `name`, `price` FROM cart WHERE `id`='".$id."'");
					echo'<table align="center"><tr><th>Name</th><th>Quantity</th><th>Price</th><th>Total</th><th>Add</th><th>Discard</th><th>Delete</th></tr>';
					while($get = mysql_fetch_assoc($q))
					{
						$total = $value * $get['price'];
						
						echo '<tr><td>'.$get['name'].'</td><td>'.$value.'</td><td> $'.$get['price'].'</td><td> $'.$total.'</td><td><a href="cart.php?add='.$id.'">[+]</a></td><td><a href="cart.php?remove='.$id.'">[-]</a></td><td><a href="cart.php?delete='.$id.'">[Delete]</a></td></tr></table>';
					}
				}
				$net_payment+=$total;
			}
		}
		if($net_payment == 0)
		{
			echo "Your cart is Empty";
			?>
			<br /><br /><a href="products.php"><button class="btn btn-pri "><h1>Shop Here</h1></button></a>
			<?php
		}
		else
		{
			?>
			<br />
			<a href="products.php"><button class="btn btn-pri btn-lg ">Shop More</button></a>
			<br/>
<div class="container">
            <div class="center"> 
<br />			
                <h2>Please fill your details to complete the purchase</h2> 
            </div> 
			<form id="main-detail-form" class="detail-form" name="detail-form" method="post" action="purchasebg.php" >
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>First Name *</label>
                            <input type="text" name="firstname" id="fname" class="form-control" required="required">
                        </div>
						<div class="form-group">
                            <label>Last Name *</label>
                            <input type="text" name="lastname" id="lname" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" id="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone *</label>
                            <input type="number" name="phone" id="phone" class="form-control" required="required">
                        </div> 	
						<div class="form-group">
                            <label>Pincode *</label>
                            <input type="number" name="pincode" id="pincode" class="form-control" required="required">
                        </div>    						
                    </div>
                    <div class="col-sm-5">
					<div class="form-group">
                            <label>Address *</label>
                            <textarea name="address" id="address" required="required" class="form-control" rows="6"></textarea>
                        </div> 
					<div class="form-group">
                            <label>Shipping Address *</label>
							 <textarea name="saddress" id="saddress" required="required" class="form-control" rows="6"></textarea>
                        </div>                      
                    </div><div class="form-group">
                            <button type="submit" name="submit" id="button" class="btn btn-pri btn-lg " required="required">Check Out</button>
                        </div>
                </form> 
				</div>
			
			<?php
		}
	}
	function check_cartt()
	{
		$net_payment=0;
		foreach($_SESSION as $name => $value)
		{
			if($value > 0)
			{
				if(substr ($name,0,5) == 'cart_')
				{
					$id = substr($name,5,(strlen($name-5)));
					//echo $id;
					$q = mysql_query("SELECT `id`, `shipping`, `name`, `price` FROM cart WHERE `id`='".$id."'");
					while($get = mysql_fetch_assoc($q))
					{
						$total = $value * $get['price'];
						
			
					}
				}
				$net_payment+=$total;
			}
		}
		if($net_payment == 0)
		{
			echo "Your cart is Empty";
		}
		else
		{
			?>
			<form action="cartpage.php" method="post">
                <button type="submit" name="submit" id="button" class="btn btn-pri " required="required">Your Cart</button>
			</form>
			<?php
		}
	}
	
?>
