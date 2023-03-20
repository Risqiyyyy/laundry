<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<?php if($this->session->userdata('role') == "admin" || $this->session->userdata('role') == "kasir" || $this->session->userdata('role') == "owner") {?>
				<li class=""><a href="<?= base_url('dashboard')?>"><img
							src="<?= base_url();?>/template/assets/img/icons/dashboard.svg"
							alt="img"><span>Dashboard</span></a></li>
				<?php } ?>
				<?php if($this->session->userdata('role') == "admin" || $this->session->userdata('role') == "kasir") {?>
				<li class=""><a href="<?= base_url('user/member')?>"><i data-feather="users"></i><span>Member</span></a>
				</li>
				<?php } ?>
				<?php if ($this->session->userdata('role') == "admin") {?>
				<li class=""><a href="<?= base_url('user')?>"><img
							src="<?= base_url();?>/template/assets/img/icons/users1.svg" alt="img"><span>User</span></a>
				</li>
				<li class=""><a href="<?= base_url('outlet')?>"><i data-feather="home"></i><span>Outlet</span></a>
				</li>

				<li class=""><a href="<?= base_url('paket')?>"><img
							src="<?= base_url();?>/template/assets/img/icons/product.svg"
							alt="img"><span>Paket</span></a>
				</li>
				<?php }?>
				<?php if($this->session->userdata('role') == "admin" || $this->session->userdata('role') == "kasir") {?>
				<li class="submenu"><a href="javascript:void(0);"><i
							data-feather="repeat"></i><span>Transaksi</span><span class="menu-arrow"></span></a>
					<ul>
						<li class=""><a href="<?= base_url('transaksi')?>">Tambah Transaksi</a></li>
						<li class=""><a href="<?= base_url('transaksi/pesanan_masuk')?>">Pesanan Masuk
						<span
									class="btn-danger"><?= $this->db->query('SELECT * FROM tb_transaksi where status ="pending" AND id_outlet ='. $this->session->userdata('id_outlet'))->num_rows()?></span>
					</a></li>
						<li>
							<a href="<?= base_url('transaksi/data_baru/')?><?= $this->session->userdata('id')?>">Transaksi
								Baru <span
									class="btn-danger"><?= $this->db->query('SELECT * FROM tb_transaksi where status ="baru" AND id_outlet ='. $this->session->userdata('id_outlet'))->num_rows()?></span>
							</a>
						</li>
						<li><a href="<?= base_url('transaksi/data_proses/')?><?= $this->session->userdata('id')?>">Di
								Proses <span
									class="btn-danger"><?= $this->db->query('SELECT * FROM tb_transaksi where status ="proses" AND id_outlet ='. $this->session->userdata('id_outlet'))->num_rows()?></a>
						</li>
						<li><a href="<?= base_url('transaksi/data_selesai/')?><?= $this->session->userdata('id')?>">Selesai
								<span
									class="btn-danger"><?= $this->db->query('SELECT * FROM tb_transaksi where status ="selesai" AND id_outlet ='. $this->session->userdata('id_outlet'))->num_rows()?></a>
						</li>
						<li><a href="<?= base_url('transaksi/data_diambil/')?><?= $this->session->userdata('id')?>">Diambil
								<span
									class="btn-danger"><?= $this->db->query('SELECT * FROM tb_transaksi where status ="diambil" AND id_outlet ='. $this->session->userdata('id_outlet'))->num_rows()?></a>
						</li>
					</ul>
				</li>
				<?php }?>
				<?php if($this->session->userdata('role') == "admin" || $this->session->userdata('role') == "owner"){ ?>
				<li class=""><a href="<?= base_url('laporan')?>"><i data-feather="book"></i><span>Laporan</span></a>
				</li>
				<?php }?>
				<?php if ($this->session->userdata('role') == "kasir") {?>
				<li class=""><a href="<?= base_url('laporan/laporan_kasir/')?><?= $this->session->userdata('id')?>"><i
							data-feather="book"></i><span>Laporan</span></a>
				</li>
				<?php }?>
				<!-- member -->
				<?php if($this->session->userdata('role') == "member") {?>
				<li class=""><a href="<?= base_url('dashboard')?>"><img
							src="<?= base_url();?>/template/assets/img/icons/dashboard.svg"
							alt="img"><span>Transaksi</span></a></li>
							<li>
								<a href="<?= base_url('member/pesanan/')?><?= $this->session->userdata('id')?>">
									<i data-feather="shopping-cart"></i>
									<span>Pemesanan</span>
								</a>
							</li>
							<li>
								<a href="<?= base_url('member/history/')?><?= $this->session->userdata('id')?>">
									<i data-feather="book"></i>
									<span>History</span>
								</a>
							</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
