async function registrarcompra() {
    let id_producto = document.getElementById('producto').value;
    let cantidad = document.getElementById('cantidad').value;
    let precio = document.getElementById('precio').value;
    let id_trabajador = document.getElementById('trabajador').value;

    if (id_producto == "" || cantidad == "" || precio == "" || id_trabajador == "") {
        swal('Por favor, complete todos los campos.');
        return;
    }
    try {
        const datos = new FormData(formCompra);

        let respuesta = await fetch(base_url +'controller/compras.php?tipo=registrar',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        let json = await respuesta.json();

        if (json.status) {
            swal("Registro exitoso", json.mensaje, "success");
        } else {
            swal("Registro fallido", json.mensaje, "error");
        }
    } catch (error) {
        console.error("Oops, ocurrió un error: " + error);
    }
}



async function listar_productos() {
    try {
        let respuesta = await fetch(base_url + 'controller/producto.php?tipo=listar');
        let json = await respuesta.json();

        if (json.status) {
            let datos = json.contenido;
            let conten = '<option value="">Seleccionar</option>';
            datos.forEach(element => {
                conten += '<option value="'+element.id+'">'+element.nombre+'</option>';
/*                 $('#producto').append($('<option />', {
                    text: `${element.nombre}`, 
                    value: `${element.id}`
                })); */
            });
            document.getElementById('producto').innerHTML = conten;
        }
        console.log(respuesta);
    } catch (error) {
        console.error("Oops, ocurrió un error al listar productos: " + error);
    }
}

//listar proveedores
async function listar_trabajador(){
    try {
        let respuesta1 = await fetch(base_url+'controller/trabajador.php?tipo=listar');
        json = await respuesta1.json();
        if (json.status) {
            let datos1 = json.contenido;
            let contenido_select1 = '<option value="">Seleccionar</option>';
            datos1.forEach(element => {
                contenido_select1 += '<option value="'+element.id+'">'+element.razon_social+'</option>';
             /* $('#idCategoria').append($('<option/>',{
                  text: `${element.Nombre}`,
                  value: `${element.Id}`,
                }));    */
            });
            document.getElementById('trabajador').innerHTML = contenido_select1;
        }
    } catch (e) {
        console.log("Error al cargar categoria" + e);
    }
}