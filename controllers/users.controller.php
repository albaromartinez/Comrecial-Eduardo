<?php
    class ControllerUsers{
        // ingreso de usuarios
        public function ctrUserLogin(){
            if(isset($_POST['ingUser'])){
                if(preg_match('/^[a-zA-Z0-9]*/', $_POST['ingUser']) && preg_match('/^[a-zA-Z0-9]*/', $_POST['ingPassword'])){
                    $table = "users";
                    $item = "user"; 
                    $value = $_POST['ingUser'];

                    $response = ModelUsers::MdlShowUsers($table, $item, $value);
                    // var_dump($response['user']);
                    if($response["user"] == $_POST["ingUser"] && $response["password"] == $_POST["ingPassword"]){
                        echo '<div class="alert alert-success"> Bienvenido al sistema! </div>';
                        $_SESSION['logIn'] = "okey";
                        echo '
                        <script>
                            window.location = "home";
                        </script>
                        ';
                    }else{
                        echo '<div class="alert alert-danger"> Error al ingresar, vuelva a intentarlo! </div>';
                    }
                }
            }
        }
    }
?>