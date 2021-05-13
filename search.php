<?php
	// require the database connection
	require 'conn.php';
	if(ISSET($_POST['search'])){
?>
	<table class="table table-bordered">
		<thead class="alert-info">
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Address</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$keyword = $_POST['keyword'];
				$query = $conn->prepare("SELECT * FROM `member` WHERE `firstname` LIKE '%$keyword%' or `lastname` LIKE '%$keyword%' or `address` LIKE '%$keyword%'");
				$query->execute();
				while($row = $query->fetch()){
			?>
			<tr>
				<td><?php echo $row['firstname']?></td>
				<td><?php echo $row['lastname']?></td>
				<td><?php echo $row['address']?></td>
			</tr>
			
			
			<?php
				}
			?>
		</tbody>
	</table>
<?php		
	}else{
?>
	<table class="table table-bordered">
		<thead class="alert-info">
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Address</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = $conn->prepare("SELECT * FROM `member`");
				$query->execute();
				while($row = $query->fetch()){
			?>
			<tr>
				<td><?php echo $row['firstname']?></td>
				<td><?php echo $row['lastname']?></td>
				<td><?php echo $row['address']?></td>
			</tr>
			
			
			<?php
				}
			?>
		</tbody>
	</table>
<?php
	}
$conn = null;
?>