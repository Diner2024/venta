

async function Registrar_Producto(params) {
   let codigo = document.getElementById('codigo').value;
   let nombre = document.querySelector('#nombre').value;
   let detalle = document.querySelector('#detalle').value;
   let precio = document.querySelector('precio').value;
   let stock = document.querySelector('#stock').value;
   let idCategoria = document.querySelector('#idCategoria').value;
   let fechaVencimiento = document.querySelector('#fechaVencimiento').value;
   let imagen = document.querySelector('#imagen').value;
   let idProveedor = document.querySelector('#idProveedor').value;
   if(codigo=="" || nombre=="" || detalle=="" ||  precio=="" ||  stock=="" ||  idCategoria=="" ||  fechaVencimiento=="" ||  imagen=="" || idProveedor=="" ||  ){
        alert("error, campos vacios");
        return;    

   }

   try {
    //capturamos datos del formulario html
    const datos = new FormData(frmRegistrar);
    //enviar dtaos hacia el controlador
    let respuesta = await fetch(base_url+'controller/Producto.php?tipo=registrar',{
        method: 'POST',
        mode: 'corse',
        Cache: 'no-cache',
        body: datos
    });
    console.log(respuesta);

   } catch (e) {
   console.log("UUPSS .ocurrio un  error"+e);
   }


   console.log(codigo);
   console.log(nombre);
   
}
