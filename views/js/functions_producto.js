async function registrarProducto() {
    let codigo = document.getElementById('codigo').values;
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let categoria = document.querySelector('#idCategoria').value;
    let imagen = document.querySelector('#imagen').value;
    let proveedor = document.querySelector('#idProveedor').value;
    if (codigo == "" || nombre == "" || detalle == "" || precio == "" || stock == "" || categoria == "" || imagen == "" || proveedor == "") {
        alert("Error, campos vacios");
        return;
    }
    try {
        //capturamos datos del formulario html
        const datos = new FormData(frmRegistrar);
        //enviar datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cahe: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status) {
            swal("Registro", json.mensaje, "success");
        } else {
            swal("Registro", json.mensaje, "error");
        }

        console.log(json);
    } catch (e) {
        console.log("Oops ocurrio un error" + e);
    }

}

async function listar_categoria() {
    try {
        let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=listar');

        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';
            datos.forEach(element => {
                contenido_select += '<option value="'+ element.id +
                '">' + element.nombre+'</option>';
               /* $('#idCategoria').append($('<option />', {
                    text: `${element.nombre}`,
                    value: `${element.id}`
                }));*/
            });
            document.getElementById('idCategoria').innerHTML = 
            contenido_select;
        }
        console.log(respuesta);
    } catch (e) {
        console.log("Error al cargar categoria" + e);
    }
}


//listar proveedores
async function listar_personas() {
    try {
        let respuesta = await fetch(base_url+'controller/Proveedor.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccionar</option>';
            datos.forEach(element => {
                contenido_select += '<option value="'+ element.rol +'">'+element.razon_social+'</option>';
             /* $('#idCategoria').append($('<option/>',{
                  text: ${element.Nombre},
                  value: ${element.Id},
                }));    */
            });
            document.getElementById('idProveedor').innerHTML = contenido_select;
        }

        console.log(respuesta);
    } catch (e) {
        console.log("Error al cargar personas" + e);
    }
}



