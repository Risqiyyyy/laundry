<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>
<?php $this->load->view('_partials/sidebar.php'); ?>
<div class="page-wrapper">
	<div class="content">
		<div class="row">
			<main>
				<div class="container-fluid">
					<h1 class="mt-4">Tambah Transaksi</h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item active">Data Semua Paket</li>
					</ol>
					<!-- modal -->
					
					<!-- end modal -->
					<!-- main -->
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<form action="<?php echo base_url('transaksi/tambah'); ?>" method="POST">
										<div class="row">
											<div class="col">
												<div class="form-group col row">
													<label clas="row">Outlet</label>
													<select class="form-control" name="id_outlet" required>
														<option value="">No Selected</option>
														<?php foreach($outlet as $row):?>
														<option value="<?php echo $row->id;?>">
															<?php echo $row->nama;?></option>
														<?php endforeach;?>
													</select>
												</div>
												<div class="form-group col row">
													<label clas="row">Kode Invoice</label>
													<input type="text" class="form-control" name="kode_invoice"
														placeholder="Kode Invoice" required>
												</div>
												<div class="form-group col row">
													<label clas="row">Member</label>
													<select class="form-control" name="id_member" required>
                                                    <option value="">No Selected</option>
														<?php foreach($member as $row){?>
														<option value="<?php echo $row->id;?>">
															<?php echo $row->nama;?></option>
														<?php }?>
													</select>
												</div>
												<div class="form-group col row">
													<label clas="row">Tanggal</label>
													<input type="date" class="form-control" name="tgl" placeholder="Tanggal">
												</div>

											</div>
										</div>

										<div class="row">
											<div class="col">
												<div class="form-group col row">
													<label clas="row">Batas Waktu</label>
													<input type="date" class="form-control" name="batas_waktu" placeholder="Batas Waktu">
												</div>
												<div class="form-group col row">
													<label clas="row">Tanggal Bayar</label>
													<input type="date" class="form-control" name="tgl_bayar" placeholder="Tanggal Bayar">
												</div>
												<div class="form-group col row">
													<label clas="row">Biaya Tambahan</label>
													<input type="text" class="form-control" name="biaya_tambahan"
														placeholder="Biaya Tambahan">
												</div>
												<!-- <div class="form-group col row">
													<label clas="row">Paket</label>
													<select class="form-control" name="paket" required>
                                                    <option value="">No Selected</option>
													<option value="satuan">Satuan</option>
													<option value="kiloan">Kiloan</option>
													</select>
												</div> -->
											</div>
											
										</div>
										<div class="row">
											<div class="col">
												<div class="form-group col row">
													<label clas="row">Diskon</label>
													<input type="text" class="form-control" name="diskon" placeholder="Diskon">
												</div>
												<div class="form-group col row">
													<label clas="row">Pajak</label>
													<input type="text" class="form-control" name="pajak" placeholder="Pajak">
												</div>
                                                <div class="form-group col row">
													<label clas="row">Status</label>
													<select class="form-control" name="status" required>
                                                    <option >No Selected</option>
                                                    <option value="baru">Baru</option>
                                                    <option value="proses">Di Proses</option>>
													</select>
												</div>
                                                <div class="form-group col row">
													<label clas="row">Bayar</label>
													<select class="form-control" name="dibayar" required>
                                                    <option>No Selected</option>
                                                    <option value="dibayar">Dibayar</option>
                                                    <option value="belum_bayar">Belum Bayar</option>
													</select>
												</div>
                                                
												<div class="form-group col row">
													<label clas="row">User</label>
													<select class="form-control" name="id_user" required>
                                                    <option value="">No Selected</option>
														<?php foreach($user as $row):?>
														<option value="<?php echo $row->id_user;?>">
															<?php echo $row->nama_user;?></option>
														<?php endforeach;?>
													</select>
												</div>
											</div>
										</div>
										<button type="submit" class="btn btn-primary" name="submit">Input Data</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- main end -->
					<!-- tabel -->
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table datanew ">
											<thead>
												<tr>
													<th>NO</th>
													<th>Outlet</th>
													<th>Kode Invoice</th>
                                                    <th>Member</th>
													<th>Tanggal</th>
													<th>Batas Waktu</th>
													<th>Tanggal Bayar</th>
													<th>Biaya Tambahan</th>
													<th>Diskon</th>
													<th>Pajak</th>
													<th>Status</th>
													<th>Bayar</th>
													<th>ID User</th>
													<th>Aksi</th>
												</tr>
											</thead>
											
											<tbody>
												<tr>
                                                <?php 
										$no = 1;
										foreach($transaksi as $u){
										?>
													<td><?php echo $no++ ?></td>
													<td><?php echo $u->nama_outlet ?></td>
													<td><?php echo $u->kode_invoice ?></td>
                                                    <td><?php echo $u->nama_member ?></td>
													<td><?php echo $u->tgl ?></td>
													<td><?php echo $u->batas_waktu ?></td>
													<td><?php echo $u->tgl_bayar ?></td>
													<td><?php echo $u->biaya_tambahan ?></td>
													<td><?php echo $u->diskon ?></td>
													<td><?php echo $u->pajak ?></td>
													<td><?php echo $u->status ?></td>
													<td><?php echo $u->dibayar ?></td>
													<td><?php echo $u->nama_user ?></td>
													<td>
														<a class="btn btn-primary"
															href="<?php echo base_url(); ?>GeneratePdfController/">Cetak</a>
														<a class="btn btn-danger"
															href="<?php echo base_url(); ?>transaksi/hapus/<?php echo $u->transaksi_id;?>">Hapus</a>
                                                            <a class="btn btn-success"
															href="<?php echo base_url(); ?>transaksi/detail_transaksi/<?php echo $u->transaksi_id; ?>">Detail</a>
													</td>
												</tr>
                                                <?php }?>
											</tbody>
											
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
