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
        DB::table('users')->insert([
            [
                'name' => 'Ali Burnwood',
                'email' => 'AliBurnwood@gmail.com',
                'password' => 'AliBurnwood@gmail.com'
            ],
            [
                'name' => 'Mourad Granger',
                'email' => 'MouradGranger@gmail.com',
                'password' => 'MouradGranger@gmail.com'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('users')->whereIn('id', [1,2])->delete();
    }
};
