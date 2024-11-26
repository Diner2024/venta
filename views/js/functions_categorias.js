async function registrar_categoria() {
    let nombre = document.getElementById('nombre').value;
    let detalle = document.getElementById('detalle').value;
    if (nombre == "" || detalle == "") {
        alert("Error, campos vacios");
        return;
    }
    try {
        //capturamos datos del formulario html
        const datos = new FormData(frmRegistrar);
        //enviar datos hacia el controlador
        let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=registrar', { //await es una promesa que si o si espera una respuesta
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
       } catch (e){
        console.log("Oops, ocurrio un error categoria"+e);
       }
    } 


// listar categoria
async function listar_categorias()  {
    try {
        let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=listar');
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
                <td>${item.nombre}</td>
                <td>${item.detalle}</td>
               <td>${item.options}</td>
        `;
        document.querySelector('#body_categoria').appendChild(nueva_fila);
            });
        }else{
            swal("No se encontraron categorias.");
        }
        console.log(json);
    } catch (error) {
        console.log("Oops salio un error "+error);
    }

}

if (document.querySelector('#tbl_categoria')) {
    listar_categorias();
}