<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qrcode Product <?= $item->barcode ?></title>
</head>

<body>
    <img src="<?= base_url('uploads/qrcode/' . $item->barcode . '.png') ?>" style="width:200px">
    <hr>
    <?= '<b>' . $item->barcode . '</b>' ?>
    <br>
</body>

</html>