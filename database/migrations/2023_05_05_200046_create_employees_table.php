<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('id_no')->nullable();
            $table->string('emp_image')->nullable();
            $table->string('emergency_phone')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('dob');
            $table->string('gender')->comment("Male=M,Female=F,Other=O");
            $table->string('nation_id');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('Present_address');
            $table->string('permanent_address');
            $table->string('resume_doc')->nullable();
            $table->string('offer_latter_doc')->nullable();
            $table->string('joining_latter_doc')->nullable();
            $table->string('id_card_img')->nullable();
            $table->bigInteger('department_id');
            $table->bigInteger('designation_id');
            $table->tinyInteger('employee_status')->comment('working=1 maternity_leave=2,inactivity=3');
            $table->date('date_of_joining')->nullable();
            $table->string('note')->nullable();

            $table->tinyInteger('status')->default(1)->comment('1=active,0=inactive');
            $table->timestamp('created_at')->nullable()->default(null);
            $table->unsignedInteger('created_by')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->unsignedInteger('updated_by')->nullable()->default(null);
            $table->tinyInteger('deleted')->default(0)->comment('0=no,1=yes');
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->unsignedInteger('deleted_by')->nullable()->default(null);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
