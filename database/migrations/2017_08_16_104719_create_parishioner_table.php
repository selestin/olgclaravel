<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParishionerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('parishioners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parish_id');
            $table->integer('family_id');
            $table->string('baptismal_name');
            $table->string('name');
            $table->string('family_position');
            $table->date('date_of_birth');
            $table->string('female');
            $table->date('baptism_date');
            $table->date('confirmation_date');
            $table->date('marriage_date');
            $table->string('holy_eucharist_details');
            $table->string('religious_details');
            $table->text('education');
            $table->string('occupation');
            $table->string('place');
            $table->text('religious_study');
            $table->string('parish_duties');
            $table->text('annual_confession');
            $table->string('death_details');
            $table->string('name_father');
            $table->string('name_mother');
            $table->string('name_wife');
            $table->string('phone_no');
            $table->string('mob_no');
            $table->string('e_mail');
            $table->string('blood_group');
            $table->text('present_address');
            $table->string('married');
            $table->string('status');
            $table->string('family_head');
            $table->string('represent_family');
            $table->integer('sort_order');
            $table->string('special_attention');
            $table->string('name_malayalam');
            $table->string('married_and_reside');
            $table->text('notes');
            $table->text('family_name');
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
        //
    }
}
