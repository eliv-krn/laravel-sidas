<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Latihan - laravel 10</title>
	<link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightcyan;">
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
				<div>
					<h3 class="text-center my-4">-- SIDAS --</h3>
					<h5 class="text-center">Sistem Informasi Data Siswa - SMK Negeri 1 Wadaslintang</h5>
					<hr>
				</div>
				<div class="card border-0 shadow-sm rounded">
					<div class="card-body">
						<a href="{{ route('sidas.create') }}" class="btn btn-md btn-success mb-3">TAMBAH SISWA</a>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col">FOTO</th>
									<th scope="col">NAMA</th>
									<th scope="col">NISN</th>
									<th scope="col">ALAMAT</th>
								</tr>
							</thead>
							<tbody>
								@forelse ($post as $sidas)
								<tr>
									<td class="text-center">
										<img src="{{ asset('/storage/sidas/'.$sidas->image) }}" class="rounded" style="width: 150px">
									</td>
									<td>{{ $sidas->nama }}</td>
									<td>{{ $sidas->nisn }}</td>
									<td>{{ $sidas->alamat }}</td>
									<td>
										<form onsubmit="return confirm('Apakah Anda Yakin?');" action="{{ route('sidas.destroy', $sidas->id) }}" method="POST">
											<a href="{{ route('sidas.show', $sidas->id) }}" class="btn btn-sm btn-outline-dark">Show</a>
											<a href="{{ route('sidas.edit', $sidas->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
										</form>
									</td>
								</tr>
								@empty
								<div class="alert alert-danger">
									Data Post Belum Tersedia
								</div>
								@endforelse
							</tbody>
						</table>
						{{ $post->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script>
		@if(session()->has('success'))
		toastr.success('{{ session('success') }}', 'BERHASIL!');
		@elseif(session()->has('error'))
		toastr.error('{{ session('error') }}', 'GAGAL!');
		@endif
	</script>
</body>
</html>