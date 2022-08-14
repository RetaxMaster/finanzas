<?php

namespace App\Enums;

enum PaymentMethod: int {

    case BankAccount = 1;
    case CreditCard = 2;
    case DebitCard = 3;
    case Cash = 4;
    
}
