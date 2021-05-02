<?php

namespace Database\Seeders;

use App\Models\CountryShop;
use Illuminate\Database\Seeder;

class CountryShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $countries=[
             [
                 'code' => 'AF',
                 'shop' => 'https://ru.wikipedia.org/wiki/Africa'
             ],
             [
                 'code' => 'NA',
                 'shop' => 'https://www.amazon.com/'
             ],
             [
                 'code' => 'OC',
                 'shop' => 'https://ru.wikipedia.org/wiki/%D0%9E%D0%BA%D0%B5%D0%B0%D0%BD%D0%B8%D1%8F'
             ],
             [
                 'code' => 'AN',
                 'shop' => 'https://uk.wikipedia.org/wiki/%D0%90%D0%BD%D1%82%D0%B0%D1%80%D0%BA%D1%82%D0%B8%D0%B4%D0%B0'
             ],
             [
                 'code' => 'AS',
                 'shop' => 'https://sale.alibaba.com/'
             ],
             [
                 'code' => 'EU',
                 'shop' => 'https://rozetka.com.ua/'
             ],
             [
                 'code' => 'SA',
                 'shop' => 'https://ru.wikipedia.org/wiki/%D0%AE%D0%B6%D0%BD%D0%B0%D1%8F_%D0%90%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B0'
             ],
         ];
         foreach ($countries as $country)
         {
             CountryShop::create($country);
         }
    }
}
