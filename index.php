<?php 
$uri = explode('/',$uri);
if($uri[2] != 'get'){
    include 'header.php';
}
?>
<?php 

$uri = $_SERVER['REQUEST_URI'];
route($uri);
function route($uri){
    $uri = explode('/',$uri);
    $path = "";
    for($i = 2 ; $i < sizeof($uri); $i++){
        $path = $path.$uri[$i]."/";
    }
    $path[strlen($path)-1] = ".";
    $path = 'routes/'.$path."php";
    if(file_exists($path)){
        include $path;
    }
    else{
        include '404.php';
    }

}

function show($uri){
    include 'routes/'.$uri.'.php';
}
?>
