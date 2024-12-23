<?php
// app/controllers/ReportController.php

class ReportController
{
    private $reportModel;

    public function __construct($pdo)
    {
        $this->reportModel = new Report($pdo);
    }

    public function incomeReport()
    {
        $incomeReport = $this->reportModel->getIncomeReport();
        include '../app/views/reports/income_report.php';
    }

    public function expenseReport()
    {
        $expenseReport = $this->reportModel->getExpenseReport();
        include '../app/views/reports/expense_report.php';
    }

    public function summaryReport()
    {
        $summaryReport = $this->reportModel->getSummaryReport();
        include '../app/views/reports/summary_report.php';
    }
}
