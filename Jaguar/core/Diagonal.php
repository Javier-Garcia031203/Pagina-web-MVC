<?php
function palabrasEnURL($url) {
    
    // Divide la cadena en función de la diagonal ("/")
        
     $
    $palabras = explode('/', $url);
          
    // Filtra las palabras vacías o nulas
        $palabras = array_filter($palabras, function($palabra) {
            
           
    return !empty($palabra);
        });
                 
    return $palabras; };
    
    // Ejemplo de uso:
    $url = "https://www.ejemplo.com/categoria/producto/123";
    $palabras = palabrasEnURL($url);
    
    print_r($palabras);

/*-------------------------------------------------------------------------------------------------------------------------*/

?>