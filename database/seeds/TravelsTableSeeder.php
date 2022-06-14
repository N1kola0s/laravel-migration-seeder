<?php
use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travels = [
                        [
                'destination'=> 'Maiorca',
                'package'=> 'volo+hotel',
                'start_travel'=> '01-08-2022',
                'end_travel'=> '08-08-2022',
                'travelers'=> 2,
                'hotel'=> 'THB Maria Isabel',
                'rooms'=> 1,
                'airline_company'=>'EasyJet',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, tempore!',
                'price'=>1000,
                'is_annulment'=>0,
                'image'=>'https://res.cloudinary.com/lastminute/image/upload/w_1000,h_1000,c_fit,q_auto,f_auto/v1568202982/1._MAIN_PICTURE_njhkis.jpg'

            ],
            [
                'destination'=> 'Ibiza',
                'package'=> 'volo+hotel',
                'start_travel'=> '08-08-2022',
                'end_travel'=> '15-08-2022',
                'travelers'=> 2,
                'hotel'=> 'Bless Hotel Ibiza',
                'rooms'=> 1,
                'airline_company'=>'Ryanair',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, tempore!',
                'price'=>2443,
                'is_annulment'=>1,
                'image'=>'https://res.cloudinary.com/lastminute/image/upload/w_1000,h_1000,c_fit,q_auto,f_auto/v1597516252/Bless_Hotel_Ibiza_hihv2n.jpg'

            ],
            [
                'destination'=> 'Tenerife',
                'package'=> 'volo+hotel',
                'start_travel'=> '15-08-2022',
                'end_travel'=> '21-08-2022',
                'travelers'=> 4,
                'hotel'=> 'Labranda Bahia Fañabe',
                'rooms'=> 2,
                'airline_company'=>'Ryanair',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, tempore!',
                'price'=>1090,
                'is_annulment'=>1,
                'image'=>'https://res.cloudinary.com/lastminute/image/upload/w_1000,h_1000,c_fit,q_auto,f_auto/v1645116284/Pool_L_Villas_Fa%C3%B1ab%C3%A9_8_ik9h7d.jpg'

            ]

        ];

        foreach ($travels as $travel){
            $new_travel = new Travel();
            $new_travel-> destination = $travel['destination'];
            $new_travel-> package = $travel['package'];
            $new_travel-> start_travel = $travel['start_travel'];
            $new_travel-> end_travel = $travel['end_travel'];
            $new_travel-> travelers = $travel['travelers'];
            $new_travel-> hotel = $travel['hotel'];
            $new_travel-> rooms = $travel['rooms'];
            $new_travel-> airline_company = $travel['airline_company'];
            $new_travel-> description = $travel['description'];
            $new_travel-> price = $travel['price'];
            $new_travel-> is_annulment = $travel['is_annulment'];
            $new_travel-> image = $travel['image'];
            $new_travel->save();
        }

    }
}
