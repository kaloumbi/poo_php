<?php
namespace App\Model;

abstract class User extends Personne{

    protected string $login;
    protected string $password;
    protected string $role;

    public function affiche(){
       echo $this->id; 
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    public static function findUserByLoginAndPassword(string $login,string $password):object|null{
        $db=self::database();
        $db->connexionBD();
        $sql="select * from personne where login=? and password=?";
        $result = $db->executeSelect($sql,[$login,$password],true);
        $db->closeConnexion();
        return $result;
        //return parent::findBy("select * from personne where login=? and password=?,[$login,$password],true");
    }

      //Redefinition 
      public static function findAll(): array{

        $sql="select * from".parent::table()." where role not like ?";
        return parent::findBy($sql, ['ROLE_PROFESSEUR']);
      }
}