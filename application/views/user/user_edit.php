<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>
<?php $this->load->view('_partials/sidebar.php'); ?>
<div class="page-wrapper">
	<div class="content">
		<div class="row">
			<!-- modal -->
			<main>
				<div class="container-fluid">
					<h1 class="mt-4">User</h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item active">Update Data User</li>
					</ol>
					<section class="signup">
						<div class="container">
							<div class="signup-content">
								<div class="signup-form">
									<?php foreach($user as $u) {?>
									<form method="POST" class="register-form"
										action="<?= base_url('user/update_user')?>">
										<div class="form-group">
											<label for="name">Nama User</label>
                                            <input type="hidden" name="id" value="<?php echo $u->id ?>">
											<input type="text" name="nama" value="<?php echo $u->nama ?>" />
										</div>
										<div class="form-group">
											<label for="name">Username</i></label>
											<input type="text" name="username"
												value="<?php echo $u->username ?>" />
										</div>
										<div class="form-group">
											<label for="pass">ID_outlet</i></label>
											<input type="text" id="pass" value="<?php echo $u->id_outlet ?>" readonly />
										</div>
										<div class="form-group">
											<label for="pass">Role</i></label>
											<input type="text" id="pass" value="<?php echo $u->role ?>" readonly />
										</div>
										<div class="form-group form-button">
											<button type="submit" class="btn btn-primary" name="submit">Edit
												Data</button>
											<a class="btn btn-danger" href="<?php echo base_url('user'); ?>">Kembali</a>
										</div>
									</form>
									<?php } ?>

								</div>
							</div>
						</div>
					</section>

					<!-- end tabel -->
				</div>
			</main>
			<!--  -->
		</div>
	</div>
</div>

<?php $this->load->view('_partials/end.php'); ?>
<script>
	var myModal = document.getElementById('myModal')
	var myInput = document.getElementById('myInput')

	myModal.addEventListener('shown.bs.modal', function () {
		myInput.focus()
	})

</script>
