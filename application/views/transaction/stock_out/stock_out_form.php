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
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">
                    Data Barang Keluar
                </h3>
                <div class="float-sm-right">
                    <a href="<?= site_url('stock/out') ?>" class="btn btn-info btn-sm"><i class="fa fa-undo"> Back</i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="<?= site_url('stock/process'); ?>" method="post">
                            <div class="form-group">
                                <label for="date" class="col-form-label">Tanggal <font color="#f00">*</font></label>
                                <input type="date" name="date" class="form-control" value="<?= date('Y-m-d') ?>">
                            </div>
                            <div class="form-group">
                                <label for="qrcode" class="col-form-label">Qrcode <font color="#f00">*</font></label>
                                <div class="input-group">
                                    <input type="hidden" name="item_id" id="item_id">
                                    <input type="text" name="qrcode" id="qrcode" class="form-control" aria-describedby="basic" autofocus>
                                    <div class="input-group-append">
                                        <span>
                                            <button type="button" class="input-group-text btn btn-info btn-flat form-control" data-toggle="modal" data-target="#modal-item"><i class="fa fa-search" id="basic"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="item_name" class="col-form-label">Nama Barang <font color="#f00">*</font></label>
                                <input type="text" name="item_name" id="item_name" class="form-control" autofocus readonly>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="unit_name">Satuan</label>
                                        <input type="text" name="unit_name" id="unit_name" class="form-control" value="-" readonly autofocus>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="stock">Stok Awal</label>
                                        <input type="text" name="stock" id="stock" class="form-control" value="-" readonly autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="detail" class="col-form-label">Keterangan <font color="#f00">*</font></label>
                                <input type="text" name="detail" id="detail" class="form-control" placeholder="Kadaluarsa / Rusak / hilang" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="qty" class="col-form-label">Kuantitas <font color="#f00">*</font></label>
                                <input type="number" name="qty" id="qty" class="form-control" autofocus>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-flat" type="submit" name="out_add"><i class="fa fa-paper-plane"></i> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="modal-item">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Select Product Item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body table-responsive">
                <div class="container-fluid">
                    <table class="table table-bordered table-striped" id="example1">
                        <thead>
                            <tr>
                                <th>qrcode</th>
                                <th>Name</th>
                                <th>Unit</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($item as $i) { ?>
                                <tr>
                                    <td><?= $i->qrcode; ?></td>
                                    <td><?= $i->name; ?></td>
                                    <td style="text-align: center;"><?= $i->name_unit; ?></td>
                                    <td style="text-align: center;"><?= indo_currency($i->price); ?></td>
                                    <td><?= $i->stock; ?></td>
                                    <td align="center">
                                        <button class="btn btn-xs btn-info" id="select" data-id="<?= $i->item_id; ?>" data-qrcode="<?= $i->qrcode; ?>" data-name="<?= $i->name; ?>" data-unit="<?= $i->name_unit; ?>" data-stock="<?= $i->stock; ?>">
                                            <i class="fa fa-check"></i> Select
                                        </button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(document).on('click', '#select', function() {
            var item_id = $(this).data('id');
            var qrcode = $(this).data('qrcode');
            var name = $(this).data('name');
            var unit_name = $(this).data('unit');
            var stock = $(this).data('stock');
            $('#item_id').val(item_id);
            $('#qrcode').val(qrcode);
            $('#item_name').val(name);
            $('#unit_name').val(unit_name);
            $('#stock').val(stock);
            $('#modal-item').modal('hide');
        })
    });
</script>