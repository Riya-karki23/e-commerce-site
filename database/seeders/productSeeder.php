<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
         "name"=>"redmi note 8",
         "price"=>"12,000",
         "category"=>"android",
         "gallery"=>"https://i01.appmifile.com/v1/MI_18455B3E4DA706226CF7535A58E875F0267/pms_1591083226.35839520!400x400!85.jpg",
         "description"=>"8gb ram black colour"
        ],
        [
            "name"=>"realme c15",
            "price"=>"10,000",
            "category"=>"android",
            "gallery"=>"https://image01.realme.net/general/20230512/1683873836923.png?width=1440&height=1440&size=544990",
            "description"=>"8gb ram white colour"
           ],
           [
            "name"=>"oppo",
            "price"=>"15,000",
            "category"=>"android",
            "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3hhYabB6F11rzs7YaFUPrOdVzWJv5htYHPK3DTAQc0g&s",
            "description"=>"8gb ram black colour"
           ],
           [
            "name"=>"Samsung",
            "price"=>"24,000",
            "category"=>"android",
            "gallery"=>"https://images.samsung.com/is/image/samsung/p6pim/in/2401/gallery/in-galaxy-s24-plus-sm-s926bzvcins-thumb-539572998?$344_344_PNG$",
            "description"=>"8gb ram black colour"
           ],
           [
            "name"=>"iphone",
            "price"=>"90,000",
            "category"=>"iphone",
            "gallery"=>"https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-card-40-iphone15prohero-202309_FMT_WHH?wid=508&hei=472&fmt=p-jpg&qlt=95&.v=1693086369818",
            "description"=>"8gb ram black colour"
           ],
           [
            "name"=>"iphone",
            "price"=>"90,000",
            "category"=>"iphone",
            "gallery"=>"https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-card-40-iphone15prohero-202309_FMT_WHH?wid=508&hei=472&fmt=p-jpg&qlt=95&.v=1693086369818",
            "description"=>"8gb ram black colour"
           ],
           
   ] );
    }
}
