<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Kanji;

class UserKanjiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kanji::insert(
        [
           'content' => '玉',
           'sino_vn_reading' => 'NGỌC',
           'meaning' => 'đá quý',
           'type_kanji_id' => '1',
           'on_pronun' => 'ぎょく',
           'kun_pronun' => 'たま',
           'description' => 'Mô tả hình ảnh một chuỗi hạt, dấu chấm thêm vào để phân biệt với chữ VƯƠNG(王)',
        ],
        [
            'content' => '宝',
           'sino_vn_reading' => 'BẢO',
           'meaning' => 'bảo vật',
           'type_kanji_id' => '3',
           'on_pronun' => 'ほう',
           'kun_pronun' => 'たから',
           'description' => 'Bộ Ngọc ở dưới bộ Miên thể hiện một vật quý được cất giấu kỹ càng, cẩn mật. Đó là châu báu',
        ],
        [
            'content' => '国',
           'sino_vn_reading' => 'QUỐC',
           'meaning' => 'đất nước',
           'type_kanji_id' => '3',
           'on_pronun' => 'こく',
           'kun_pronun' => 'くに',
           'description' => 'Vua phải là bộ Vương nhưng cách viết thay bằng bộ Ngọc ám chỉ Vua là nhân vật quan trọng',
        ],
        [
            'content' => '歌',
           'sino_vn_reading' => 'CA',
           'meaning' => 'ca hát',
           'type_kanji_id' => '4',
           'on_pronun' => 'か',
           'kun_pronun' => 'うた・う',
           'description' => 'Bộ Khuyết ám chỉ cái miệng há to ra để hát',
        ],
        [
            'content' => '楽',
           'sino_vn_reading' => 'LẠC/NHẠC',
           'meaning' => 'vui vẻ',
           'type_kanji_id' => '3',
           'on_pronun' => 'がく；らく',
           'kun_pronun' => 'たの・しい',
           'description' => 'Có bộ Mịch ám chỉ sợi tơ trắng, bộ Mộc ám chỉ đến các loại cây sồi làm thức ăn cho dâu tằm. Khi người nuôi tằm lấy được cây sồi sẽ cảm thấy vui vẻ, từ đó sinh ra chữ này.',
        ],
        [
            'content' => '軟',
           'sino_vn_reading' => 'NHUYỄN',
           'meaning' => 'mềm',
           'type_kanji_id' => '3',
           'on_pronun' => 'なん',
           'kun_pronun' => 'やわ・らかい',
           'description' => 'Bộ Xa không thể thiếu 欠 những miếng bọc để người ngồi trong cảm thấy mềm mại hơn, MỀM MẠI hơn khi di chuyển.',
        ],
        [
            'content' => '青',
           'sino_vn_reading' => 'THANH',
           'meaning' => 'xanh',
           'type_kanji_id' => '3',
           'on_pronun' => 'せい；しょう',
           'kun_pronun' => 'あお・い',
           'description' => 'Những cái cây mọc lên 生 xung quanh cái giếng, thể hiện sự xanh tươi.',
        ],
        [
            'content' => '会',
           'sino_vn_reading' => 'HỘI',
           'meaning' => 'gặp',
           'type_kanji_id' => '3',
           'on_pronun' => 'かい',
           'kun_pronun' => 'あ・う',
           'description' => '',
        ],
        [
            'content' => '会',
           'sino_vn_reading' => 'HỘI',
           'meaning' => 'gặp',
           'type_kanji_id' => '3',
           'on_pronun' => 'かい',
           'kun_pronun' => 'あ・う',
           'description' => '',
        ],
        [
            'content' => '会',
           'sino_vn_reading' => 'HỘI',
           'meaning' => 'gặp',
           'type_kanji_id' => '3',
           'on_pronun' => 'かい',
           'kun_pronun' => 'あ・う',
           'description' => '',
        ],
        [
            'content' => '会',
           'sino_vn_reading' => 'HỘI',
           'meaning' => 'gặp',
           'type_kanji_id' => '3',
           'on_pronun' => 'かい',
           'kun_pronun' => 'あ・う',
           'description' => '',
        ],
        [
            'content' => '会',
           'sino_vn_reading' => 'HỘI',
           'meaning' => 'gặp',
           'type_kanji_id' => '3',
           'on_pronun' => 'かい',
           'kun_pronun' => 'あ・う',
           'description' => '',
        ],
        [
            'content' => '会',
           'sino_vn_reading' => 'HỘI',
           'meaning' => 'gặp',
           'type_kanji_id' => '3',
           'on_pronun' => 'かい',
           'kun_pronun' => 'あ・う',
           'description' => '',
        ],
        [
            'content' => '会',
           'sino_vn_reading' => 'HỘI',
           'meaning' => 'gặp',
           'type_kanji_id' => '3',
           'on_pronun' => 'かい',
           'kun_pronun' => 'あ・う',
           'description' => '',
        ],
    );
    }
}
