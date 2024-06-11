<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Takaran Gizi</title>
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
   <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/styles.css" />
</head>

<body class="font-monospace">
   <div class="container">
      <div class="main-page">
         <div class="tagline text-center">
            <span class="fs-1">Kebutuhan Gizi Harian</span>
            <br />
            <span class="fs-2">Website ini dirancang untuk membantu pengguna menghitung
               kebutuhan gizi harian mereka berdasarkan usia, jenis kelamin, dan kondisi khusus seperti kehamilan atau
               menyusui sesuai dengan <a href="https://peraturan.bpk.go.id/Details/138621/permenkes-no-28-tahun-2019"
                  class="text-decoration-underline text-primary" target="blank">Permenkes No. 28 Tahun 2019</a>. Dengan
               mengisi
               formulir yang disediakan, pengguna dapat dengan mudah memperoleh informasi tentang kebutuhan gizi mereka
               untuk menjaga kesehatan dan kesejahteraan mereka.</span>
            <br>
            <a href="#myForm" class="btn rounded-5" style="background-color: rgba(45, 149, 150, 1); width: 94px;"
               role="button">Mulai</a>
         </div>
      </div>
      <div class="m-4">
         <h2 class="text-center mb-4">This contains 3 keypoint data for get better life!</h2>
         <div class="card-container row row-1 g-5 justify-content-around">
            <div class="card col-12 col-lg-3 card-cs">
               <h4 class="card-header card-header-cs">Nutrition</h4>
               <div class="card-body">
                  <p class="card-text">
                     Involves the intake of essential nutrients like carbohydrates,
                     proteins, fats, vitamins, minerals, and water, crucial for
                     sustaining life and promoting bodily functions. Making informed
                     choices about food ensures a balanced diet tailored to
                     individual needs, supporting growth, development, and overall
                     well-being.
                  </p>
                  <div class="btn-group dropup button-cover">
                     <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
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
               <h4 class="card-header card-header-cs">Vitamin</h4>
               <div class="card-body">
                  <p class="card-text">
                     Organic compounds vital for physiological processes, play
                     critical roles in metabolism, immune function, and cell growth.
                     Classified into fat-soluble and water-soluble types, they are
                     sourced from various foods and their deficiency or excess intake
                     can impact health significantly.
                  </p>

                  <div class="btn-group dropup mt-4 button-cover">
                     <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
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
               <h4 class="card-header card-header-cs">Mineral</h4>
               <div class="card-body">
                  <p class="card-text">
                     Inorganic substances necessary for body functions, contribute to
                     bone health, muscle function, and nerve transmission. Classified
                     as macrominerals and trace minerals, they are obtained from
                     diverse food sources and are essential for preventing nutrient
                     deficiencies and supporting overall health.
                  </p>
                  <div class="btn-group dropup button-cover">
                     <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
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
                  <input type="text" class="form-control" id="usia" name="usia" placeholder="e.g. 5" required />
               </div>
               <div class="col-sm-4">
                  <select class="form-control col-sm" size="1" id="tahunOrBulan" name="tahunOrBulan" required>
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
               <button type="button" id="disabledInput" class="btn btn-secondary" data-bs-toggle="modal"
                  data-bs-target="#staticBackdrop" onclick="submitForm()">
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
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#2d9596"
                     class="bi bi-search me-2" viewBox="0 0 16 16">
                     <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                  </svg>
                  </label>
                  <input type="text" class="form-input-search col-sm-11" id="specificSizeInputGroupUsername"
                     placeholder="Search tips" />
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
   <div class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                  <button type="button" class="btn btn-primary" data-bs-target="#staticBackdrop" data-bs-toggle="modal"
                     disabled>
                     Previous
                  </button>
                  <button type="button" class="btn btn-primary" data-bs-target="#staticBackdrop2"
                     data-bs-toggle="modal">
                     Next
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Modal 1 Tutup -->
   <!-- Modal 2 -->
   <div class="modal" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                  <button type="button" class="btn btn-primary" data-bs-target="#staticBackdrop3"
                     data-bs-toggle="modal">
                     Next
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Modal 2 Tutup -->
   <!-- Modal 3 -->
   <div class="modal" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                  <button type="button" class="btn btn-primary" data-bs-target="#staticBackdrop2"
                     data-bs-toggle="modal">
                     Previous
                  </button>
                  <button type="button" class="btn btn-primary" data-bs-target="#staticBackdrop" data-bs-toggle="modal"
                     disabled>
                     Next
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Modal 3 Tutup -->

   <!-- Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
   </script>
   <script src="<?= BASEURL; ?>/js/script.js"></script>
   <script>
   function submitForm() {
      var usia = document.getElementById("usia").value;
      var tahunOrBulan = document.getElementById("tahunOrBulan").value;
      var gender = document.getElementById("gender").value;
      var kondisiKhusus = document.querySelector('input[name="kondisiKhusus"]:checked') ? document.querySelector(
         'input[name="kondisiKhusus"]:checked').value : '';
      var umurHamilOrMenyusui = document.querySelector('input[name="umurHamilOrMenyusui"]:checked') ? document
         .querySelector('input[name="umurHamilOrMenyusui"]:checked').value : '';

      var formData = new FormData();
      formData.append("usia", usia);
      formData.append("tahunOrBulan", tahunOrBulan);
      formData.append("gender", gender);
      if (kondisiKhusus && umurHamilOrMenyusui) {
         formData.append("hamilMenyusui", kondisiKhusus);
         formData.append("umur", umurHamilOrMenyusui);
      }

      var xhr = new XMLHttpRequest();
      xhr.open("POST", "<?= BASEURL; ?>/home/find", true);
      xhr.onreadystatechange = function() {
         if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
               try {
                  var responseData = JSON.parse(xhr.responseText);
                  // tabel 1
                  document.getElementById("energi").innerText = responseData.tabel1.energi + " kkal";
                  document.getElementById("protein").innerText = responseData.tabel1.protein + " g";
                  document.getElementById("total_lemak").innerText = responseData.tabel1.total_lemak + " g";
                  document.getElementById("karbohidrat").innerText = responseData.tabel1.karbohidrat + " g";
                  document.getElementById("omega3").innerText = responseData.tabel1.omega3 + " g";
                  document.getElementById("omega6").innerText = responseData.tabel1.omega6 + " g";
                  document.getElementById("serat").innerText = responseData.tabel1.serat + " g";
                  document.getElementById("air").innerText = responseData.tabel1.air + " ml";

                  // tabel 2
                  document.getElementById("vitA").innerText = responseData.tabel2.vitA + " RE";
                  document.getElementById("vitD").innerText = responseData.tabel2.vitD + " mcg";
                  document.getElementById("vitE").innerText = responseData.tabel2.vitE + " mcg";
                  document.getElementById("vitK").innerText = responseData.tabel2.vitK + " mcg";
                  document.getElementById("vitB1").innerText = responseData.tabel2.vitB1 + " mg";
                  document.getElementById("vitB2").innerText = responseData.tabel2.vitB2 + " mg";
                  document.getElementById("vitB3").innerText = responseData.tabel2.vitB3 + " mg";
                  document.getElementById("vitB5").innerText = responseData.tabel2.vitB5 + " mg";
                  document.getElementById("vitB6").innerText = responseData.tabel2.vitB6 + " mg";
                  document.getElementById("vitB12").innerText = responseData.tabel2.vitB12 + " mcg";
                  document.getElementById("folat").innerText = responseData.tabel2.folat + " mcg";
                  document.getElementById("Biotin").innerText = responseData.tabel2.biotin + " mcg";
                  document.getElementById("kolin").innerText = responseData.tabel2.kolin + " mg";
                  document.getElementById("vitC").innerText = responseData.tabel2.vitC + " mg";

                  // tabel 3
                  document.getElementById("kalsium").innerText = responseData.tabel3.kalsium + " mg";
                  document.getElementById("fosfor").innerText = responseData.tabel3.fosfor + " mg";
                  document.getElementById("magnesium").innerText = responseData.tabel3.magnesium + " mcg";
                  document.getElementById("besi").innerText = responseData.tabel3.besi + " mg";
                  document.getElementById("iodium").innerText = responseData.tabel3.iodium + " mcg";
                  document.getElementById("seng").innerText = responseData.tabel3.seng + " mg";
                  document.getElementById("tembaga").innerText = responseData.tabel3.tembaga + " mcg";
                  document.getElementById("flour").innerText = responseData.tabel3.fluor + " mg";
                  document.getElementById("kromium").innerText = responseData.tabel3.kromium + " mcg";
                  document.getElementById("kalium").innerText = responseData.tabel3.kalium + " mg";
                  document.getElementById("natrium").innerText = responseData.tabel3.natrium + " mg";
                  document.getElementById("klor").innerText = responseData.tabel3.klor + " mg";
                  document.getElementById("selenium").innerText = responseData.tabel3.selenium + " mcg";
                  document.getElementById("mangan").innerText = responseData.tabel3.mangan + " mg";

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