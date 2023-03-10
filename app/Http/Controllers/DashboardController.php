<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use App\Models\SchoolMajor;
use App\Models\Student;
use App\Repositories\CashTransactionRepository;
use Illuminate\View\View;

class DashboardController extends Controller
{
    private $cashTransactionRepository, $startOfMonth, $endOfMonth;

    public function __construct(
        CashTransactionRepository $cashTransactionRepository,
    ) {
        $this->cashTransactionRepository = $cashTransactionRepository;
        $this->startOfMonth = now()->startOfMonth()->format('Y-m-d');
        $this->endOfMonth = now()->endOfMonth()->format('Y-m-d');
    }

    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\View\View
     */
    public function __invoke(): View
    {
        // Operasi untuk Balance Kas Bulan ini
        $amountCashTransactionThisMonth = $this->cashTransactionRepository->sumAmountBy('month', month: date('m'));
        $amountBalanceThisMonth = $amountCashTransactionThisMonth;

        // Int ke Format Rupiah Indonesia Perbulan
        $amountCashTransactionThisMonth = indonesian_currency($this->cashTransactionRepository->sumAmountBy('month', month: date('m')));
        $amountBalanceThisMonth = indonesian_currency($amountBalanceThisMonth);

        // Operasi untuk Balance Total Kas
        $amountCashTransaction = $this->cashTransactionRepository->sumAmount();
        $amountBalance = $amountCashTransaction ;

        // Int ke Format Rupiah Indonesia Total
        $amountCashTransaction = indonesian_currency($this->cashTransactionRepository->sumAmount());
        $amountBalance = indonesian_currency($amountBalance);

        $latestCashTransactions = $this->cashTransactionRepository
            ->cashTransactionLatest(['id', 'student_id', 'user_id', 'bill', 'amount', 'date'], 5);

        return view('dashboard.dashboard.index', [
            'studentCount' => Student::count(),
            'schoolClassCount' => SchoolClass::count(),
            'schoolMajorCount' => SchoolMajor::count(),

            // total 
            'amountCashTransaction' => $amountCashTransaction,
            'amountBalance' => $amountBalance,

            // perbulan
            'amountCashTransactionThisMonth' => $amountCashTransactionThisMonth,
            'amountBalanceThisMonth' => $amountBalanceThisMonth,
            'latestCashTransactions' => $latestCashTransactions,


            'data' => $this->cashTransactionRepository->results(),
        ]);
    }
}