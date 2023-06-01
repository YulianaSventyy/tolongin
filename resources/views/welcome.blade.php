<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>T O L O N G I N!</title>

    <!-- Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/home.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
          <div class="container">
              <a class="navbar-brand" href="">
                  <img src="img/logo.png" alt="Bootstrap" width="40" height="40">
                </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <nav class="navbar">
                  <div class="container-fluid justify-content-start">
                    <a class="btn btn-outline-danger" href="/login">Daftar / Masuk</a>
                  </div>
                </nav>
          </div>
      </nav>
    </header>

    <!--ini container 1-->
    <div class="awal">
        <div class="container pt-4 position-relative">
            <div class="contentSatu">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content text-lg-start" style="margin-right: 10%;">
                        <h1><span
                                style="position: absolute; width: 30%; height: 35%; margin-left: 8% ; margin-top: 7%;
                        font-style: bold;font-weight: 50px;font-size: 45px;line-height: 30px;">
                                TOLONGIN!</span></h1>
                        <p
                            style="position: absolute; width: 40%; height: 30%; margin-top: 14%; margin-left: 8%;
                        font-weight: 15px; font-size: 23px; line-height: 30px; text-align: left;">
                            Memudahkan anda untuk mencari dan menemukan barang yang hilang
                        </p>
                        <p
                            style="position: absolute; width: 40%; height: 30%; margin-top: 22%; margin-left: 8%;
                        font-weight: 15px; font-size: 23px; line-height: 30px; text-align: left;">
                            Mari kita jelajahi fitur yang ada...
                        </p>
                        <!--<button href="#scroll" type="button" class="btn btn-danger">Selanjutnya</button>-->
                        <a href="#scroll" type="button" class="btn btn-danger">Selanjutnya</a>
                    </div>
                    <div class="col mb-4">
                        <img src="img/tolongin3d.png" class="img-fluid" alt=""
                            style="width: 120%; margin-top: 2%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--Fitur Utama-->
    <section id="scroll">
        <div class="utama">
            <div class="container overflow-hidden text-center">
                <div class="row gx-5">
                    <div class="col">
                        <div class="card border-1" style="width: 50%;">
                            <img src="img/hibar.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="/hibar2/create" class="btn btn-danger">HiBar</a>
                                <h5 class="card-title">Hilang Barang</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-1" style="width: 50%;">
                            <img src="img/tebar.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="/hibar2" class="btn btn-danger">TeBar</a>
                                <h5 class="card-title">Temu Barang</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
</body>

</html>
