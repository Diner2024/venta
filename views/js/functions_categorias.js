async function registrar_categoria() {
    let nombre = document.getElementById('nombre').value;
    let detalle = document.getElementById('detalle').value;
    if (nombre == "" || detalle == "") {
        alert("Error, campos vacios");
        return;
    }
    try {
        //capturamos datos del formulario html
        const datos = new FormData(frmRegistrar);
        //enviar datos hacia el controlador
        let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=registrar', { //await es una promesa que si o si espera una respuesta
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
        console.log("Oops, ocurrio un error categoria"+e);
       }
    }