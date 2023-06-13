<?php

class BankAccount {
    private $balance;

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient balance!";
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount();
$account->deposit(1000);
$account->withdraw(500);
echo "Current balance: " . $account->getBalance();

?>