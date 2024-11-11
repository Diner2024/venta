async function registrar_categoria() {

    let nombre = document.getElementById('nombre').value;
    let detalle = document.getElementById('detalle').value;
    if (nombre == "" || detalle == "") {
        Swal.fire('Por favor, complete todos los campos.');
        return;
    }

    try {
        const datos = new FormData(formCategoria);
        let respuesta = await fetch(base_url + '/controller/Categoria.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        json = await respuesta.json();
        if (json.status) {
            Swal.fire('Categoría registrada correctamente', json.mensaje, "success");
        } else {
            Swal.fire('Error al registrar la categoría', json.mensaje, "error");
        }
    
    }
    catch (error) {
        console.error("Oops, ocurrió un error: " + error);
    }
}