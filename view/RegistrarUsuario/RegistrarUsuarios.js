
document.addEventListener("DOMContentLoaded", function() {
    let privilegioUser = document.getElementById("rolUsuarios"); 
    let inputs = document.querySelectorAll("input, select, textarea"); 
    function bloqueoInputs() {
        let disabledInputs = privilegioUser.value === "";
        inputs.forEach(input => { 
            if (input.id !== "rolUsuarios") { 
                input.disabled = disabledInputs;
            }
        });
    }
    //Funcion para validar text
    function validarinputText(nombreRegistro){
        //alert(nombreRegistro)
         let regex = /^[a-zA-ZÁÉÍÓÚáéíóúÑñ\s]+$/
        if(nombreRegistro.trim()===""){
            return "El nombre es obligatorio";
        }else if(!regex.test(nombreRegistro)){
            return "Solo se premiten letras"
        }
    }

    privilegioUser.addEventListener("change", bloqueoInputs); 
    bloqueoInputs();
    //
    $("#enviarRegistro").click(function(){
        let nombreRegistro =  document.getElementById("nombreRegistro").value;
        let errornombre = $("#erronombre");
        let mensajeNombre = validarinputText(nombreRegistro);
        if(mensajeNombre){
            $("#nombreRegistro").addClass("form-control-danger")
        }
    });
   // Swal.fire('hi');

});

