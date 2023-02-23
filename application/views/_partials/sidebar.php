<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class=""><a href="<?= base_url('dashboard')?>"><img
							src="<?= base_url();?>/template/assets/img/icons/dashboard.svg"
							alt="img"><span>Dashboard</span></a></li>
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
						<li><a href="">Status Transaksi</a></li>
					</ul>
				</li>
				<?php }?>
				<li class=""><a href="<?= base_url('laporan')?>"><i data-feather="book"></i><span>Laporan</span></a>
				</li>
			</ul>
		</div>
	</div>
</div>
