<!-- Basic Page Needs -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?= SITE_NAME; ?></title>
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS -->
<link href="<?= asset_url() ?>css/bootstrap-combined.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen" href="<?= asset_url() ?>css/bootstrap-datetimepicker.min.css">

<!-- Font Awesome -->
<link  rel="stylesheet" type="text/css" href="<?= asset_url() ?>css/font-awesome.min.css">
<link rel="stylesheet" href="<?= asset_url() ?>css/style.css" type="text/css">
<?php  if ($controller_name == 'gallery'): ?>
    <link rel="stylesheet" href="<?= asset_url() ?>css/swipebox.css" />
<?php endif; ?>


