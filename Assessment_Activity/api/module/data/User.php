<?php

class User
{

    protected $pdo, $gm;

    public function __construct(\PDO $pdo)
    {
        $this->gm = new GlobalMethods($pdo);
        $this->pdo = $pdo;
    }

    // Create
    public function Create_List($data)
    {
        try {
            $sql = "INSERT INTO list (list_title, list_desc) VALUES (?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$data->list_title, $data->list_desc]);
            return $this->gm->res_payload($stmt, "testing", "Created List", 200);
        } catch (PDOException $e) {
            return $this->gm->res_payload($e, "failed", "failed create list", 400);
        }
    }
    // Read
    public function Read_List()
    {
        try {
            $sql = "SELECT * FROM list";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $res = $stmt->fetchAll();
            return $this->gm->res_payload($res, "Success", "Successfully read list", 200);
        } catch (PDOException $e) {
            return $this->gm->res_payload($e, "failed", "failed read list", 400);
        }
    }
    // Update
    public function Update_List($data)
    {
        try {
            $sql = "UPDATE list SET list_title = ? ,list_desc = ? where list_id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$data->list_title, $data->list_desc, $data->list_id]);
            return $this->gm->res_payload($stmt, "Success", "Successfully read list ", 200);
        } catch (PDOException $e) {
            return $this->gm->res_payload($e, "failed", "failed update list", 400);
        }
    }
    // Delete
    public function Delete_List($list_id)
    {
        try {
            $sql = "DELETE from list WHERE list_id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$list_id]);
            return $this->gm->res_payload($stmt, "Success", "Successfully Delete list ", 200);
        } catch (PDOException $e) {
            return $this->gm->res_payload($e, "failed", "failed Delete list", 400);
        }
    }
}
