<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Stok Produk Masuk</h1>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">&nbsp;</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    &times;
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" target="_self" name="formku" id="formku" class="eventInsForm">
                                    <div class="form-row">
                                        <div class="col-md-4 col-xs-4">
                                            <label for="name" class="col-form-label">Tanggal <font color="#f00">*</font></label>
                                        </div>
                                        <div class="col-md-8 col-xs-8 input-group date" id="reservationdate" data-target-input="nearest">
                                            <input type="date" name="date" class="form-control" value="<?= date('Y-m-d') ?>" style="margin-bottom: 5px;">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 col-xs-4">
                                            <label for="qrcode" class="col-form-label">Data Qrcode<font color="#f00">*</font></label>
                                        </div>
                                        <div class="col-md-8 col-xs-8 input-group">
                                            <input type="hidden" name="stock_id" id="stock_id">
                                            <input type="text" name="qrcode" id="qrcode" class="form-control" aria-describedby="basic" autofocus style="margin-bottom:5px;">
                                            <div class="input-group-append">
                                                <button type="button" class="input-group-text btn btn-info form-control"><i class="fa fa-search" id="basic" style="margin-bottom:5px;"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 col-xs-4">
                                            <label for="item_name" class="col-form-label">Nama Produk<font color="#f00">*</font></label>
                                        </div>
                                        <div class="col-md-8 col-xs-8">
                                            <input type="text" name="item_name" id="item_name" class="form-control" style="margin-bottom: 5px;" autofocus readonly>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 col-xs-4">
                                            <label for="unit_name" class="col-form-label">Nama Satuan</label>
                                        </div>
                                        <div class="col-md-8 col-xs-8">
                                            <input type="text" name="unit_name" id="unit_name" class="form-control" style="margin-bottom: 5px;" value="-" readonly autofocus>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 col-xs-4">
                                            <label for="stock" class="col-form-label">Stok Awal</label>
                                        </div>
                                        <div class="col-md-8 col-xs-8">
                                            <input type="text" name="stock" id="stock" class="form-control" style="margin-bottom: 5px;" value="-" readonly autofocus>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 col-xs-4">
                                            <label for="detail" class="col-form-label">Keterangan <font color="#f00">*</font></label>
                                        </div>
                                        <div class="col-md-8 col-xs-8">
                                            <input type="text" name="detail" id="detail" class="form-control" style="margin-bottom: 5px;" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 col-xs-4">
                                            <label for="supplier" class="col-form-label">Supplier</label>
                                        </div>
                                        <div class="col-md-8 col-xs-8">
                                            <select name="supplier" id="supplier" class="form-control" style="margin-bottom:5px;" autofocus>
                                                <option value="" selected>--Pilih--</option>
                                                <?php foreach ($supplier as $s) { ?>
                                                    <option value="<?= $s->supplier_id; ?>"><?= $s->name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 col-xs-4">
                                            <label for="qty" class="col-form-label">Kuantitas<font color="#f00">*</font></label>
                                        </div>
                                        <div class="col-md-8 col-xs-8">
                                            <input type="number" name="qty" id="qty" class="form-control" style="margin-bottom:5px;" autofocus>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
                                <button type="button" class="btn btn-primary" onclick="simpandata()"><i class="fa fa-save"></i> Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="float-sm-right">
                            <a onclick="tambahData()" class="btn btn-success btn-sm" style="color: aliceblue;"><i class="fa fa-plus"> Create</i></a>
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
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var dsState;

    String.prototype.capitalize = function() {
        return this.charAt(0).toUpperCase() + this.slice(1);
    }

    $(function() {
        window.setTimeout(function() {
            $('.alert-success').hide(300);
        }, 5000);
    });

    $(function() {
        window.setTimeout(function() {
            $('.invalid-feedback').hide(300);
        }, 3000);
    });

    function tambahData() {
        $('#category_id').val('');
        $('#name').val('');
        dsState = "Input";

        $("#myModal").find('.modal-title').text('Add category');
        $("#myModal").modal('show', {
            backdrop: 'true'
        });

    }

    function simpandata() {
        if ($.trim($("#name").val()) == "") {
            $(".inv-nama").html("Nama tidak boleh kosong! ");
            $('#name').addClass('is-invalid');
            window.setTimeout(function() {
                $('.inv-nama').hide(300);
            }, 3000);
        } else {
            if (dsState == "Input") {
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('category/cek_category') ?>",
                    data: {
                        data: $("#name").val()
                    },
                    success: function(result) {
                        if (result == "ADA") {
                            //console.log(result);
                            $('.nama-ada').html("Nama category sudah tersedia!");
                            $('.nama-ada').show();
                        } else {
                            // console.log(result);
                            $('#message').html("");
                            $('.nama-ada').hide();
                            $('#formku').attr("action", "<?= site_url('category/save') ?>");
                            $('#formku').submit();
                        }
                    }
                });
            } else {
                $('#formku').attr("action", "<?= site_url('category/update') ?>");
                $('#formku').submit();
            }
        };
    };


    function editData(category_id) {
        dsState = "Edit";
        $.ajax({
            type: "POST",
            url: "<?= site_url('category/edit'); ?>",
            data: {
                category_id: category_id
            },
            success: function(result) {
                $('#name').val(result['name']);
                $('#category_id').val(result['category_id']);

                $("#myModal").find('.modal-title').text('Edit category');
                $("#myModal").modal('show', {
                    backdrop: 'true'
                });
            }
        })
    }
</script>