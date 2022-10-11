<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies_tables', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->default("Razzaq Sons");
            $table->string('company_address')->default("Shah Alam Market");
            $table->string('company_phone_no')->default("03234230718");
            $table->string('company_email')->default("waleedrazzaq511@gmail.com");
            $table->string('company_fax')->default("03234230718");
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
        Schema::dropIfExists('companies_tables');
    }
}
