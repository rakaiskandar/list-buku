<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
</head>

<body>
    @extends('layout.main')
    @section('container')
    <div class="w-75 my-4 border p-3 rounded">
        <a href="/buku" class="btn-success btn mb-4 pr-4 fw-bold">
            <i class="bi bi-caret-left-fill"></i> Back
        </a>
        <h2 class="fw-bold mb-1">Judul: {{$buku->judul}}</h2>
        <h5 style="font-weight: 600;" class="text-primary mb-3">by {{$buku->author}}</h5>
        <p>{{$buku->sinopsis}}</p>
        <p class="btn btn-primary pe-none">Published by {{$buku->penerbit}}</p>
    </div>
    @endsection
</body>

</html>