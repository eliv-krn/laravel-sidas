<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Edit Data Post - SantriKoding.com</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">
	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="col-md-12">
				<div class="card border-0 shadow-sm rounded">
					<div class="card-body">
						<form action="{{ route('sidas.update', $post->id) }}" method="POST" enctype="multipart/form-data">
							@csrf
							@method('PUT')
							<div class="form-group">
								<label class="font-weight-bold">FOTO</label>
								<input type="file" class="form-control" name="image">
							</div>
							
					<div class="form-group">
                        <label class="font-weight-bold">NAMA</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $post->nama) }}"
                        placeholder="masukkan nama">
                        @error('nama')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">NISN</label>
                        <input type="text" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{ old('nisn', $post->nisn) }}"
                        placeholder="masukkan nisn">
                        @error('nisn')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">TEMPAT LAHIR</label>
                        <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir', $post->tempat_lahir) }}"
                        placeholder="masukkan tempat_lahir">
                        @error('tempat_lahir')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">TANGGAL LAHIR</label>
                        <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{ old('tgl_lahir', $post->tgl_lahir) }}"
                        placeholder="masukkan tgl_lahir">
                        @error('tgl_lahir')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">NAMA AYAH</label>
                        <input type="text" class="form-control @error('ayah') is-invalid @enderror" name="ayah" value="{{ old('ayah', $post->ayah) }}"
                        placeholder="masukkan nama ayah">
                        @error('ayah')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">NAMA IBU</label>
                        <input type="text" class="form-control @error('ibu') is-invalid @enderror" name="ibu" value="{{ old('ibu', $post->ibu) }}"
                        placeholder="masukkan nama ibu">
                        @error('ibu')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">ALAMAT</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $post->alamat) }}"
                        placeholder="masukkan alamat">
                        @error('alamat')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    
                    <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                    <button type="reset" class="btn btn-md btn-warning">RESET</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>
</body>
</html>