<?php
class BankAccount {
    private $balance = 100000;

public function DisplayBalance () {
    return 'Balance:'.$this->balance;

}
public function Deposit ($amount){
    $this->balance + $amount;
    echo 'Your new balance is: ';$this->balance;
}
public function Withdraw ($amount)
{
    if (($this->balance) < $amount) {
        echo 'Transaction Declined';
    } else {
        $this->balance = $this->balance - $amount;
    }


    $user = new BankAccount;
    $user->Withdraw(10000);
    echo $user->DisplayBalance();

    $user->Deposit(20000);
    echo $user->DisplayBalance();
}}
//You can use HTL form to get user input.
//This class gives out the user ip address.
class UserIP {
public function UserIP() {
    $ip_address = $_SERVER['REMOTE_ADDR'];
    echo 'User IP Address is: ';$ip_address;
}
}
?>