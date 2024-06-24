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
    var umurHamilOrMenyusuiDiv = document.getElementById("umurHamilOrMenyusui");
    var umurText = hamilMenyusui === "hamil" ? "Umur Hamil" : "Umur Menyusui";

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
