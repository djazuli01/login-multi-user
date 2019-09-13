<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    
  <link rel="stylesheet" type="text/css" href=" <?php echo site_url('css/bootstrap.min.css');?>">

 
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">
            <?php echo form_open('index.php/page/update') ?>

              <div class="form-group">
                <label for="text">Nama Menu</label>
                <input type="text" name="nama_menu" value="<?php echo $dashboard->nama_menu ?>" class="form-control">
                <input type="hidden" value="<?php echo $dashboard->id_menu ?>" name="id_menu">
              </div>

              <div class="form-group">
                <label for="text">Harga</label>
                <input type="text" name="harga" value="<?php echo $dashboard->harga ?>" class="form-control">
              </div>

               <div class="form-group">
                   <label for="text">Stok</label>
                   <br>
                    <select name="stok" required>
                        <option>Tersedia</option>
                        <option>Habis</option>
                    </select>
                </div>

             

              <button type="submit" class="btn btn-md btn-success">Update</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
            <?php echo form_close() ?>
        </div>
    </div>

 <script type="text/javascript" src="<?php echo site_url('vendor/jquery/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo site_url('vendor/bootstrap/js/bootstrap.min.js');?>"></script>
</body>
</html>