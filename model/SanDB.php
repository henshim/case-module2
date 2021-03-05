<?php


namespace Model;


class SanDB
{
    public $connection;

    public function __construct($connection){
        $this->connection=$connection;
    }

    public function create($san){
        $sql="insert into 'dat_san'('ma_san','bat_dau','ket_thuc') values(?,?,?)";
        $sql2="insert into 'khach_hang' ('ten','sđt') values (?,?)";
        $statement = $this->connection->prepare($sql);
        $statements = $this->connection->prepare($sql2);
        $statements->bindParam(1, $san->ten);
        $statement->bindParam(2, $san->san);
        $statement->bindParam(3, $san->start);
        $statement->bindParam(4, $san->end);
        $statements->bindParam(5, $san->sđt);
        return $statement->execute();
        return $statements->execute();

    }

    public function getAll()
    {
        $sql = 'select * from dat_san';
        $sql2='select * from khach_hang';
        $statement = $this->connection->prepare($sql);
        $statements = $this->connection->prepare($sql2);
        $statement->execute();
        $statements->execute();
        $result = $statement->fetchAll();
        $results = $statements->fetchAll();
        $sans = [];
        foreach ($result as $row) {
            $san = new san($row['ma_san'],$row['bat_dau'],$row['ket_thuc']);
            $san->id = $row['id'];
            $sans[] = $san;
        }
        foreach ($results as $row){
            $san = new san($row['ten'],$row['sđt']);
            $san->id = $row['id'];
            $sans[] = $san;
        }
        return $sans;
    }

    public function get($id)
    {
        $sql = 'select * from dat_san where id =?';
        $sql2 = 'select * from khach_hang where id =?';
        $statement = $this->connection->prepare($sql);
        $statements = $this->connection->prepare($sql2);
        $statement->bindParam(1, $id);
        $statements->bindParam(1, $id);
        $statement->execute();
        $statements->execute();
        $row = $statement->fetch();
        $rows = $statements->fetch();
        $san = new san($row['ma_san'],$row['bat_dau'],$row['ket_thuc']);
        $san2 = new san($row[''],$row['bat_dau']);
        $san->id = $row['id'];
        return $san;
    }

    public function delete($id)
    {
        $sql = 'delete from dat_san where id=?';
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function update($id, $san){
        $sql = "UPDATE dat_ten SET ma_san = ?, bat_dau = ?, ket_thuc=? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $san->san);
        $statement->bindParam(2, $san->start);
        $statement->bindParam(3, $san->end);
        $statement->bindParam(4, $id);
        return $statement->execute();
    }
}