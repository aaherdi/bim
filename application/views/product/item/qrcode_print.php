<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qrcode Product <?= $item->qrcode ?></title>
</head>

<body>
    <img src="<?= base_url('uploads/qrcode/' . $item->qrcode . '.png') ?>" style="width:200px">
    <hr>
    <?= '<b>' . $item->qrcode . '</b>' ?>
    <br>
</body>

</html>