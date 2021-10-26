<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('role');
            $table->foreignId("division_id")->constrained("divisions");
            $table->timestamps();
        });

        $u = new User(); // 1
        $u->username = "admin";
        $u->password = Hash::make("admin");
        $u->role = "admin";
        $u->division_id = 1;
        $u->save();

        $u = new User(); // 2
        $u->username = "payment1";
        $u->password = Hash::make("user");
        $u->role = "user";
        $u->division_id = 1;
        $u->save();

        $u = new User(); // 3
        $u->username = "payment2";
        $u->password = Hash::make("user");
        $u->role = "user";
        $u->division_id = 1;
        $u->save();

        $u = new User(); // 4
        $u->username = "procurement1";
        $u->password = Hash::make("user");
        $u->role = "user";
        $u->division_id = 2;
        $u->save();

        $u = new User(); // 5
        $u->username = "it1";
        $u->password = Hash::make("user");
        $u->role = "user";
        $u->division_id = 3;
        $u->save();

        $u = new User(); // 6
        $u->username = "it2";
        $u->password = Hash::make("user");
        $u->role = "user";
        $u->division_id = 3;
        $u->save();

        $u = new User(); // 7
        $u->username = "it3";
        $u->password = Hash::make("user");
        $u->role = "user";
        $u->division_id = 3;
        $u->save();

        $u = new User(); // 8
        $u->username = "it4";
        $u->password = Hash::make("user");
        $u->role = "user";
        $u->division_id = 3;
        $u->save();

        $u = new User(); // 9
        $u->username = "it5";
        $u->password = Hash::make("user");
        $u->role = "user";
        $u->division_id = 3;
        $u->save();

        $u = new User(); // 10
        $u->username = "it6";
        $u->password = Hash::make("user");
        $u->role = "user";
        $u->division_id = 3;
        $u->save();

        $u = new User(); // 11
        $u->username = "finance1";
        $u->password = Hash::make("user");
        $u->role = "user";
        $u->division_id = 4;
        $u->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
