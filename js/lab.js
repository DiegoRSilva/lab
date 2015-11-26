
function calculaHCM(hemoglobina,hematimetria){
  var hcm = (hemoglobina / hematimetria ) * 10;

}
function calculaVCM(hematocrito,hematimetria){
  var vcm = (hematocrito / hematimetria ) * 10;
}
function calculaCHCM(hemoglobina,hematocrito){
  var chcm = (hemoglobina * hematocrito) / 10;
  return chcm;
}
