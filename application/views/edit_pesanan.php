<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    
  <link rel="stylesheet" type="text/css" href=" <?php echo site_url('css/bootstrap.min.css');?>">

 
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">
            <?php echo form_open('index.php/page/update_pesanan') ?>

                <input type="hidden" value="<?php echo $dashboard->nomor_pesanan ?>" name="nomor_pesanan">
                <input type="hidden" value="<?php echo $dashboard->id_pesanan ?>" name="id_pesanan">

              <div class="form-group">
                <label for="text">Nomor Meja</label>
                <input type="text" name="nomor_meja" value="<?php echo $dashboard->nomor_meja ?>" class="form-control">
              </div>

               <div class="form-group">
                <label for="text">Pesanan</label>
                <br>
                <select name="pesanan" value="<?php echo $dashboard->pesanan ?>" required>
                <?php 
                foreach($menu as $menu){ if($menu->stok == 'Tersedia'){ ?>
                <option>  <?php echo $menu->nama_menu; } ?></option>
                <?php } ?>
                </select>
              </div>

               <div class="form-group">
                   <label for="text">Status</label>
                   <br>
                    <select name="status" required>
                        <option>Aktif</option>
                        <option>Selesai</option>
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