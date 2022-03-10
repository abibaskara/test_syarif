<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dosen</title>
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
                <form method="post" action="{{route('updateDosen', $dosen->id)}}">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Dosen</label>
                        <input type="text" name="nama_dosen" value="{{$dosen->nama_dosen}}" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('nama_dosen')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIP</label>
                        <input type="text" name="nip" value="{{$dosen->nip}}" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('nip')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" name="alamat" value="{{$dosen->alamat}}" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('alamat')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telp</label>
                        <input type="text" name="no_telp" value="{{$dosen->no_telp}}" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('no_telp')
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