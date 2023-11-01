<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Detail Data Sidas</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background:lightgray">
	<div class="container mt-5 mb-5">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card border-0 shadow-sm rounded">
					<div class="card-body">
						<img src="{{ asset('storage/sidas/'.$post->image)}}" class="w-100 rounded">
						<hr>
						<h4>{{$post->nama}}</h4>
						<p class="tmt-3">
							{{$post->nisn}}
						</p>
						<p>
							<ul>
								<li>Kota Lahir : <b>{{$post->tempat_lahir}}</b></li>
								<li>Tanggal Lahir : <b>{{$post->tgl_lahir}}</b></li>
								<li>Nama Ayah : <b>{{$post->ayah}}</b></li>
								<li>Nama Ibu : <b>{{$post->ibu}}</b></li>
								<li>Alamat : <b>{{$post->alamat}}</b></li>
							</ul>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>