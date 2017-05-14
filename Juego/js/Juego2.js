"use strict";
const formas = 3;
const piedra = 1;
const papel = 2;
const tijeras = 3;
let mano;
let prob_pi = 0;
let prob_pa = 0;
let prob_ti = 0;
let pun_usu = 0;
let pun_pc = 0;

function CambiarFondo(mano){
  switch (mano) {
    case 1:
      document.getElementById('FondoColor').style.background='#000000';
    break;
    case 2:
      document.getElementById("FondoColor").style.background = "#dee8f9";
    break;
    case 3:
      document.getElementById("FondoColor").style.background = "#7f8287";
    break;
    default:"Mano no valida";
  }
}


function ElegirMano(selecion){
  mano = selecion;
  CambiarFondo(mano);
}

function Verificaen100(){
  let nro_pi = parseInt(prob_pi);
  let nro_pa = parseInt(prob_pa);
  let nro_ti = parseInt(prob_ti);
  let nro = nro_pi + nro_pa + nro_ti;
  let respuesta = (nro <= 100 && nro >= 0)? 1 : 0;
  return respuesta;
}

function EstablecerProb(){
  if (!Verificaen100()){
    prob_pi = 0;
    document.getElementById("P_Piedra").value = 0;
    prob_pa = 0;
    document.getElementById("P_Papel").value = 0;
    prob_ti = 0;
    document.getElementById("P_Tijeras").value = 0;
    alert("Las probabilidades no suman 100 o son menores que 0. Se reiniciaron todas a 0.");
  }
}

function Random100(){
  let nro_rand = Math.floor((Math.random() * 100) + 1);
  return nro_rand;
}

function JugadaPc(){
  if((prob_pi == 0) && (prob_pa == 0) && (prob_ti == 0)){
    let manoPc = Math.floor((Math.random() * formas) + 1);
    return manoPc;
  }else{
    let list_prob = [];
    list_prob[piedra] = prob_pi;
    list_prob[papel] = prob_pi + prob_pa;
    list_prob[tijeras] = prob_pi + prob_pa + prob_ti;
    let mano_100 = Random100();
    if (mano_100 <= list_prob[piedra]) return piedra;
    if (mano_100 <= list_prob[papel]) return papel;
    if (mano_100 <= list_prob[tijeras]) return tijeras;
  }
}

function MostrarMano(manoPc){
  switch (manoPc) {
    case 1:
      document.getElementById("BoxPc").innerHTML = "Piedra";
    break;
    case 2:
      document.getElementById("BoxPc").innerHTML = "Papel";
    break;
    case 3:
      document.getElementById("BoxPc").innerHTML = "Tijeras";
    break;
    default:"Mano no valida";
  }
}

function Jugar(){
  const pc = 1;
  const usu = 0;
  prob_pi = document.getElementById("P_Piedra").value;
  prob_pa = document.getElementById("P_Papel").value;
  prob_ti = document.getElementById("P_Tijeras").value;
  EstablecerProb();
  let manoPc = JugadaPc();
  MostrarMano(manoPc);
  if (mano === manoPc){
     document.getElementById("Resultado").innerHTML = "Empate";
  }else{
    switch (mano){
      case piedra:
        if(manoPc === tijeras){
          document.getElementById("Resultado").innerHTML = "Win";
          SumarPuntos(usu);
        }else{
          document.getElementById("Resultado").innerHTML = "Lose";
          SumarPuntos(pc);
        }
        break;
      case papel:
        if(manoPc === piedra){
          document.getElementById("Resultado").innerHTML = "Win";
          SumarPuntos(usu);
        }else{
          document.getElementById("Resultado").innerHTML = "Lose";
          SumarPuntos(pc);
        }
        break;
      case tijeras:
        if(manoPc === papel){
          document.getElementById("Resultado").innerHTML = "Win";
          SumarPuntos(usu);
        }else{
          document.getElementById("Resultado").innerHTML = "Lose";
          SumarPuntos(pc);
        }
        break;
      default: "No es una forma valida"
    }
  }/*Termina el else*/
}

function SumarPuntos(es_pc){
  if (es_pc){
    pun_pc += 1;
    document.getElementById("BoxPunPc").innerHTML = pun_pc;
  }else{
    pun_usu += 1;
    document.getElementById("BoxPunUsu").innerHTML = pun_usu;
  }
}
