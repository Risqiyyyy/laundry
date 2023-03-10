<head>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Print</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="<?= base_url();?>/template/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/template/assets/css/animate.css">
    <link rel="stylesheet" href="<?= base_url();?>/template/assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/template/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/template/assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/template/assets/css/styleku.css">

</head>
<div class="page">
	<div class="content">
		<div class="row">
			<main>
				<!-- detail -->
				<div class="card">
					<div class="card-body">
						<div class="container mb-5">
							<div class="row d-flex align-items-baseline">
								<div class="col-xl-9">
									<p style="color: #7e8d9f;font-size: 20px;">Invoice >> <strong>Code:
											<?= $trans['kode_invoice']?></strong></p>
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
										<ul class="list-unstyled float-start">
											<li class="text-muted">Member : <span
													style="color:#5d9fc5 ;"><?= $trans['nama_member']?></span></li>
											<li class="text-muted">Outlet : <?= $trans['nama_outlet']?></li>
											<li class="text-muted">Nama Kasir : <?= $trans['nama_user']?></li>
											<li class="text-muted"><i class="fas fa-phone"></i> 123-456-789</li>
										</ul>
									</div>
									<div class="col-xl-4 ">
										<ul class="list-unstyled float-end">
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
										<ul class="list-unstyled ">
											<li class="text-muted ms-3"><span class="text-black me-4 " >Diskon </span>
												-<?= $trans['diskon']?></li>
											<li class="text-muted ms-3 mt-2"><span
													class="text-black me-4">Pajak</span>-<?= $trans['pajak']?></li>
										</ul>
										<p class="text-black float-end"><span class="text-black me-3"> Total
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
<script>
	window.print();
</script>
