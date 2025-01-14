<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/admin/assets/css/admin.css">
</head>
<body>
    <div class="container py-5">
        <h1>Edit Dokter</h1>
        <div class="card mb-4">
            <div class="card-header bg-light">
                <h5 class="mb-0">Edit Dokter</h5>
            </div>
            <div class="card-body">
                <form action="/dokter/{{ $dokter->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="id_dokter" class="form-label">Id Dokter</label>
                        <input type="text" name="id_dokter" id="id_dokter" class="form-control" value="{{ $dokter->id_dokter }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_dokter" class="form-label">Nama Dokter</label>
                        <input type="text" name="nama_dokter" id="nama_dokter" class="form-control" value="{{ $dokter->nama_dokter }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="poliklinik" class="form-label">Poliklinik</label>
                        <input type="text" name="poliklinik" id="poliklinik" class="form-control" value="{{ $dokter->poliklinik }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-50">Perbarui</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>