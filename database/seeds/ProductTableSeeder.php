<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'title'=>'Canvas shoes for men',
            'imagePath'=>'http://www.mypaikaribazar.com/wp-content/uploads/2018/12/Nouveau-2018-Printemps-t-Chaussures-de-Toile-Hommes-Baskets-mode-fille-baskets-Basses-Noir-Chaussures-2-600x600.jpg',
            'price'=>140
        ]);

        $product->save();

        $product = new \App\Product([
            'title'=>'Classic shoes women\'s',
            'imagePath'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRH0ZE-KeIoTCrTuR4jqp2oMlLQlQuLG_CPqk9fLbhPqXvQRfkAUg',
            'price'=>150
        ]);

        $product->save();
        $product = new \App\Product([
            'title'=>'PIERRE HARDY MEN\'S',
            'imagePath'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRc3ogeA39AW_uVd5XAq_FQfScc1psWlj9JPsQYJ1UGnVa_067z',
            'price'=>170
        ]);

        $product->save();
        $product = new \App\Product([
            'title'=>'Canvas shoes for men',
            'imagePath'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNBojIy74yMxDAGX7WW4acpSh2oqIqxQi9aFxFlNA1H1DO5AhW',
            'price'=>120
        ]);

        $product->save();
        $product = new \App\Product([
            'title'=>'A sneak peek',
            'imagePath'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRN0MU9AcCRHw0vJyWYoyL3wRaPrX0_XCCgYhkkXIX1XMUnAN-Ug',
            'price'=>100
        ]);

        $product->save();
        $product = new \App\Product([
            'title'=>'BIRKENSTOCK SHOES',
            'imagePath'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3XoQu9TI8Ll-vbbCg1YuC80V8ZtpL8PaOzla242AmOMiadu7e',
            'price'=>143
        ]);

        $product->save();
        $product = new \App\Product([
            'title'=>'Canvas shoes for men',
            'imagePath'=>'http://www.mypaikaribazar.com/wp-content/uploads/2018/12/Nouveau-2018-Printemps-t-Chaussures-de-Toile-Hommes-Baskets-mode-fille-baskets-Basses-Noir-Chaussures-2-600x600.jpg',
            'price'=>140
        ]);

        $product->save();
        $product = new \App\Product([
            'title'=>'Canvas shoes for men',
            'imagePath'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHTUH2ahaytceXRAFUdMiiojVSwDm-jTmJhb_0ave8-OueoNH4',
            'price'=>139
        ]);

        $product->save();
        $product = new \App\Product([
            'title'=>'Canvas shoes for men',
            'imagePath'=>'http://www.mypaikaribazar.com/wp-content/uploads/2018/12/Nouveau-2018-Printemps-t-Chaussures-de-Toile-Hommes-Baskets-mode-fille-baskets-Basses-Noir-Chaussures-2-600x600.jpg',
            'price'=>210
        ]);

        $product->save();
        $product = new \App\Product([
            'title'=>'Canvas shoes for men',
            'imagePath'=>'http://www.mypaikaribazar.com/wp-content/uploads/2018/12/Nouveau-2018-Printemps-t-Chaussures-de-Toile-Hommes-Baskets-mode-fille-baskets-Basses-Noir-Chaussures-2-600x600.jpg',
            'price'=>140
        ]);

        $product->save();

    }
}
