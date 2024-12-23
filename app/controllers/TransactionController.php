<?php
// app/controllers/TransactionController.php

class TransactionController
{
    private $transactionModel;

    public function __construct($pdo)
    {
        $this->transactionModel = new Transaction($pdo);
    }

    public function index()
    {
        $transactions = $this->transactionModel->getAll();
        include '../app/views/transactions/view.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $type = $_POST['type'];
            $amount = $_POST['amount'];
            $description = $_POST['description'];
            $date = $_POST['date'];

            $this->transactionModel->create($type, $amount, $description, $date);
            header('Location: /transactions');
        } else {
            include '../app/views/transactions/add.php';
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $type = $_POST['type'];
            $amount = $_POST['amount'];
            $description = $_POST['description'];
            $date = $_POST['date'];

            $this->transactionModel->update($id, $type, $amount, $description, $date);
            header('Location: /transactions');
        } else {
            $transaction = $this->transactionModel->getAll($id);
            include '../app/views/transactions/edit.php';
        }
    }

    public function delete($id)
    {
        $this->transactionModel->delete($id);
        header('Location: /transactions');
    }
}
