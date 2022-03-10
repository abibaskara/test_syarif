<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kelas</title>
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
                <form method="post" action="/updateNilai/{{$nilai->id}}">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mahasiswa</label>
                        <select class="form-control" name="id_mahasiswa">
                            <option value="">-- Pilih Kelas</option>
                            @foreach ($mahasiswa as $k)
                            <option value="{{$k->id}}" {{ old('id_mahasiswa', $k->id) == 1 ? 'selected' : '' }}>
                                {{$k->nama}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Matakuliah</label>
                        <select class="form-control" name="id_matkul">
                            <option value="">-- Pilih Matkul</option>
                            @foreach ($matakuliah as $m)
                            <option value="{{$m->id}}" {{ old('id_matkul', $m->id) == 1 ? 'selected' : '' }}>
                                {{$m->nama_matkul}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nilai</label>
                        <input type="text" name="nilai" value="{{$nilai->nilai}}" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
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