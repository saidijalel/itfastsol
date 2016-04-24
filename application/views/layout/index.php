<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <link href="<?php echo site_url('public/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('public/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" >
    <link href="<?php echo site_url('public/css/style.css'); ?>" rel="stylesheet">
</head>
<body>
<?php if($header) echo $header ;?>
<?php //if($left) echo $left ;?>

<div class="container">
    <?php if($middle) echo $middle ;?>
</div><!-- /.container -->

<?php //if($footer) echo $footer ;?>


<script src="<?php echo site_url('public/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo site_url('public/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>
</html>