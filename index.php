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
     <title>CRUD PHP PDO</title>
</head>
<body>
     <div class="container">
          <div class="row">
               <div class="col-md-12 mt-5 mb-5">
                    <a href="#" class="btn btn-success"><span class="fa fa-plus"></span>&nbsp;Tambah</a>
                    <table class="table table-striped">
                         <tr>
                              <th>No</th>
                              <th>Nama Barang</th>
                              <th>Stock</th>
                              <th>Harga Barang</th>
                              <th>Tanggal Masuk</th>
                              <th>Aksi</th>
                         </tr>
                    </table>
               </div>
          </div>
     </div>
</body>
</html>