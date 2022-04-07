<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $makes = array(
            array('id' => 1, 'name' => 'Acura'),
            array('id' => 2, 'name' => 'Alfa Romeo'),
            array('id' => 3, 'name' => 'AMC'),
            array('id' => 4, 'name' => 'Aston Martin'),
            array('id' => 5, 'name' => 'Audi'),
            array('id' => 6, 'name' => 'Avanti'),
            array('id' => 7, 'name' => 'Bentley'),
            array('id' => 8, 'name' => 'BMW'),
            array('id' => 9, 'name' => 'Buick'),
            array('id' => 10, 'name' => 'Cadillac'),
            array('id' => 11, 'name' => 'Chevrolet'),
            array('id' => 12, 'name' => 'Chrysler'),
            array('id' => 13, 'name' => 'Daewoo'),
            array('id' => 14, 'name' => 'Daihatsu'),
            array('id' => 15, 'name' => 'Datsun'),
            array('id' => 16, 'name' => 'DeLorean'),
            array('id' => 17, 'name' => 'Dodge'),
            array('id' => 18, 'name' => 'Eagle'),
            array('id' => 19, 'name' => 'Ferrari'),
            array('id' => 20, 'name' => 'FIAT'),
            array('id' => 21, 'name' => 'Fisker'),
            array('id' => 22, 'name' => 'Ford'),
            array('id' => 23, 'name' => 'Freightliner'),
            array('id' => 24, 'name' => 'Geo'),
            array('id' => 25, 'name' => 'GMC'),
            array('id' => 26, 'name' => 'Honda'),
            array('id' => 27, 'name' => 'HUMMER'),
            array('id' => 28, 'name' => 'Hyundai'),
            array('id' => 29, 'name' => 'Infiniti'),
            array('id' => 30, 'name' => 'Isuzu'),
            array('id' => 31, 'name' => 'Jaguar'),
            array('id' => 32, 'name' => 'Jeep'),
            array('id' => 33, 'name' => 'Kia'),
            array('id' => 34, 'name' => 'Lamborghini'),
            array('id' => 35, 'name' => 'Lancia'),
            array('id' => 36, 'name' => 'Land Rover'),
            array('id' => 37, 'name' => 'Lexus'),
            array('id' => 38, 'name' => 'Lincoln'),
            array('id' => 39, 'name' => 'Lotus'),
            array('id' => 40, 'name' => 'Maserati'),
            array('id' => 41, 'name' => 'Maybach'),
            array('id' => 42, 'name' => 'Mazda'),
            array('id' => 43, 'name' => 'McLaren'),
            array('id' => 44, 'name' => 'Mercedes-Benz'),
            array('id' => 45, 'name' => 'Mercury'),
            array('id' => 46, 'name' => 'Merkur'),
            array('id' => 47, 'name' => 'MINI'),
            array('id' => 48, 'name' => 'Mitsubishi'),
            array('id' => 49, 'name' => 'Nissan'),
            array('id' => 50, 'name' => 'Oldsmobile'),
            array('id' => 51, 'name' => 'Peugeot'),
            array('id' => 52, 'name' => 'Plymouth'),
            array('id' => 53, 'name' => 'Pontiac'),
            array('id' => 54, 'name' => 'Porsche'),
            array('id' => 55, 'name' => 'RAM'),
            array('id' => 56, 'name' => 'Renault'),
            array('id' => 57, 'name' => 'Rolls-Royce'),
            array('id' => 58, 'name' => 'Saab'),
            array('id' => 59, 'name' => 'Saturn'),
            array('id' => 60, 'name' => 'Scion'),
            array('id' => 61, 'name' => 'smart'),
            array('id' => 62, 'name' => 'SRT'),
            array('id' => 63, 'name' => 'Sterling'),
            array('id' => 64, 'name' => 'Subaru'),
            array('id' => 65, 'name' => 'Suzuki'),
            array('id' => 66, 'name' => 'Tesla'),
            array('id' => 67, 'name' => 'Toyota'),
            array('id' => 68, 'name' => 'Triumph'),
            array('id' => 69, 'name' => 'Volkswagen'),
            array('id' => 70, 'name' => 'Volvo'),
            array('id' => 71, 'name' => 'Yugo')
        );
        DB::table('brands')->insert($makes);
    }
}
