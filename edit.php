<?php 
require_once('koneksi.php');

// Proses Edit Barang
if(!empty($_POST['nama_barang'])) {
     // Menangkap data barang
     $nama_barang = $_POST['nama_barang'];
     $stok    = $_POST['stok'];
     $harga   = $_POST['harga'];
     $tanggal = $_POST['tanggal'];
     $id      = $_POST['id_barang'];

     $data[] = $nama_barang;
     $data[] = $stok;
     $data[] = $harga;
     $data[] = $tanggal;
     $data[] = $id;

     // Simpan data barang
     $sql = "UPDATE barang SET nama_barang=?,stok=?,harga_barang=?,tgl_masuk=? WHERE id_barang=?";
     $row = $connect->prepare($sql);
     $row->execute($data);

     // Redirect jika berhasil edit barang
     echo '<script>alert("Berhasil edit data");window.location="index.php"</script>';
}

     // Untuk menampilkan data barang berdasarkan id
     $id  = $_GET['id'];
     $sql = "SELECT * FROM barang WHERE id_barang= ?";
     $row = $connect->prepare($sql);
     $row->execute(array($id));
     $get = $row->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <title>Edit Barang - <?php echo $get['nama_barang']; ?></title>
</head>
<body>
     <!-- START: Contact -->
     <div class="container">
          <div class="mt-4">
               <h2>Edit Barang - <?php echo $get['nama_barang']; ?></h2>
          </div>
          <form action="" method="POST">
               <div class="row mt-4">
                    <div class="col-md-4">
                         <label for="nama_barang">Nama Barang</label>
                         <input type="text" value="<?php echo $get['nama_barang']; ?>" name="nama_barang" class="form-control mt-2" id="nama_barang" required>
                    </div>
               </div>
               <div class="row mt-3">
                    <div class="col-md-4">
                    <label for="nama_barang">Stok</label>
                         <input type="text" value="<?php echo $get['stok']; ?>" name="stok" class="form-control mt-2" id="stok" required>
                    </div>
               </div>
               <div class="row mt-3">
                    <div class="col-md-4">
                         <label for="harga">Harga</label>
                         <input type="text" value="<?php echo $get['harga_barang']; ?>" name="harga" class="form-control mt-2" id="harga" required>
                    </div>
               </div>
               <div class="row mt-3">
                    <label for="tanggal">Tanggal</label>
                    <div class="col-md-4">
                         <input type="date" value="<?php echo $get['tgl_masuk']; ?>" name="tanggal" class="form-control mt-2" id="tanggal" required>
                    </div>
               </div>
               <div class="row mt-3">
                    <div class="col-md-4">
                         <input type="hidden" value="<?php echo $get['id_barang'];?>" name="id_barang">
                         <button type="submit" name="send" class="btn btn-dark text-capitalize"><i class="fa fa-edit"> </i> Update</button>
                    </div>
               </div>
          </form>
     </div>
</body>
</html>