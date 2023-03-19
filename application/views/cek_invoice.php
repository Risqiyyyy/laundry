<head>
    <meta charset="utf-8">
    <title>Status</title>
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
											</ul>
											<p style="color: #7e8d9f;font-size: 20px;">Invoice >> <strong>Code:
									<?= $trans['kode_invoice']?></strong></p>
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

</body>
</html>