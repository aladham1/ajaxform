<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $model = ContactDetails::class;

            Schema::create('contact_details', function (Blueprint $table) {
                $table->id();
                $table->string('first_name')->unique();
                $table->string('last_name');
                $table->string('email_address')->unique();
                $table->string('home_phone')->unique();
                $table->string('mobile_phone')->nullable();
                $table->text('comments');
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
            Schema::dropIfExists('contact_details');
        }

    }


