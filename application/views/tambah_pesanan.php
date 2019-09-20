<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href=" <?php echo site_url('css/bootstrap.min.css');?>">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <form action="<?php echo site_url('index.php/page/simpan_pesanan');?>" method="post">
        <div class="col-md-12">
                 <?php  foreach($nilai as $pesanan){ $a=$pesanan->id_pesanan; $b=1; $c=$a+$b
                  ?>
                <input type="hidden" name="id_pesanan" value="<?php echo $c; ?>">
                <input type="hidden" name="nomor_pesanan" value="<?php echo 'ERP'.date('dmY').'-'.$c; ?>">
             <?php } ?>
              <div class="form-group">
                <label for="text">Nomor Meja</label>
                <input type="text" name="nomor_meja" class="form-control" placeholder="Masukkan Nomor Meja">
              </div>

              <div class="form-group">
                <label for="text">Pesanan</label>
                <br>
                <select name="pesanan" required>
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
              
            
              <button type="submit" class="btn btn-md btn-success">Simpan</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
           </form>
        </div>
    </div>

 <script type="text/javascript" src="<?php echo site_url('vendor/jquery/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo site_url('vendor/bootstrap/js/bootstrap.min.js');?>"></script>
</body>
</html>