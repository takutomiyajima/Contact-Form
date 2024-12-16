<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->truncate(); 

        Contact::insert([
            [
                'category_id' => 1,
                'first_name' => '山田',
                'last_name' => '太郎',
                'gender' => 1,
                'email' => 'yamada_taro@example.com',
                'tell' => '08012345678',
                'address' => '東京都新宿区1-1-1',
                'building' => '新宿ビル101',
                'detail' => '商品の交換について',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 2,
                'first_name' => '佐藤',
                'last_name' => '花子',
                'gender' => 2,
                'email' => 'sato_hanako@example.com',
                'tell' => '08023456789',
                'address' => '大阪府大阪市中央区2-2-2',
                'building' => '大阪タワー203',
                'detail' => '商品のお届けについて',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'first_name' => '鈴木',
                'last_name' => '次郎',
                'gender' => 1,
                'email' => 'suzuki_jiro@example.com',
                'tell' => '09034567890',
                'address' => '福岡県福岡市博多区3-3-3',
                'building' => '博多ビル303',
                'detail' => '商品トラブルについて',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'first_name' => '高橋',
                'last_name' => '三郎',
                'gender' => 1,
                'email' => 'takahashi_saburo@example.com',
                'tell' => '07045678901',
                'address' => '北海道札幌市北区4-4-4',
                'building' => '札幌マンション404',
                'detail' => 'お問い合わせについて',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 5,
                'first_name' => '田中',
                'last_name' => '四郎',
                'gender' => 3,
                'email' => 'tanaka_shiro@example.com',
                'tell' => '05056789012',
                'address' => '愛知県名古屋市中区5-5-5',
                'building' => '名古屋プラザ505',
                'detail' => '返品について',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}

