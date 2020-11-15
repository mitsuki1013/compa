<?php 

namespace App\SearchList;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SearchList
{

    public static function CheckSearch($data)
    {
        $values = [];

        $mans = DB::table('users');

        if (($data['location']) !== null) {
            $values[] = [
                'name' => 'location',
                'val' => $data['location']
            ];
        }
        if (($data['gender']) !== null) {
            $values[] = [
                'name' => 'gender',
                'val' => $data['gender']
            ];
        }
        if (($data['smoking']) !== null) {
            $values[] = [
                'name' => 'smoking',
                'val' => $data['smoking']
            ];
        }
        
        if (($data['sake']) !== null) {
            $values[] = [
                'name' => 'sake',
                'val' => $data['sake']
            ];
        }
        if (($data['tag_1']) !== null) {
            $values[] = [
                'name' => 'tag_1',
                'val' => $data['tag_1']
            ];
        }
        if (($data['tag_2']) !== null) {
            $values[] = [
                'name' => 'tag_2',
                'val' => $data['tag_2']
            ];
        }
        if (($data['tag_3']) !== null) {
            $values[] = [
                'name' => 'tag_3',
                'val' => $data['tag_3']
            ];
        }

        return $values;

    }

    public static function CheckSearchFuzzy($data)
    {
        $values = [];

        if (($data['number_people']) !== null) {
            $values[] = [
                'name' => 'number_people',
                'val' => $data['number_people']
            ];
        }

        if (($data['days']) !== null) {
            foreach ($data['days'] as $day) {
                $values[] = [
                    'name' => 'day',
                    'val' => $day
                ];
            }
        }

        if ($data['hobby'] !== null) {
            // 全角スペースを半角スペースに
            $search_split = mb_convert_kana($data['hobby'], 's');

            // 空白で区切る
            $search_split2 = preg_split('/[\s]+/', $search_split, -1, PREG_SPLIT_NO_EMPTY);

            // 単語をループで回す
            foreach ($search_split2 as $hobby) {
                $values[] = [
                    'name' => 'hobby',
                    'val' => $hobby
                ];
            }
        }

        if ($data['job'] !== null) {
            // 全角スペースを半角スペースに
            $search_split = mb_convert_kana($data['job'], 's');

            // 空白で区切る
            $search_split2 = preg_split('/[\s]+/', $search_split, -1, PREG_SPLIT_NO_EMPTY);

            // 単語をループで回す
            foreach ($search_split2 as $job) {
                $values[] = [
                    'name' => 'job',
                    'val' => $job
                ];
            }
        }

        return $values;
    }

}

?>