<?php

namespace Taylor\BillingDashboard\Enums;

enum BillingInterval :string
{
    case MONTHLY = 'monthly';
    case YEARLY = 'yearly';
}
