<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>
<?php $this->load->view('_partials/sidebar.php'); ?>
<div class="page-wrapper">
    <div class="content">
    <?php if($this->session->userdata('role') == "admin" || $this->session->userdata('role') == "kasir" || $this->session->userdata('role') == "owner") {?>
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count das2">
                    <div class="dash-counts">
                        <h4><?= $this->db->get('tb_member')->num_rows()?></h4>
                        <h5>Member</h5>
                    </div>
                    <div class="dash-imgs"><i data-feather="user"></i></div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count das1">
                    <div class="dash-counts">
                        <h4><?= $this->db->get('tb_user')->num_rows()?></h4>
                        <h5>User</h5>
                    </div>
                    <div class="dash-imgs"><i data-feather="user-check"></i></div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count das2">
                    <div class="dash-counts">
                        <h4><?= $this->db->get('tb_transaksi')->num_rows()?></h4>
                        <h5>Transaksi</h5>
                    </div>
                    <div class="dash-imgs"><i data-feather="file-text"></i></div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count das">
                    <div class="dash-counts">
                        <h4><?= $this->db->get('tb_outlet')->num_rows()?></h4>
                        <h5>Outlet</h5>
                    </div>
                    <div class="dash-imgs"><i data-feather="file"></i></div>
                </div>
            </div>
        </div>
        <?php }?>
        <!-- END  -->
        <?php if($this->session->userdata('role') == "member"){?>
        <!-- MEMBER -->
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
                            <form action="<?php echo base_url('transaksi/tambah_transaksi_user'); ?>" method="POST">
								<div class="row">
									<div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                    <label>Outlet</label>
												<select class="form-control" name="id_outlet">
                                                    <option value="">No Selected</option>
														<?php foreach($outlet as $row){?>
														<option value="<?php echo $row->id;?>">
															<?php echo $row->nama;?></option>
														<?php }?>
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
                                                        placeholder="Kode Invoice" readonly>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 col-12">
										<div class="form-group">
											<label>Member</label>
											<input type="text" value="<?= $this->session->userdata('id')?>" name="id_member">
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 col-12">
										<div class="form-group">
                                        <label clas="row">Tanggal</label>
                                                    <input type="text" class="form-control" name="tgl" value="<?php echo date('m/d/y');?>"
                                                        placeholder="<?php echo date('m/d/y');?>" readonly>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 col-12" hidden>
										<div class="form-group">
                                        <label clas="row">Batas Waktu</label>
                                                    <input type="date" class="form-control" name="batas_waktu"
                                                        placeholder="Batas Waktu">
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 col-12" hidden>
										<div class="form-group">
                                        <label clas="row">Tanggal Bayar</label>
                                                    <input type="date" class="form-control" name="tgl_bayar"
                                                        placeholder="Tanggal Bayar">
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 col-12" hidden>
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
                                    <div class="col-lg-3 col-sm-6 col-12" hidden>
										<div class="form-group">
                                        <label clas="row">Diskon</label>
                                                    <input type="text" class="form-control" name="diskon"
                                                        placeholder="Diskon">
                                         </div>
									</div>
                                    <div class="col-lg-3 col-sm-6 col-12" hidden>
										<div class="form-group">
                                        <label clas="row">Pajak</label>
                                                    <input type="text" class="form-control" name="pajak"
                                                        placeholder="Pajak">
                                         </div>
									</div>
                                    <div class="col-lg-3 col-sm-6 col-12" hidden>
										<div class="form-group">
                                        <label clas="row">Status Pembayaran</label>
                                                    <select class="form-control" name="dibayar">
                                                        <option value="belum_dibayar">Belum Bayar</option>
                                                    </select>
                                         </div>
									</div>
                                    <div class="col-lg-3 col-sm-6 col-12" >
										<div class="form-group" hidden>
                                        <label clas="row">User</label>
                                        <input type="text" value="<?= $this->session->userdata('id')?>" name="id_user" placeholder="<?= $this->session->userdata('role')?>"  readonly>
									    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary" name="submit">Input
                                            Data</button>
                                    </div>
								    </div>
                                </form>
							</div>
						</div>
                </div>
            </main>
            <!--  -->
        </div>
        <?php }?>
        <!-- end -->


    </div>
</div>
</div>
<?php $this->load->view('_partials/end.php'); ?>