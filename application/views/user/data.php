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
                    <h1 class="mt-4">User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Semua User</li>
                        </ol>
						<!-- modal -->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
						Tambah User
						</button>

						<!-- Modal -->
						<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
								<h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah User</h1>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<form action="<?php echo base_url('user/tambah'); ?>" method="post">
                                    <div class="modal-body">
                                        <div class="form-row">
                                                <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                                                </div>
                                                <div class="form-group">
                                                <label>Username</label>
                                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                                </div>
                                                <div class="form-group">
                                                <label >Password</label>
                                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                                </div>

												<div class="form-group">
													<label>Outlet</label>
													<select class="form-control" name="id_outlet" required>
														<option value="">No Selected</option>
														<?php foreach($outlet as $row):?>
														<option value="<?php echo $row->id;?>"><?php echo $row->nama;?></option>
														<?php endforeach;?>
													</select>
												</div>

												<div class="form-group">
													<label>Role</label>
													<select class="form-control" name="role" required>
														<option value="">No Selected</option>
														<option value="admin">Admin</option>
														<option value="kasir">Kasir</option>
														<option value="owner">Owner</option>
														<option value="Kurir">Kurir</option>
													</select>
												</div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="submit">Input Data</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
							</div>
						</div>
						</div>
						<!-- end -->
									<!-- tabel -->
					<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table  datanew ">
										<thead>
											<tr>
												<th>NO</th>
												<th>Nama</th>
												<th>Username</th>
												<th>Outlet</th>
												<th>Role</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<?php 
										$no = 1;
										foreach($user as $u){ 
										?>
										<tbody>
											<tr>
												<td><?php echo $no++ ?></td>
												<td><?php echo $u->nama_user ?></td>
												<td><?php echo $u->username ?></td>
												<td><?php echo $u->nama_outlet ?></td>
												<td><?php echo $u->role ?></td>
												<td>
												<a href="<?php echo base_url(); ?>user/edit_user/<?php echo $u->id_user; ?>"><i data-feather="edit"></i></a>
												<a href="<?php echo base_url(); ?>user/hapus/<?php echo $u->id_user; ?>"><i data-feather="trash-2"></i></a>
												</td>
											</tr>
										</tbody>
										<?php } ?>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
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