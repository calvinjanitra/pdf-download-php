<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi CRUD dengan PHP</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
		*{
			font-family: 'Inter',sans-serif;
		}
	</style>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
	<div class="w-screen h-screen flex justify-center items-center flex-col py-4 gap-y-4 bg-gray-200 bg-opacity-50">
		<h1 class="text-2xl font-bold">Ubah Data Siswa</h1>
		<div class="border-2 border-solid w-1/2 h-screen z-10 rounded-lg shadow-xl p-2 bg-white">
			<?php
			include "koneksi.php";
			$id = $_GET['id'];
			$sql = $pdo->prepare("SELECT * FROM siswa WHERE id=:id");
			$sql->bindParam(':id', $id);
			$sql->execute();
			$data = $sql->fetch();
			?>
			<form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
				<div class="flex flex-col gap-y-2">
					<label for="nis" class='text-xl font-semibold'>NIS</label>
					<input type="text" class="w-full border-2 border-solid px-4 py-2 rounded-lg" id="nis" name="nis" value="<?php echo $data['nis']; ?>">
				</div>
				<div class="flex flex-col gap-y-2">
					<label for="nama" class='text-xl font-semibold'>Nama</label>
					<input type="text" class="w-full border-2 border-solid px-4 py-2 rounded-lg" id="nama" name="nama" value="<?php echo $data['nama']; ?>">
				</div>
				<div class="flex flex-col gap-y-2">
					<label for="jenis_kelamin" class='text-xl font-semibold'>Jenis Kelamin</label>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki" <?php if($data['jenis_kelamin'] == "Laki-laki") echo "checked"; ?>>
						<label class="form-check-label" for="laki-laki">Laki-laki</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan" <?php if($data['jenis_kelamin'] == "Perempuan") echo "checked"; ?>>
						<label class="form-check-label" for="perempuan">Perempuan</label>
					</div>
				</div>
				<div class="flex flex-col gap-y-2">
					<label for="telp" class='text-xl font-semibold'>Telepon</label>
					<input type="text" class="w-full border-2 border-solid px-4 py-2 rounded-lg" id="telp" name="telp" value="<?php echo $data['telp']; ?>">
				</div>
				<div class="flex flex-col gap-y-2">
					<label for="alamat" class='text-xl font-semibold'>Alamat</label>
					<textarea class="w-full border-2 border-solid px-4 py-2 rounded-lg" id="alamat" name="alamat"><?php echo $data['alamat']; ?></textarea>
				</div>
				<div class="flex flex-col gap-y-2">
					<label for="foto" class='text-xl font-semibold'>Foto</label>
					<input type="file" class="w-full py-2 rounded-lg-file" id="foto" name="foto">
				</div>
				<hr>
				<div class='w-full flex justify-center gap-x-2'>
					<button type="submit" class="border-2 border-solid px-4 py-2 bg-green-500 rounded-lg font-semibold">Ubah</button>
					<a href="index.php" class="border-2 border-solid px-4 py-2 bg-red-500 rounded-lg font-semibold">Batal</a>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
