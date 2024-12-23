<?php
// app/models/Transaction.php

class Transaction
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll()
    {
        $stmt = $this->pdo->query("SELECT * FROM transactions");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($type, $amount, $description, $date)
    {
        $stmt = $this->pdo->prepare("INSERT INTO transactions (type, amount, description, date) VALUES (?, ?, ?, ?)");
        $stmt->execute([$type, $amount, $description, $date]);
    }

    public function update($id, $type, $amount, $description, $date)
    {
        $stmt = $this->pdo->prepare("UPDATE transactions SET type = ?, amount = ?, description = ?, date = ? WHERE id = ?");
        $stmt->execute([$type, $amount, $description, $date, $id]);
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM transactions WHERE id = ?");
        $stmt->execute([$id]);
    }
}
