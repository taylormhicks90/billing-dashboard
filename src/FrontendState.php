<?php
namespace Taylor\BillingDashboard;

use Illuminate\Database\Eloquent\Model;
class FrontendState
{

    public function current(Model $billable){
        return  [
            'name' => $billable->name,
            'appName' => config('app.name'),
        ];
    }
}
