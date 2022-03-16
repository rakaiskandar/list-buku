<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>

    <style>
        .input-form {
            margin-bottom: 20px;
            padding-left: 10px;
            padding-right: 10px;
            padding-bottom: 20px;
            padding-top: 10px;
        }
    </style>
</head>

<body>
    @extends('layout.main')
    @section('container')
    
    <a href="/" type="button" class="btn btn-dark">Kembali</a><br>
    <form action="{{ url('buku')}}" method="post" class="col-md-8">
        @csrf
        <div class="input-form w-75 my-4 border p-3 rounded">
            <h1>Add Buku</h1>
            <div class="form-group">
                <label for="">Judul Buku</label>
                <input type="text" class="form-control" name="judul" id="" aria-describedby="helpId" placeholder="Judul Buku">
            </div>
            <div class="form-group">
                <label for="">Author</label>
                <input type="text" class="form-control" name="author" id="" aria-describedby="helpId" placeholder="Author">
            </div>
            <div class="form-group">
                <label for="">Penerbit</label>
                <input type="text" class="form-control" name="penerbit" id="" aria-describedby="helpId" placeholder="Penerbit">
            </div>
            <div class="form-group">
                <label for="">Sinopsis</label>
                <textarea class="form-control" name="sinopsis" id="" aria-describedby="helpId" placeholder="Sinopsis"></textarea>
            </div><br>
            <center>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </center>
        </div>
    </form>

    @endsection
</body>

</html>