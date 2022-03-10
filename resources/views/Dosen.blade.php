<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<body>
    <div class="container-fluid mt-4">
        <div class="card">
            <div class="card-header">
                Dosen
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                    Add
                </button>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telp</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dosen as $d)
                        <tr>
                            <th scope="row">{{$d->id}}</th>
                            <td>{{$d->nama_dosen}}</td>
                            <td>{{$d->nip}}</td>
                            <td>{{$d->alamat}}</td>
                            <td>{{$d->no_telp}}</td>
                            <form action="{{ route ('deleteDosen', $d->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <td>
                                    <a href="editDosen/{{$d->id}}" type="button"
                                        class=" btn btn-sm btn-outline-warning">Edit</a>
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                </td>
                            </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Dosen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route ('addDosen')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Dosen</label>
                            <input type="text" name="nama_dosen" value="{{old('nama_dosen')}}" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('nama_dosen')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NIP</label>
                            <input type="text" name="nip" value="{{old('nip')}}" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('nip')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" name="alamat" value="{{old('alamat')}}" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('alamat')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telp</label>
                            <input type="text" name="no_telp" value="{{old('no_telp')}}" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('no_telp')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
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