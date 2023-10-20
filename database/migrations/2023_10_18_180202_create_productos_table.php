<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->decimal('preciocompra',9,2);
            $table->decimal('precioventa',9,2);
            $table->integer('stock');           
            $table->foreignId('id_categoria')
            ->constrained('categorias')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->foreignId('id_marca')
            ->constrained('marcas')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->foreignId('id_promocion')
            ->constrained('promociones')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
