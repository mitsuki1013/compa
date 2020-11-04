<?php

namespace App\CheckForm;

class CheckForm
{

    public static function checkGender($data)
    {
        if ($data !== null) {
            if ($data == '0') {
                $gender = '男性';
            }
            if ($data == '1') {
                $gender = '女性';
            }

            return $gender;
        }
        
    }

    public static function checkAge($data) 
    {
        if ($data !== null) {

            if ($data == '1') {
            $age = '20歳';
            }
            if ($data == '2') {
                $age = '21歳';
            }
            if ($data == '3') {
                $age = '22歳';
            }
            if ($data == '4') {
                $age = '23歳';
            }
            if ($data == '5') {
                $age = '24歳';
            }
            if ($data == '6') {
                $age = '25歳';
            }
            if ($data == '7') {
                $age = '26歳';
            }
            if ($data == '8') {
                $age = '27歳';
            }
            if ($data == '9') {
                $age = '28歳';
            }
            if ($data == '10') {
                $age = '29歳';
            }
            if ($data == '11') {
                $age = '30歳';
            }
            if ($data == '12') {
                $age = '31歳';
            }
            if ($data == '13') {
                $age = '32歳';
            }
            if ($data == '14') {
                $age = '33歳';
            }
            if ($data == '15') {
                $age = '34歳';
            }
            if ($data == '16') {
                $age = '35歳';
            }
            if ($data == '17') {
                $age = '36歳';
            }
            if ($data == '18') {
                $age = '37歳';
            }
            if ($data == '19') {
                $age = '38歳';
            }
            if ($data == '20') {
                $age = '39歳';
            }
            if ($data == '21') {
                $age = '40歳';
            }
            if ($data == '22') {
                $age = '41歳';
            }
            if ($data == '23') {
                $age = '42歳';
            }
            if ($data == '24') {
                $age = '43歳';
            }
            if ($data == '25') {
                $age = '44歳';
            }
            if ($data == '26') {
                $age = '45歳';
            }
            if ($data == '27') {
                $age = '46歳';
            }
            if ($data == '28') {
                $age = '47歳';
            }
            if ($data == '29') {
                $age = '48歳';
            }
            if ($data == '30') {
                $age = '49歳';
            }
            if ($data == '31') {
                $age = '50歳';
            }
            if ($data == '32') {
                $age = '51歳';
            }
            if ($data == '33') {
                $age = '52歳';
            }
            if ($data == '34') {
                $age = '53歳';
            }
            if ($data == '35') {
                $age = '54歳';
            }
            if ($data == '36') {
                $age = '55歳';
            }
            if ($data == '37') {
                $age = '56歳';
            }
            if ($data == '38') {
                $age = '57歳';
            }
            if ($data == '39') {
                $age = '58歳';
            }
            if ($data == '40') {
                $age = '59歳';
            }
            if ($data == '41') {
                $age = '60歳以上';
            }

            return $age;
        }
        
        
    }

    public static function checkLocation($data) 
    {
        if ($data !== null) {
            if ($data == '1') {
                $location = '北海道';
            }
            if ($data == '2') {
                $location = '青森';
            }
            if ($data == '3') {
                $location = '岩手';
            }
            if ($data == '4') {
                $location = '宮城';
            }
            if ($data == '5') {
                $location = '秋田';
            }
            if ($data == '6') {
                $location = '山形';
            }
            if ($data == '7') {
                $location = '福島';
            }
            if ($data == '8') {
                $location = '愛知';
            }
            if ($data == '9') {
                $location = '岐阜';
            }
            if ($data == '10') {
                $location = '静岡';
            }
            if ($data == '11') {
                $location = '三重';
            }
            if ($data == '12') {
                $location = '富山';
            }
            if ($data == '13') {
                $location = '石川';
            }
            if ($data == '14') {
                $location = '福井';
            }
            if ($data == '15') {
                $location = '新潟';
            }
            if ($data == '16') {
                $location = '長野';
            }
            if ($data == '17') {
                $location = '東京';
            }
            if ($data == '18') {
                $location = '神奈川';
            }
            if ($data == '19') {
                $location = '埼玉';
            }
            if ($data == '20') {
                $location = '千葉';
            }
            if ($data == '21') {
                $location = '茨城';
            }
            if ($data == '22') {
                $location = '栃木';
            }
            if ($data == '23') {
                $location = '群馬';
            }
            if ($data == '24') {
                $location = '山梨';
            }
            if ($data == '25') {
                $location = '大阪';
            }
            if ($data == '26') {
                $location = '兵庫';
            }
            if ($data == '27') {
                $location = '京都';
            }
            if ($data == '28') {
                $location = '奈良';
            }
            if ($data == '29') {
                $location = '滋賀';
            }
            if ($data == '30') {
                $location = '和歌山';
            }
            if ($data == '31') {
                $location = '岡山';
            }
            if ($data == '32') {
                $location = '広島';
            }
            if ($data == '33') {
                $location = '鳥取';
            }
            if ($data == '34') {
                $location = '島根';
            }
            if ($data == '35') {
                $location = '山口';
            }
            if ($data == '36') {
                $location = '徳島';
            }
            if ($data == '37') {
                $location = '香川';
            }
            if ($data == '38') {
                $location = '高知';
            }
            if ($data == '39') {
                $location = '愛媛';
            }
            if ($data == '40') {
                $location = '福岡';
            }
            if ($data == '41') {
                $location = '佐賀';
            }
            if ($data == '42') {
                $location = '大分';
            }
            if ($data == '43') {
                $location = '長崎';
            }
            if ($data == '44') {
                $location = '熊本';
            }
            if ($data == '45') {
                $location = '宮崎';
            }
            if ($data == '46') {
                $location = '鹿児島';
            }
            if ($data == '47') {
                $location = '沖縄';
            }

            return $location;
        }
        
    }

    public static function checkNumberPeople($data)
    {
        if ($data !== null) {
            if ($data == '1') {
                $number_people = '1名';
            }
            if ($data == '2') {
                $number_people = '2名';
            }
            if ($data == '3') {
                $number_people = '3名';
            }
            if ($data == '4') {
                $number_people = '4名';
            }
            if ($data == '5') {
                $number_people = '5名';
            }
            if ($data == '6') {
                $number_people = '6名';
            }
            if ($data == '7') {
                $number_people = '7名';
            }
            if ($data == '8') {
                $number_people = '8名';
            }
            if ($data == '9') {
                $number_people = '9名';
            }
            if ($data == '10') {
                $number_people = '10名';
            }
            if ($data == '11') {
                $number_people = '10名以上';
            }

            return $number_people;
        }
        
    }

    public static function checkSmoking($data)
    {

        if ($data !== null) {

            if ($data == '0') {
                $smoking = '吸う';
            }
            if ($data == '1') {
                $smoking = '吸わない';
            }

            return $smoking;
        }
        
    }

    public static function checkSake($data)
    {
        if ($data !== null) {

            if ($data == '0') {
                $sake = '飲む';
            }
            if ($data == '1') {
                $sake = '飲まない';
            }
            if ($data == '2') {
                $sake = 'お付き合い程度';
            }

            return $sake;
        }
        
    }

    public static function checkTag_1($data) 
    {
        if ($data !== null) {

            if ($data == '1') {
                $tag_1 = 'おしとやか系';
            }
            if ($data == '2') {
                $tag_1 = '綺麗め系';
            }
            if ($data == '3') {
                $tag_1 = '可愛い系';
            }
            if ($data == '4') {
                $tag_1 = '真面目系';
            }
            if ($data == '5') {
                $tag_1 = 'ギャル系';
            }
            if ($data == '6') {
                $tag_1 = '地雷系';
            }
            if ($data == '7') {
                $tag_1 = 'イケメン系';
            }
            if ($data == '8') {
                $tag_1 = 'ダンディー系';
            }
            if ($data == '9') {
                $tag_1 = '塩顔系';
            }
            if ($data == '10') {
                $tag_1 = 'ソース顔系';
            }
            if ($data == '11') {
                $tag_1 = 'ゴリゴリ系';
            }
            if ($data == '12') {
                $tag_1 = '高収入系';
            }

            return $tag_1;
        }
    }

    public static function checkTag_2($data) 
    {
        if ($data !== null) {

            if ($data == '1') {
                $tag_2 = "20代〜30代";
            }
            if ($data == '2') {
                $tag_2 = "30代〜40代";
            }
            if ($data == '3') {
                $tag_2 = "40代〜50代";
            }
            if ($data == '4') {
                $tag_2 = "50代〜60代";
            }
            if ($data == '5') {
                $tag_2 = "60代〜";
            }

            return $tag_2;
        }
    }

    public static function checkTag_3($data)
    {
        if ($data !== null) {

            if ($data == '1') {
                $tag_3 = '恋人探し';
            }
            if ($data == '2') {
                $tag_3 = '結婚相手探し';
            }
            if ($data == '3') {
                $tag_3 = '友達探し';
            }
            if ($data == '4') {
                $tag_3 = '遊び相手探し';
            }
            if ($data == '5') {
                $tag_3 = 'その他';
            }

            return $tag_3;
        }
    }
}
?>