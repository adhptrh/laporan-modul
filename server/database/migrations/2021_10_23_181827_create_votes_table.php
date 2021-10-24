<?php

use App\Models\Vote;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->id();
            $table->foreignId("choice_id")->constrained("choices")->onDelete("cascade");
            $table->foreignId("user_id")->constrained("users")->onDelete("cascade");
            $table->foreignId("poll_id")->constrained("polls")->onDelete("cascade");
            $table->foreignId("division_id")->constrained("divisions")->onDelete("cascade");
            $table->timestamps();
        });

        $v = new Vote();
        $v->choice_id = 1; // WFO
        $v->user_id = 2; // Payment 1
        $v->poll_id = 1; // WFO/WFH
        $v->division_id = 1; // Payment
        $v->save();

        $v = new Vote();
        $v->choice_id = 1; // WFO
        $v->user_id = 3; // Payment 2
        $v->poll_id = 1; // WFO/WFH
        $v->division_id = 1; // Payment
        $v->save();

        $v = new Vote();
        $v->choice_id = 1; // WFO
        $v->user_id = 4; // Procurement 1
        $v->poll_id = 1; // WFO/WFH
        $v->division_id = 2; // Procurement
        $v->save();

        $v = new Vote();
        $v->choice_id = 1; // WFO
        $v->user_id = 5; // IT 1
        $v->poll_id = 1; // WFO/WFH
        $v->division_id = 3; // IT
        $v->save();

        $v = new Vote();
        $v->choice_id = 2; // WFH
        $v->user_id = 6; // IT 2
        $v->poll_id = 1; // WFO/WFH
        $v->division_id = 3; // IT
        $v->save();

        $v = new Vote();
        $v->choice_id = 2; // WFH
        $v->user_id = 7; // IT 3
        $v->poll_id = 1; // WFO/WFH
        $v->division_id = 3; // IT
        $v->save();

        $v = new Vote();
        $v->choice_id = 2; // WFH
        $v->user_id = 11; // FINANCE 1
        $v->poll_id = 1; // WFO/WFH
        $v->division_id = 4; // Finance
        $v->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votes');
    }
}
