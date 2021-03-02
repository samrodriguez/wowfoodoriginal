<?php
require_once 'Product.php';
require_once 'Category.php';
require_once 'CategoryModel.php';

 class ProductModel
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

            $stm = $this->pdo->prepare("SELECT * FROM product");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $categoryModel = new CategoryModel();
                $category = $categoryModel->Obtener($r->category);
                $product = new Product($r->id, $r->name, $category, $r->price, $r->description, $r->img);
                $result[] = $product;
            }

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
}