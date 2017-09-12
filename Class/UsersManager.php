<?php
class UsersManager{

    protected $db;
    protected $table_name = "Users";

    /**
     * NewsManager constructor.
     * @param PDO $db
     */
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }


    protected function add(Users $user){
        $query = $this->db->prepare("INSERT INTO " . $this->table_name . "(id, name, login, password) 
        VALUES(:id, :name, :login, :password)");

        $query->bindValue(':id', $user->getId());
        $query->bindValue(':name', $user->getName());
        $query->bindValue(':login', $user->getLogin());
        $query->bindValue(':password', $user->getPassword());
    }

    protected function getUnique($id){
        $query = $this->db->prepare("SELECT * FROM " . $this->table_name . " WHERE id = :id");

        $query->bindValue(':id', (int) $id, PDO::PARAM_INT);
        $query->execute();

        $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Users');

        $user = $query->fetch();
        $user->setDate_created(new DateTime($user->getDate_created()));

        return $user;
    }
}