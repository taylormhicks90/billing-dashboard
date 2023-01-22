<?php

namespace BitByte\BillingDashboard\Enums;

enum BillingInterval :string
{
    case MONTHLY = 'monthly';
    case YEARLY = 'yearly';
}
