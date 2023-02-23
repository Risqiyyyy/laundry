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
                    <h1 class="mt-4">LAPORAN</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Laporan</li>
                        </ol>

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
												<th>Outlet</th>
												<th>Jenis</th>
												<th>Nama Paket</th>
                                                <th>Harga</th>
												<th>Aksi</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
												<td>
												<a class="btn btn-success" href="">Edit</a>
												<a class="btn btn-danger" href="">Hapus</a>
												</td>
											</tr>
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
		<script>
			var myModal = document.getElementById('myModal')
			var myInput = document.getElementById('myInput')

			myModal.addEventListener('shown.bs.modal', function () {
			myInput.focus()
			})
		</script>