<?php
// app/models/Report.php

class Report
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getIncomeReport()
    {
        $stmt = $this->pdo->query("SELECT SUM(amount) AS total_income FROM transactions WHERE type = 'income'");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getExpenseReport()
    {
        $stmt = $this->pdo->query("SELECT SUM(amount) AS total_expense FROM transactions WHERE type = 'expense'");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getSummaryReport()
    {
        $income = $this->getIncomeReport();
        $expense = $this->getExpenseReport();
        return [
            'total_income' => $income['total_income'],
            'total_expense' => $expense['total_expense'],
            'net_profit' => $income['total_income'] - $expense['total_expense']
        ];
    }
}
