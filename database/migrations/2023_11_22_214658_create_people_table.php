<?php

use App\Models\Person;
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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120);
            $table->string('last_name', 120);
            $table->string('father_last_name', 120);
            $table->string('email', 70)->nullable();
            $table->enum('state', [Person::STATUS_ACTIVE, Person::STATUS_INACTIVE])->default(Person::STATUS_ACTIVE);
            $table->bigInteger('team_id');
            $table->boolean('is_owner')->default(Person::NOT_IS_OWNER);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
