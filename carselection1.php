<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<body>
   			 </div>
			<div class="book">
			<center>
			<h2>Cars Selection</h2>
			<?php
			require ('db_conn.php');
			?>
			<form name="form1" method="get">
			Search By-
			<select name="sort">
  			<option value="Place">Place</option>
  			<option value="Type" >Type</option>
			</select>
			<input type="text" name="t1">   <input type="submit" name="search" value="search">
			<table border ="1" cellspacing="1" width="80%">
				<th><h1>Name</h2>
				<th><h1>Place</h2>
				<th><h1>Type</h2>
				<th><h1>Price</h2>
				<th><h1>Select</h2>
			<?php
			$page=0;

				function search0(mysqli $conn)
				{
					?>
			
				<?php

				$query=("SELECT * FROM car");
			$result=mysqli_query($conn,$query);
			while($value=mysqli_fetch_assoc($result))
			{
				?>
				<tr>
				<td align="center"><h2><?php echo $value['Name']; ?><br>
				<?php echo "<img src='images/".$value['image']."' width='250' height='170' ></br></br>"; ?>
				<td align="center"><?php echo $value['Place']; ?>
				<td align="center"><?php echo $value['Type']; ?>
				<td align="center"><?php echo $value['Price']; $p=$value['Price']?>
				<td align="center"><?php echo "<a href=final.php?id=".$value['id'].">Select</a>";?>

			<?php	
		
			}
			?>
			</center>
			
			</div>
			<?php } ?>

				
				
			<?php
				function search1(mysqli $conn)
				{
					?>
			
				<?php

				$query=("SELECT * FROM car WHERE Place='$_GET[t1]'");
			$result=mysqli_query($conn,$query);
			while($value=mysqli_fetch_assoc($result))
			{
				?>
				<tr>
				<td align="center"><h2><?php echo $value['Name']; ?><br>
				<?php echo "<img src='images/".$value['image']."' width='250' height='170' ></br></br>"; ?>
				<td align="center"><?php echo $value['Place']; ?>
				<td align="center"><?php echo $value['Type']; ?>
				<td align="center"><?php echo $value['Price']; ?>
				<td align="center"><?php echo "<a href=final.php?id=".$value['id'].">Select</a>";?>



			<?php	
		
			}
			?>
			</center>
			
			</div>

			<?php } ?>

			<?php

				function search2(mysqli $conn)
				{
					?>
				<?php

				$query=("SELECT * FROM car WHERE Type='$_GET[t1]'");
			$result=mysqli_query($conn,$query);
			while($value=mysqli_fetch_assoc($result))
			{
				?>
				<tr>
				<td align="center"><h2><?php echo $value['Name']; ?><br>
				<?php echo "<img src='images/".$value['image']."' width='250' height='170' ></br></br>"; ?>
				<td align="center"><?php echo $value['Place']; ?>
				<td align="center"><?php echo $value['Type']; ?>
				<td align="center"><?php echo $value['Price']; ?>
				<td align="center"><?php echo "<a href=final.php?id=".$value['id'].">Select</a>";?>



			<?php	
		
			}
			?>
			
			</div>

			<?php } ?>


			<?php
			if(isset($_GET['search']))
{
	if($_GET['sort']=="Place")
	{
		$page=1;
	}
	if($_GET['sort']=="Type")
	{
		$page=2;
	}
}
if($page==0)
{
	search0($conn);
}
else if($page==1)
{
	search1($conn);
}
else if($page==2)
{
	search2($conn);
}

			?>
			</table>
			</form>
	</body>
</html>