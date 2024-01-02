<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Stok Barang Masuk</h1>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="float-sm-right">
                    <a href="<?= site_url('in/add') ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"> Tambahkan Stok Masuk</i></a>
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
                            <th>Supplier</th>
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
                                <td><?= $s->supplier_name ?></td>
                                <td><?= $s->detail; ?></td>
                                <td style="text-align: right;"><?= $s->qty ?></td>
                                <td style="text-align: center;"><?= indo_date($s->date) ?></td>
                                <td align="center">
                                    <form action="<?= site_url('stock/stock_in_del') ?>" method="post" class="d-inline">
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
<!-- <script>
    $(document).ready(function() {
        $(document).on('click', '#select-detail', function() {
            var item_id = $(this).data('id');
            var qrcode = $(this).data('qrcode');
            var itemname = $(this).data('itemname');
            var suppliername = $(this).data('suppliername');
            var qty = $(this).data('qty');
            var date = $(this).data('date');
            $('#item_id').val(item_id);
            $('#qrcode').text(qrcode);
            $('#item_name').text(itemname);
            $('#supplier').text(suppliername);
            $('#qty').text(qty);
            $('#date').text(date);
            $('#modal-item').modal('hide');
        })
    });
</script> -->