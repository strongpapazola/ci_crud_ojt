<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Data Barang</title>
  </head>
  <body>
<div class="container">
  <div class="row mt-5">
    <div class="col-md-6">

    <h1 class="text text-info">Data Barang</h1>
     
    <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">
      Tambah Data
    </button>


     <table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach($barang as $item) { ?>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $item['nama']; ?></td>
      <td><?= $item['harga']; ?></td>
      <td><?= $item['ket']; ?></td>
      <td>
        <a href="<?= base_url('index.php/welcome/update/').$item['id']; ?>" class="badge badge-info">update</a>
        <a href="<?= base_url('index.php/welcome/hapus/').$item['id']; ?>" class="badge badge-danger" onclick="return confirm('Apakah Anda Yakin?')">hapus</a>
      </td>
    </tr>
    <?php $i++; ?>
    <?php } ?>

  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<div class="card">
  <div class="card-header">
    Formulir
  </div>
  <div class="card-body">
    
<form action="<?= base_url('index.php/welcome/tambah'); ?>" method="post">
  <div class="form-group">
    <label for="nama">Nama Barang</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang" required="">
  </div>
  <div class="form-group">
    <label for="harga">Harga Barang</label>
    <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Barang" required="">
  </div>
  <div class="form-group">
    <label for="ket">Keterangan Barang</label>
    <input type="text" class="form-control" id="ket" name="ket" placeholder="Keterangan Barang" required="">
  </div>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
</form>
      </div>
    </div>
  </div>
</div>

    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>