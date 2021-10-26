<?php

use App\Models\Division;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divisions', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
        });

        $d = new Division(); // 1
        $d->name = "Payment";
        $d->save();

        $d = new Division(); // 2
        $d->name = "Procurement";
        $d->save();

        $d = new Division(); // 3
        $d->name = "IT";
        $d->save();

        $d = new Division(); // 4
        $d->name = "Finance";
        $d->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('divisions');
    }
}
