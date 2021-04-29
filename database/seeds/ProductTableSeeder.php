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
        'imagePath' => 'images/1.png',
        'title' => 'White Tea',
        'description'=> 'Tea! It’s the nation’s favourite beverage and the best way to wake up your senses, any time of the day.',
        'price' => 1.50
        ]);
        $product->save();
        
        $product = new \App\Product([
        'imagePath' => 'images/2.png',
        'title' => 'Coffee',
        'description'=> 'Smooth and balanced, our medium-roasted coffees are perfect for every coffee break.',
        'price' => 2.20
        ]);
        $product->save();
        
        $product = new \App\Product([
        'imagePath' => 'images/3.png',
        'title' => 'Hot Chocolate',
        'description'=> 'Hot creamy milk bleded with chocolate powder and topped with marshmallows.',
        'price' => 2.00
        ]);
        $product->save();
        
        $product = new \App\Product([
        'imagePath' => 'images/4.png',
        'title' => 'Iced Latte',
        'description'=> 'Chilled milk over ice, capped with freshly shake espresso',
        'price' => 3.20
        ]);
        $product->save();
    
        $product = new \App\Product([
        'imagePath' => 'images/5.png',
        'title' => 'Orange Juice',
        'description'=> 'We freshly squeeze our orange juice daily.',
        'price' => 1.90
        ]);
        $product->save();

        $product = new \App\Product([
        'imagePath' => 'images/6.png',
        'title' => 'Tropical Juice',
        'description'=> 'A refreshing, icy-smooth handcrafted beverage that combines the finest  and botanical blends of premium fruits.',
        'price' => 2.50
        ]);
        $product->save();

        $product = new \App\Product([
        'imagePath' => 'images/7.png',
        'title' => 'Water',
        'description'=> 'Filtered through volcanic rocks for thousands of years, Volvic Mineral Water is simply refreshing and delicious. Perfect due to its high quality superior taste.',
        'price' => 1.50
        ]);
        $product->save();
        
        $product = new \App\Product([
        'imagePath' => 'images/8.png',
        'title' => 'Ice Water',
        'description'=> 'Filtered through volcanic rocks for thousands of years, Volvic Mineral Water is simply refreshing and delicious. Perfect due to its high quality superior taste.',
        'price' => 1.85
        ]);
        $product->save();

        $product = new \App\Product([
        'imagePath' => 'images/9.png',
        'title' => 'Sparkling Water',
        'description'=> 'Filtered through volcanic rocks for thousands of years, Volvic Sparkling Water is simply refreshing and delicious. Perfect due to its high quality superior taste.',
        'price' => 1.25
        ]);
        $product->save();

        $product = new \App\Product([
        'imagePath' => 'images/10.png',
        'title' => 'J2O',
        'description'=> 'Not just some plain old boring ones, but some that’ll leave your taste buds tingling and your tongue wondering what just happened.',
        'price' => 2.75
        ]);
        $product->save();
        
        $product = new \App\Product([
        'imagePath' => 'images/11.png',
        'title' => 'Milkshake',
        'description'=> 'From a range of flavours to choose from strawberry, vanilla or chocolate',
        'price' => 1.25
        ]);
        $product->save();
        
        $product = new \App\Product([
        'imagePath' => 'images/12.png',
        'title' => 'Oasis',
        'description'=> 'Oasis is a great tasting refreshing still drink made across seven delicious flavours.',
        'price' => 1.25
        ]);
        $product->save();
        
        $product = new \App\Product([
        'imagePath' => 'images/13_14_15.png',
        'title' => 'Butter Toast',
        'description'=> 'Two delicious slices of bread, freshly made straight out the toaster spread with a nice fresh batch of butter.',
        'price' => 1.00
        ]);
        $product->save();

        $product = new \App\Product([
        'imagePath' => 'images/13_14_15.png',
        'title' => 'Jam Toast',
        'description'=> 'Two delicious slices of bread, freshly made straight out the toaster spread with a nice fresh batch of jam.',
        'price' => 0.75
        ]);
        $product->save();

        $product = new \App\Product([
        'imagePath' => 'images/13_14_15.png',
        'title' => 'Honey Toast',
        'description'=> 'Two delicious slices of bread, freshly made straight out the toaster spread with a nice fresh batch of honey.',
        'price' => 0.75
        ]);
        $product->save();

        $product = new \App\Product([
        'imagePath' => 'images/16.png',
        'title' => 'Chicken Nuggets',
        'description'=> 'Served with chips and a drink.',
        'price' => 3.00
        ]);
        $product->save();

        $product = new \App\Product([
        'imagePath' => 'images/17.png',
        'title' => 'Portion of Chips',
        'description'=> 'Chips are batonnet or allumette-cut deep-fried potatoes.',
        'price' => 1.50
        ]);
        $product->save();

        $product = new \App\Product([
        'imagePath' => 'images/18.png',
        'title' => 'Fish Fingers',
        'description'=> 'Served with chips and a drink.',
        'price' => 2.25
        ]);
        $product->save();

        $product = new \App\Product([
        'imagePath' => 'images/19.png',
        'title' => 'Butter Croissant',
        'description'=> 'Buttery and flakey croissant made with the addition of whole grains.',
        'price' => 3.00
        ]);
        $product->save();

        $product = new \App\Product([
        'imagePath' => 'images/20.png',
        'title' => 'Blueberry Muffin',
        'description'=> 'House made muffin with fresh blueberries topped with sugar.',
        'price' => 1.50
        ]);
        $product->save();

        $product = new \App\Product([
        'imagePath' => 'images/21.png',
        'title' => 'Chocolate Muffin',
        'description'=> 'House made muffin with layers of decadant chocolate topped with espresso sugar.',
        'price' => 2.25
        ]);
        $product->save();

        $product = new \App\Product([
        'imagePath' => 'images/22.png',
        'title' => 'Fresh Fruit Salad',
        'description'=> 'Seasonal selection of seasonal fresh fruits.',
        'price' => 3.00
        ]);
        $product->save();

        $product = new \App\Product([
        'imagePath' => 'images/23.png',
        'title' => 'Three Cheese Toastie',
        'description'=> 'Emmental, red leicester and cheddar cheese in a béchamel sauce, with caramelised onion chutney, on a cheese and parsley crumb bread.',
        'price' => 1.50
        ]);
        $product->save();

        $product = new \App\Product([
        'imagePath' => 'images/24.png',
        'title' => 'Heinz Beanz & Cheese Toastie',
        'description'=> 'Heinz baked beanz and mature Cheddar cheese in bar marked white bread.',
        'price' => 2.25
        ]);
        $product->save();

        $product = new \App\Product([
        'imagePath' => 'images/25.png',
        'title' => 'Chocolate & Hazelnut Shimmer Cake',
        'description'=> 'Triple layer dark choc sponge, with hazelnut & chocolate frosting, topped with hazelnuts, finished with dark chocolate curls & gold dusting.',
        'price' => 1.90
        ]);
        $product->save();

        $product = new \App\Product([
        'imagePath' => 'images/26.png',
        'title' => 'Banana and Pecan Loaf Cake',
        'description'=> 'A banana loaf topped with sliced bananas and pecans.',
        'price' => 1.80
        ]);
        $product->save();

        $product = new \App\Product([
        'imagePath' => 'images/27.png',
        'title' => 'Lotus Biscoff Cheezecake (VG)',
        'description'=> 'A vegan dessert with a biscoff biscuit base topped with a baked batter, finished with a layer of biscoff mix sprinkled with biscoff crumb.',
        'price' => 2.00
        ]);
        $product->save();

        $product = new \App\Product([
        'imagePath' => 'images/28.png',
        'title' => 'Full English Breakfast',
        'description'=> 'Served with 2 sausages, turkey rashers, 2 hash browns, 2 over easy eggs, beans, mushrooms, toast, butter and toasted tomato.',
        'price' => 5.99
        ]);
        $product->save();

        $product = new \App\Product([
        'imagePath' => 'images/29.png',
        'title' => 'Vegetarian Breakfast',
        'description'=> 'Served with 2 fried eggs, vegetarian sausage, hash browns, toasted tomatoes, mushrooms, baked beans with 2 slices of toast.',
        'price' => 5.50
        ]);
        $product->save();

        $product = new \App\Product([
        'imagePath' => 'images/30.png',
        'title' => 'Chicken Caeser Salad',
        'description'=> 'Grilled chicken on a bed of fresh romaine with caesar dressing, croutons and shaved parmesan.',
        'price' => 4.75
        ]);
        $product->save();
}
}
