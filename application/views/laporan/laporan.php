<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>
<?php $this->load->view('_partials/sidebar.php'); ?>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Laporan</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Data Laporan berdasarkan outlet</li>
                    </ol>
					<!-- crard -->
					<div class="row">
					<?php foreach ($outlet as $o) { ?>
					<div class="col-sm-6">
						<div class="card">
						<div class="card-body">
							<h5 class="card-title"><td><?php echo $o->nama ?></h5>
							<a href="#" class="btn btn-primary">Lihat data</a>
						</div>
						</div>
					</div>
					<?php }?>
					</div>
					<!-- end card -->
                </div>
            </main>
            <!--  -->
        </div>
    </div>
</div>

<?php $this->load->view('_partials/end.php'); ?>