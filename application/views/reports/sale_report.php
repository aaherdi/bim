<br>
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success <?= (empty($this->session->flashdata('sukses')) ? "d-none" : ""); ?>" id="box_msg_sukses">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Sukses</h5>
                    <span id="msg_sukses"><?php echo $this->session->flashdata('sukses'); ?></span>
                </div>
                <div class="alert alert-danger <?= (empty($this->session->flashdata('gagal')) ? "d-none" : ""); ?>" id="box_msg_gagal">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> Gagal</h5>
                    <span id="msg_sukses"><?php echo $this->session->flashdata('gagal'); ?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Laporan Transaksi Penjualan</h3>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        Tanggal Awal <font color="#f00">*</font>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <input type="date" class="form-control" id="tgl_start" name="tgl_start">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        Tanggal Akhir <font color="#f00">*</font>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="date" class="form-control" id="tgl_end" name="tgl_end">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="javascript:;" class="btn btn-success" onclick="simpanData();">
                                            <i class="fa fa-search"></i> Proses
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>">
            </div>
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title">Histori Penjualan</h3>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">No.</th>
                            <th>Invoice</th>
                            <th>Total Pembayaran</th>
                            <th>Catatan</th>
                            <th>Tanggal</th>
                            <th>Kasir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($sale as $s) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td id="invoice"><?= $s->invoice; ?></td>
                                <!-- <td style="text-align: center;"><?= $s->customer_name != null ? $s->customer_name : "Umum"; ?></td> -->
                                <td><?= indo_currency($s->final_price) ?></td>
                                <td><?= $s->note; ?></td>
                                <td style="text-align: center;"><?= indo_date($s->date) ?></td>
                                <td align="center">
                                    <h5><span class="badge badge-secondary"><?= $s->user_name; ?></span></h5>
                                </td>
                                <td align="center">
                                    <!-- <a class="btn btn-default btn-sm" onclick="showDetail(<?= $s->sale_id; ?>)"><i class=" fa fa-eye"> Detail</i>
                                    </a> -->
                                    <a class="btn btn-default btn-sm" href="<?= site_url('reports/detail_invoice/' . $s->sale_id); ?>" target="_blank"> <i class=" fa fa-print"> Struk</i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-detail">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Transaksi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th>Barang</th>
                                <td>:</td>
                                <td>
                                    <span id="item_name">&nbsp;</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td>:</td>
                                <td>
                                    <span id="price">&nbsp;</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Kuantitas</th>
                                <td>:</td>
                                <td>
                                    <span id="qty">&nbsp;</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Diskon </th>
                                <td>:</td>
                                <td>
                                    <span id="disc">&nbsp;</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Total Pembayaran </th>
                                <td>:</td>
                                <td>
                                    <span id="total">&nbsp;</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function simpanData() {
            if ($.trim($("#tgl_start").val()) == "") {
                alert('tanggal awal harus diisi')
            } else if ($.trim($("#tgl_end").val()) == "") {
                alert('tanggal akhir harus diisi')
            } else {
                var s = $('#tgl_start').val();
                var e = $('#tgl_end').val();
                window.open('<?= site_url(); ?>reports/print_laporan_penjualan?ts=' + s + '&te=' + e, '_blank');
            };
        };
    </script>