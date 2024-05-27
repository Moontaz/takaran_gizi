<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Takaran Gizi</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/styles.css" />
</head>

<body class="font-monospace">
  <header id="header" class="py-1 fixed-top">
    <nav class="navbar navbar-expand-lg bd-navbar sticky-top px-2 mx-2 px-lg-5 mx-lg-5">
      <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">Navbar</a>
        <div class="navbar-toggler row row-2">
          <button class="btn btn-search-toggler text-light col-6" id="btn-search" data-bs-target="#exampleModal" data-bs-toggle="modal">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
            </svg>
          </button>
          <button class="bg-cs-primary hamburger-toggler col-6" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" class="bi bi-list" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
            </svg>
          </button>
        </div>

        <div class="offcanvas offcanvas-end bg-cs-primary" hidden tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" data-bs-scroll="true">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title text-light" id="offcanvasRightLabel">
              Title or Logo
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav navbar-nav-scroll me-auto mb-2 mb-lg-0">
              <li class="nav-item nav-hover rounded">
                <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item nav-hover rounded">
                <a class="nav-link text-light" href="#">Link</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
                  </svg>
                </a>
              </li>
              <li class="nav-item dropdown nav-hover rounded">
                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu text-light">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Another action</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li class="">
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item nav-hover rounded">
              <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item nav-hover rounded">
              <a class="nav-link text-light" href="#">Link</a>
            </li>
          </ul>

          <!-- Button trigger modal Searching-->
          <button class="btn btn-search btn-outline-light text-light" id="btn-search" data-bs-target="#exampleModal" data-bs-toggle="modal">
            <div class="label-search col">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
              </svg>
              <span>Search</span>
            </div>

            <div class="shortcut-search align-items-center rounded-1 border border-0">
              <span class="" style="font-size: 0.5rem">CTRL</span>
              <span class="">F</span>
            </div>
          </button>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-github" viewBox="0 0 16 16">
                  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
                </svg>
              </a>
            </li>
            <li class="nav-item dropdown nav-hover rounded">
              <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu text-light">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li class="">
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="container">
    <div class="main-page">
      <div class="tagline text-center">
        <span class="fs-1">This website can calculate your daily needs.</span>
        <br />
        <span class="fs-2">No kidding</span>
      </div>
    </div>
    <div class="m-4">
      <h1 class="">HEHEHEHEHE</h1>
      <div class="card-container row row-1 g-5 justify-content-around">
        <div class="card col-12 col-lg-3 card-cs">
          <h4 class="card-header card-header-cs">Featured</h4>
          <div class="card-body">
            <h5 class="card-title">Nutrition</h5>
            <p class="card-text">
              Involves the intake of essential nutrients like carbohydrates,
              proteins, fats, vitamins, minerals, and water, crucial for
              sustaining life and promoting bodily functions. Making informed
              choices about food ensures a balanced diet tailored to
              individual needs, supporting growth, development, and overall
              well-being.
            </p>
            <div class="btn-group dropup button-cover">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Dropup
              </button>
              <ul class="dropdown-menu p-3">
                <table class="table-card">
                  <tbody>
                    <tr>
                      <td scope="row">Energi</td>
                      <td scope="row">Protein</td>
                    </tr>
                    <tr>
                      <td scope="row">Total Lemak</td>
                      <td scope="row">Karbohidrat</td>
                    </tr>
                    <tr>
                      <td scope="row">Omega 3</td>
                      <td scope="row">Omega 6</td>
                    </tr>
                    <tr>
                      <td scope="row">Serat</td>
                      <td scope="row">Air</td>
                    </tr>
                  </tbody>
                </table>
              </ul>
            </div>
          </div>
        </div>
        <div class="card col-12 col-lg-3 card-cs">
          <h4 class="card-header card-header-cs">Featured</h4>
          <div class="card-body">
            <h5 class="card-title">Vitamin</h5>
            <p class="card-text">
              Organic compounds vital for physiological processes, play
              critical roles in metabolism, immune function, and cell growth.
              Classified into fat-soluble and water-soluble types, they are
              sourced from various foods and their deficiency or excess intake
              can impact health significantly.
            </p>

            <div class="btn-group dropup mt-4 button-cover">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Dropup
              </button>
              <ul class="dropdown-menu p-3">
                <table class="table-card">
                  <tbody>
                    <tr>
                      <td scope="row">Vitamin A</td>
                      <td scope="row">Vitamin D</td>
                    </tr>
                    <tr>
                      <td scope="row">Vitamin E</td>
                      <td scope="row">Vitamin K</td>
                    </tr>
                    <tr>
                      <td scope="row">Vitamin B1</td>
                      <td scope="row">Vitamin B2</td>
                    </tr>
                    <tr>
                      <td scope="row">Vitamin B3</td>
                      <td scope="row">Vitamin B5</td>
                    </tr>
                    <tr>
                      <td scope="row">Vitamin B6</td>
                      <td scope="row">Vitamin B12</td>
                    </tr>
                    <tr>
                      <td scope="row">Folat</td>
                      <td scope="row">Biotin</td>
                    </tr>
                    <tr>
                      <td scope="row">Kolin</td>
                      <td scope="row">Vitamin C</td>
                    </tr>
                  </tbody>
                </table>
              </ul>
            </div>
          </div>
        </div>
        <div class="card col-12 col-lg-3 card-cs">
          <h4 class="card-header card-header-cs">Featured</h4>
          <div class="card-body">
            <h5 class="card-title">Mineral</h5>
            <p class="card-text">
              Inorganic substances necessary for body functions, contribute to
              bone health, muscle function, and nerve transmission. Classified
              as macrominerals and trace minerals, they are obtained from
              diverse food sources and are essential for preventing nutrient
              deficiencies and supporting overall health.
            </p>
            <div class="btn-group dropup button-cover">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Dropup
              </button>
              <ul class="dropdown-menu p-3">
                <table class="table-card">
                  <tbody>
                    <tr>
                      <td scope="row">Energi</td>
                      <td scope="row">Protein</td>
                    </tr>
                    <tr>
                      <td scope="row">Total Lemak</td>
                      <td scope="row">Karbohidrat</td>
                    </tr>
                    <tr>
                      <td scope="row">Omega 3</td>
                      <td scope="row">Omega 6</td>
                    </tr>
                    <tr>
                      <td scope="row">Serat</td>
                      <td scope="row">Air</td>
                    </tr>
                  </tbody>
                </table>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="form-container mx-auto p-4 rounded-3">
      <h2 class="">Form</h2>
      <form id="myForm">
        <div class="row mb-3">
          <label for="usia" class="col-sm-2 col-form-label">Usia</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="usia" name="usia" placeholder="e.g. 5" />
          </div>
          <div class="col-sm-4">
            <select class="form-control col-sm" size="1" id="tahunOrBulan" name="tahunOrBulan">
              <option selected value="tahun">Tahun</option>
              <option value="bulan">Bulan</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label for="gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
          <div class="col-sm-10">
            <select class="form-control" id="gender" name="gender" required>
              <option selected>-</option>
              <option value="laki-laki">Laki-laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
          </div>
        </div>
        <div class="mb-3">
          <div class="form-group row" id="hamilOrMenyusui"></div>
          <div class="form-group row mt-3" id="umurHamilOrMenyusui"></div>
        </div>
        <div class="btn-group btn-cs">
          <button type="button" id="disabledInput" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="submitForm()">
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- Modal -->

  <!-- Modal Searching-->
  <div class="modal" id="exampleModal" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <form action="" class="d-flex col form-search mx-auto px-2 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#2d9596" class="bi bi-search me-2" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
            </svg>
            </label>
            <input type="text" class="form-input-search col-sm-11" id="specificSizeInputGroupUsername" placeholder="Search tips" />
          </form>
        </div>
        <div class="modal-body">...</div>
        <div class="modal-footer d-flex justify-content-end">
          <span>Generated by me.</span>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Searching Tutup -->

  <!-- Modal 1 -->
  <div class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">
            Nutrition Table
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <tbody>
                <tr>
                  <td scope="row">Energi</td>
                  <td id="energi">...</td>
                  <td scope="row">Protein</td>
                  <td id="protein">...</td>
                </tr>
                <tr>
                  <td scope="row">Total Lemak</td>
                  <td id="total_lemak">...</td>
                  <td scope="row">Karbohidrat</td>
                  <td id="karbohidrat">...</td>
                </tr>
                <tr>
                  <td scope="row">Omega 3</td>
                  <td id="omega3">...</td>
                  <td scope="row">Omega 6</td>
                  <td id="omega6">...</td>
                </tr>
                <tr>
                  <td scope="row">Serat</td>
                  <td id="serat">...</td>
                  <td scope="row">Air</td>
                  <td id="air">...</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary" data-bs-target="#staticBackdrop" data-bs-toggle="modal" disabled>
              Previous
            </button>
            <button type="button" class="btn btn-primary" data-bs-target="#staticBackdrop2" data-bs-toggle="modal">
              Next
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal 1 Tutup -->
  <!-- Modal 2 -->
  <div class="modal" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">
            Vitamin Table
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <tbody>
                <tr>
                  <td scope="row">Vitamin A</td>
                  <td id="vitA">...</td>
                  <td scope="row">Vitamin D</td>
                  <td id="vitD">...</td>
                </tr>
                <tr>
                  <td scope="row">Vitamin E</td>
                  <td id="vitE">...</td>
                  <td scope="row">Vitamin K</td>
                  <td id="vitK">...</td>
                </tr>
                <tr>
                  <td scope="row">Vitamin B1</td>
                  <td id="vitB1">...</td>
                  <td scope="row">Vitamin B2</td>
                  <td id="vitB2">...</td>
                </tr>
                <tr>
                  <td scope="row">Vitamin B3</td>
                  <td id="vitB3">...</td>
                  <td scope="row">Vitamin B5</td>
                  <td id="vitB5">...</td>
                </tr>
                <tr>
                  <td scope="row">Vitamin B6</td>
                  <td id="vitB6">...</td>
                  <td scope="row">Vitamin B12</td>
                  <td id="vitB12">...</td>
                </tr>
                <tr>
                  <td scope="row">Folat</td>
                  <td id="folat">...</td>
                  <td scope="row">Biotin</td>
                  <td id="Biotin">...</td>
                </tr>
                <tr>
                  <td scope="row">Kolin</td>
                  <td id="kolin">...</td>
                  <td scope="row">Vitamin C</td>
                  <td id="vitC">...</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary" data-bs-target="#staticBackdrop" data-bs-toggle="modal">
              Previous
            </button>
            <button type="button" class="btn btn-primary" data-bs-target="#staticBackdrop3" data-bs-toggle="modal">
              Next
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal 2 Tutup -->
  <!-- Modal 3 -->
  <div class="modal" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">
            Mineral Table
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <tbody>
                <tr>
                  <td scope="row">Kalsium</td>
                  <td id="kalsium">...</td>
                  <td scope="row">Fosfor</td>
                  <td id="fosfor">...</td>
                </tr>
                <tr>
                  <td scope="row">Magnesium</td>
                  <td id="magnesium">...</td>
                  <td scope="row">Besi</td>
                  <td id="besi">...</td>
                </tr>
                <tr>
                  <td scope="row">Iodium</td>
                  <td id="iodium">...</td>
                  <td scope="row">Seng</td>
                  <td id="seng">...</td>
                </tr>
                <tr>
                  <td scope="row">Selenium</td>
                  <td id="selenium">...</td>
                  <td scope="row">Mangan</td>
                  <td id="mangan">...</td>
                </tr>
                <tr>
                  <td scope="row">Flour</td>
                  <td id="flour">...</td>
                  <td scope="row">Kromium</td>
                  <td id="kromium">...</td>
                </tr>
                <tr>
                  <td scope="row">Kalium</td>
                  <td id="kalium">...</td>
                  <td scope="row">Natrium</td>
                  <td id="natrium">...</td>
                </tr>
                <tr>
                  <td scope="row">Klor</td>
                  <td id="klor">...</td>
                  <td scope="row">Tembaga</td>
                  <td id="tembaga">...</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary" data-bs-target="#staticBackdrop2" data-bs-toggle="modal">
              Previous
            </button>
            <button type="button" class="btn btn-primary" data-bs-target="#staticBackdrop" data-bs-toggle="modal" disabled>
              Next
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal 3 Tutup -->

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="<?= BASEURL; ?>/js/script.js"></script>
  <script>
    function submitForm() {
      var usia = document.getElementById("usia").value;
      var tahunOrBulan = document.getElementById("tahunOrBulan").value;
      var gender = document.getElementById("gender").value;
      var kondisiKhusus = document.querySelector('input[name="kondisiKhusus"]:checked') ? document.querySelector('input[name="kondisiKhusus"]:checked').value : '';
      var umurHamilOrMenyusui = document.querySelector('input[name="umurHamilOrMenyusui"]:checked') ? document.querySelector('input[name="umurHamilOrMenyusui"]:checked').value : '';

      var formData = new FormData();
      formData.append("usia", usia);
      formData.append("tahunOrBulan", tahunOrBulan);
      formData.append("gender", gender);
      formData.append("hamilMenyusui", kondisiKhusus);
      formData.append("umur", umurHamilOrMenyusui);

      var xhr = new XMLHttpRequest();
      xhr.open("POST", "<?= BASEURL; ?>/home/find", true);
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            try {
              var responseData = JSON.parse(xhr.responseText);
              console.log(responseData);
            } catch (error) {
              console.error('Error parsing JSON:', error);
            }
          } else {
            console.error('Failed to send form data.');
          }
        }
      };
      xhr.send(formData);
    }
  </script>
</body>

</html>