<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\TypeKanji;

class TypeKanjiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeKanji::insert(
        [
            'name' => 'tượng hình',
            'description' => 'miêu tả kanji, liên tưởng kanji đến 1 hình ảnh nào đó',
        ],
        [
            'name' => 'chỉ sự',
            'description' => 'dùng các nét đơn giản để phát triển thành ý',
        ],
        [
            'name' => 'hội ý',
            'description' => 'một câu chuyện ',
        ],
        [
            'name' => 'hình thanh',
            'description' => 'chỉ ý và chỉ âm',
        ],
        [
            'name' => 'chuyển chú',
            'description' => 'cách chữ thuộc nhóm này được sinh ra từ CHỮ GỐC, sau đó thay đổi(trường chữ gốc và chữ thay đổi) ',
        ],
        [
            'name' => 'giả tá',
            'description' => 'chữ vay mượn',
        ]
    );
    }
}
