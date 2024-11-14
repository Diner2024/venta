async function iniciar_sesion(params) {
    console.log('iniciar_sesion');
    let usuario = document.querySelector('#usuario');
    let password = document.querySelector('#contrasena');
    if (usuario=="" || password =="") {
        alert('campos vacios');
        return;
    }
    try {
        //capturamos datos del formulario html
        const datos = new FormData(loginForm);
        //enviar datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/login.php?tipo=iniciar_sesion', {
            method: 'POST',
            mode: 'cors',
            cahe: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status) {
            swal("iniciar_sesion", json.mensaje, "success");
        } else {
            swal("iniciar_sesion", json.mensaje, "error");
        }

        console.log(json);
    } catch (e) {
        console.log("Oops ocurrio un error" + e);
    }
}


if (document.querySelector('#loginForm')){
    //evita que se envie el forulario
    let frm_iniciar_sesion = document.querySelector
    ('#loginForm');
    frm_iniciar_sesion.onsubmit = function (e){
        e.preventDefault();
        iniciar_sesion();
    }
}