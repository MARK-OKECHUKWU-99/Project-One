<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Customers extends Model
{
  use HasFactory;
  protected $fillable = [
    'customer_firstname',
    'customer_lastname',
    'customer_first_address',
    'customer_second_address',
    'customer_state',
    'customer_name_of_father',
    'customer_business_address',
    'customer_type_of_business',
    'customer_business_duration',
    'customer_first_phone',
    'customer_second_phone',
    'customer_dob',
    'phone_of_spouse',
    'customer_marital_status',
    'customer_formal_education',
    'next_of_kin_firstname',
    'next_of_kin_lastname',
    'next_of_kin_phone',
    'customer_loan_amount',
    'customer_loan_duration',
    'average_monthly_income',
    'customer_account_number',
    'guarantor_firstname',
    'guarantor_lastname',
    'guarantor_address',
    'guarantor_phone',
    'customer_status',
    'customer_bank_name',
    'credit_officer_name',
    'customer_account_type',
    'customer_image',
    'customer_signature',
    'created_at'
  ];








  // public function getCustomerLoanDurationAttribute($value)
  // {
  //   return $value . " Months";
  // }

  //  public function setCustomerLoanDurationAttribute($value)
  // {
  // $this->attributes['customer_loan_duration'] = $value . "Months";
  // }

  public function getCustomerLoanAmountAttribute($value)
  {
    return  $value;

  }

  public function getCreatedAtAttribute($value)
  {
    $dt = Carbon::parse($value);

    return $dt->year . " " . $dt->shortEnglishMonth . " " . $dt->day;
  }
}
