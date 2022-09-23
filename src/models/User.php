<?php
namespace src\models;

use core\Model;

class User extends Model{
    public function getName($id){

        $data = [];
        $stm = $this->con->prepare('SELECT * FROM users WHERE id = :id');
        $stm->bindValue(':id',$id);
        $stm->execute();

        if($stm->rowCount()>0){
            $data = $stm->fetch();
        }

        return $data['name'];
    }
}