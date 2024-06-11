document.getElementById("gender").addEventListener("change", function () {
  var gender = this.value;
  var hamilOrMenyusuiDiv = document.getElementById("hamilOrMenyusui");
  var umurHamilOrMenyusuiDiv = document.getElementById("umurHamilOrMenyusui");

  if (gender === "") {
    hamilOrMenyusuiDiv.innerHTML = "";
    umurHamilOrMenyusuiDiv.innerHTML = "";
  } else if (gender === "laki-laki") {
    hamilOrMenyusuiDiv.innerHTML = "";
    umurHamilOrMenyusuiDiv.innerHTML = "";
  } else if (gender === "perempuan") {
    hamilOrMenyusuiDiv.innerHTML = `
        <label class="col-sm-2 col-form-label">Kondisi Khusus</label>
          <div class="col-sm-10 mt-2">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="kondisiKhusus" id="inlineRadio1" value="tidak-keduanya" />
              <label class="form-check-label" for="inlineRadio1">Tidak Keduanya</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="kondisiKhusus" id="inlineRadio2" value="hamil" />
              <label class="form-check-label" for="inlineRadio2">Hamil</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="kondisiKhusus" id="inlineRadio3" value="menyusui" />
              <label class="form-check-label" for="inlineRadio3">Menyusui</label>
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
    var umurHamilOrMenyusuiDiv = document.getElementById("umurHamilOrMenyusui");
    var umurText = hamilMenyusui === "hamil" ? "Umur Hamil" : "Umur Menyusui";

    if (hamilMenyusui === "tidak-keduanya") {
      umurHamilOrMenyusuiDiv.innerHTML = "";
    } else if (hamilMenyusui === "hamil") {
      umurHamilOrMenyusuiDiv.innerHTML = `
            <label class="col-sm-2 col-form-label">${umurText}</label>
            <div class="col-sm-10 mt-1">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="umurHamilOrMenyusui" id="trimester1" value="2" />
                    <label class="form-check-label" for="trimester1">Trimester I</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="umurHamilOrMenyusui" id="trimester2" value="5" />
                    <label class="form-check-label" for="trimester2">Trimester II</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="umurHamilOrMenyusui" id="trimester3" value="8" />
                    <label class="form-check-label" for="trimester3">Trimester III</label>
                </div>
            </div>
        `;
    } else {
      umurHamilOrMenyusuiDiv.innerHTML = `
            <label class="col-sm-2 col-form-label">${umurText}</label>
            <div class="col-sm-10 mt-1">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="umurHamilOrMenyusui" value="5" />
                    <label class="form-check-label" for="6bulanke-1">6 Bulan Pertama</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="umurHamilOrMenyusui" value="8" />
                    <label class="form-check-label" for="6bulanke-2">6 Bulan Kedua</label>
                </div>
            </div>
        `;
    }
  });
