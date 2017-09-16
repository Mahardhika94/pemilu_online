function pilih1(fak){
var fak = document.getElementById('fak_k').value;

if(fak  =='FST'){
document.getElementById('prodi_k').innerHTML ="<option>Pilih Prodi</option><option>Teknik Informatika</option><option>Teknik Elektro</option><option>Sistem Informasi</option><option>Manajemen Informatika</option>";

}
else if( fak =='FIKES'){
document.getElementById('prodi_k').innerHTML ="<option>Pilih Prodi</option><option>Fisioterapi</option><option>Keperawatan</option><option>NERS</option><option>KEBIDANAN D-III</option><option>Ilmu Gizi</option><option>Kesehatan Masyarakat</option><option>Bidan Pendidik</option>";
}else if(fak =='FISE'){
document.getElementById('prodi_k').innerHTML ="<option>Pilih Prodi</option><option>Akuntansi</option><option>Hubungan Internasional</option><option>Sastra Inggris</option><option>Ilmu Komunikasi</option>";
}else{
document.getElementById('prodi_k').innerHTML="<option>Pilih Prodi</option>";
}
}


function pilih2(fak){
var fak = document.getElementById('fak_wk').value;

if(fak  =='FST'){
document.getElementById('prodi_wk').innerHTML ="<option>Pilih Prodi</option><option>Teknik Informatika</option><option>Teknik Elektro</option><option>Sistem Informasi</option><option>Manajemen Informatika</option>";

}
else if( fak =='FIKES'){
document.getElementById('prodi_wk').innerHTML ="<option>Pilih Prodi</option><option>Fisioterapi</option><option>Keperawatan</option><option>NERS</option><option>KEBIDANAN D-III</option><option>Ilmu Gizi</option><option>Kesehatan Masyarakat</option><option>Bidan Pendidik</option>";
}else if(fak =='FISE'){
document.getElementById('prodi_wk').innerHTML ="<option>Pilih Prodi</option><option>Akuntansi</option><option>Hubungan Internasional</option><option>Sastra Inggris</option><option>Ilmu Komunikasi</option>";
}else{
document.getElementById('prodi_wk').innerHTML="<option>Pilih Prodi</option>";
}
}

function cc(){
alert(77);
}



