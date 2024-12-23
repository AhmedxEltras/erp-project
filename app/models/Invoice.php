<?php
// app/models/Invoice.php

class Invoice
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll()
    {
        $stmt = $this->pdo->query("SELECT * FROM invoices");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($student_name, $amount, $status)
    {
        $stmt = $this->pdo->prepare("INSERT INTO invoices (student_name, amount, status) VALUES (?, ?, ?)");
        $stmt->execute([$student_name, $amount, $status]);
    }

    public function updateStatus($id, $status)
    {
        $stmt = $this->pdo->prepare("UPDATE invoices SET status = ? WHERE id = ?");
        $stmt->execute([$status, $id]);
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM invoices WHERE id = ?");
        $stmt->execute([$id]);
    }
}
