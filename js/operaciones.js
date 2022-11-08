
var inicioC = 0; //se inicializa una variable en 0

function aumentar(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id aumentar
cantidad = document.getElementById('carne').value = ++inicioC; //se obtiene el valor del input, y se incrementa en 1 el valor que tenga.
}

function disminuir(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id disminuir
    if (inicioC > 0) {
        cantidad = document.getElementById('carne').value = --inicioC; //se obtiene el valor del input, y se decrementa en 1 el valor que tenga.    
    } else {
        alert("No se puede disminuir más")
    }
}

var inicioP = 0; 
function aumentarp(){ 
    cantidad = document.getElementById('pollo').value = ++inicioP; 
    }
    
    function disminuirp(){
        if (inicioP > 0) {
            cantidad = document.getElementById('pollo').value = --inicioP; 
        } else {
            alert("No se puede disminuir más")
        }
    }
