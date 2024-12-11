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
        let respuesta1 = await fetch(base_url+'controller/persona.php?tipo=listarTrabajador');
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

async function ver_compra(id) {
    const formData = new FormData();
    formData.append('id_compra', id); 
    try {
        let respuesta = await fetch(base_url+'controller/Compra.php?tipo=ver', {
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
        let respuesta = await fetch(base_url + 'controller/Compra.php?tipo=actualizar', {
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