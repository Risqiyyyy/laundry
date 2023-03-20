<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>
<?php $this->load->view('_partials/sidebar.php'); ?>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Pesanan Anda</h1>
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
                                                    <th>Biaya Tambahan</th>
                                                    <th>Diskon</th>
                                                    <th>Status</th>
                                                    <th>Bayar</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <?php 
										$no = 1;
										foreach($trans as $u){
										?>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $u->kode_invoice ?></td>
                                                    <td><?php echo $u->tgl ?></td>
                                                    <td><?php echo $u->biaya_tambahan ?></td>
                                                    <td><?php echo $u->diskon ?></td>
                                                    <td><?php echo $u->status ?></td>
                                                    <td><?php echo $u->dibayar ?></td>
                                                    <td>
                                                        <?php ?>
                                                        <a
                                                            href="<?php echo base_url(); ?>member/detail_transaksi/<?php echo $u->id; ?>"><i data-feather="eye"></i></a>
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