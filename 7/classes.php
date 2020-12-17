<?php
class Tools{
static function connect(
    $host="localhost",
    $user="root",
    $pass="",
    $dbname="shop_201"
){
    $cs = "mysql:host=".$host.";dbname=".$dbname.";charset=utf8;";
    $options = array(
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8');

        try{
            $pdo =new PDO($cs,$user,$pass,$options);
            return $pdo;

        } catch (PDOException $e){
            echo $e->getMessage();
            return false;
        }

        
}
static function register($name,$pass,$imagepath){
    $name =trim($name);
    $pass =trim($pass);
    $imagepath = trim($imagepath);

    if ($name == "" || $pass==""){
        echo "<h3><span style='color:red;'>Пользователь не все поля!</span></h3>";
        return false;
    }

    if(strlen($name)<3 || strlen($pass)<3 ||strlen($name)>30 || strlen($pass)>30){
        echo "<h3><span style='color:red;'>Не зополнены не все поля!</span></h3>";
        return false;
    }

    $customer = new Customer($name,$pass,$imagepath);
    $err = $customer->intDb();

    if($err){
        echo "<h3><span style='color:red;'>Пользователь не все поля!</span></h3>";
        return false; 
    }
    return true;
}
}

class Customer{
    protected $id;
    protected $login;
    protected $pass;
    protected $roleid;
    protected $discount;
    protected $total;
    protected $imagepath;

    function __construct($login,$pass,$imagepath,$id=0){
        $this->login = $login;
        $this->pass = $pass;
        $this->imagepath = $imagepath;
        $this->id = $id;
        $this->total = 0;
        $this->discount = 0;
        $this->roleid =2;
    }
    function intoDb(){
        try{
        $pdo = Tools::connect();
        $ps=$pdo->prepare('INSERT INTO Customers(login,pass,roleid,discount,total,imagepath)
        VALUES(:login,:pass,:roleid,:discount,:total,:imagepath) ');
        $ar = ['login'=>$this->login,"pass"=>$this->pass,"roleid"=>$this->roleid,
        'discount'=>$this->discount,"total"=>$this->total,"imagepath"=>$this->imagepath];

        $ps->execute($arr);
    } catch(PDOException $e){
        return $e->getMessage();
    }
    }
    static function frontDB($id){
        $customer=null;
        try{
            $pdo = Tools::connect();

            $ps = $pdo->prepare('SELECT * FROM Customer WHERE id=?');
            $res=$ps->execute(array($id));
            $row=$res->feach();

            $customer = new Customer($row['login'], $row['pass'], $row['imagepath'], $row['id']);
            return $customer;
        } catch (PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

}