<?php


    function find_adherent_by_id(int $id ):array | null{
        foreach ($adherent as $key => $value) {
           if($value["id"]==$id){
                return $value;
           }
        }
        return null;
    }
    function find_demande_by_id(int $id ):array | null{
        foreach ($Damande as $key => $value) {
           if($value["id"]==$id){
                return $value;
           }
        }
        return null;
    }
        ?>