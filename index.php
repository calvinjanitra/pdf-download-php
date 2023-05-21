<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi CRUD Upload Gambar dengan PHP</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
		*{
			font-family: 'Inter',sans-serif;
		}
	</style>
	<script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
	<section class="w-screen h-screen flex">
		<div class="w-1/4 h-screen pt-4 flex flex-col justify-end shadow-2xl z-20">
			<div class='w-full h-full flex items-center flex-col gap-y-2'>
				<div class='flex items-center gap-x-4 pb-8'>
					<img src="asset/logo.jpg" alt="" width='80px'>
					<h3 class="text-2xl font-bold">Dashboard Siswa</h3>
				</div>
				<div class='w-4/5 hover:bg-blue-300 text-center p-2 rounded-2xl font-semibold hover:text-purple-500'>
					<a href="#">
						<h3>Home</h3>
					</a>
				</div>
				<div class='w-4/5 bg-blue-300 text-center p-2 rounded-2xl font-semibold hover:text-purple-500'>
					<a href="#">
						<h3>Dashboard</h3>
					</a>
				</div>
			</div>
			<div class='w-full flex items-center flex-col gap-y-4 pb-4'>
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
				<div class='w-4/5 border-2 border-solid text-center p-2 rounded-2xl flex hover:bg-blue-300 gap-x-4 shadow-xl'>
					<div>
						<img src="asset/p.jpg" alt="" width='100px' class="rounded-[4rem]">
					</div>
					<div class='flex flex-col justify-center '>
						<div><h3 class='font-semibold'>Calvin Janitra</h3></div>
						<div><h3>@calvinjanitra</h3></div>
					</div>
				</div>
			</div>
		</div>
		<div class="w-screen h-screen border-2 border-solid px-6 flex flex-col gap-y-8 py-10 bg-gray-100">
			<div class="w-full flex justify-between">
				<h3 class='text-3xl font-bold'>Data Siswa</h3>
				<a href="form_tambah.php" class="font-semibold bg-blue-400 px-4 py-2 rounded-xl hover:brightness-90">+ Tambah Data</a>
			</div>
			<div class='w-full flex justify-between gap-x-4'>
				<div class='border-2 border-solid w-full px-2 py-4 rounded-xl flex flex-col gap-y-6 shadow-xl'>
					<div class="text-2xl font-semibold">
						<h3>Total Pendaftar</h3>
					</div>
					<div class='flex justify-between text-xl font-semibold'>
						<h3>2420</h3>
						<h3 class="bg-green-200 px-4 rounded-lg text-green-600 font-semibold">+20%</h3>
					</div>
				</div>
				<div class='border-2 border-solid w-full px-2 py-4 rounded-xl flex flex-col gap-y-6 shadow-xl'>
					<div class="text-2xl font-semibold">
						<h3>Total Diterima</h3>
					</div>
					<div class='flex justify-between text-xl font-semibold'>
						<h3>2420</h3>
						<h3 class="bg-green-200 px-4 rounded-lg text-green-600 font-semibold">+20%</h3>
					</div>
				</div>
				<div class='border-2 border-solid w-full px-2 py-4 rounded-xl flex flex-col gap-y-6 shadow-xl'>
					<div class="text-2xl font-semibold">
						<h3>Total Ditolak</h3>
					</div>
					<div class='flex justify-between text-xl font-semibold'>
						<h3>423</h3>
						<h3 class="bg-red-200 px-4 rounded-lg text-red-600 font-semibold">+12%</h3>
					</div>
				</div>
			</div>
			<div class="w-full flex justify-between">
				<div class='border-2 border-solid px-4 py-2 rounded-lg hover:bg-blue-300 flex items-center gap-x-4'>
					<h3>More Filters</h3>
				</div>
				<div class='w-1/4 border-2 border-solid px-4 py-2 rounded-lg hover:bg-blue-300 flex items-center gap-x-2'>
					<img src="asset/search.png" alt="" width='30px'>
					<h3>Search...</h3>
				</div>
			</div>
			<div class='w-full'>
				<table class="table w-full text-center text-lg shadow-lg">
				<thead class='bg-blue-100'>
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
				echo "<td class='flex justify-center'><img src='images/".$data['foto']."' width='100' height='100'></td>";
				echo "<td>".$data['nama']."</td>";
				echo "<td>".$data['jenis_kelamin']."</td>";
				echo "<td>".$data['telp']."</td>";
				echo "<td>".$data['alamat']."</td>";
				echo "<td><a href='form_ubah.php?id=".$data['id']."'><img src='asset/write.png' width='20px'></a></td>";
				echo "<td><a href='proses_hapus.php?id=".$data['id']."'><img src='asset/delete.png' width='20px'></a></td>";
				echo "</tr>";
				}
				?>
				</tbody>
				</table>
				<div class='w-full flex justify-between pt-4'>
					<div class='border-2 border-solid px-4 py-2 font-semibold hover:bg-blue-300 rounded-lg'>
						<h3>Previous</h3>
					</div>
					<div class='px-4 py-2 font-semibold'>
						<h3>Page 1 of 10</h3>
					</div>
					<div class='border-2 border-solid px-4 py-2 font-semibold hover:bg-blue-300 rounded-lg'>
						<h3>Next</h3>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</body>
</html>
