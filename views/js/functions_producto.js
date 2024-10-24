async function registrarProducto(){
    let codigo = document.getElementById('codigo').values;
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let categoria = document.querySelector('#idCategoria').value;
    let imagen = document.querySelector('#imagen').value;
    let proveedor = document.querySelector('#idProveedor').value;
    if (codigo=="" || nombre=="" || detalle=="" || precio=="" || stock=="" || categoria=="" || imagen=="" || proveedor=="") {
        alert("Error, campos vacios");
        return; 
    }
    try {
        //capturamos datos del formulario html
        const datos = new FormData(frmRegistrar);
        //enviar datos hacia el controlador
        let respuesta = await fetch(base_url+'controller/Producto.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cahe: 'no-cache',
            body: datos
        });
        console.log(respuesta);
    } catch (e) {
        console.log("Oops ocurrio un error"+e);
    }

}