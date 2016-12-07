<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?>
  </title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <link href="<?php echo url('favicon.ico') ?>" rel="icon" type="image/x-icon" />
  <link rel="stylesheet" href="<?php echo url('assets/Content/bootstrap-performation.min.css') ?>" type="text/css" />
  <?php echo css('assets/css/site.css') ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<body>
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse">
        <?php snippet('menu') ?>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="<?php echo url('/panel') ?>" target="_blank" class="icon-only"><i class="icon-person-o"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>