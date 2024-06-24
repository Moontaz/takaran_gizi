document.getElementById("gender").addEventListener("change", function () {
    var gender = this.value;
    var hamilOrMenyusuiDiv = document.getElementById("hamilOrMenyusui");
    var umurHamilOrMenyusuiDiv = document.getElementById("umurHamilOrMenyusui");

    if (gender === "-") {
        hamilOrMenyusuiDiv.innerHTML = "";
        umurHamilOrMenyusuiDiv.innerHTML = "";
    } else if (gender === "laki-laki") {
        hamilOrMenyusuiDiv.innerHTML = "";
        umurHamilOrMenyusuiDiv.innerHTML = "";
    } else if (gender === "perempuan") {
        hamilOrMenyusuiDiv.innerHTML = `
        <label>Kondisi Khusus</label>
          <div class="field half">
            <div class="field half">
              <input class="" type="radio" name="kondisiKhusus" id="inlineRadio1" value="tidak-keduanya" />
              <label class="" for="inlineRadio1">Tidak Keduanya</label>
            </div>
            <div class="field half">
              <input class="" type="radio" name="kondisiKhusus" id="inlineRadio2" value="hamil" />
              <label class="" for="inlineRadio2">Hamil</label>
            </div>
            <div class="field half">
              <input class="" type="radio" name="kondisiKhusus" id="inlineRadio3" value="menyusui" />
              <label class="" for="inlineRadio3">Menyusui</label>
            </div>
          </div>
  `;
    }
});

document
    .getElementById("hamilOrMenyusui")
    .addEventListener("change", function () {
        var form = document.getElementById("myForm");
        var hamilMenyusui = form.querySelector(
            'input[name="kondisiKhusus"]:checked'
        ).value;
        var umurHamilOrMenyusuiDiv = document.getElementById(
            "umurHamilOrMenyusui"
        );
        var umurText =
            hamilMenyusui === "hamil" ? "Umur Hamil" : "Umur Menyusui";

        if (hamilMenyusui === "tidak-keduanya") {
            umurHamilOrMenyusuiDiv.innerHTML = "";
        } else if (hamilMenyusui === "hamil") {
            umurHamilOrMenyusuiDiv.innerHTML = `
            <label class="">${umurText}</label>
            <div class="field half">
                <div class="">
                    <input class="" type="radio" name="umurHamilOrMenyusui" id="trimester1" value="2" />
                    <label class="" for="trimester1">Trimester I</label>
                </div>
                <div class="">
                    <input class="" type="radio" name="umurHamilOrMenyusui" id="trimester2" value="5" />
                    <label class="" for="trimester2">Trimester II</label>
                </div>
                <div class="">
                    <input class="" type="radio" name="umurHamilOrMenyusui" id="trimester3" value="8" />
                    <label class="" for="trimester3">Trimester III</label>
                </div>
            </div>
        `;
        } else {
            umurHamilOrMenyusuiDiv.innerHTML = `
            <label class="">${umurText}</label>
            <div class="field half">
                <div class="">
                    <input class="" type="radio" name="umurHamilOrMenyusui" id="semester1" value="5" />
                    <label class="" for="semester1">6 Bulan Pertama</label>
                </div>
                <div class="">
                    <input class="" type="radio" name="umurHamilOrMenyusui" id="semester2" value="8" />
                    <label class="" for="semester2">6 Bulan Kedua</label>
                </div>
            </div>
        `;
        }
    });

function validateForm() {
    var usia = document.getElementById("usia").value;
    var gender = document.getElementById("gender").value;

    if (!usia) {
        showAlert("danger", "Usia Wajib Diisi.");
        return false;
    }

    if (isNaN(usia)) {
        showAlert("danger", "Usia harus berupa angka.");
        return false;
    }

    if (gender === "-") {
        showAlert("danger", "Jenis Kelamin Wajib Diisi.");
        return false;
    }

    if (gender === "perempuan") {
        var kondisiKhusus = document.querySelector(
            'input[name="kondisiKhusus"]:checked'
        );
        if (!kondisiKhusus) {
            showAlert("danger", "Kondisi Khusus Wajib Diisi.");
            return false;
        }

        if (kondisiKhusus.value !== "tidak-keduanya") {
            var umurText =
                kondisiKhusus.value === "hamil"
                    ? "Umur Hamil"
                    : "Umur Menyusui";
            var umurHamilOrMenyusui = document.querySelector(
                'input[name="umurHamilOrMenyusui"]:checked'
            );
            if (!umurHamilOrMenyusui) {
                showAlert("danger", umurText + " Wajib Diisi.");
                return false;
            }
        }
    }

    return true;
}

function showAlert(type, message) {
    var alertHTML = '<div class="alert alert-' + type + ' alert-dismissible fade show" role="alert">' +
        "<strong>" + message + "</strong>" + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
        "</div>";

    document.getElementById("alert-container").innerHTML = alertHTML;

    $(".alert").alert();
}

function submitForm() {
    if (!validateForm()) {
        return;
    }

    var usia = document.getElementById("usia").value;
    var tahunOrBulan = document.getElementById("tahunOrBulan").value;
    var gender = document.getElementById("gender").value;
    var kondisiKhusus = document.querySelector(
        'input[name="kondisiKhusus"]:checked'
    )
        ? document.querySelector('input[name="kondisiKhusus"]:checked').value
        : "";
    var umurHamilOrMenyusui = document.querySelector(
        'input[name="umurHamilOrMenyusui"]:checked'
    )
        ? document.querySelector('input[name="umurHamilOrMenyusui"]:checked')
              .value
        : "";

    var formData = new FormData();
    formData.append("usia", usia);
    formData.append("tahunOrBulan", tahunOrBulan);
    formData.append("gender", gender);
    if (kondisiKhusus && umurHamilOrMenyusui) {
        formData.append("hamilMenyusui", kondisiKhusus);
        formData.append("umur", umurHamilOrMenyusui);
    }

    var csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/find", true);
    xhr.setRequestHeader("X-CSRF-TOKEN", csrfToken);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                try {
                    var responseData = JSON.parse(xhr.responseText);

                    // tabel 1
                    document.getElementById("energi").innerText =
                        responseData.tabel1.energi + " kkal";
                    document.getElementById("protein").innerText =
                        responseData.tabel1.protein + " g";
                    document.getElementById("total_lemak").innerText =
                        responseData.tabel1.total_lemak + " g";
                    document.getElementById("karbohidrat").innerText =
                        responseData.tabel1.karbohidrat + " g";
                    document.getElementById("omega3").innerText =
                        responseData.tabel1.omega3 + " g";
                    document.getElementById("omega6").innerText =
                        responseData.tabel1.omega6 + " g";
                    document.getElementById("serat").innerText =
                        responseData.tabel1.serat + " g";
                    document.getElementById("air").innerText =
                        responseData.tabel1.air + " ml";

                    // tabel 2
                    document.getElementById("vitA").innerText =
                        responseData.tabel2.vitA + " RE";
                    document.getElementById("vitD").innerText =
                        responseData.tabel2.vitD + " mcg";
                    document.getElementById("vitE").innerText =
                        responseData.tabel2.vitE + " mcg";
                    document.getElementById("vitK").innerText =
                        responseData.tabel2.vitK + " mcg";
                    document.getElementById("vitB1").innerText =
                        responseData.tabel2.vitB1 + " mg";
                    document.getElementById("vitB2").innerText =
                        responseData.tabel2.vitB2 + " mg";
                    document.getElementById("vitB3").innerText =
                        responseData.tabel2.vitB3 + " mg";
                    document.getElementById("vitB5").innerText =
                        responseData.tabel2.vitB5 + " mg";
                    document.getElementById("vitB6").innerText =
                        responseData.tabel2.vitB6 + " mg";
                    document.getElementById("vitB12").innerText =
                        responseData.tabel2.vitB12 + " mcg";
                    document.getElementById("folat").innerText =
                        responseData.tabel2.folat + " mcg";
                    document.getElementById("Biotin").innerText =
                        responseData.tabel2.biotin + " mcg";
                    document.getElementById("kolin").innerText =
                        responseData.tabel2.kolin + " mg";
                    document.getElementById("vitC").innerText =
                        responseData.tabel2.vitC + " mg";

                    // tabel 3
                    document.getElementById("kalsium").innerText =
                        responseData.tabel3.kalsium + " mg";
                    document.getElementById("fosfor").innerText =
                        responseData.tabel3.fosfor + " mg";
                    document.getElementById("magnesium").innerText =
                        responseData.tabel3.magnesium + " mcg";
                    document.getElementById("besi").innerText =
                        responseData.tabel3.besi + " mg";
                    document.getElementById("iodium").innerText =
                        responseData.tabel3.iodium + " mcg";
                    document.getElementById("seng").innerText =
                        responseData.tabel3.seng + " mg";
                    document.getElementById("tembaga").innerText =
                        responseData.tabel3.tembaga + " mcg";
                    document.getElementById("flour").innerText =
                        responseData.tabel3.fluor + " mg";
                    document.getElementById("kromium").innerText =
                        responseData.tabel3.kromium + " mcg";
                    document.getElementById("kalium").innerText =
                        responseData.tabel3.kalium + " mg";
                    document.getElementById("natrium").innerText =
                        responseData.tabel3.natrium + " mg";
                    document.getElementById("klor").innerText =
                        responseData.tabel3.klor + " mg";
                    document.getElementById("selenium").innerText =
                        responseData.tabel3.selenium + " mcg";
                    document.getElementById("mangan").innerText =
                        responseData.tabel3.mangan + " mg";
                    $("#staticBackdrop").modal("show");
                } catch (error) {
                    console.error("Error parsing JSON:", error);
                }
            } else {
                console.error("Failed to send form data.");
            }
        }
    };
    xhr.send(formData);
}
