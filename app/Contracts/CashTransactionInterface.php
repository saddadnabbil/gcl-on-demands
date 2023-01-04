<?php

namespace App\Contracts;

interface CashTransactionInterface
{
    public function cashTransactionLatest(array $columns, ?int $limit): Object;
    public function sumAmountBy(string $status, string $year = null, string $month = null): Int;
    public function countStudentWhoPaidThisMonth(): Int;
    public function countStudentWhoNotPaidThisMonth(): Int;
    public function getStudentWhoNotPaidThisMonth(?int $limit, string $order): Object;
    public function results(): array;
}
