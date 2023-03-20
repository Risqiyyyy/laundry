<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>
<?php $this->load->view('_partials/sidebar.php'); ?>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">DATA TRANSAKSI BARU</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Data Semua Transaksi Status Baru</li>
                    </ol>
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
                                                    <th>Kode Invoice</th>
                                                    <th>Tanggal</th>
                                                    <th>Batas Waktu</th>
                                                    <th>Tanggal Bayar</th>
                                                    <th>Biaya Tambahan</th>
                                                    <th>Diskon</th>
                                                    <th>Pajak</th>
                                                    <th>Status</th>
                                                    <th>Bayar</th>
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
                                                    <td><?php echo $u->kode_invoice ?></td>
                                                    <td><?php echo $u->tgl?></td>
                                                    <td><?php echo $u->batas_waktu ?></td>
                                                    <td><?php echo $u->tgl_bayar ?></td>
                                                    <td><?php echo $u->biaya_tambahan ?></td>
                                                    <td><?php echo $u->diskon ?></td>
                                                    <td><?php echo $u->pajak ?></td>
                                                    <td><?php echo $u->status ?></td>
                                                    <td><?php echo $u->dibayar ?></td>
                                                    <td>
                                                    <a href="<?= site_url('transaksi/proses_update/'.$u->id) ?>" ><i data-feather="loader"></i></a>
                                                        <a href="<?php echo base_url(); ?>transaksi/detail_transaksi/<?php echo $u->id; ?>"><i data-feather="eye"></i></a>
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