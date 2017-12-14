 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
					mysql_connect("localhost","root","");
					mysql_select_db("homedecor");
					$res=mysql_query("select * from imagesd");
					echo "<table>";
					while($row=mysql_fetch_array($res))
					{
						echo "<tr>";
						echo "<td>";?>   <img src="<?php echo $row["images1"]; ?>" />     <?php echo "</td>";
						echo "</tr>";
					}
					echo "</table>";
					?>	

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js:"></script>
<div class="container">
  <h1>My First Bootstrap Page</h1>
  <p>This is some text.</p>
</div>

</body>
</html>