<?php
// app/controllers/InvoiceController.php

class InvoiceController
{
    private $invoiceModel;

    public function __construct($pdo)
    {
        $this->invoiceModel = new Invoice($pdo);
    }

    public function index()
    {
        $invoices = $this->invoiceModel->getAll();
        include '../app/views/invoices/view_invoices.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $student_name = $_POST['student_name'];
            $amount = $_POST['amount'];
            $status = $_POST['status'];

            $this->invoiceModel->create($student_name, $amount, $status);
            header('Location: /invoices');
        } else {
            include '../app/views/invoices/add_invoice.php';
        }
    }

    public function updateStatus($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $status = $_POST['status'];

            $this->invoiceModel->updateStatus($id, $status);
            header('Location: /invoices');
        } else {
            $invoice = $this->invoiceModel->getAll($id);
            include '../app/views/invoices/update_invoice.php';
        }
    }

    public function delete($id)
    {
        $this->invoiceModel->delete($id);
        header('Location: /invoices');
    }
}
