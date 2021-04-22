<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompagnySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compagnies')->insert(
            [
                [
                    'nom_compagny' => 'Ikea',
                    'adress_compagny'=>'23 BLD Saint Paul 1080 Bruxelles',
                    'phone'=>'0343113234',
                    'mail'=>'Ikea@hotmail.com',
                    'firstname_user'=>'',
                    'name_user'=>'Albert',
                    'image'=>'ikea.png'
                ],
                [
                    'nom_compagny' => 'Fnac',
                    'adress_compagny'=>'25 rue de la croix 1020 Bruxelles',
                    'phone'=>'034222232',
                    'mail'=>'Fnac@hotmail.com',
                    'firstname_user'=>'',
                    'name_user'=>'Younes B',
                    'image'=>'fnac.png'
                ],
                [
                    'nom_compagny' => 'Media Markt',
                    'adress_compagny'=>'196 rue Neuve 1000 Bruxelles',
                    'phone'=>'0342235554',
                    'mail'=>'MediaMarkt@hotmail.com',
                    'firstname_user'=>'',
                    'name_user'=>'Amir',
                    'image'=>'media_markt.png'
                ],
                [
                    'nom_compagny' => 'Decathlon',
                    'adress_compagny'=>'',
                    'phone'=>'03422522345',
                    'mail'=>'Decathlon@hotmail.com',
                    'firstname_user'=>'',
                    'name_user'=>'Kevin',
                    'image'=>''
                ],
                [
                    'nom_compagny' => 'Makifornia',
                    'adress_compagny'=>'23 Rue de la loi 1040 Bruxelles',
                    'phone'=>'0342234323',
                    'mail'=>'Makifornia@hotmail.com',
                    'firstname_user'=>'Lol',
                    'name_user'=>'',
                    'image'=>'makifornia.png'
                ],
                [
                    'nom_compagny' => 'Pizza Family',
                    'adress_compagny'=>'45 rue de la louvière 1000 Bruxelles',
                    'phone'=>'5432453423',
                    'mail'=>'PizzaFamily@hotmail.com',
                    'firstname_user'=>'',
                    'name_user'=>'Younes L',
                    'image'=>''
                ]
            ]
        );
    }
}
