<?php

namespace Controller;

use Model\san;
use Model\SanDB;
use Model\DBConnection;

class SanController
{

    public $sanDB;

    public function __construct()
    {
        $connection = new DBConnection('mysql:host=localhost; dbname=case_study_m2', 'root', '123456');
        $this->sanDB = new SanDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/add.php';
        } else {
            $ten= $_POST['ten'];
            $ma_san = $_POST['san'];
            $start = $_POST['bat_dau'];
            $end = $_POST['ket_thuc'];
            $san = new san($ten,$ma_san,$start,$end);
            $this->sanDB->create($san);
            $message = 'Đã đặt sân';
            include 'view/add.php';
        }
    }

    public function index()
    {
        $sans = $this->sanDB->getAll();
        include 'view/list.php';
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $san = $this->sanDB->get($id);
            include 'view/delete.php';
        } else {
            $id = $_POST['id'];
            $this->sanDB->delete($id);
            header('Location: main.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $san = $this->sanDB->get($id);
            include 'view/edit.php';
        } else {
            $id = $_POST['id'];
            $san = new san($_POST['san'],
                            $_POST['bat-dau'],
                               $_POST['ket-thuc']);
            $this->sanDB->update($id, $san);
            header('Location: main.php');
        }
    }
}