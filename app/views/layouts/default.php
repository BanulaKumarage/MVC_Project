<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> <?= $this->siteTitle(); ?> </title>
    <!-- Bootstrap -->
    <link href="<?=SROOT?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=SROOT?>css/custom.css" rel="stylesheet">
    <script src="<?=SROOT?>js/jQuery-2.24.min.js"></script>
    <script src="<?=SROOT?>js/bootstrap.min.js"></script>

    <?= $this->content('head'); ?>


  </head>
  <body>

    <?= $this->content('body'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>