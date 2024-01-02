<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Dashboard</h1>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<!-- Info boxes -->
		<div class="berhasil-login" data-flashdata="<?= $this->session->flashdata('pesan') ?>">
		</div>
		<div class="row">
			<div class="col-12 col-sm-6 col-md-3">
				<div class="info-box">
					<span class="info-box-icon bg-info elevation-1"><i class="fas fa-th"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Barang</span>
						<span class="info-box-number"><?= $this->fungsi->count_item() ?></span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-12 col-sm-6 col-md-3">
				<div class="info-box mb-3">
					<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-truck"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Supplier</span>
						<span class="info-box-number"><?= $this->fungsi->count_supplier() ?></span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->

			<!-- fix for small devices only -->
			<div class="clearfix hidden-md-up"></div>
			<!-- /.col -->
			<?php if ($this->fungsi->user_login()->level == 1) { ?>
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-plus"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Kasir</span>
							<span class="info-box-number"><?= $this->fungsi->count_user() ?></span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
			<?php } ?>
			<!-- /.col -->
			<!-- /.col -->
		</div>
	</div>
</section>