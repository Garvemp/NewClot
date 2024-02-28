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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_product')->constrained('products');
            $table->bigInteger('id_client');
            $table->date('date_e');
            $table->decimal('price',11,2);
            $table->integer('indiscount');
            $table->integer('discount');
            $table->date('date');
            $table->string('payment');
            $table->string('facest');
            $table->text('content')->nullable();
            $table->decimal('subtotal', 11, 2); 
            $table->decimal('total', 11, 2);
            $table->softDeletes($column = 'deleted_at', $precision = 0);
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
        Schema::dropIfExists('bills');
    }
};
