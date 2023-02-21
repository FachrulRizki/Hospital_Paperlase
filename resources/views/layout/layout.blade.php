<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Hospital Paperlase | {{ $title }}</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Hospital Paperlase</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link {{ ($title == "Home") ? 'active' : '' }}" href="/">Home</a>
                        <a class="nav-link {{ ($title == "Pemeriksaan Pasien") ? 'active' : '' }}" href="/pemeriksaan_pasien">PemeriksaanPasien</a>
                        <a class="nav-link {{ ($title == "Pasien") ? 'active' : '' }}" href="/pasien">Pasien</a>
                        <a class="nav-link {{ ($title == "Poli") ? 'active' : '' }}" href="/poli">Poli</a>
                        <a class="nav-link {{ ($title == "Registrasi Pasien") ? 'active' : '' }}" href="/registrasi_pasien">RegistrasiPasien</a>
                        <a class="nav-link {{ ($title == "Dokter") ? 'active' : '' }}" href="/dokter">Dokter</a>
                        <a class="nav-link {{ ($title == "Dokter Periksa") ? 'active' : '' }}" href="/dokter/dokterpp">DokterPeriksaPasien</a>
                    </div>
                </div>
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/logout" class="nav-link">Logout {{ Auth::user()->name }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

	@yield('content')




	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>