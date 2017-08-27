<?php 
	$pro_id 				= $product->pro_id;
if($this->input->post('is_submitted'))
{
		$pro_name 			= set_value('pro_name');
		$pro_title			= set_value('pro_title');
		$pro_description	= set_value('pro_description');
		$pro_price			= set_value('pro_price');
		$pro_stock			= set_value('pro_stock');
}else{

		$pro_name 			= $product->pro_name;
		$pro_title			= $product->pro_title;
		$pro_description	= $product->pro_description;
		$pro_price			= $product->pro_price;
		$pro_stock			= $product->pro_stock;
	
}//end if 	is_submitted
	
?>
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
	<!-- load for table and search in table -->
	<script type="text/javascript" language="javascript" src="<?php echo base_url('/assets/js/jquery-1.10.2.min.js');?>"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url('/assets/js/jquery.dataTables.min.js');?>"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url('/assets/js/dataTables.bootstrap.js');?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/dataTables.bootstrap.css');?>">
</head>

	
	<body>
		
		<!-- Navigation -->
		<?php $this->load->view('layout/navigation')?>
		<!-- Header- dash_menu -->
		<?php $this->load->view('layout/dash_menu')?>
		<!-- Page Content -->
		<div class="container">
			<!-- /.row -->
			<div class="row">
				<!-- body items -->
	
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>
								<i class="fa fa-archive"></i>  Edit Produk
							</h4>
						</div><!-- /..panel-heading -->
						<div class="panel-body">
						<div><?= validation_errors()?></div>
						<?=  form_open_multipart('admin/products/edit/'.$pro_id,['class'=>'form-group']) ?>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon" style="min-width:150px;text-align:left;">Kategori</div>
									<input type="text" class="form-control" name="pro_name" placeholder="" value="<?= $pro_name ?>">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon" style="min-width:150px;text-align:left;">Nama Produk</div>
									<input type="text" class="form-control" name="pro_title" placeholder="" value="<?= $pro_title ?>">
								</div>
							</div>
						
							<div class="form-group">
								<div class="input-group">
								<div class="input-group-addon" style="min-width:150px;text-align:left;">Deskripsi</div>
									<textarea rows="4" class="form-control col-md-12" name="pro_description" placeholder="Tambahkan Keterangan"><?= $pro_description ?></textarea>
								</div>
							</div>
							
							<div class="form-inline">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon">Harga</div>
									<input type="text" class="form-control" name="pro_price" placeholder="" value="<?= $pro_price ?>">
									<div class="input-group-addon">Rp</div>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon">Available Stock</div>
									<input type="text" class="form-control" name="pro_stock" value="<?= $pro_stock ?>">
								</div>
							</div>
							
							<div class="form-group">
								<div class="input-group">
									<input type="file" name="userfile">
								</div>
							</div>
							
							<div class="form-group">
								<div class="input-group">
									<input type="hidden" name="is_submitted" value="1">
									<button type="submit" class="btn btn-success">Update</button>&nbsp;
									<?=  anchor('admin/products','Cancel',['class'=>'btn btn-danger']) ?>
								</div>
							</div>
							
							</div>
							
						
						<?= form_close() ?>
						</div><!-- /..panel-body -->
					</div><!-- /..panel panel-default -->
				</div> 
				
			</div>
			<!-- /.row -->
			<hr>
			<!-- Footer -->
			<?php $this->load->view('layout/footer')?>
			
		</div>
		<!-- /.. container -->
		
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>