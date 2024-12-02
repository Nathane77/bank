
# **README Bank OOP**

## **Bank OOP**

## **Introduction**

This exercise is here to learn how to use `OOP` or `Object Oriented Programming` in PHP

## **Main function of the project**


This function is made to transfer money from one account to another, first it checks if the account **giving** the money has **less** then the transfered amount,
if he doesn't it will show a message saying "you don't have enough fund to make a transfer".
```php
    public function transfer($transfer,$given){
    if($this->solde < $transfer){
        echo "vous n'avez pas assez de fond pour faire un virement";
    }
    elseif($this->solde >= $transfer){
        $this->debit($transfer);
        $given->credit($transfer);   
    }
    }
```
Otherwise, it checks if the account **giving** the money has **more** then the transfered amount,
it will use the function `debit($transfer)` to remove the amount of `$transfer` from the account **giving**,
then use the function `credit($transfer)` to add the amount of `$transfer` to the acounnt **receiving** the money.

## **if you have question about the project you can contact me on my [linkedIn](https://www.linkedin.com/in/nassim-hammoudi-8a5235334/)**
