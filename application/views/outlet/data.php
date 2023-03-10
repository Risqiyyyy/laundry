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
                    <h1 class="mt-4">OUTLET</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Semua Outlet</li>
                        </ol>
						<!-- modal -->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
						Tambah Outlet
						</button>

						<!-- Modal -->
						<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
								<h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<form action="<?php echo base_url('outlet/tambah'); ?>" method="POST">
                                    <div class="modal-body">
                                        <div class="form-row">
                                                <div class="form-group">
                                                <label>Nama Outlet</label>
                                                    <input type="text" class="form-control" name="nama" placeholder="Nama Outlet">
                                                </div>
                                                <div class="form-group">
                                                <label>Alamat</label>
                                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                                                </div>
                                                <div class="form-group">
                                                <label >No Telpon</label>
                                                    <input type="text" class="form-control" name="tlp" placeholder="No Telpon">
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
												<th>Nama Outlet</th>
												<th>Alamat</th>
												<th>No Telpon</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<?php 
										$no = 1;
										foreach($outlet as $u){ 
										?>
										<tbody>
											<tr>
												<td><?php echo $no++ ?></td>
												<td><?php echo $u->nama ?></td>
												<td><?php echo $u->alamat ?></td>
												<td><?php echo $u->tlp ?></td>
												<td>
												<a class="btn btn-success" href="<?php echo base_url(); ?>outlet/edit/<?php echo $u->id; ?>">Edit</a>
												<a class="btn btn-danger" href="<?php echo base_url(); ?>outlet/hapus/<?php echo $u->id; ?>">Hapus</a>
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