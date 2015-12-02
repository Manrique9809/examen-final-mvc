<?php

//Distritos_model

class games_model extends Model {

    

    public function add($_post) {
        //profesion
        return $this->Insertar('games', $_post);
        
    }

    

   

    public function get($get) {

        return $this->getAll('games');

        var_dump($get)
    }

    

}

?>
