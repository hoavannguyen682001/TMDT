<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'ThanhThao',
                'email' => 'thanhthao@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 2,
                'name' => 'VanHoa',
                'email' => 'vanhoa@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 3,
                'name' => 'Shane Lynch',
                'email' => 'ShaneLynch@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-0.png',
                'level' => 1,
                'description' => 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo'
            ],
            [
                'id' => 4,
                'name' => 'Brandon Kelley',
                'email' => 'BrandonKelley@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-1.png',
                'level' => 1,
                'description' => null,
            ],
            [
                'id' => 5,
                'name' => 'Roy Banks',
                'email' => 'RoyBanks@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-2.png',
                'level' => 1,
                'description' => null,
            ],
        ]);

        DB::table('blogs')->insert([
            [
                'user_id' => 3,
                'title' => 'Bạn đã phân biệt được mỹ phẩm và dược phẩm?',
                'image' => 'blog-1.jpg',
                'category' => 'LÀM ĐẸP',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Phương pháp giảm mụn hiệu quả cho phái đẹp',
                'image' => 'blog-2.jpg',
                'category' => 'LÀM ĐẸP',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Tìm hiểu các bước chăm sóc da thật hiệu quả',
                'image' => 'blog-3.jpg',
                'category' => 'LÀM ĐẸP',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Các quy trình chăm sóc da cơ bản cho bạn mới',
                'image' => 'blog-4.jpg',
                'category' => 'LÀM ĐẸP',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Làm sạch sâu và phục hồi mái tóc của bạn',
                'image' => 'blog-5.jpg',
                'category' => 'Tóc xinh',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Làn da trắng sáng giúp bạn tự tin và bí quyết',
                'image' => 'blog-6.jpg',
                'category' => 'Làm đẹp',
                'content' => '',
            ],
        ]);

        DB::table('brands')->insert([
            [
                'name' => 'Innisfee',
            ],
            [
                'name' => 'LOreal',
            ],
            [
                'name' => 'Eveline',
            ],
            [
                'name' => 'Some By Me',
            ],
        ]);

        DB::table('product_categories')->insert([
            [
                'name' => 'Lớn',
            ],
            [
                'name' => 'Nhỏ',
            ],
            [
                'name' => 'Gói',
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'Srm Trà xanh Innisfee',
                'description' => 'Sữa Rửa Mặt Chiết Xuất Từ Trà Xanh Innisfree Green Tea Foam Cleanser là sữa rửa mặt trà xanh thuộc thương hiệu Innisfree, thích hợp cho da bị kích ứng với ô nhiễm môi trường, da có mụn nhưng không quá khẩn cấp, có khả năng làm sạch sâu',
                'content' => '',
                'price' => 160.000,
                'qty' => 20,
                'discount' => 495,
                'weight' => 120,
                'sku' => '00012',
                'featured' => true,
                'tag' => 'Chăm sóc da',
            ],
            [
                'id' => 2,
                'brand_id' => 2,
                'product_category_id' => 2,
                'name' => 'Huyết thanh dưỡng mi Eveline',
                'description' => 'Dưỡng mi eveline 8in1 với chiết xuất dầu argan và axit hyaluronic giúp thẩm thấu vào cấu trúc lông mi, kích thích sự tăng trưởng, làm dày và dài mi, tái tạo chống gãy rụng, củng cố lông mi từ gốc tới ngọn, cho bạn đôi mắt đẹp quyến rũ.',
                'content' => '',
                'price' => 65.000,
                'qty' => 30,
                'discount' => 10,
                'weight' => 15,
                'sku' => '00013',
                'featured' => true,
                'tag' => 'Trang điểm',
            ],
            [
                'id' => 3,
                'brand_id' => 3,
                'product_category_id' => 2,
                'name' => 'Kem chống nắng Innisfee',
                'description' => ' Innisfree Intensive Sunscreen được chiết xuất chính từ dầu hướng dương và phức hợp trà xanh Jeju cho khả năng chống nắng tự nhiên.Kem chống nắng hoàn toàn không chứa các chất phụ gia có thể gây hại cho da như: Không nguồn gốc động vật, không dầu khoáng, không hương nhân tạo, không thuốc nhuộm tổng hợp, không Talc.',
                'content' => '',
                'price' => 250.000,
                'qty' => 50,
                'discount' => 5,
                'weight' => 150,
                'sku' => '00014',
                'featured' => true,
                'tag' => 'Chăm sóc da',
            ],
            [
                'id' => 4,
                'brand_id' => 4,
                'product_category_id' => 1,
                'name' => 'Nước tẩy trang LOreal',
                'description' => 'Nước Tẩy Trang Tươi Mát 3 In 1 LOreal Paris Micellar Water mang đến các tẩy trang, làm sạch, giữ ẩm và dưỡng mềm da đồng thời chỉ trong một sản phẩm. Sản phẩm giúp lấy đi sạch cặn trang điểm nhưng không làm khô da. Hơn thế, thành phần an toàn và công nghệ tiên tiến giúp da giữ nước, thông thoáng, mềm mượt chỉ trong một bước.',
                'content' => '',
                'price' => 120.000,
                'qty' => 50,
                'discount' => 5,
                'weight' => 400,
                'sku' => '00015',
                'featured' => true,
                'tag' => 'Chăm sóc da',
            ],
            [
                'id' => 5,
                'brand_id' => 1,
                'product_category_id' => 3,
                'name' => "Kem chống nắng L'Oreal",
                'description' => 'Kem Chống Nắng LOreal Paris UV Perfect Aqua Essence SPF50+ PA++++ 30ml bảo vệ da khỏi tác hại của tia UV với chỉ số chống nắng cao SPF50+ PA++++ và màng lọc quang phổ rộng MeroxylTM SX/XL bảo vệ da suốt 12h, giúp ngăn ngừa đốm nâu, vết thâm nám, sạm da, lão hóa..',
                'content' => '',
                'price' => 129.000,
                'qty' => 20,
                'discount' => 10,
                'weight' => 120,
                'sku' => '00016',
                'featured' => false,
                'tag' => 'Trang điểm',
            ],
            [
                'id' => 6,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'Combo Trị mụn SomeByMe',
                'description' => 'Bộ trị mụn Some By Mi AHA-BHA-PHA 30 Days Miracle Solution 4-Step Kit-Edition thuộc dòng sản phẩm điều trị mụn phù hợp với những bạn thường xuyên đi du lịch hoặc đang muốn trải nghiệm sản phẩm trị mụn của nhà Some By Mi.
Với thành phần nổi bật là phức hợp AHA-BHA-PHA, sản phẩm giúp tẩy nhẹ nhàng tế bào chết, hỗ trợ da sạch thoáng hơn. Hơn nữa với chiết xuất rau má giúp kháng viêm, giảm sưng các nốt mụn nhanh chóng.',
                'content' => '',
                'price' => 369.000,
                'qty' => 130,
                'discount' => 10,
                'weight' => 400,
                'sku' => null,
                'featured' => true,
                'tag' => 'Serum và sản phẩm đặc trị',
            ],
            [
                'id' => 7,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Serum ốc sên trị mụn',
                'description' => 'ới thành phần chính là 880.000ppm tinh chất Ốc sên và 10.000ppm hợp chất độc quyền TRUECICA của Some By Mi, tinh chất mang đến nhiều khả năng vượt trội cho làn da: Phục hồi da, làm sáng và mờ vết thâm',
                'content' => null,
                'price' => 254.000,
                'qty' => 20,
                'discount' => 5,
                'weight' => 50,
                'sku' => '00134',
                'featured' => true,
                'tag' => 'Serum và sản phẩm đặc trị',
            ],
            [
                'id' => 8,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Toner Eveline',
                'description' => 'Theo làn sóng dưỡng da bằng "acid" nổi rần rần hiện tại (và chắc chắn là trong thời gian dài tới) thì toner acid đang là 1 trong những sản phẩm được nhiều người để ý nhất vì tác dụng dịu nhẹ cũng như ko gây kích ứng da quá nhiều như peel hay serum các bác nhỉ.  Em toner acid mới nhà Eveline đợt này đáp ứng đủ nhu cầu cho 1 em toner acid giá phải chăng, lại còn được các BB Nga review là bản dupe của toner Pixi (t chưa dùng Pixi nên ko chắc có đúng ko nhưng 5 người thì 3 trog số beauty blogger so sánh 2 em này với nhau rồi',
                'content' => null,
                'price' => 155.000,
                'qty' => 20,
                'discount' => 5,
                'weight' => 400,
                'sku' => '00145',
                'featured' => true,
                'tag' => 'Chăm sóc da',
            ],
            [
                'id' => 9,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Kem dưỡng ẩm Eveline',
                'description' => 'Kem dưỡng trắng da Eveline Extra Soft Whitening làm trắng da và cân bằng độ ẩm cho da.
Kem dưỡng trắng da Eveline Extra Soft Whitening là sản phẩm nổi tiếng của hãng mỹ phẩm danh tiếng Eveline đến từ Ba Lan, có thể dùng cho da mặt và toàn thân với độ thân thiện cực cao có thể dùng được cho mọi loại da.',
                'content' => null,
                'price' => 99.000,
                'qty' => 20,
                'discount' => 5,
                'weight' => 50,
                'sku' => '00123',
                'featured' => true,
                'tag' => 'Chăm sóc da',
            ],
        ]);

        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => 'product-1.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-1.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-2.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9.jpg',
            ],
        ]);

        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'color' => 'Green',
                'size' => 'Lớn',
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'color' => 'blue',
                'size' => 'Nhỏ',
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'color' => 'red',
                'size' => 'Lớn',
                'qty' => 5,
            ],
            [
                'product_id' => 4,
                'color' => 'blue',
                'size' => 'Nhỏ',
                'qty' => 5,
            ],
            [
                'product_id' => 5,
                'color' => 'blue',
                'size' => 'Nhỏ',
                'qty' => 0,
            ],
            [
                'product_id' => 6,
                'color' => 'Green',
                'size' => 'Lớn',
                'qty' => 0,
            ],
        ]);

        DB::table('product_comments')->insert([
            [
                'product_id' => 5,
                'user_id' => 1,
                'email' => 'thanhthao@gmail.com',
                'name' => 'ThanhThao',
                'messages' => 'Sản phẩm tuyệt vời!',
                'rating' => 4,
            ],
            [
                'product_id' => 1,
                'user_id' => 2,
                'email' => 'vanhoa@gmail.com',
                'name' => 'Van Hoa',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
        ]);
    }
}

