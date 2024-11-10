async function registrarUsuario() {
    // Captura de todos los campos del formulario
    const numeroIdentidad = document.getElementById('numeroIdentidad').value;
    const razonSocial = document.getElementById('razonSocial').value;
    const telefono = document.getElementById('telefono').value;
    const correo = document.getElementById('correo').value;
    const departamento = document.getElementById('departamento').value;
    const provincia = document.getElementById('provincia').value;
    const distrito = document.getElementById('distrito').value;
    const codPostal = document.getElementById('codPostal').value;
    const direccion = document.getElementById('direccion').value;
    const rol = document.getElementById('rol').value;
    const password = document.getElementById('password').value;
    const estado = document.getElementById('estado').value;
    const fechaReg = document.getElementById('fechaReg').value;

    // Verificar si todos los campos requeridos están completos
    if (!numeroIdentidad || !razonSocial || !correo || !departamento || !provincia || 
        !distrito || !codPostal || !direccion || !rol || !password || !estado || !fechaReg) {
        alert("Error, hay campos vacíos");
        return;
    }

    try {
        // Captura de datos del formulario
        const datos = new FormData(document.getElementById('frmRegistrar'));

        // Enviar datos al controlador
        let respuesta = await fetch(base_url + 'controller/Usuario.php?tipo=registrar', {
            method: 'POST',
            body: datos
        });

        let json = await respuesta.json();

        if (json.status) {
            swal("Registro", json.mensaje, "success");
        } else {
            swal("Registro", json.mensaje, "error");
        }

        console.log(json);
    } catch (e) {
        console.log("Oops, ocurrió un error: " + e);
    }
}