<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Online</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('/assets/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('/assets/css/modern-business.css');?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('/assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    
    .spinner {
  width: 80px;
}
.spinner input {
  text-align: right;
}
.input-group-btn-vertical {
  position: relative;
  white-space: nowrap;
  width: 1%;
  vertical-align: middle;
  display: table-cell;
}
.input-group-btn-vertical > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
  padding: 8px;
  margin-left: -1px;
  position: relative;
  border-radius: 0;
}
.input-group-btn-vertical > .btn:first-child {
  border-top-right-radius: 4px;
}
.input-group-btn-vertical > .btn:last-child {
  margin-top: -2px;
  border-bottom-right-radius: 4px;
}
.input-group-btn-vertical i{
  position: absolute;
  top: 0;
  left: 4px;
}
    
    </style>
    </head>

<body>

    <!-- Navigation Top_Menu -->
    <?php $this->load->view('layout/navigation')?>
    <header  class="container">
            <!-- Indicators -->
            <div class="col-md-2">
            </div> 
            <div class="col-xs-8" >
                <div class="panel panel-default " >
                    <div class="panel-body">
                        <h4><center> CARA PEMBELIAN </center></h4>
                        <div class="btn-toolbar btn-group-lg" role="group" aria-label="" style="text-align: center">
                        <h5>1. Login Terlebih Dahulu</h5>
                        <h5>2. Apabila Belum Memiliki Akun Silahkan Buat di
                        <a href="<?=base_url('register');?>">sini</a></h5>
                        <h5>3. Pilih produk yang diinginkan dan tambahkan ke keranjang</h5>
                        <h5>4. Konfirmasi Pembayaran Dengan Mentransfer Uang Ke Bank Yang Ada Pada Menu</h5>
                        <h4>"Harap Menggunakan E-Mail Yang Dapat Dihubungi"</h4>
                        <h4>"Pengiriman Barang Biasanya Memerlukan Waktu 3-5 Hari"</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div> 
        </header>

</body>
