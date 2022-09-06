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
          <form action="" method="POST">
               <div class="row mt-5">
                    <div class="col-md-4">
                         <input type="text" name="nama" class="form-control" require placeholder="Your name">
                    </div>
               </div>
               <div class="row mt-5">
                    <div class="col-md-4">
                         <input type="text" name="email" class="form-control" require placeholder="Your email">
                    </div>
               </div>
               <div class="row mt-5">
                    <div class="col-md-4">
                         <input type="text" name="email" class="form-control" require placeholder="Your email">
                    </div>
               </div>
               <div>
                    <div class="row mt-3">
                         <div class="col-md-4">
                              <button type="submit" name="send" class="btn btn-dark text-capitalize">kirim</button>
                         </div>
                    </div>
               </div>
     </div>
</body>
</html>