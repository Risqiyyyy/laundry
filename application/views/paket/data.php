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
                    <h1 class="mt-4">PAKET</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Semua Paket</li>
                        </ol>
						<!-- modal -->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
						Tambah Paket
						</button>

						<!-- Modal -->
						<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
								<h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<form action="<?php echo base_url('paket/tambah'); ?>" method="POST">
                                    <div class="modal-body">
                                        <div class="form-row">
                                                <div class="form-group" hidden>
                                                <label>Outlet</label>
												<select class="form-control" name="id_outlet">
                                                    <option value="">No Selected</option>
														<?php foreach($outlet as $row){?>
														<option value="<?php echo $row->id;?>">
															<?php echo $row->nama;?></option>
														<?php }?>
													</select>
												</div>
                                                <div class="form-group">
                                                <label>Jenis Paket</label>
												<select class="form-control" name="jenis">
                                                    <option value="">No Selected</option>
													<option value="kiloan">Kiloan</option>
													<option value="satuan">Satuan</option>
													</select>
                                                </div>
                                                <div class="form-group">
                                                <label >Nama Paket</label>
                                                    <input type="text" class="form-control" name="nama_paket" placeholder="No Telpon">
                                                </div>
                                                <div class="form-group">
                                                <label >Harga</label>
                                                    <input type="text" class="form-control" name="harga" placeholder="Harga">
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
												<!-- <th>Outlet</th> -->
												<th>Jenis</th>
												<th>Nama Paket</th>
                                                <th>Harga</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<?php 
										$no = 1;
										foreach($paket as $u){ 
										?>
										<tbody>
											<tr>
												<td><?php echo $no++ ?></td>
												<!-- <td><?php echo $u->nama ?></td> -->
												<td><?php echo $u->jenis ?></td>
												<td><?php echo $u->nama_paket ?></td>
                                                <td><?php echo $u->harga ?></td>
												<td>
												<a href="<?php echo base_url(); ?>paket/edit_paket/<?php echo $u->id; ?>"><i data-feather="edit"></i></a>
												<a href="<?php echo base_url(); ?>paket/hapus/<?php echo $u->id; ?>"><i data-feather="trash-2"></i></a>
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