<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href=" <?php echo site_url('css/bootstrap.min.css');?>">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <form action="<?php echo site_url('index.php/page/simpan');?>" method="post">
        <div class="col-md-12">
          

              <div class="form-group">
                <label for="text">Nama Menu</label>
                <input type="text" name="nama_menu" class="form-control" placeholder="Masukkan Nama Menu">
              </div>

              <div class="form-group">
                <label for="text">Harga</label>
                <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga">
              </div>
                <div class="form-group">
                   <label for="text">Stok</label>
                   <br>
                    <select name="stok" required>
                        <option>Tersedia</option>
                        <option>Habis</option>
                    </select>
                </div>
              
              <button type="submit" class="btn btn-md btn-success">Simpan</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
           </form>
        </div>
    </div>

 <script type="text/javascript" src="<?php echo site_url('vendor/jquery/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo site_url('vendor/bootstrap/js/bootstrap.min.js');?>"></script>
</body>
</html>