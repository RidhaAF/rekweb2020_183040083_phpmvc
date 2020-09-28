<?php 

class Mahasiswa_model {
    // private $mhs = [
    //     [
    //         "nama" => "Ridha Ahmad Firdaus",
    //         "nrp" => "183040083",
    //         "email" => "ridhaaf@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Ahmad Firdaus",
    //         "nrp" => "183040084",
    //         "email" => "af@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ]
    // ];

    private $dbh; // database handler
    private $stmt;

    public function __construct() {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa() {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}