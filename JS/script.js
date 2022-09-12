let latitude = 0;
let longitude = 0;
let pencarian = [];

function ambilLokasi() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(tampilkanPosisi);
    }else {
        console.log("Browser anda tidak mendukung")
    }
}

function tampilkanPosisi(Postion) {
    latitude = Postion.coords.latitude;
    longitude = Postion.coords.longitude;
    document.querySelector('#latitude').value = latitude;
    document.querySelector('#longitude').value = longitude;
    document.querySelector('#frame').src = `https://www.google.com/maps?q=${latitude},${longitude}&output=embed`;
    ambilNamaJalan(latitude,longitude);
}

function ambilNamaJalan(lat,lng) {
    fetch(`https://nominatim.openstreetmap.org/search?format=json&limit=3&q=${lat},${lng}`)
    .then(respone => respone.json())
    .then(respone => {
        document.getElementById('lokasi').value = respone[0].display_name;
    })
}

document.getElementById('lokasi').addEventListener('keyup', function() {
    fetch(`https://nominatim.openstreetmap.org/search?format=json&addressdetails=1&limit=3&q=${this.value}`)
    .then(respone => respone.json())
    .then(respone => {
        for (let i = 0; i < respone.length; i++) {
            // const li = document.createElement('li');
            // li.innerText = respone[i].display_name;
            // document.getElementById('list-kota').appendChild(li);
            pencarian.push(respone[i].display_name);
            console.log(pencarian)
            pencarian.filter(data => {
                console.log(data.startsWith(this.value));
            })
            // if (this.value != 'J') {
            //     console.log('yes');
            // }else {
            //     console.log('no');
            // }
        }
        document.querySelectorAll('#list-kota li').forEach(li => {
            li.addEventListener('click', (e,i) => {
                document.getElementById('lokasi').value = e.target.innerText;
            })
        })
    })
})
