<?php
class bankAccount{
    protected $balance;

    public function deposite($account){
        $this->balance += $account;
    }

    public function getBalance(){
    return  $this->balance;
    }
}
class subAccount extends bankAccount{
    public function withdraw($account){
        $this->balance -= $account;
    }
}
    $account = new bankAccount();
    $account->deposite(100);

    echo $account->getBalance();