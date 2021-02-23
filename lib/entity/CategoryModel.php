<?php


class CategoryModel
{

    private $pdo;


    public function __construct()
    {
        try{
            $this->pdo = new PDO('mysql:host=192.168.1.19;dbname=wowfood', 'developer', 'admin');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch (Exception $e){
            die($e->getMessage());
        }

    }

    public function Listar()
    {
        try
        {
            $result = [];

            $stm = $this->pdo->prepare("SELECT * FROM category");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $result[] = $r;
            }

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

}