<head></head>
<?php $this->load->view('_partials/head.php'); ?>
</head>
<?php $this->load->view('_partials/sidebar.php'); ?>
<div class="page-wrapper">
	<div class="content">
		<div class="row">
			<!-- modal -->
			<main>
				<div class="container-fluid">
					<h1 class="mt-4">EDIT PAKET</h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item active">Edit Data Paket</li>
					</ol>
					<!-- modal -->
                    <?php foreach($paket as $u){ ?>
                    <form action="<?= base_url('paket/update_paket'); ?>" method="post">
									<div class="modal-body">
										<div class="form-row">
											<div class="form-group">
												<label>Jenis Paket</label>
                                                <input type="hidden" name="id" value="<?php echo $u->id ?>">
												<input type="text" class="form-control" name="jenis" value="<?php echo $u->jenis ?>">
											</div>
											<div class="form-group">
												<label>Nama Paket</label>
												<input type="text" class="form-control" name="nama_paket" value="<?php echo $u->nama_paket ?>">
											</div>
											<div class="form-group">
												<label>Harga PAKET</label>
												<input type="text" class="form-control" name="harga" value="<?php echo $u->harga?>">
											</div>

											<div class="modal-footer">
												<button type="submit" class="btn btn-primary">Update
													Data</button>
													<a class="btn btn-danger" href="<?php echo base_url('outlet'); ?>">Kembali</a>
											</div>
										</div>
									</div>
								</form>
                                <?php }?>

				</div>
			</main>
			<!--  -->
		</div>
	</div>
</div>

<?php $this->load->view('_partials/end.php'); ?>
