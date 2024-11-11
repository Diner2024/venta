// functionsCompras.js
async function registrarCompras() {
    // Capturamos los valores de los campos del formulario de compra
    let id_producto = document.getElementById('id_producto').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
    let fecha_compra = document.querySelector('#fecha_compra').value;
    let id_trabajador = document.querySelector('#id_trabajador').value;

    // Validación de campos vacíos
    if (
        id_producto === "" || cantidad === "" || precio === "" || 
        fecha_compra === "" || id_trabajador === ""
    ) {
        alert("Error: ¡Hay campos vacíos!");
        return;
    }

    try {
        // Capturamos los datos del formulario HTML
        const frmRegistrarCompras = document.getElementById('frmRegistrarCompras');
        const datos = new FormData(frmRegistrarCompras);

        // Enviar los datos hacia el controlador mediante el método POST
        let respuesta = await fetch(base_url + 'controller/compras.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        // Procesamos la respuesta JSON
        let json = await respuesta.json();
        if (json.status) {
            swal("Compra Registrada", json.mensaje, "success");
            frmRegistrarCompra.reset(); // Limpiar el formulario después del registro exitoso
        } else {
            swal("Error", json.mensaje, "error");
        }

        console.log(json);
    } catch (e) {
        console.log("Oops, ocurrió un error: " + e);
    }
}