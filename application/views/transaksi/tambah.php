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
                        <li class="breadcrumb-item active">tambah paket transaksi</li>
                    </ol>
                    <!-- modal -->

                    <div class="card">
							<div class="card-body">
                            <form action="<?php echo base_url('transaksi/tambah'); ?>" method="POST">
								<div class="row">
									<div class="col-lg-3 col-sm-6 col-12">
										<div class="form-group">
											<label>Outlet</label>
											<select class="form-control" name="id_outlet" required>
                                                        <option value="">No Selected</option>
                                                        <?php foreach($outlet as $row):?>
                                                        <option value="<?php echo $row->id;?>">
                                                            <?php echo $row->nama;?></option>
                                                        <?php endforeach;?>
                                                    </select>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 col-12">
										<div class="form-group">
                                        <?php
                                         $result = uniqid();
                                        ?>
                                                    <label clas="row">Kode Invoice</label>
                                                    <input type="text"  name="kode_invoice" value="<?php echo $result?>"
                                                        placeholder="Kode Invoice" required>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 col-12">
										<div class="form-group">
											<label>Member</label>
											<select class="form-control" name="id_member" required>
                                                        <option value="">No Selected</option>
                                                        <?php foreach($member as $row){?>
                                                        <option value="<?php echo $row->id;?>">
                                                            <?php echo $row->nama;?></option>
                                                        <?php }?>
                                                    </select>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 col-12">
										<div class="form-group">
                                        <label clas="row">Tanggal</label>
                                                    <input type="date" class="form-control" name="tgl"
                                                        placeholder="Tanggal">
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 col-12">
										<div class="form-group">
                                        <label clas="row">Batas Waktu</label>
                                                    <input type="date" class="form-control" name="batas_waktu"
                                                        placeholder="Batas Waktu">
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 col-12">
										<div class="form-group">
                                        <label clas="row">Tanggal Bayar</label>
                                                    <input type="date" class="form-control" name="tgl_bayar"
                                                        placeholder="Tanggal Bayar">
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 col-12">
										<div class="form-group">
                                        <label clas="row">Biaya Tambahan</label>
                                                    <input type="text" class="form-control" name="biaya_tambahan"
                                                        placeholder="Biaya Tambahan">
										</div>
									</div>
                                    <div class="col-lg-3 col-sm-6 col-12">
										<div class="form-group">
                                        <label clas="row">Paket</label>
                                                    <select class="form-control" name="id_paket" required>
                                                        <option value="">No Selected</option>
                                                        <?php foreach($paket as $row):?>
                                                        <option value="<?php echo $row->id;?>">
                                                            <?php echo $row->jenis;?></option>
                                                        <?php endforeach;?>
                                                    </select>
                                        </div>
									</div>
                                    <div class="col-lg-3 col-sm-6 col-12">
										<div class="form-group">
                                        <label clas="row">QTY</label>
                                                    <input type="text" class="form-control" name="qty"
                                                        placeholder="QTY">
                                         </div>
									</div>
                                    <div class="col-lg-3 col-sm-6 col-12">
										<div class="form-group">
                                        <label clas="row">Diskon</label>
                                                    <input type="text" class="form-control" name="diskon"
                                                        placeholder="Diskon">
                                         </div>
									</div>
                                    <div class="col-lg-3 col-sm-6 col-12">
										<div class="form-group">
                                        <label clas="row">Pajak</label>
                                                    <input type="text" class="form-control" name="pajak"
                                                        placeholder="Pajak">
                                         </div>
									</div>
                                    <div class="col-lg-3 col-sm-6 col-12">
										<div class="form-group">
                                        <label clas="row">Bayar</label>
                                                    <select class="form-control" name="dibayar" required>
                                                        <option>No Selected</option>
                                                        <option value="dibayar">Dibayar</option>
                                                        <option value="belum_dibayar">Belum Bayar</option>
                                                    </select>
                                         </div>
									</div>
                                    <div class="col-lg-3 col-sm-6 col-12">
										<div class="form-group">
                                        <label clas="row">User</label>
                                                    <select class="form-control" name="id_user" required>
                                                        <option value="">No Selected</option>
                                                        <?php foreach($user as $row):?>
                                                        <option value="<?php echo $row->id_user;?>">
                                                            <?php echo $row->nama_user;?></option>
                                                        <?php endforeach;?>
                                                    </select>
									</div>
                                    <div>
                                    <button type="submit" class="btn btn-primary" name="submit">Input
                                            Data</button>
                                    </div>
	
								    </div>
                                </form>
							</div>
						</div>

                    <!-- end modal -->
                    <!-- main -->
                    <!-- <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="<?php echo base_url('transaksi/tambah'); ?>" method="POST">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group col row-3">
                                                    <label clas="row">Outlet</label>
                                                    <select class="form-control" name="id_outlet" required>
                                                        <option value="">No Selected</option>
                                                        <?php foreach($outlet as $row):?>
                                                        <option value="<?php echo $row->id;?>">
                                                            <?php echo $row->nama;?></option>
                                                        <?php endforeach;?>
                                                    </select>
                                                </div>
                                                <div class="form-group col row-3">
                                                        <?php
                                                        $result = uniqid();
                                                        ?>
                                                    <label clas="row">Kode Invoice</label>
                                                    <input type="text" class="form-control" name="kode_invoice" value="<?php echo $result?>"
                                                        placeholder="Kode Invoice" required>
                                                </div>
                                                <div class="form-group col row-3">
                                                    <label clas="row">Member</label>
                                                    <select class="form-control" name="id_member" required>
                                                        <option value="">No Selected</option>
                                                        <?php foreach($member as $row){?>
                                                        <option value="<?php echo $row->id;?>">
                                                            <?php echo $row->nama;?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                                <div class="form-group col row-3">
                                                    <label clas="row">Tanggal</label>
                                                    <input type="date" class="form-control" name="tgl"
                                                        placeholder="Tanggal">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group col row-3">
                                                    <label clas="row">Batas Waktu</label>
                                                    <input type="date" class="form-control" name="batas_waktu"
                                                        placeholder="Batas Waktu">
                                                </div>
                                                <div class="form-group col row-3">
                                                    <label clas="row">Tanggal Bayar</label>
                                                    <input type="date" class="form-control" name="tgl_bayar"
                                                        placeholder="Tanggal Bayar">
                                                </div>
                                                <div class="form-group col row-3">
                                                    <label clas="row">Biaya Tambahan</label>
                                                    <input type="text" class="form-control" name="biaya_tambahan"
                                                        placeholder="Biaya Tambahan">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row ">
                                            <div class="col">
                                                <div class="form-group col row ">
                                                    <label clas="row">Paket</label>
                                                    <select class="form-control" name="id_paket" required>
                                                        <option value="">No Selected</option>
                                                        <?php foreach($paket as $row):?>
                                                        <option value="<?php echo $row->id;?>">
                                                            <?php echo $row->jenis;?></option>
                                                        <?php endforeach;?>
                                                    </select>
                                                </div>
                                                <div class="form-group col row">
                                                    <label clas="row">QTY</label>
                                                    <input type="text" class="form-control" name="qty"
                                                        placeholder="QTY">
                                                </div>
                                                <div class="form-group col row">
                                                    <label clas="row">Diskon</label>
                                                    <input type="text" class="form-control" name="diskon"
                                                        placeholder="Diskon">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group col row">
                                                    <label clas="row">Pajak</label>
                                                    <input type="text" class="form-control" name="pajak"
                                                        placeholder="Pajak">
                                                </div>
                                                <div class="form-group col row">
                                                    <label clas="row">Bayar</label>
                                                    <select class="form-control" name="dibayar" required>
                                                        <option>No Selected</option>
                                                        <option value="dibayar">Dibayar</option>
                                                        <option value="belum_dibayar">Belum Bayar</option>
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
                                        <button type="submit" class="btn btn-primary" name="submit">Input
                                            Data</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- main end -->
                </div>
            </main>
            <!--  -->
        </div>
    </div>
</div>

<?php $this->load->view('_partials/end.php'); ?>