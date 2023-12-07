<?php
    class AnimalView {
        
        function add(){
            $fragment = file_get_contents(STATIC_DIR . 'animals/crear.html', true);
            $message =  "today is a great day";
            $html = Template($fragment)->render(["MESSAGE"=>$message]);

            $dict =  ["TITLE" => "Agregar Jaguar" , "MESSAGE"=> $message, "CONTENT"=>$html];
            print Template()->show($dict);

        }

        function list($collection = [] ){
            $fragment = file_get_contents(
            STATIC_DIR . "animals/list.html");
            $html = Template($fragment)->render_regex('LISTADO', $collection);
            $dict =  ["TITLE" => "Listado de Jaguares" , "CONTENT"=>$html];
            
            print Template('Listado de Jaguares')->show($dict);

        }
        function edit($product =  [] ){
            $fragment = file_get_contents(
                STATIC_DIR . "animals/edit.html");
            $html = Template($fragment)->render($product);
            $dictTemplate =  ["TITLE" => "Edicion de Jaguar" , "CONTENT"=>$html];
            print Template('Editar producto')->show($dictTemplate);
        }
    }
?>
