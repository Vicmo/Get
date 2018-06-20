
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function validas(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[a-z-A-Z-ñ]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function cero(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if(tecla == 48 && e.srcElement.value == ""){
      return false;
    }
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

  function horas(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if(tecla == 46 && e.srcElement.value != ""){
      return true;
    }

     if(tecla == 48 && e.srcElement.value == ""){
      return false;
    }

    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
