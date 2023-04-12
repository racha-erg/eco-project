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
        DB::table('commentaires')->insert([
            [
                'image' => 'https://pbs.twimg.com/profile_images/840618236811083777/OGYL8PAt.jpg',
                'user_id' => 1,
                'commentaire' => 'Je voulais simplement prendre un moment pour remercier la marque ClickBuy pour leur excellent service client et leur sélection de produits de qualité.',
            ],
            [
                'image' => 'https://viewpointcre.com/wp-content/uploads/2019/06/Stoclet-Alex-Viewpoint.jpg',
                'user_id' => 2,
                'commentaire' =>"J'ai été ravi de mon expérience d'achat avec votre marque et je recommande certainement vos produits à mes amis et à ma famille. Merci encore pour tout!",
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
        DB::table('commentaires')->whereIn('user_id', [1,2])->delete();
    }
};
