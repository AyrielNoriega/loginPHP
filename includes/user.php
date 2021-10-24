<?php

include_once 'db.php';

class User extends DB{

    // private $nombre;
    private $username;

    public function newUser($user, $pass){
        if ( $this->userExists($userForm) ) {
           echo "ya existe";
        }else {
            echo "usuario creado";
            $query = $this->connect()->prepare("INSERT INTO usuarios('nombre', 'username', 'password') VALUES (:username, :password)");
            $query->execute(['username' => $username, 'password' => $password]);
        }

    }

    public function userExists( $user, $pass = null ){
        if ( $pass == null ) {

            $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user ');
            $query->execute([ 'user' => $user ]); 
            
        }else {
            $md5pass = md5( $pass );

            $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user AND password = :pass');
            $query->execute([ 'user' => $user, 'pass' => $pass ]); 
        }


        if ( $query->rowCount() ) {
           return true;
        }else{
            return false;
        }
    }

    public function setUser( $user ){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user ');
        $query->execute(['user' => $user ]);

        foreach ($query as $currentUser ) {   
            // $this->nombre = $currentUser['nombre'];
            $this->username = $currentUser['username'];
        }
    }
    
    public function getNombre(){
        return $this->username;
    }
}

?>