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
	<div class='w-screen h-screen flex justify-center items-center flex-col py-4 gap-y-4 bg-gray-200 bg-opacity-50'>
		<h1 class="text-2xl font-bold">Tambah Data Siswa</h1>
		<div class="border-2 border-solid w-1/2 h-screen z-10 rounded-lg shadow-xl p-2 bg-white">
			<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
				<div class="flex flex-col gap-y-2">
					<label for="nama" class='text-xl font-semibold'>Nama</label>
					<input type="text" id="nama" name="nama" class='w-full border-2 border-solid px-4 py-2 rounded-lg'>
				</div>
				<div class="flex flex-col gap-y-2">
					<label for="nis" class='text-xl font-semibold'>NIS</label>
					<input type="text" class='w-full border-2 border-solid px-4 py-2 rounded-lg' id="nis" name="nis">
				</div>
				<div class="flex flex-col gap-y-2">
					<label for="jenis_kelamin" class='text-xl font-semibold'>Jenis Kelamin</label>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-laki">
						<label class="form-check-label" for="laki-laki">Laki-laki<label/>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
						<label class="form-check-label" for="perempuan">Perempuan</label>
					</div>
				</div>
				<div class="flex flex-col gap-y-2">
					<label for="telp" class='text-xl font-semibold'>Telepon</label>
					<input type="text" class='w-full border-2 border-solid px-4 py-2 rounded-lg' id="telp" name="telp">
				</div>
				<div class="flex flex-col gap-y-2">
					<label for="alamat" class='text-xl font-semibold'>Alamat</label>
					<textarea class='w-full border-2 border-solid px-4 py-2 rounded-lg' id="alamat" name="alamat"></textarea>
				</div>
				<div class="flex flex-col gap-y-2">
					<label for="foto" class='text-xl font-semibold'>Foto</label>
					<input type="file" class="form-control-file" id="foto" name="foto">
				</div>
				<hr>
				<div class='w-full flex justify-center gap-x-2'>
					<button type="submit" class="border-2 border-solid px-4 py-2 bg-green-500 rounded-lg font-semibold">Simpan</button>
					<a href="index.php" class="border-2 border-solid px-4 py-2 bg-red-500 rounded-lg font-semibold">Batal</a>
				</div>
			</form>
		</div>
	</div>
</body>
</html>

