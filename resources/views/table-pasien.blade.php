<html lang="en">

<head>
    <meta charet="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>BALAB</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/table-pasien.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/table-pasien.css') }}">
</head>

<body>
    <section class="tabel-laboran">
        <nav></nav>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div class="navbar-expand">
                        <img src="{{ URL::asset('assets/images/header.png') }}" alt=" " width=" " height="100" class="d-inline-block align-text-top">
                        <a class="navbar-brand" href="#"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Hubungi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tentang</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container rounded-3" style="height: 150px; width: 1200px; background-color:rgb(255, 255, 255);">
            <div class="row fw-bold">
                <div class="col">
                    <img src="{{ URL::asset('assets/images/profil.png')}}" alt="" width="80" class="rounded-circle img-thumbnail ms-5 mt-3">
                    <br><div class="badge bg-primary text-wrap tex ms-2 fw-bold mt-2 ms-5" style="width: 5rem;">keluar</div>
                </div>
                <div class="col">
                    <p></p>
                    <br/><div class="badge bg-white text-body text-start tex ms-2 fw-bold rounded-2 fs-3">Nama</div>
                     <br>
                    <div class="badge bg-white text-body text-start tex ms-2 fw-bold rounded-3 fs-6 mt-2">
                        No. Pasien
                    </div>
                </div>
                <div class="col">
                    <p></p>
                    <br/>
                        :
                        <div class="badge bg-primary text-start tex ms-2 fw-bold rounded-3 fs-6" style="width: 12rem ;">
                            Dilan
                        </div>
                        <br>:
                            <div class="badge bg-primary text-start tex ms-2 fw-bold rounded-3 fs-6 mt-2" style="width:12rem">
                                2008107010027698
                            </div>
                        
                </div>
                <div class="col">
                    <p></p>
                    <br/><div class="badge bg-white text-body text-start tex ms-2 fw-bold rounded-3 fs-6">
                        Dokter PJ
                    </div>
                     <br>
                    <div class="badge bg-white text-body text-start tex ms-2 fw-bold rounded-3 fs-6 mt-2">
                        Laboran
                    </div>
                </div>
                <div class="col">
                    <p></p>
                    <br/>
                        :
                        <div class="badge bg-primary text-start tex ms-2 fw-bold rounded-3 fs-6" style="width: 12rem ;">
                            dr. Irawan
                        </div>
                        <br>:
                            <div class="badge bg-primary text-start tex ms-2 fw-bold rounded-3 fs-6 mt-2" style="width:12rem">
                                Slamet, S.Tr.Kes   
                            </div>
                </div>
            </div>
          </div>
            <table class="table">
            <thead class="table-dark text-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pasien</th>
                    <th scope="col">Tanggal Periksa</th>
                    <th scope="col">Hasil Lab</th>
                </tr>
            </thead>
            <tbody class="table-primary text-center">
                <tr>
                    <th scope="row">1</th>
                    <td>Siti Aisyah</td>
                    <td>11 Februari 2022</td>
                    <td>Detail</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Dilan</td>
                    <td>26 Januari 2022</td>
                    <td>Detail</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Abidzar</td>
                    <td>19 Januari 2022</td>
                    <td>Detail</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Sulaiman Daud</td>
                    <td>14 Januari 2022</td>
                    <td>Detail</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Sahlan</td>
                    <td>14 Januari 2022</td>
                    <td>Detail</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Muzanni</td>
                    <td>11 Januari 2022</td>
                    <td>Detail</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Siti Aminah</td>
                    <td>11 Januari 2021</td>
                    <td>Detail</td>
                </tr>
            </tbody>
            </table>
        </div>  
    </div> 

    <section class="hasil_lab position-absolute top-0 start-0 ms-5">
          
</body>

</html>