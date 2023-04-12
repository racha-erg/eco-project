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
        DB::table('products')->insert([
            ['name' => 'Focal Listen Professional - Casque audio',
            'image' => 'image1.jpg',
            'brand' => 'Macejkovic, Gislason and Green',
            'price' => 744.20,
            'quantity' => 19,
            'description' => 'Amet voluptatem voluptatibus asperiores explicabo autem. Nesciunt dolores ad vel perspiciatis vel quia nulla. Delectus totam qui minima tenetur.'
        ],
        ['name' => 'Jabra Elite 7 Pro Beige',
            'image' => 'MN0005895741_1.jpg',
            'brand' => 'Conn, Gerlach and Ruecker',
            'price' => 981.03,
            'quantity' => 98,
            'description' => 'Labore ipsam enim tenetur deleniti delectus. Consequatur officiis laborum id quia assumenda porro vel. Iste fugiat suscipit natus itaque. Sunt exercitationem voluptatem sed quasi reiciendis voluptatem voluptas.'
        ],
        ['name' => 'Jabra Elite 7 Pro Noir et Titane',
            'image' => 'MN0005895761_1.jpg',
            'brand' => 'Bartoletti, Lueilwitz and Ziemann',
            'price' => 144.20,
            'quantity' => 60,
            'description' => 'Qui est ullam velit omnis. Inventore perspiciatis corrupti dolores doloremque aut voluptatem. Aut at vero est omnis sunt saepe asperiores. Atque aut enim quam qui at. Quia dolor rerum ad odit recusandae voluptatem.'
        ],
        ['name' => 'Sennheiser Momentum Wireless 4 Noir - Casque sans fil',
            'image' => 'MN0005974591.jpg',
            'brand' => 'Osinski and Sons',
            'price' => 548.87,
            'quantity' => 11,
            'description' => 'Aspernatur voluptatem iusto enim omnis est excepturi provident. Repellat sunt in ducimus qui provident. Assumenda fuga eius non temporibus praesentium.'
        ],
        
        ['name' => 'JBL TUNE 510BT Rose - Casque sans fil',
            'image' => 'MN0005761640_1.jpg',
            'brand' => 'Lind PLC',
            'price' => 724.14,
            'quantity' => 37,
            'description' => "Les AirPods Max réinventent le casque circum-auriculaire. Un transducteur dynamique conçu par Apple livre un son haute-fidélité immersif. Des coussinets au sommet de l'arceau, chaque détail a été conçu pour offrir un confort d'exception. La meilleure technologie de Réduction active du bruit du marché bloque les bruits extérieurs, tandis que le mode Transparence les laisse passer. Et l'audio spatial avec suivi dynamique de la tête génère un son qui vous enveloppe comme si vous étiez au cinéma."
        ],
        
        ['name' => 'JBL TUNE 510BT Rose - Casque sans fil',
            'image' => 'MN0005910228_1.jpg',
            'brand' => 'DuBuque, Runte and Yost',
            'price' => 797.71,
            'quantity' => 45,
            'description' => "Pariatur minima nisi rem libero quia reprehenderit. Quam nemo et nisi. Soluta natus quos id rerum magni. Asperiores dolores maiores sit error."
        ],
        ['name' => 'JBL Tune 710BT Noir - Casque sans fil',
            'image' => 'MN0005910116_1.jpg',
            'brand' => 'Huel-Cruickshank',
            'price' => 106.40,
            'quantity' => 29,
            'description' => "Est natus animi ut eius dolorum aperiam necessitatibus vitae. Quidem eveniet rerum eius odit aut veniam."
        ],
        ['name' => 'JBL Tune Flex Noir',
            'image' => 'MN0005979545.jpg',
            'brand' => 'Daniel-Goyette',
            'price' => 524.14,
            'quantity' => 37,
            'description' => "Consequatur magnam reprehenderit architecto quasi. Quo laborum assumenda quo consectetur id enim ut. Voluptatibus qui sit voluptatem quas. Ipsum eos velit molestias suscipit."
        ],
        ['name' => 'JBL Wave 300TWS Bleu',
            'image' => 'MN0005932484_1.jpg',
            'brand' => 'Stark, Pfeffer and Considine',
            'price' => 929.14,
            'quantity' => 22,
            'description' => "Esse voluptatibus officiis quod iste vero repudiandae. Esse veniam minima et consequatur ratione quas doloribus. Nulla quis dolorem voluptatem voluptates commodi. Et perferendis commodi dolore quis voluptatem blanditiis."
        ],
        ['name' => 'Razer Kraken BT Kitty Edition Quartz - Casque sans fil',
            'image' => 'MN0005780293_1.jpg',
            'brand' => 'Rogahn and Sons',
            'price' => 997.14,
            'quantity' => 19,
            'description' => "Atque nostrum delectus corrupti culpa. Exercitationem eius aut corporis accusantium. Libero quis deserunt et quia aspernatur similique illum."
        ],
        ['name' => 'AKG K72 - Casque audio',
            'image' => 'MN0005076525_1.jpg',
            'brand' => 'Casque HiFi',
            'price' => 797.84,
            'quantity' => 25,
            'description' => "Le casque AKG K72 offre un excellent rapport qualité prix, sa conception fermée permet une immersion dans votre musique sans gêner votre entourage. Il s'utilise aussi bien sur votre smartphone que sur une chaine hi-fi."
        ],
        ['name' => 'Sennheiser HD 250BT Noir - Casque sans fil',
            'image' => 'MN0005906543_1.jpg',
            'brand' => 'Collins LLC',
            'price' => 694.14,
            'quantity' => 37,
            'description' => "Sit ea aut nam similique officia illo. Hic est porro at sint beatae sapiente reprehenderit doloribus. Iusto natus at et tenetur enim ipsa. Odio recusandae nulla quis dolor quo rerum. Fugiat quam ut eaque voluptas."
        ],
        ['name' => 'Sennheiser Momentum Wireless 4 Blanc - Casque sans fil',
            'image' => 'MN0005974608.jpg',
            'brand' => 'Reinger-Kub',
            'price' => 320.99,
            'quantity' => 28,
            'description' => "Qui voluptas corrupti corrupti consequatur ipsa eos. Qui illum est temporibus. Facilis veniam aut cumque natus vero aliquam placeat. Eos et sunt atque cupiditate perferendis."
        ],
        
        ['name' => 'Sennheiser RS 195-U',
            'image' => 'MN0005987482.jpg',
            'brand' => 'Schneider-Schaden',
            'price' => 20.97,
            'quantity' => 18,
            'description' => "Ut quia blanditiis natus eligendi temporibus qui earum. Incidunt perferendis voluptatem dolore id perspiciatis rerum. Quod reprehenderit dolores necessitatibus voluptatem dolor dolores. Dolor nulla aut et nihil qui sed sint. Cumque qui vitae eum sed incidunt accusamus qui."
    ],
        ['name' => 'Sennheiser Sport True Wireless Noir - Écouteurs sans fil',
        'image' => 'MN0005991274.jpg',
        'brand' => 'Schneider-Schaden',
        'price' => 189.97,
        'quantity' => 18,
        'description' => "Les écouteurs intra-auriculaires ouverts ou fermés True Wireless à réduction passive de bruit Sennheiser Sport True Wireless diffuseront votre musique pendant 9 heures sans interruption. Vous apprécierez un son clair et précis. La technologie Bluetooth 5.2 avec prise en charge aptX, AAC et SBC vous libérera de la contrainte du câble. Les écouteurs Sport True Wireless Sennheiser résistent aux éclaboussures, à la poussière et à la sueur en intégrant la norme IP54. Avec son microphone, vous gérerez vos appels les mains libres."
            ],
        ['name' => 'Shokz OpenRun Noir - Casque sans fil',
            'image' => 'MN0005922081_1.jpg',
            'brand' => 'Schneider-Schaden',
            'price' => 139.97,
            'quantity' => 8,
            'description' => "Shokz OpenRun est le casque idéal pour les férus de VTT, course à pied ou randonnée. La technologie à conduction osseuse vous permet d'écouter de la musique ou de téléphoner tout en restant attentif à l'environnement qui vous entoure. Étanche, léger et doté d'une excellente qualité sonore, vous ne pourrez plus vous en passer !"
        ],
        ['name' => 'ASUS ROG Strix Go BT',
            'image' => 'MN0005872000_1.jpg',
            'brand' => 'Casque à réduction active de bruit, HiFi, Bluetooth',
            'price' => 995.84,
            'quantity' => 25,
            'description' => "Plongez au coeur de l'action grâce au Asus ROG Strix GO BT. Ce casque gamer offre une connexion sans fil Bluetooth avec technologie audio Qualcomm aptX et la technologie ANC. Vous pourrez également l'utiliser avec son câble jack 3.5 mm. Confortable et pratique, vous pourrez écouter votre musique ou jouer partout et profiter ainsi de vos jeux préférés où que vous soyez durant de longues heures grâce à son autonomie longue durée. Enfin, transportez-le facilement grâce à sa housse de transport, qui le protégera au maximum."
        ],
        ['name' => 'Apple AirPods 3 - Boîtier charge Lightning - Écouteurs sans fil',
            'image' => 'MN0005978078.jpg',
            'brand' => 'Écouteurs True Wireless, intra-auriculaires, Bluetooth',
            'price' => 695.84,
            'quantity' => 36,
            'description' => "Les AirPods (3ᵉ génération) d'Apple sont équipés de la puce H1, cette version 3 permet d'activer Siri uniquement à la voix. La puce H1 permet également une connexion plus rapide et plus stable. Toujours aussi performant et intuitifs, les Airpods (3ᵉ génération) sont beaucoup plus que de simples écouteurs sans fil. Ils sont magiques. Cette version est avec boitier de recharge Lightning"
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
        DB::table('products')->whereIn('name', ['Focal Listen Professional - Casque audio',' Jabra Elite 7 Pro Beige',
        'Jabra Elite 7 Pro Noir et Titane','Sennheiser Momentum Wireless 4 Noir - Casque sans fil',
        'JBL TUNE 510BT Rose - Casque sans fil','JBL TUNE 510BT Rose - Casque sans fil','JBL Tune 710BT Noir - Casque sans fil',
        'JBL Tune Flex Noir','JBL Wave 300TWS Bleu','Razer Kraken BT Kitty Edition Quartz - Casque sans fil',
        'Sennheiser HD 250BT Noir - Casque sans fil','Sennheiser Momentum Wireless 4 Blanc - Casque sans fil',
        'Sennheiser RS 195-U','Apple AirPods 3 - Boîtier charge Lightning - Écouteurs sans fil',
        'ASUS ROG Strix Go BT','AKG K72 - Casque audio','Sennheiser Sport True Wireless Noir - Écouteurs sans fil'
        ])->delete();
    }
};
