<?php

use App\Models\Poll;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polls', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description");
            $table->dateTime("deadline");
            $table->foreignId("created_by")->constrained("users")->onDelete("cascade");
            $table->timestamps();
            $table->softDeletes();
        });

        $p = new Poll(); // 1
        $p->title = "WFO/WFH";
        $p->description = "lebih produktif WFO atau WFH?";
        $p->deadline = "2029-08-28 12:00:00";
        $p->created_by = 1;
        $p->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('polls');
    }
}
