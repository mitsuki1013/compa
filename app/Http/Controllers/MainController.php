<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\CheckForm\CheckForm;
use App\SearchList\SearchList;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;

class MainController extends Controller
{
    //
    public function main()
    {
        return view('main.main');
    }

    /**
     * main.location1
     * 
     * 
     */
    public function location(Request $request)
    {

        $all_user = new User;

        // CheckForm（valueや、DBに格納された値を文字列として表示するためのクラス）
        $check = new CheckForm;

        // authユーザー情報を取得
        $user = Auth::user();

        // SearchList（ユーザー検索で取得した値を「key」と「value」に分けて配列化）
        $searchList = new SearchList;
        
        // フォームリクエストの値を取得し、配列でまとめる
        $data = [
            'main_location' => $request->input('main_location'),
            'location' => $request->input('location'),
            'gender' => $request->input('gender'),
            'hobby' => $request->input('hobby'),
            'job' => $request->input('job'),
            'smoking' => $request->input('smoking'),
            'number_people' => $request->input('number_people'),
            'days' => $request->input('day'),
            'sake' => $request->input('sake'),
            'tag_1' => $request->input('tag_1'),
            'tag_2' => $request->input('tag_2'),
            'tag_3' => $request->input('tag_3'),
        ];

        // 関東のデータをクエリビルダで選出
        if ($data['main_location'] == '1') {
            $users = DB::table('users')
            ->where('location', '>=', 17)
            ->where('location', '<=', 24);
        }
        if ($data['main_location'] == '2') {
            $users = DB::table('users')
            ->where('location', '>=', 25)
            ->where('location', '<=', 30);
        }
        if ($data['main_location'] == '3') {
            $users = DB::table('users')
            ->where('location', '>=', 8)
            ->where('location', '<=', 16);
        }
        if ($data['main_location'] == '4') {
            $users = DB::table('users')
            ->where('location', '>=', 40)
            ->where('location', '<=', 47);
        }
        if ($data['main_location'] == '5') {
            $users = DB::table('users')
            ->where('location', '>=', 1)
            ->where('location', '<=', 7);
        }
        if ($data['main_location'] == '6') {
            $users = DB::table('users')
            ->where('location', '>=', 31)
            ->where('location', '<=', 39);
        }
        

        // 男女未選択の際、ユーザーが男の場合->デフォルトで女を表示
        if ($data['gender'] === null && $user->gender === 0) {
            $users->where('gender', '=', 1);
        }
        // 男女未選択の際、ユーザーが女の場合->デフォルトで男を表示
        if ($data['gender'] === null && $user->gender === 1) {
            $users->where('gender', '=',  0);
        }
        
        // フォームで入力したデータをSearchListインスタンスのCheckSearchメソッド引数に挿入
        $values = $searchList->CheckSearch($data);
        $valuesFuzzy = $searchList->CheckSearchFuzzy($data);

        // CheckSearchメソッドによってフォームから送信されたそれぞれのデータが連想配列化され、
        // ループで回す
        foreach ($values as $value) {
            $users->where($value['name'], '=', $value['val']);
        }
        foreach ($valuesFuzzy as $value) {
            $users->where($value['name'], 'like', '%' . $value['val'] . '%');
        }
        // SearchListクラスを作成することで、コントローラの完結、明瞭化
        
        // ランダムで取得
        $users = $users->inRandomOrder()->simplePaginate(15);


        return view('main.location', compact('users', 'check', 'data', 'all_user'));
    }

    // お気に入り
    public function favorite($id)
    {
        $user = new User;
        $favoriter = $user::find(Auth::id());
        // お気に入りしているか
        $is_favoriting = $favoriter->isFavoriting($id);
        if(!$is_favoriting) {
            // お気に入りしていなければお気に入りする
            $favoriter->favorite($id);
            return back();
        }

        if($is_favoriting) {
        // お気に入りしていればお気に入りを解除する
        $favoriter->unFavorite($id);
        return back();
        }
    }
}
