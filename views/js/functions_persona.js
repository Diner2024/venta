async function registrarPersona() {
    // Captura de todos los campos del formulario
    const nro_identidad = document.getElementById('nro_identidad').value;
    const razon_social = document.getElementById('razon_social').value;
    const telefono = document.getElementById('telefono').value;
    const correo = document.getElementById('correo').value;
    const departamento = document.getElementById('departamento').value;
    const provincia = document.getElementById('provincia').value;
    const distrito = document.getElementById('distrito').value;
    const cod_postal = document.getElementById('cod_postal').value;
    const direccion = document.getElementById('direccion').value;
    const rol = document.getElementById('rol').value;
    const password = document.getElementById('password').value;
    const estado = document.getElementById('estado').value;
    const fecha_reg = document.getElementById('fecha_reg').value;

        // Verificar que todos los campos estén completos
        if (nro_identidad=="" || razon_social=="" || telefono=="" || correo=="" || departamento=="" || provincia=="" || distrito=="" || cod_postal=="" || direccion=="" 
            || rol=="" || password=="" || estado=="" || fecha_reg=="") {
            alert("Error, campos vacios");
            return; 
        }
    
        try {
            //capturamos datos del formulario html
            const datos = new FormData(frmRegistrar);
    
            //enviar datos hacia el controlador
            let respuesta = await fetch(base_url + 'controller/persona.php?tipo=registrar', { //await es una promesa que si o si espera una respuesta
                method: 'POST',
                mode: 'cors',
                cache: 'no-cache',
                body: datos
            });
    
            json = await respuesta.json();
            if(json.status){
                swal("Registro", json.mensaje, "success");
            }else{
                swal("Registro", json.mensaje, "error");
            }
        
            console.log(json);
           } catch (e){
            console.log("Oops, ocurrio un error persona" + e );
           }
        }