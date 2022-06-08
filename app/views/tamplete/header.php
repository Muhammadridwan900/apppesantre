<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $data['judul'];?></title>
    <link href="<?= BASEURL; ?>/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
      *{
        padding: 0;
        margin: 0;
      }
      body{
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid bg-light">
    <?php Flaser::flase(); ?>
         <div class="row bg-dark rounded-bottom p-2 fw-bold">
            <div class="col-8"> 
                <a href="<?= BASEURL ;?>/"><div class="btn btn-primary">Dashboard</div></a>
                <a href="<?= BASEURL ;?>/Membayar"><div class="m-1 btn btn-primary">Tanggungan</div></a>
                <a href="<?= BASEURL ;?>/Data_santri"><div class="m-1 btn btn-primary">Data Administrasi</div></a>
            </div>
            <a href="" class="col text-decoration-none text-white text-nowrap d-flex justify-content-end"><h2>KOMPLEK FORMAL</h2></a>
          </div>

