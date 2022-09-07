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
                    <a href="tambah.php" class="btn btn-success"><span class="fa fa-plus"></span>&nbsp;Tambah</a>
                    <div class="table-responsive-sm">
                    <table class="table table-striped mt-3 text-center">
                         <tr>
                              <th>No</th>
                              <th>Nama Barang</th>
                              <th>Stock</th>
                              <th>Harga Barang</th>
                              <th>Tanggal Masuk</th>
                              <th>Aksi</th>
                         </tr>
                         <?php 
                              $sql = "SELECT * FROM barang";
                              $row = $connect->prepare($sql);
                              $row->execute();
                              $get = $row->fetchAll();
                              $i = 1;
                              foreach($get as $g) {
                         ?>
                         <tr>
                              <td><?php echo $i ?></td>
                              <td><?php echo $g['nama_barang'] ?></td>
                              <td><?php echo $g['stok']; ?></td>
                              <td><?php echo $g['harga_barang']; ?></td>
                              <td><?php echo $g['tgl_masuk']; ?></td>
                              <td class="text-center">
                                   <a href="edit.php?id=<?php echo $g['id_barang'];?>" class="btn btn-success"><span class="fa fa-edit"></span></a>
                                   <a onclick="return confirm('Apakah yakin data mau dihapus?')" href="hapus.php?id=<?php echo $g['id_barang'];?>" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                              </td>
                         </tr>
                         <?php 
                         $i++;
                         }
                         ?>
                    </table>
               </div>
               </div>
          </div>
     </div>
</body>
</html>