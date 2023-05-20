<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi CRUD Upload Gambar dengan PHP</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
	<section class="w-screen h-screen flex">
		<div>
			
		</div>
		<div class="w-1/4 h-screen pt-4 flex flex-col justify-end">
			<div class='w-full h-full flex items-center flex-col gap-y-2'>
				<div class='flex items-center gap-x-4 pb-8'>
					<img src="asset/logo.jpg" alt="" width='80px'>
					<h3 class="text-2xl font-bold">Data Siswa</h3>
				</div>
				<div class='w-4/5 hover:bg-blue-300 text-center p-2 rounded-2xl font-semibold hover:text-purple-500'>
					<a href="#">
						<h3>Home</h3>
					</a>
				</div>
				<div class='w-4/5 hover:bg-blue-300 text-center p-2 rounded-2xl font-semibold hover:text-purple-500'>
					<a href="#">
						<h3>Dashboard</h3>
					</a>
				</div>
			</div>
			<div class='w-full flex items-center flex-col gap-y-4'>
				<div class='w-4/5 hover:bg-blue-300 text-center p-2 rounded-2xl font-semibold hover:text-purple-500'>
					<a href="#">
						<h3>Notifications</h3>
					</a>
				</div>
				<div class='w-4/5 hover:bg-blue-300 text-center p-2 rounded-2xl font-semibold hover:text-purple-500'>
					<a href="#">
						<h3>Support</h3>
					</a>
				</div>
				<div class='w-4/5 hover:bg-blue-300 text-center p-2 rounded-2xl font-semibold hover:text-purple-500'>
					<a href="#">
						<h3>Settings</h3>
					</a>
				</div>
				<div class='w-4/5 border-2 border-solid text-center p-2 rounded-2xl flex'>
					<div>pp</div>
					<div>
						<div><h3>Calvin Janitra</h3></div>
						<div><h3>@calvinjanitra</h3></div>
					</div>
				</div>
			</div>
		</div>
		<div class="w-screen h-screen border-2 border-solid px-4 flex flex-col gap-y-8 py-4">
			<h3 class='text-2xl'>Data Siswa</h3>
			<div class='w-full flex justify-between gap-x-4'>
				<div class='border-2 border-solid w-full px-2 py-4 rounded-xl flex flex-col gap-y-4'>
					<div class="">
						<h3>Total Customers</h3>
					</div>
					<div class='flex justify-between'>
						<h3>2420</h3>
						<h3 class="bg-green-200 px-4 rounded-lg text-green-600 font-semibold">+20%</h3>
					</div>
				</div>
				<div class='border-2 border-solid w-full px-2 py-4 rounded-xl flex flex-col gap-y-4'>
					<div class="">
						<h3>Total Customers</h3>
					</div>
					<div class='flex justify-between'>
						<h3>2420</h3>
						<h3>+20%</h3>
					</div>
				</div>
				<div class='border-2 border-solid w-full px-2 py-4 rounded-xl flex flex-col gap-y-4'>
					<div class="">
						<h3>Total Customers</h3>
					</div>
					<div class='flex justify-between'>
						<h3>2420</h3>
						<h3>+20%</h3>
					</div>
				</div>
			</div>
			<div class='border-2 border-solid w-fit'>
				<table class="table">
				<thead>
				<tr>
				<th>NIS</th>
				<th>Foto</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Telepon</>
				<th>Alamat</th>
				<th colspan="2">Aksi</th>
				</tr>
				</thead>
				<tbody>
				<?php
				include "koneksi.php";
		
				$sql = $pdo->prepare("SELECT * FROM siswa");
				$sql->execute();
		
				while($data = $sql->fetch()){ 
				echo "<tr>";
				echo "<td>".$data['nis']."</td>";
				echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
				echo "<td>".$data['nama']."</td>";
				echo "<td>".$data['jenis_kelamin']."</td>";
				echo "<td>".$data['telp']."</td>";
				echo "<td>".$data['alamat']."</td>";
				echo "<td><a href='form_ubah.php?id=".$data['id']."' class='btn btn-warning'>Ubah</a></td>";
				echo "<td><a href='proses_hapus.php?id=".$data['id']."' class='btn btn-danger'>Hapus</a></td>";
				echo "</tr>";
				}
				?>
				</tbody>
				</table>
				<a href="form_tambah.php" class="btn btn-primary mb-3">Tambah Data</a>
			</div>
		</div>
	</div>
</body>
</html>
