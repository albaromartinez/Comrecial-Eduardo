<?php
require_once "conection.php";

class ModelUsers{
    // sHOW USERS
    static public function mdlShowUsers($table, $item, $value){

        $stmt = Conection::conect()->prepare("SELECT * FROM $table WHERE $item = :$item");
        
        $stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);

        $stmt ->execute();

        return $stmt -> fetch();

        $stmt -> close();

        $stmt = null;
    }

    // ADD USERS
    static public function mdlAddUsers($table, $data){
        $stmt = Conection::conect()->prepare("INSERT INTO $table(name, user, password, profile, photo) VALUES (:name, :user, :password, :profile, :photo )");

		$stmt->bindParam(":name", $data["newName"], PDO::PARAM_STR);
		$stmt->bindParam(":user", $data["newUserName"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $data["newPassword"], PDO::PARAM_STR);
		$stmt->bindParam(":profile", $data["newPerfil"], PDO::PARAM_STR);
		$stmt->bindParam(":photo", $data["newPhoto"], PDO::PARAM_STR);

        if($stmt -> execute()){
            return "ok";
        }else{
            return "error";
        }

        $stmt -> close();

        $stmt = null;
    }
}