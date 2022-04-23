<?php include 'constant.php'; include 'helper.php';
    ob_start();
    session_start();
    class DB{
        public $host = HOST;
        public $dbname = DATABASE;
        public $username = DB_USERNAME;
        public $password = DB_PASSWORD;
        public $con = null;

        public function __construct(Type $var = null) {
            try {
                $this->con = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password,  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch (\Throwable $th) {
                echo "Server Error: Please try again later";
            }
        }

        public function destroy(){
            $this->con = null;
        }
    }
?>