<?php 
require_once('koneksi.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <title>Tambah Barang</title>
</head>
<body>
     <!-- START: Contact -->
     <div class="container">
          <div class="mt-4">
               <h2>Tambah Barang</h2>
          </div>
          <form action="" method="POST">
               <div class="row mt-4">
                    <div class="col-md-4">
                         <label for="nama_barang">Nama Barang</label>
                         <input type="text" name="nama_barang" class="form-control mt-2" id="nama_barang" required>
                    </div>
               </div>
               <div class="row mt-3">
                    <div class="col-md-4">
                    <label for="nama_barang">Stok</label>
                         <input type="text" name="stok" class="form-control" id="stok" required>
                    </div>
               </div>
               <div class="row mt-3">
                    <div class="col-md-4">
                         <label for="harga">Harga</label>
                         <input type="text" name="harga" class="form-control" id="harga" required>
                    </div>
               </div>
               <div class="row mt-3">
                    <label for="tanggal">Tanggal</label>
                    <div class="col-md-4">
                         <input type="date" name="tanggal" class="form-control" id="tanggal" required>
                    </div>
               </div>
               <div>
                    <div class="row mt-3">
                         <div class="col-md-4">
                              <button type="submit" name="send" class="btn btn-dark text-capitalize"><i class="fa fa-plus"> </i> Create</button>
                         </div>
                    </div>
               </div>
          </form>
     </div>
</body>
</html>