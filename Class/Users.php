<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 9/12/2017
 * Time: 3:18 PM
 */

/* this class is the same as in the database, it should contain the same attributes */
class Users
{
    protected $errors = [],
                $id,
                $name,
                $login,
                $password,
                $date_created,
                $language;

    /* CONSTANTS */
    const USER_AUTH = 802001;
    const USER_DEAUTH = 802002;


    /**
     * Users constructor.
     * @param array $values
     */
    public function __construct($values = [])
    {
        if(!empty($values)){
            $this->hydrate($values);
        }
    }


    /**
     * This function hydrates the class from data from the database received as an array
     * @param $donnees
     */
    public function hydrate($donnees)
    {
        foreach ($donnees as $attribut => $valeur)
        {
            $methode = 'set'.ucfirst($attribut);

            if (is_callable([$this, $methode]))
            {
                $this->$methode($valeur);
            }
        }
    }


    /* Getters and setters */
    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param array $errors
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getDate_created()
    {
        return $this->date_created;
    }

    /**
     * @param mixed $password
     */
    public function setDate_created($date_created)
    {
        $this->date_created = $date_created;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param mixed $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

}