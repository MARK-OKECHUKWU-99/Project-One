<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class Payments extends Model
{
    use HasFactory;

     protected $fillable = [
        'customers_id',
        'customer_name',
        'customer_loan_amount',
        'customer_savings_amount',
        'payment_date',

    ];

        public function setCustomerNameAttribute($value)
    {
        $this->attributes['customer_name'] = ucfirst($value);
    }

    public function getPaymentDateAttribute($value)
    {
        $dt = Carbon::parse($value);

        return  $dt->year . " " . $dt->shortEnglishMonth . " " . $dt->day;
    }

}
