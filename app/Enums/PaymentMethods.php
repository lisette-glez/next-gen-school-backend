<?php

namespace App\Enums;

enum PaymentMethods: string 
{
    case CREDIT_CARD = 'credit_card';
    case DIRECT_DEBIT = 'direct_debit';
    case PAYPAL = 'paypal';   
    case BANK_TRANSFER = 'bank_transfer';
}