<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Matakuliah</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<body>
    <div class="container-fluid mt-4 col-md-4">
        <div class="card">
            <div class="card-header">
                Edit
            </div>
            <div class="card-body">
                <form method="post" action="/updateMatkul/{{$matakuliah->id}}">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kelas</label>
                        <select class="form-control" name="id_dosen">
                            <option value="">-- Pilih Dosen</option>
                            @foreach ($dosen as $k)
                            <option value="{{$k->id}}" {{ old('id_dosen', $k->id) == 1 ? 'selected' : '' }}>
                                {{$k->nama_dosen}}
                            </option>
                            @endforeach
                        </select>
                        @error('id_dosen')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Matkul</label>
                        <input type="text" name="nama_matkul" value="{{$matakuliah->nama_matkul}}" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('nama_matkul')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode</label>
                        <input type="text" name="kode_matkul" value="{{$matakuliah->kode_matkul}}" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('kode_matkul')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save Change</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
</script>

</html>