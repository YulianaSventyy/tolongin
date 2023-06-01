<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>T O L O N G I N!</title>

    <!-- Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/tebar.css">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="img/logo.png" alt="Bootstrap" width="45" height="45">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid justify-content-start">
                    <img src="img/logotebar.png" alt="" width="50" height="17">
                </div>
            </nav>
        </div>
    </nav>
</header>


    <div class="tebar">
        <div class="container">
            <button href="#penting" type="button" class="btn btn-danger">Barang</button>
            <button href="#penting" type="button" class="btn btn-danger">Transportasi</button>
            <button href="#penting" type="button" class="btn btn-danger">Elektronik</button>
        </div>
        <div class="tebar2">
          <div class="card mb-3" style="max-width: 690px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="img/hilang.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Laptop Asus Vivobook</h5>
                  <p class="card-text">Kategori : Elektronik</p>
                  <p class="card-text">Lokasi : Kampus UPI Purwakarta</p>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
</body>

</html>
