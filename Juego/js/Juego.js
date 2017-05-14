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

function Verificaen100(nro){
  let respuesta = (nro <=100 && nro >= 0)? 1 : 0;
  return respuesta;
}

function EstablecerProb(){
  if (!Verificaen100(prob_pi)){
    prob_pi = 0;
    document.getElementById("P_Piedra").value = 0;
    alert("Piedra no esta entre 0 y 100.Valor:0.");
  }
  if (!Verificaen100(prob_pa)){
    prob_pa = 0;
    document.getElementById("P_Papel").value = 0;
    alert("Papel no esta entre 0 y 100.Valor:0.");
  }
  if (!Verificaen100(prob_ti)){
    prob_ti = 0;
    document.getElementById("P_Tijeras").value = 0;
    alert("Tijera no esta entre 0 y 100.Valor:0.");
  }
}

function Random100(){
  let nro_rand = Math.floor((Math.random() * 100) + 1);
  return nro_rand;
}

function Probabilidad(prob){
  let nro_rand = Random100();
  let respuesta = (nro_rand <= prob)? 1 : 0;
  return respuesta;
}

function JugadaPc(){
  let manoPc = Math.floor((Math.random() * formas) + 1);
  if((prob_pi == 0) && (prob_pa == 0) && (prob_ti == 0)){
    return manoPc;
  }
  switch (manoPc){
    case piedra:
      if (prob_pi !== 0){
        if(Probabilidad(prob_pi)){
          return manoPc;
        }
      }
    break;
    case papel:
    if (prob_pa !== 0){
      if(Probabilidad(prob_pa)){
        return manoPc;
      }
    }
    break;
    case tijeras:
    if (prob_ti !== 0){
      if(Probabilidad(prob_ti)){
        return manoPc;
      }
    }
    break;
  }
  return JugadaPc();
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
