let btn_profile = document.getElementById('btn-profile');
let btn_sertifikat = document.getElementById('btn-sertifikat');
const profile = document.querySelector('.profile');
const sertifikat = document.querySelector('.sertifikat');

btn_sertifikat.addEventListener('click', function() {
    profile.style.display = 'none'
    sertifikat.style.display = 'inline-block'
    btn_sertifikat.style.backgroundColor = '#269AD7';
    btn_profile.style.backgroundColor = 'white'
})

btn_profile.addEventListener('click', function() {
    profile.style.display = 'flex'
    sertifikat.style.display = 'none'
    btn_sertifikat.style.backgroundColor = 'white';
    btn_profile.style.backgroundColor = '#269AD7'
})

