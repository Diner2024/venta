<?php
class vistaModelo{

    protected static function obtener_vista($vista){
        $palabras_permitidas =['usuario','producto','nuevo-producto','nuevocategoria','nuevopersona','nuevocompra','inicio','caballeros','cantidad','carrito','contactanos','damas','detalleproducto','libroreclamaciones','niños','nosotros','novedades','pagofactura','ubicacion'];
        if (in_array($vista,$palabras_permitidas)){
            if (is_file("./views/".$vista.".php")){
                $contenido = "./views/".$vista.".php";
            }else{
                $contenido = "404";
        }
    }elseif ($vista=="login" || $vista=="index"){
        $contenido = "login";
    }elseif ($vista=="perfil") {
        $contenido = "perfil";
    }else {
        $contenido = "404";
    }
    return $contenido;
}
}

?>