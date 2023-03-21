<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Kode</th>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Tipe</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga Satuan</th>
                <th scope="col">Ubah</th>
                <th scope="col">Simpan</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($obats as $obat)
            <tr>
                <th scope="row">{{$obat->id}}</th>
                <td>{{$obat->name}}</td>
                <td>{{$obat->deskripsi}}</td>
                <td>{{$obat->tipe}}</td>
                <td>{{$obat->jumlah}}</td>
                <td>{{$obat->harga_satuan}}</td>
                <td><a href="{{ route('edit.obat', $obat->id) }}" type="button" class="btn btn-primary">Ubah</button>
                </td>
                <td><a href="{{ route('create.obat') }}" type="button" class="btn btn-secondary">Simpan</button></td>
                <td><a href="{{ route('delete.obat', $obat->id) }}" type="button" class="btn btn-secondary">Delete</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>