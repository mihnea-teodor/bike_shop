<?php
session_start();
include_once("db_connect.php");
?>

<div class="products">
<?php
//current URL of the Page. cart_update.php redirects back to this URL
$current_url = base64_encode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
$results = $mysqli->query("SELECT * FROM products ORDER BY id ASC");
    if ($results) { 
        //output results from database
		echo '<table border="2" align="center">';
        while($obj = $results->fetch_object())
		{
			echo '<form method="post" action="cart_update.php">';
            echo '<td><img src="../images/'.$obj->product_image.'"></td>';
            //echo '<td><h3>'.$obj->product_name.'</h3></td>';
            //echo $obj->product_desc;
            //echo 'Price '.$currency.$obj->product_price.' RON';
			//echo '<button class="add_to_cart">Add To Cart</button>';
            echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
            echo '<input type="hidden" name="type" value="add" />';
            echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            //echo '</div>';
			echo '</tr><tr>';
		}
		echo '</table>';
	}
?>
</div>