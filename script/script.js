function detectChange(service){
  var harga=0;
  var pilihan=service.value;
    if(pilihan=="shave"){
    harga=35000;
  }
  else if(pilihan=="cut"){
    harga=50000;
  }
  else{
    harga=120000;
  }
  document.getElementById("harga").value="Rp. "+harga;
}
