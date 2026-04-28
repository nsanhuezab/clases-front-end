function mostrar() {
    const boton = document.getElementById('boton');
    boton.addEventListener('click', () => {
        const valor = document.getElementById('formulario').value;
        console.log(valor)
    })
}
function sumar(){
     const suma = document.getElementById('suma');
     var resultado=0;
     boton.addEventListener('click', () => { 
        const valor1= document.getElementById("v1").value;
        const valor2= document.getElementById("v2").value;
        var resultado=(parseInt(valor1)+parseInt(valor2));
        console.log(resultado)
     });
}
    