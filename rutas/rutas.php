<?php
/**capturar la ruta */
$array=explode("/",$_SERVER["REQUEST_URI"]);
/**si no se hace ninguna peticion a la API */
if(count(array_filter($array))==1){
    $json=array(
        "detalle"=>"Sin solicitudes",
    );
echo json_encode($json, true);
}else{
/**si se hace alguna peticion a la API */
if(count(array_filter($array))==2){
/*cursos*/
if(array_filter($array)[2]=="cursos"){
    /*ver listas de cursos* */
    if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]=="GET"){
        $cursos=new ControladorCursos();
        $cursos->index();
    }
}
}


}
?>