<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>
<?php $this->load->view('_partials/sidebar.php'); ?>
			<div class="page-wrapper">
				<div class="content">
					<div class="row">
						<div class="col-lg-3 col-sm-6 col-12 d-flex">
							<div class="dash-count">
								<div class="dash-counts">
									<h4>100</h4>
									<h5>Customers</h5>
								</div>
								<div class="dash-imgs"><i data-feather="user"></i></div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 col-12 d-flex">
							<div class="dash-count das1">
								<div class="dash-counts">
									<h4>100</h4>
									<h5>Suppliers</h5>
								</div>
								<div class="dash-imgs"><i data-feather="user-check"></i></div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 col-12 d-flex">
							<div class="dash-count das2">
								<div class="dash-counts">
									<h4>100</h4>
									<h5>Purchase Invoice</h5>
								</div>
								<div class="dash-imgs"><i data-feather="file-text"></i></div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 col-12 d-flex">
							<div class="dash-count das3">
								<div class="dash-counts">
									<h4>105</h4>
									<h5>Sales Invoice</h5>
								</div>
								<div class="dash-imgs"><i data-feather="file"></i></div>
							</div>
						</div>
					</div>
					<div class="card mb-0">
						<div class="card-body">
							<h4 class="card-title">Expired Products</h4>
							<div class="table-responsive dataview">
								<table class="table datatable ">
									<thead>
										<tr>
											<th>SNo</th>
											<th>Product Code</th>
											<th>Product Name</th>
											<th>Brand Name</th>
											<th>Category Name</th>
											<th>Expiry Date</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><a href="javascript:void(0);">IT0001</a></td>
											<td class="productimgname"><a class="product-img"
													href="productlist.html"><img src="assets/img/product/product2.jpg"
														alt="product"></a><a href="productlist.html">Orange</a></td>
											<td>N/D</td>
											<td>Fruits</td>
											<td>12-12-2022</td>
										</tr>
										<tr>
											<td>2</td>
											<td><a href="javascript:void(0);">IT0002</a></td>
											<td class="productimgname"><a class="product-img"
													href="productlist.html"><img src="assets/img/product/product3.jpg"
														alt="product"></a><a href="productlist.html">Pineapple</a></td>
											<td>N/D</td>
											<td>Fruits</td>
											<td>25-11-2022</td>
										</tr>
										<tr>
											<td>3</td>
											<td><a href="javascript:void(0);">IT0003</a></td>
											<td class="productimgname"><a class="product-img"
													href="productlist.html"><img src="assets/img/product/product4.jpg"
														alt="product"></a><a href="productlist.html">Stawberry</a></td>
											<td>N/D</td>
											<td>Fruits</td>
											<td>19-11-2022</td>
										</tr>
										<tr>
											<td>4</td>
											<td><a href="javascript:void(0);">IT0004</a></td>
											<td class="productimgname"><a class="product-img"
													href="productlist.html"><img src="assets/img/product/product5.jpg"
														alt="product"></a><a href="productlist.html">Avocat</a></td>
											<td>N/D</td>
											<td>Fruits</td>
											<td>20-11-2022</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <?php $this->load->view('_partials/end.php'); ?>
		
