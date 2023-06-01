<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>T O L O N G I N!</title>

    <!-- Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/hibar.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="img/logo.png" alt="Bootstrap" width="40" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <nav class="navbar">
                    <div class="container-fluid justify-content-start">
                        <img src="img/logohibar.png" alt="" width="50" height="20">
                    </div>
                </nav>
            </div>
        </nav>
    </header>
    
    <div class="content1">
        <div class="container">
            <div class="mb-3">
                <div class="card">
                    <img src="img/kamera.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <button href="#" class="btn btn-danger">Kirim foto</button>
                    </div>
                </div>
                <div style= "margin-top: 5%">
                <label for="exampleFormControlInput1" class="form-label">Apa yang hilang?</label>
                <input type="" class="form-control" id="exampleFormControlInput1" placeholder="Contoh: Dompet">
                <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                <input type="" class="form-control" id="exampleFormControlInput1" placeholder="">
                <label for="exampleFormControlInput1" class="form-label">Lokasi detail kehilangan</label>
                <input type="" class="form-control" id="exampleFormControlInput1" placeholder="Contoh: Jl. Mawar Jingga II">
                <label for="exampleFormControlInput1" class="form-label">Poin yang diberikan</label>
                <input type="" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
            </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            <button href="#penting" type="button" class="btn btn-danger">Kirim</button>
        </div>
    </div>
</body>

</html>
