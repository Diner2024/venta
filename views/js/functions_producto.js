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
        })
        json = await respuesta.json();
        if (json.status) {
            swal("Registro", json.mensaje, "success");
        }else{
            swal("Registro", json.mensaje, "error");
        }

        console.log(json);
        console.log(respuesta);
    } catch (e) {
        console.log("Oops ocurrio un error"+e);
    }
}
async function listar_categoria(){
    try{
        let respuesta =await fetch(base_url+'controller/Categoria.php?tipo=listar');
        json = await respuesta.json();
        if (json.status){
            let datos = json.contenido;
            datos.FormEach(Element =>{
                $('#categoria').append($('<option />'),{
                    Text: `${element.nombre}`,
                    value: `${element.id}`
                });
            });
        }

    } catch (e){
        console.log("Error al cargar categoria"+e);
    }
    }