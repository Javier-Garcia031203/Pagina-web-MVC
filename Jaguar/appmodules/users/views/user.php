<?php
    class UserView {
        
        function login(){
            $fragment = file_get_contents(STATIC_DIR . '\users\user\login.html', true);

            $dict =  ["TITLE" => "Agregar Usuario" ,  "CONTENT"=>$fragment];
            print Template()->show($dict);
        }
        function show($data) {
            $fragment = file_get_contents(STATIC_DIR . 'users/user/show.html', true);
            $dict = ["FULLNAME"=>$data['fullname'], "EMAIL"=>$data['email']];

            $html = Template($fragment)->render($dict);

            $dict =  ["TITLE" => "Usuario" ,"CONTENT"=>$html];
            print Template()->show($dict);
        }
        function add(){
            $fragment = file_get_contents(STATIC_DIR . 'users/user/create.html', true);
            $message =  "today is a great day";
            $html = Template($fragment)->render(["MESSAGE"=>$message]);

            $dict =  ["TITLE" => "Pagina de inicio" , "MESSAGE"=> $message, "CONTENT"=>$html];
            print Template()->show($dict);

        }
    }

?>
