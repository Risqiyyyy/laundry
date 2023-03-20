<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>
<?php $this->load->view('_partials/sidebar.php'); ?>
<div class="page-wrapper">
	<div class="content">
		<div class="row">
			<main>
				<!-- detail -->

				<div class="card">
					<div class="card-body">
						<div class="container mb-5 mt-3">
							<div class="row d-flex align-items-baseline">
								<div class="col-xl-9">
									<p style="color: #7e8d9f;font-size: 20px;">Invoice >> <strong>Code:
											<?= $trans['kode_invoice']?></strong></p>
								</div>
								<div class="col-xl-3 float-end">
									<a target="_blank" rel="noopener noreferrer" href="<?php echo base_url(); ?>transaksi/print/<?php echo $trans['id']; ?>" class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark" id="print"><i
											class="fas fa-print text-primary"></i> Print</a>
								</div>
								<hr>
							</div>

							<div class="container">
								<div class="col-md-12">
									<div class="text-center">
										<img src="<?= base_url();?>/assets/images/logo-laundry.png" width="100px">
										<p class="pt-0">XY LAUNDRY</p>
									</div>

								</div>


								<div class="row">
									<div class="col-xl-8">
										<ul class="list-unstyled">
											<li class="text-muted">Member : <span
													style="color:#5d9fc5 ;"><?= $trans['nama_member']?></span></li>
											<li class="text-muted">Outlet : <?= $trans['nama_outlet']?></li>
											<!-- <li class="text-muted">Nama Kasir : <?= $trans['nama_user']?></li> -->
											<li class="text-muted"><i class="fas fa-phone"></i> <?= $trans['tlp']?></li>
										</ul>
									</div>
									<div class="col-xl-4">
										<ul class="list-unstyled">
											<li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i>
												<span class="fw-bold">Tanggal Transaksi: </span><?= $trans['tgl']?>
											</li>
											<li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i>
												<span class="fw-bold">Batas Waktu: </span><?= $trans['batas_waktu']?>
											</li>
											<li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i>
												<span class="me-1 fw-bold">Status:</span><span
													class="badge bg-warning text-black fw-bold">
													<?= $trans['status']?></span>
											</li>
											<li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i>
												<span class="me-1 fw-bold">Pembayaran:</span><span
													class="badge bg-warning text-black fw-bold">
													<?= $trans['dibayar']?></span>
											</li>
										</ul>
									</div>
								</div>

								<div class="row my-2 mx-1 justify-content-center">
									<table class="table table-striped table-borderless">
										<thead style="background-color:#84B0CA ;" class="text-white">
											<tr>
												<th scope="col">#</th>
												<th scope="col">Paket</th>
												<th scope="col">Qty</th>
												<th scope="col">Harga Paket</th>
												<th scope="col">Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td><?= $trans['nama_paket']?> <span><?= $trans['jenis']?></span></td>
												<td><?= $trans['qty']?> x</td>
												<td><?= $trans['harga']?></td>
												<td><?= ($trans['qty'] * $trans['harga'] )?></td>
											</tr>
										</tbody>

									</table>
								</div>
								<div class="row">
									<div class="col-xl-8">
									</div>
									<div class="col-xl-3">
										<ul class="list-unstyled">
											<li class="text-muted ms-3"><span class="text-black me-4">Diskon </span>
												-<?= $trans['diskon']?></li>
											<li class="text-muted ms-3 mt-2"><span
													class="text-black me-4">Pajak</span>-<?= $trans['pajak']?></li>
										</ul>
										<p class="text-black float-start"><span class="text-black me-3"> Total
												Bayar</span><span
												style="font-size: 25px;"><?= ($trans['qty'] * $trans['harga'] - $trans['diskon'] - $trans['pajak'] )?></span>
										</p>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-xl-10">
										<p>Thank you for your purchase</p>
									</div>
									<?php if($this->session->userdata('role') == "admin" || $this->session->userdata('role') == "owner"  || $this->session->userdata('role') == "kasir"){ ?>
									<div class="col-xl-2">
                                    <a class="btn btn-primary text-capitalize"  style="background-color:#60bdf3 ;" href="<?php echo base_url(); ?>transaksi/">Kembali</a>
									</div>
										<?php }?>
										<?php if($this->session->userdata('role') == "member" ){?>
									<div class="col-xl-2">
                                    <a class="btn btn-primary text-capitalize"  style="background-color:#60bdf3 ;" href="<?php echo base_url(); ?>dashboard/">Kembali</a>
									</div>
									<?php } ?>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- end detail -->
		</div>
		</main>
		<!--  -->
	</div>
</div>
</div>
</div>
<?php $this->load->view('_partials/end.php'); ?>
