<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>
<?php $this->load->view('_partials/sidebar.php'); ?>
<div class="page-wrapper">
    <div class="content">
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
        <!-- end -->


    </div>
</div>
</div>
<?php $this->load->view('_partials/end.php'); ?>