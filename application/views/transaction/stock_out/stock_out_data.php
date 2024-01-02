<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Barang Keluar</h1>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="float-sm-right">
                    <a href="<?= site_url('out/add') ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"> Tambahkan Data Barang Keluar</i></a>
                </div>
            </div>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>">
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">No.</th>
                            <th>Qrcode</th>
                            <th>Nama Barang</th>
                            <th>Keterangan</th>
                            <th>Kuantitas</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($stock as $s) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $s->qrcode; ?></td>
                                <td><?= $s->item_name ?></td>
                                <td><?= $s->detail; ?></td>
                                <td style="text-align: right;"><?= $s->qty ?></td>
                                <td style="text-align: center;"><?= indo_date($s->date) ?></td>
                                <td align="center">
                                    <form action="<?= site_url('stock/stock_out_del') ?>" method="post" class="d-inline">
                                        <input type="hidden" name="stock_id" value="<?= $s->stock_id; ?>">
                                        <input type="hidden" name="item_id" value="<?= $s->item_id; ?>">
                                        <button class="btn btn-danger btn-sm tombol-hapus" type="submit">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>