//listar compras
async function listar_compras() {
    try {
        let respuesta = await fetch(base_url+'controller/compras.php?tipo=listar');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let cont = 0;
            datos.forEach(item=>{
                let nueva_fila = document.createElement("tr");
                nueva_fila.id = "fila"+item.id; // id anuevo asignado-------------id de la BD
                cont+=1;
                nueva_fila.innerHTML = `
                <th>${cont}</th> 
                <td>${item.producto.nombre}</td>
                <td>${item.cantidad}</td>
                <td>${item.precio}</td>
                <td>${item.usuario.razon_social}</td>
                <td>${item.options}</td>
        `;
        document.querySelector('#body_compras').appendChild(nueva_fila);
            });
        }else{
            swal("No se encontraron productos.");
        }
        console.log(json);
    } catch (error) {
        console.log("Oops salio un error "+error);
    }

}

if (document.querySelector('#tbl_compras')) {
    listar_compras();
}


//registrar compras
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
                conten += `<option value="${element.id}">${element.nombre}</option>`;
            });
            
            document.getElementById('producto').innerHTML = conten;
        } else {
            console.error("No se pudieron cargar los productos");
            // Opcional: mostrar un mensaje de error al usuario
            document.getElementById('producto').innerHTML = '<option value="">Error al cargar productos</option>';
        }
    } catch (error) {
        console.error("Error al listar productos: " + error);
        // Opcional: mostrar un mensaje de error al usuario
        document.getElementById('producto').innerHTML = '<option value="">Error de conexión</option>';
    }
}

async function listar_trabajador(){
    try {
        // Missing 'let' for json declaration
        let respuesta1 = await fetch(base_url+'controller/persona.php?tipo=listarTrabajador');
        let json = await respuesta1.json(); // Add 'let'

        if (json.status) {
            let datos1 = json.contenido;
            let contenido_select1 = '<option value="">Seleccionar</option>';
            datos1.forEach(element => {
                contenido_select1 += '<option value="'+element.id+'">'+element.razon_social+'</option>';
            });
            document.getElementById('trabajador').innerHTML = contenido_select1;
        }
    } catch (e) {
        console.error("Error al cargar trabajadores: " + e); // Changed to console.error and improved error message
    }
}

async function ver_compra(id) {
    const formData = new FormData();
    formData.append('id_compra', id); 
    try {
        let respuesta = await fetch(base_url+'controller/compras.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_compra').value = json.contenido.id;
            document.querySelector('#id_producto').value = json.contenido.id_producto;
            document.querySelector('#cantidad').value = json.contenido.cantidad;
            document.querySelector('#precio').value = json.contenido.precio;
            document.querySelector('#trabajador').value = json.contenido.id_trabajador;
        }else{
            window.location = base_url+"compra";
        }
        console.log(json);
    } catch (error) {
        console.log("oops ocurrio un error al editar compra"+error);
    }
}

async function actualizarCompra() {
    const datos = new FormData(formACtualizarCompras);
    try {
        let respuesta = await fetch(base_url + 'controller/compras.php?tipo=actualizar', {
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
    } catch (e) {
        console.log("Oops, ocurrio un error compras"+e);
    }
}

async function eliminar_compra(id) {
    swal({
        title: "¿Realmente desea eliminar la compra?",
        text: "Esta acción no se puede deshacer",
        icon: "warning",
        buttons: {
            cancel: "Cancelar",
            confirm: {
                text: "Sí, eliminar",
                visible: true,
                className: "btn-danger"
            }
        },
        dangerMode: true
    }).then((willDelete) => {
        if (willDelete) {
            // Enviar solicitud de eliminación
            $.ajax({
                url: 'controlador.php', // Ajusta la ruta según tu estructura
                type: 'POST',
                data: {
                    tipo: 'eliminar',
                    id_compra: id
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status) {
                        // Eliminación exitosa
                        swal({
                            title: "Compra eliminada",
                            text: "La compra ha sido eliminada correctamente",
                            icon: "success",
                            button: "Aceptar"
                        }).then(() => {
                            // Recargar la tabla o eliminar la fila
                            $('#tabla-compras').DataTable().row($(`#fila-${id}`)).remove().draw();
                        });
                    } else {
                        // Error en la eliminación
                        swal({
                            title: "Error",
                            text: response.message || "No se pudo eliminar la compra",
                            icon: "error",
                            button: "Aceptar"
                        });
                    }
                },
                error: function() {
                    // Error de conexión
                    swal({
                        title: "ADVERTENCIA",
                        text: "No se puede eliminar esta compra por que esta registrado",
                        icon: "error",
                        button: "Aceptar"
                    });
                }
            });
        }
    });
}

async function fnt_eliminar(id) {
    const formData = new FormData();
    formData.append('id_compra',
        id);
        try {
            let respuesta = await fetch(base_url + 'controller/compras.php?tipo=eliminar',{
                 method: 'POST',
                 mode: 'cors',
                 cache: 'no-cache',
                 body: formData
        
            });
            json = await respuesta.json();
            if (json.status) {
                swal("Eliminar", "eliminado correctamente", "success");
                document.querySelector('#fila'+id).remove();
            }else{
                swal('Eliminar', 'Error al eliminar compra', 'warning');
            }
        } catch (e) {
            console.log("ocurrio un error" + e);
        }
}