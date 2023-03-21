<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<form action="{{ route('store.obat') }}" method="POST">
@csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Obat</label>
            <input type="text" class="form-control" placeholder="Enter Nama" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Deskripsi</label>
            <input type="text" class="form-control" placeholder="Deskripsi" name="deskripsi">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tipe</label>
            <input type="text" class="form-control" placeholder="Tipe" name="tipe">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Jumlah</label>
            <input type="text" class="form-control" placeholder="Jumlah" name="jumlah">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Harga Satuan</label>
            <input type="text" class="form-control" placeholder="Harga Satuan" name="harga_satuan">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>