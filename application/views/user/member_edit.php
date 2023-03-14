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
					<h1 class="mt-4">EDIT MEMBER</h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item active">Edit Data Member</li>
					</ol>
					<!-- modal -->
                    <?php foreach($user as $u){ ?>
                    <form action="<?= base_url('user/update_member'); ?>" method="post">
									<div class="modal-body">
										<div class="form-row">
											<div class="form-group">
												<label>Nama Lengkap</label>
                                                <input type="hidden" name="id" value="<?php echo $u->id ?>">
												<input type="text" class="form-control" name="nama" value="<?php echo $u->nama ?>">
											</div>
											<div class="form-group">
												<label>Alamat</label>
												<input type="text" class="form-control" name="alamat" value="<?php echo $u->alamat ?>">
											</div>
											<div class="form-group">
												<label>Nomor Telpon</label>
												<input type="text" class="form-control" name="tlp" value="<?php echo $u->tlp ?>">
											</div>

											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-bs-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Update
													Data</button>
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
