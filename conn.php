<?php /** @noinspection ALL */

interface DBConnects{

    public function getDvd();
    public function getFurniture();
    public function getBook();
    public function insertDvd($post);
    public function deleteDvd($post);
    public function deleteBook($post);
    public function deleteFurniture($post);
    public function insertFurniture($post);
    public function insertBook($post);
}

class Connect implements DBConnects {
    private $server ='sql304.epizy.com';
    private $username ='epiz_33342587';
    private $password ='';
    private $dbname ='epiz_33342587_scandiweb';
    private $conn;


function __construct(){
   $this->conn= new PDO("mysql:host=$this->server;dbname=$this->dbname", $this->username , $this->password);

}


    public function getDvd(){

     $sql = "SELECT * FROM dvd";

     $result =$this->conn->query($sql);

     if ($result->rowCount() > 0){
         while($row=$result->fetch(PDO::FETCH_ASSOC)){
             $data[] = $row;
         }
        return $data;
     }
}
    public function getFurniture(){

     $sql = "SELECT * FROM furniture";

     $result =$this->conn->query($sql);

     if ($result->rowCount() > 0){
         while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $data[] = $row;
            }
         return $data;
        }
    }
    public function getBook(){

     $sql = "SELECT * FROM book";

        $result =$this->conn->query($sql);

        if ($result->rowCount() > 0){
            while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $data[] = $row;
            }
            return $data;
        }
    }

    public function deleteDvd($post){

        $extract_id = $post['ids'];
        $extract = implode(',' , $extract_id);
        $sql = "DELETE FROM dvd WHERE SKU IN($extract)";

        $result =$this->conn->query($sql);
     }

public function deleteBook($post){

        $extract_id = $post['ids'];
        $extract = implode(',' , $extract_id);
        $sql = "DELETE FROM book WHERE SKU IN($extract)";

        $result =$this->conn->query($sql);
 }

public function deleteFurniture($post){

        $extract_id = $post['ids'];
        $extract = implode(',' , $extract_id);
        $sql = "DELETE FROM furniture WHERE SKU IN($extract)";

        $result =$this->conn->query($sql);
 }

    public function insertDvd($post)
    {
        $id=$post['id'];
        $name =$post['name'];
        $price=$post['price'];
        $select =$post['select'];
        $size =$post['size'];

        $sql = "INSERT INTO dvd(SKU,Name,Price,State,Size)VALUES('$id','$name','$price','$select','$size')";

        $result = $this->conn->query($sql);
        header("Location: /task_more/index.php");

    }


    public function insertFurniture($post)
    {
        $id=$post['id'];
        $name =$post['name'];
        $price=$post['price'];
        $select =$post['select'];
        $height =$post['Height'];
        $width =$post['Width'];
        $length =$post['length'];
        $sql = "INSERT INTO furniture(SKU,Name,Price,State,Height,Width,length)VALUES('$id','$name','$price','$select','$height','$width','$length')";

        $result =$this->conn->query($sql);

        header("Location: /task_more/index.php");
    }

    public function insertBook($post)
    {
        $id=$post['id'];
        $name =$post['name'];
        $price=$post['price'];
        $select =$post['select'];
        $weight =$post['Weight'];

        $sql = "INSERT INTO book(SKU,Name,Price,State,Weight)VALUES('$id','$name','$price','$select','$weight')";

        $result =$this->conn->query($sql);

        header("Location: /task_more/index.php");
    }

}



?>

