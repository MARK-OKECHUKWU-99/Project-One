<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_firstname');
            $table->string('customer_lastname');
            $table->string('customer_first_address');
            $table->string('customer_second_address');
            $table->string('customer_state');
            $table->string('customer_name_of_father');
            $table->string('customer_business_address');
            $table->string('customer_type_of_business');
            $table->string('customer_business_duration');
            $table->string('customer_first_phone');
            $table->string('customer_second_phone');
            $table->string('customer_dob');
            $table->string('phone_of_spouse');
            $table->string('customer_marital_status');
            $table->string('customer_formal_education');
            $table->string('next_of_kin_firstname');
            $table->string('next_of_kin_lastname');
            $table->string('next_of_kin_phone');
            $table->string('customer_loan_amount');
            $table->string('customer_loan_duration');
            $table->string('average_monthly_income');
            $table->string('customer_account_number');
            $table->string('guarantor_firstname');
            $table->string('guarantor_lastname');
            $table->string('guarantor_phone');
            $table->string('guarantor_address');
            $table->string('customer_status');
            $table->string('customer_bank_name');
            $table->string('credit_officer_name');
            $table->string('customer_account_type');
            $table->string('customer_image');
            $table->string('customer_signature');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
