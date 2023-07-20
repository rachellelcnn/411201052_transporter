<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<script type="text/javascript" src="chartjs/Chart.js"></script>
</head>
<body>
	<style type="text/css">
	body{
		font-family: roboto;
	}
 
	table{
		margin: 0px auto;
	}
	</style>
 
 
	<center>
		<h2>Rachelle Luciana - Pemrograman Fullstack <br/>- 2023 -</h2>
	</center>
 
 
	<?php 
	include 'koneksi.php';
	?>
 
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
 
	<br/>
	<br/>
 
	<table border="1">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nama Kurir</th>
				<th>Email</th>
				<th>Password</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			$data = mysqli_query($koneksi,"select * from kurir");
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $id++; ?></td>
					<td><?php echo $d['name']; ?></td>
					<td><?php echo $d['email']; ?></td>
					<td><?php echo $d['password']; ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
 
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["Barang", "Lokasi"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_barang = mysqli_query($koneksi,"select * from kurir where lokasi jumlah barang dikirim='>100'");
					echo mysqli_num_rows($jumlah_barang);
					?>, 
					<?php 
					$jumlah_pertanian = mysqli_query($koneksi,"select * from kurir where harga barang='>1000'");
					echo mysqli_num_rows($jumlah_pertanian);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)','
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>






