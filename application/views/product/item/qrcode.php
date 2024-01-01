<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Items</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= site_url('dashboard'); ?>">Home</a></li>
                    <li class="breadcrumb-item active">Qrcode Generate</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="" data-flashdata="<?= $this->session->flashdata('pesan') ?>">
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Qrcode Generator <i class="fa fa-qrcode"></i></h3>
                    </div>
                    <div class="card-body">
                        <?php
                        $qrCode = new Endroid\QrCode\QrCode($item->qrcode);
                        $qrCode->writeFile('uploads/qrcode/' . $item->qrcode . '.png');
                        ?>
                        <img src="<?= base_url('uploads/qrcode/' . $item->qrcode . '.png'); ?>" alt="qrCode" style="width: 25%;">
                        <hr>
                        <?= '<b>' . $item->qrcode . '</b>' ?>
                        <br><br>
                        <a href="<?= site_url('item/qrcode_print/' . $item->item_id); ?>" target="_blank" class="btn btn-default btn-sm"><i class="fa fa-print"></i> Print</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>
</section>