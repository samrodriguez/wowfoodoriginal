<?php
require_once 'Category.php';

 class CategoryModel
{
    private $pdo;

    public function __construct()
    {
        try
        {
            $this->pdo = new PDO('mysql:host=localhost;dbname=wowfood', 'samdeb', 'admin');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM category");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $result[] = new Category($r->id,$r->name,$r->description,$r->img);

            }

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

     public function Obtener($id)
     {
         try
         {
             $stm = $this->pdo
                 ->prepare("SELECT * FROM category WHERE id = ?");

             $stm->execute(array($id));
             $r = $stm->fetch(PDO::FETCH_OBJ);

             return new Category($r->id,$r->name,$r->description,$r->img);

         } catch (Exception $e)
         {
             die($e->getMessage());
         }
     }

     public function Eliminar($id)
     {

     }
     public function Actualizar()
     {

     }

     public function Registrar($data)
     {

     }



}