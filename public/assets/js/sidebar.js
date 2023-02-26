const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});

document.querySelector('#tanggal').value = new Date().toISOString().substring(0, 10);

function cetakTanggal() {
    var tanggal = document.querySelector('#tanggal').value;
    document.querySelector('#cetak').innerHTML = tanggal.split('-')[2]+'-'+tanggal.split('-')[1]+'-'+tanggal.split('-')[0];
    }

document.querySelector('#waktu').value = new Time().toISOString().substring(0, 10);

function cetakWaktu() {
    var waktu = document.querySelector('#waktu').value;
    document.querySelector('#mulai').innerHTML = waktu.split('-')[0];
    }

document.querySelector('#jam').value = new Time().toISOString().substring(0, 10);

function cetakJam() {
    var jam = document.querySelector('#jam').value;
    document.querySelector('#selesai').innerHTML = jam.split('-')[0];
    }

function myFunction() {
    var x = document.getElementById("Demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
    }