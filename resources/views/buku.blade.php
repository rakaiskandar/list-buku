<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Web App Pencatatan Buku</title>
</head>

<style>
    .input-group {
        margin-left: 22px;
    }
</style>

<body>
    @extends("layout.main")
    @section("container")

    <div style="margin-top:30px;margin-bottom:20px;margin-left:22px">
        <h3>Web App Pencatatan Buku | List Buku</h3>
    </div>

    @if (session('success'))
    <div class="position-fixed  m-2 alert-success fw-bold flex justify-content-center align-items-center p-2 w-10 text-center rounded" style="top:10px; right:20px;">
        <p class="mb-0 ">{{session('success')}}</p>
    </div>
    @endif

    @if($errors->any())
    <div class="alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="input-group mb-3">
        <a href="buku/create" type="button" class="btn btn-primary">Tambah</a>
        <a style="margin-left: 10px;" href="buku" type="button" class="btn btn-warning">Reset</a>
    </div>

    <table class="table bg-white text-dark" style="margin-left:20px">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Author</th>
                <th>Penerbit</th>
                <th>Sinopsis</th>
                <th>Detail</th>
                <th colspan="2">Tindakan</th>
            </tr>
        </thead>
        @foreach ($bukus as $no => $buku)
        <tbody>
            <tr>
                <td scope="row">{{ ++$no }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->author }}</td>
                <td>{{ $buku->penerbit }}</td>
                <td>{{ $buku->sinopsis }}</td>
                <td class="col p-2">
                    <a href="buku/{{ $buku->id}}" type="button" class="btn btn-link">
                        . . .
                    </a>
                </td>
                <td class="col p-2">
                    <a href="buku/{{ $buku-> id}}/edit" type="button" class="btn btn-warning">Edit</a>
                    <a href="{{ url('delete',$buku->id) }}" type="button" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</body>
@endsection

</html>