<?php

include 'config/api.php';

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <!-- Css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/covid-19.png" type="image/x-icon">

  <title>Tanggap Covid-19</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href=""><img src="assets/img/covid-19-white.png" width="52"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <img src="assets/img/menu-white.png" alt="">
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-5 mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link page-scroll active" aria-current="page" href="#beranda">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#covid19">Covid-19</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
              Data
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item page-scroll" href="#covid19-indo">Covid-19 Indonesia</a></li>
              <li><a class="dropdown-item page-scroll" href="#covid19-prov">Covid-19 Provinsi</a></li>
              <li><a class="dropdown-item page-scroll" href="#covid19-btg">Covid-19 Bontang</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#informasi">Informasi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Hero -->
  <div class="hero text-center" id="beranda">
    <div class="container">
      <h1 class="title">TANGGAP COVID-19</h1>
      <p class="description">
        - Tetap Tenang dan Selalu Waspada - <br />
        Website ini berisi informasi terkait Covid-19
      </p>
    </div>
  </div>
  <!-- End Hero -->

  <!-- Covid-19 -->
  <section class="covid19" id="covid19">
    <div class="container">
      <h2 class="title text-center">COVID-19</h2>
      <div class="card-covid19">
        <div class="row">
          <div class="col-lg-6 my-auto">
            <img src="assets/img/apa-itu-covid-19.png" class="card-img-top">
          </div>
          <div class="col-lg-6 col-md-12 card-covid19-isi">
            <h4 class="card-covid19-title1">Apa Itu COVID-19 ?</h4>
            <p class="card-covid19-desc1"><span>COVID-19 adalah penyakit yang disebabkan oleh Novel Coronavirus (2019-nCoV), jenis baru coronavirus yang pada manusia
                menyebabkan penyakit mulai flu biasa hingga penyakit yang serius seperti Middle East Respiratory Syndrome (MERS) dan
                Sindrom Pernapasan Akut Berat/ Severe Acute Respiratory Syndrome (SARS).</span> <br>
              <span>
                Pada 11 Februari 2020, World Health Organization (WHO) mengumumkan nama penyakit yang disebabkan 2019-nCov, yaitu
                <strong>Coronavirus Disease (COVID-19)</strong>.
              </span>
            </p>
            <h4 class="card-covid19-title2">Gejala</h4>
            <p class="card-covid19-desc2"><span>
                Gejala umum berupa demam ≥38°C, batuk kering, dan sesak napas. Jika ada orang yang dalam 14 hari sebelum muncul gejala
                tersebut pernah melakukan perjalanan ke negara terjangkit, atau pernah merawat/kontak erat dengan penderita COVID-19,
                maka terhadap orang tersebut akan dilakukan pemeriksaan laboratorium lebih lanjut untuk memastikan diagnosisnya.
              </span>
            </p>
            <h4 class="card-covid19-title3">Penularan</h4>
            <p class="card-covid19-desc3"><span>
                Seseorang dapat terinfeksi dari penderita COVID-19. Penyakit ini dapat menyebar melalui tetesan kecil (droplet) dari
                hidung atau mulut pada saat batuk atau bersin.
              </span>
              <br>
              <span>
                Droplet tersebut kemudian jatuh pada benda di sekitarnya. Kemudian jika
                ada orang lain menyentuh benda yang sudah terkontaminasi dengan droplet tersebut, lalu orang itu menyentuh mata, hidung
                atau mulut (segitiga wajah), maka orang itu dapat terinfeksi COVID-19.
              </span>
              <br>
              <span>
                Seseorang juga bisa terinfeksi COVID-19 ketika
                tanpa sengaja menghirup droplet dari penderita. Inilah sebabnya mengapa kita penting untuk menjaga jarak hingga kurang
                lebih satu meter dari orang yang sakit.
              </span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Covid-19 -->

  <!-- Data Covid-19 indoensia -->
  <section class="covid19-indo" id="covid19-indo">
    <div class="container">
      <h2 class="title text-center">Data COVID-19 Indonesia</h2>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card-covid19-indo-positif">
            <div class="card-body card-covid19-indo-isi py-2">
              <i class="fa fa-user-plus"></i>
              <p class="mb-0"><strong>POSITIF</strong> (DIRAWAT, MENINGGAL & SEMBUH)</p>
              <h2 class="my-0"><?= number_format($dataIndo['total']['positif']); ?></h2>
              <p class="mb-0">ORANG</p>
              <h5 class="mb-0">+<?= number_format($dataIndo['penambahan']['positif']) ?></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="card-covid19-indo-sembuh">
            <div class="card-body card-covid19-indo-isi py-2">
              <i class="fa fa-user-shield"></i>
              <p class="mb-0"><strong>SEMBUH</strong></p>
              <h2 class="mb-0"><?= number_format($dataIndo['total']['sembuh']); ?></h2>
              <p class="mb-0">ORANG</p>
              <h5 class="mb-0">+<?= number_format($dataIndo['penambahan']['sembuh']); ?></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="card-covid19-indo-dirawat">
            <div class="card-body card-covid19-indo-isi py-2">
              <i class="fa fa-user-cog"></i>
              <p class="mb-0"><strong>DIRAWAT / ISOLASI</strong></p>
              <h2 class="mb-0"><?= number_format($dataIndo['total']['dirawat']); ?></h2>
              <p class="mb-0">ORANG</p>
              <h5 class="mb-0">
                <?php
                if (number_format($dataIndo['penambahan']['dirawat']) >= 0) {
                  echo "+" . ($dataIndo['penambahan']['dirawat']);
                } else {
                  echo ($dataIndo['penambahan']['dirawat']);
                }
                ?>
              </h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="card-covid19-indo-meninggal">
            <div class="card-body card-covid19-indo-isi py-2">
              <i class="fa fa-user-times"></i>
              <p class="mb-0"><strong>DIRAWAT / ISOLASI</strong></p>
              <h2 class="mb-0"><?= number_format($dataIndo['total']['meninggal']); ?></h2>
              <p class="mb-0">ORANG</p>
              <h5 class="mb-0">+<?= number_format($dataIndo['penambahan']['meninggal']); ?></h5>
            </div>
          </div>
        </div>
      </div>
      <div class="covid-chart">
        <div class="row">
          <div class="col">
            <canvas id="positif"></canvas>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <p class="update mt-3 mb-0">*Terakhir Diperbaharui : <?= $indo_update_date; ?> | Pukul : <?= $indo_update_time; ?> WIB </p>
          <p class="update mb-3">*Data Sesuai Dengan Website <a href="https://covid19.go.id/peta-sebaran" target="_blank">covid19.go.id</a></p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Data Covid-19 indoensia -->

  <!-- Data Covid-19 Provinsi -->
  <section class="covid19-prov" id="covid19-prov">
    <div class="container">
      <h2 class="title text-center">Data COVID-19 Provinsi Indonesia</h2>
      <div class="card-covid19-prov">
        <div class="table-responsive table-covid19-prov">
          <table class="table table-bordered table-hover table-striped table-light mb-0 text-nowrap css-serial">
            <thead>
              <tr>
                <th class="field-table">No.</th>
                <th class="field-table">Provinsi</th>
                <th class="field-table">Kasus</th>
                <th class="field-table">Dirawat</th>
                <th class="field-table">Sembuh</th>
                <th class="field-table">Meninggal</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php for ($i = 0; $i < count($dataProv); $i++) : ?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $dataProv[$i]['provinsi']; ?></td>
                  <td><?= $dataProv[$i]['kasus']; ?></td>
                  <td><?= $dataProv[$i]['dirawat']; ?></td>
                  <td><?= $dataProv[$i]['sembuh']; ?></td>
                  <td><?= $dataProv[$i]['meninggal']; ?></td>
                </tr>
                <?php $no++ ?>
              <?php endfor; ?>
            </tbody>
          </table>
        </div>
      </div>
      <p class="update text-center mb-3">*Data Table Sesuai Dengan Website <a href="https://covid19.go.id/peta-sebaran" target="_blank">covid19.go.id</a></p>
    </div>
  </section>
  <!-- End Data Covid-19 Provinsi -->

  <!-- Data Covid-19 Bontang -->
  <section class="covid19-btg" id="covid19-btg">
    <div class="container">
      <h2 class="title text-center">Data COVID-19 Kota Bontang</h2>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card-covid19-btg-positif">
            <div class="card-body card-covid19-btg-isi py-2">
              <i class="fa fa-user-plus"></i>
              <p class="mb-0"><strong>POSITIF</strong> (DIRAWAT, MENINGGAL & SEMBUH)</p>
              <h2 class="my-0"><?= number_format($dataBtg[2]['Confirmed']); ?></h2>
              <p class="mb-0">ORANG</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="card-covid19-btg-sembuh">
            <div class="card-body card-covid19-btg-isi py-2">
              <i class="fa fa-user-shield"></i>
              <p class="mb-0"><strong>SEMBUH</strong></p>
              <h2 class="mb-0"><?= number_format($dataBtg[2]['Sembuh']); ?></h2>
              <p class="mb-0">ORANG</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="card-covid19-btg-dirawat">
            <div class="card-body card-covid19-btg-isi py-2">
              <i class="fa fa-user-cog"></i>
              <p class="mb-0"><strong>DIRAWAT / ISOLASI</strong></p>
              <h2 class="mb-0"><?= number_format($dataBtg[2]['Dirawat']); ?></h2>
              <p class="mb-0">ORANG</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="card-covid19-btg-meninggal">
            <div class="card-body card-covid19-btg-isi py-2">
              <i class="fa fa-user-times"></i>
              <p class="mb-0"><strong>DIRAWAT / ISOLASI</strong></p>
              <h2 class="mb-0"><?= number_format($dataBtg[2]['Meninggal']); ?></h2>
              <p class="mb-0">ORANG</p>
            </div>
          </div>
        </div>
        <div class="col-12">
          <p class="update text-center my-3">*Data Sesuai Dengan Website <a href="https://covid19.kaltimprov.go.id/" target="_blank">covid19.kaltimprov.go.id</a></p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Data Covid-19 Bontang -->

  <!-- Informasi -->
  <section class="informasi" id="informasi">
    <div class="container">
      <h2 class="title text-center">Informasi</h2>
      <div class="card-informasi">
        <div class="row">
          <div class="col-lg-6 my-auto .card-img-top">
            <img src="assets/img/cegah-covid-19.png" class="card-img-top float-lg-right">
          </div>
          <div class="col-lg-6">
            <div class="card-body">
              <h4 class="card-title">Lindungi Diri dan Orang Lain</h4>
              <p class="card-text"><span>Sampai saat ini COVID-19 belum memiliki vaksin, sehingga cara terbaik untuk tidak terinfeksi adalah dengan menghindari
                  terekspos virus.
                  <br>
                  <span><strong>COVID-19 dapat menyebar dari orang ke orang melalui tetesan kecil (droplet) saat batuk atau bersin. Maka yang bisa Anda
                      lakukan adalah:</strong></span>
              </p>
              <ul class="ul">
                <li class="my-1">&nbsp;Sering cuci tangan dengan sabun atau hand-sanitizer</li>
                <li class="my-1">&nbsp;Hindari menyentuh wajah, terutama hidung, mulut, dan mata</li>
                <li class="my-1">&nbsp;Bersihkan permukaan benda yang disentuh banyak orang</li>
                <li class="my-1">&nbsp;Social Distancing! Minimalisir kontak fisik dengan sesama</li>
                <li class="my-1">&nbsp;Jaga jarak 1-3 meter dengan orang yang sakit</li>
                <li class="my-1">&nbsp;Jika sakit, maka:</li>
                <ul>
                  <li class="my-1">&nbsp;Tinggal di rumah</li>
                  <li class="my-1">&nbsp;Gunakan masker</li>
                </ul>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Informasi -->

  <!-- Footer -->
  <div class="footer py-4 text-center">
    <div class="container">
      <span>API By <a href="https://github.com/Reynadi531" target="_blank">Reynadi Andreas Priesley</a> - <a href="https://covid19.kaltimprov.go.id/" target="_blank">Pemerintah Provinsi Kalimantan Timur</a> <br> Artikel by <a href="https://covid19.sulbarprov.go.id/" target="_blank">Pemerintah Provinsi Sulawesi Barat</a></span>
      <br>
      <span>Copyrights © 2020 | Developed By SAPTARINO</span>
      <br>
      <div class="sosial mt-2">
        <a href="https://www.facebook.com/Rinrino28/" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/sptrinoo/" target="_blank"><i class="fab fa-instagram"></i></a></div>
    </div>
  </div>
  </div>
  <!-- End Footer -->


  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>