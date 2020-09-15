<?php
    $file = file_get_contents('json/data.json');
    if($file){
        $json = json_decode($file,true);
    }
    if(!empty($_POST)){
        if(isset($_POST['submit_login'])){
           $login = $_POST["singIn_login"];
           $password = $_POST["singIn_password"];
           if($json[$login] == $password){
               $msg = "Giriş olundu !";
           }else{
               $msg = "Login və yaxud şifrə yanlışdır";
           }
        }elseif(isset($_POST['submit_register'])){
            $login = $_POST["register_login"];
            $password = $_POST["register_password"];
            if($json[$login]){
                    $register_msg =  "Bu ad ilə daha əvvəl qeydiyyat olunub";
            }else{
                    if(trim($login) != "" && trim($password) != ""){
                        $login = htmlspecialchars($login, ENT_QUOTES);
                        $password = htmlspecialchars($password, ENT_QUOTES);
                        $json[$login] = $password;
                        $jsonData = json_encode($json);
                        file_put_contents('json/data.json',$jsonData);
                        $register_msg =  "Qeydiyyatdan keçdiniz ! ";
                    }else{
                        $register_msg = "İnputları düzgün doldurun !";
                    }
                    
            }
        }   
    }

?>