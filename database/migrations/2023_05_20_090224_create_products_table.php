<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'name');
            $table->string(column: 'slug') -> unique();
            //$table->string(column: 'image', length: 2000)->nullable();
            $table->string(column: 'description') ->default("abc");
            $table->integer(column: 'price') -> default(0);
            $table->timestamps();

            //$table->string(column: 'image_mime')->nullable();
            //$table->integer(column: 'image_size')->nullable();
            //$table->foreignIdFor(model: User::class, column: 'created_by')->nullable();
            //$table->foreignIdFor(model: User::class, column: 'updated_by')->nullable();
            //$table->softDeletes();
            //$table->foreignIdFor(model: User::class, column: 'deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
