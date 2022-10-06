<?php
    class ControllerUsers{
        // ingreso de usuarios
        static public function ctrUserLogin(){
            if(isset($_POST['ingUser'])){
                if(preg_match('/^[a-zA-Z0-9]*/', $_POST['ingUser']) && preg_match('/^[a-zA-Z0-9]*/', $_POST['ingPassword'])){

                    $encript = crypt($_POST['ingPassword'], '$6$rounds=5000$usesomesillystringforsalt$'); //password encritado con sha512
                    $table = "users";
                    $item = "user"; 
                    $value = $_POST['ingUser'];
                    
                    $response = ModelUsers::mdlShowUsers($table, $item, $value);
                    // var_dump($response['user']);
                    if($response["user"] == $_POST["ingUser"] && $response["password"] == $encript){
                        echo '<div class="alert alert-success"> Bienvenido al sistema! </div>';
                        $_SESSION['logIn'] = "okey";
                        $_SESSION['name'] = $response['name'];
                        $_SESSION['photo'] = $response['photo'];
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

        // ADD USER
        static public function ctrAddUser(){
            if(isset($_POST["newName"]) && isset($_POST["newUserName"]) && isset($_POST["newPassword"]) && isset($_POST['newPerfil']) ){
                if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["newName"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["newUserName"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["newPassword"])){
                    
                    //VALIDAR IMAGEN
                    $route = '';
                    if(isset($_FILES['newPhoto']['tmp_name'])){

                        list($width, $height) =  getimagesize($_FILES['newPhoto']['tmp_name']); // crear un nuevo array con los indices que asignemos
                        // var_dump(getimagesize($_FILES['newPhoto']['tmp_name']));
                        $newwidth = 500; //ancho de la foto
                        $newheight = 500; // alto de la foto

                        //CREACION DEL DIRECTPRIO DONDE SE VA A GUARDAR LAS IMAGENES
                        $directory = "views/img/users/".$_POST['newName'];
                        mkdir($directory, 755); //creacion del directorio mas sus permisos

                        // DE ACUERDO AL TIPO DE LA IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
                        if($_FILES['newPhoto']['type'] == "image/jpeg"){ // para imagenes jpeg

                            $random = mt_rand(100,999);
                            $route = "views/img/users/".$_POST['newName']."/".$random.".jpg";

                            // RECORTE DE IMAGENES
                            $origin = imagecreatefromjpeg($_FILES['newPhoto']['tmp_name']);
                            $destination = imagecreatetruecolor($newwidth, $newheight);
                            imagecopyresized($destination, $origin, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
                            imagejpeg($destination, $route); //metodo para guardar
                        }
                        if($_FILES['newPhoto']['type'] == "image/png"){ // para imagenes png

                            $random = mt_rand(100,999);
                            $route = "views/img/users/".$_POST['newName']."/".$random.".png";

                            // RECORTE DE IMAGENES
                            $origin = imagecreatefrompng($_FILES['newPhoto']['tmp_name']);
                            $destination = imagecreatetruecolor($newwidth, $newheight);
                            imagecopyresized($destination, $origin, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
                            imagepng($destination, $route); //metodo para guardar
                        }

                    }
                    $table = "users"; 
                    $encript = crypt($_POST['newPassword'], '$6$rounds=5000$usesomesillystringforsalt$'); //password encritado con sha512
                    $data = array("newName" => $_POST['newName'], 
                                  "newUserName" => $_POST['newUserName'], 
                                  "newPassword" => $encript, 
                                  "newPerfil" => $_POST['newPerfil'],
                                  "newPhoto" => $route);

                    $response = ModelUsers::mdlAddUsers($table, $data);

                    if($response == "ok"){
                        echo '
                        <script>
					        swal({                         
					        	type: "success",
					        	title: "El usuario fué agregado correctamente",
					        	showConfirmButton: true,
					        	confirmButtonText: "Cerrar"                          
					        }).then(function(result){            
					        	if(result.value){               
					        		window.location = "users";          
					        }
					        });
				        </script>
                        ';
                    }else{
                        echo '
                        <script>
					        swal({                         
					        	type: "error",
					        	title: "Ooops...",
                                text: "¡Error, el usuario no se pudo agregar!",
					        	showConfirmButton: true,
					        	confirmButtonText: "Cerrar"                          
					        }).then(function(result){            
					        	if(result.value){               
					        		window.location = "users";          
					        }
					        });
				        </script>
                    ';
                    }
                }else{
                    echo '
                        <script>
					        swal({                         
					        	type: "error",
					        	title: "Ooops...",
                                text: "¡Error, el usuario no puede ir vacío o llevar caracteres especiales!",
					        	showConfirmButton: true,
					        	confirmButtonText: "Cerrar"                          
					        }).then(function(result){            
					        	if(result.value){               
					        		window.location = "users";          
					        }
					        });
				        </script>
                    ';
                }
            }
        }
    }
?>