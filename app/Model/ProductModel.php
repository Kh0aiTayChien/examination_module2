<?php


namespace App\Model;

use PDO;
class ProductModel
{
    private $dbConnect;


    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function getAll()
    {
        try {
            $sql = "SELECT * FROM `products`";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertAllToObj($stmt->fetchAll());
        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }

    }

    public function searchData($search)
    {
        try {
            $sql  = "SELECT * FROM `products` WHERE `name` LIKE "."'%".$search."%"."'; ";
//            $sql="SELECT * From `products` WHERE `name` LIKE $search";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertAllToObj($stmt->fetchAll());
        }catch (\PDOException $exception){
            die($exception->getMessage());
        }


    }

    public function convertToObject($data)
    {
        $product = new Product($data['name'], $data['category'], $data['price'], $data['quantity'], $data['date_create'], $data['detail']);
        $product->setId($data['id']);
        return $product;
    }

    public function convertAllToObj($data)
    {
        $objs = [];
        foreach ($data as $item) {
            $objs[] = $this->convertToObject($item);
        }
        return $objs;
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM `products` WHERE  `id` = $id ";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertToObject($stmt->fetch());
        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }
    }

    public function create($request)
    {
        $url = 'uploads/product/' . $_FILES['fileToUpload']['name'];
        try {
            $sql = "INSERT INTO `products`(`name`,`category`,`price`,`quantity`,`date_create`,`detail`) VALUES (?,?,?,?,?,?)";
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->bindParam(1, $request['name']);
            $stmt->bindParam(2, $request['category']);
            $stmt->bindParam(3, $request['price']);
            $stmt->bindParam(4, $request['quantity']);
            $stmt->bindParam(5, $request['date_create']);
            $stmt->bindParam(6, $request['detail']);
            $stmt->execute();
        } catch (\PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    public function update($request)
    {
        $product = $this->getById($_REQUEST['id']);

        try {
            $sql = "INSERT INTO `products`(`name`,`category`,`price`,`quantity`,`date_create`,`detail`) VALUES (?,?,?,?,?,?)";
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->bindParam(1, $request['name']);
            $stmt->bindParam(2, $request['category']);
            $stmt->bindParam(3, $request['price']);
            $stmt->bindParam(4, $request['quantity']);
            $stmt->bindParam(5, $request['date_create']);
            $stmt->bindParam(6, $request['detail']);
            $stmt->execute();
        } catch (\PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `products` WHERE `id` = $id";
        $stmt = $this->dbConnect->connect()->query($sql);
        $stmt->execute();
    }

}