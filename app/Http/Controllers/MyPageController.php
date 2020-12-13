<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CheckForm\CheckForm;
use App\Models\User;
use App\Models\Chat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\CreateProfileRequest;

class MyPageController extends Controller
{
    //
    /**
     * 
     * MyPageController@my_page
     * 
     */
    public function my_page(Request $request)
    {
        $check = new CheckForm;

        $user = Auth::user();

        $all_user = new User;

        $value = $request->input('users');

        // お気に入りしている人を取得
        if (empty($value) || $value === '0') {
            $query = 
            $user->favorites();
        }

        // お気に入りしてくれている人を取得
        if (!empty($value) && $value === '1') {
            $query = 
            $user->favoriters();
        }

        // マッチした人を取得
        if (!empty($value) && $value === '2' || $value === '3') {
            // (詳細)
            // 一度お気に入りしてくれている人をfavoriters_usersで取得
            $favoriters_users = 
            $user->favoriters()->get();

            // お気に入りした人の中から自分のことをお気に入りしてくれている人のみを取得する記述
            $query = 
            $user->favorites();
            $i = 0;

            if ($favoriters_users->isEmpty()) {
                $query->where('favorited_id', '=', 0);
            } else {
                foreach ($favoriters_users as $favoriters_user) {
                    // 二行目からorWhere()でループするようにメソッドチェーンを設定
                    $where = (!$i) ? 'where' : 'orWhere';
                    $i++;
                    // ここでお気に入りした人の中から自分のことをお気に入りしてくれている人のみを取得
                    $query
                    ->$where('favorited_id', '=', $favoriters_user->id)
                    ->where('favoriting_id', '=', $user->id);
                }
            }            
        }

        $users = $query->get();


        // チャットページ専用
        if (!empty($value) && $value === '3') {
            // (詳細)
            // 一度お気に入りしてくれている人をfavoriters_usersで取得
            $favoriters_users = 
            $user->favoriters()->get();

            // お気に入りした人の中から自分のことをお気に入りしてくれている人のみを取得する記述
            $query = 
            $user->favorites();
            $i = 0;

            if ($favoriters_users->isEmpty()) {
                $query->where('favorited_id', '=', 0);
            } else {
                foreach ($favoriters_users as $favoriters_user) {
                    // 二行目からorWhere()でループするようにメソッドチェーンを設定
                    $where = (!$i) ? 'where' : 'orWhere';
                    $i++;
                    // ここでお気に入りした人の中から自分のことをお気に入りしてくれている人のみを取得
                    $query
                    ->$where('favorited_id', '=', $favoriters_user->id)
                    ->where('favoriting_id', '=', $user->id);
                }
            }            
        }

        // チャット可能なユーザーの取得
        $chat_users = $query->get();

        return view('my_page.my_page', compact('user', 'all_user', 'check', 'users', 'chat_users', 'request'));
    }

    /**
     * 
     * MyPageController@edit
     * 
     */
    public function edit(Request $request)
    {
        $check = new CheckForm;

        $user = Auth::user();

        // 参加人数に'〜'が含まれていたら、'〜'を区切りに配列化
        if (preg_match('/〜/',$user->number_people)) {
            $people_array = explode('〜', $user->number_people);
        } else {

            // 生成した配列をpeople_arrayとして取得
            $people_array = $user->number_people;
        }

        return view('my_page.edit', compact('user', 'people_array'));
    }

    /**
     * 
     * MyPageController@preview
     * 
     */
    public function preview(CreateProfileRequest $request)
    {

        $check = new CheckForm;

        $user = Auth::user();

        // $days（配列）を横一列の文字列に変換するための記述
        if (!empty($request->input('day'))) {
            $day = '';
            foreach ($request->input('day') as $value) {
                $day .= $value; 
            }
        } else {
            $day = '';
        }

        // ファイルアップロードの処理
        // ファイルがアップロードされたら
        if ($imgFile = $request->file('profile_img')) {

            // getClientOriginalName()インスタンスで固有のファイル名を取得
            $img_name = $imgFile->getClientOriginalName();

            // 作成したときのtimestampとファイルの名前を組み合わせる（ファイル名の重複をなくすため）
            $fileName = time() . $img_name;
            // アップロードしたファイルをpublic/profile_img内に保存
            $profile_img = $imgFile->storeAs('public/profile_img', $fileName);
            // 読み込みファイルは、storageディレクトリになるので、public/->storage/に変換
            $profile_img = str_replace('public/', 'storage/', $profile_img);
        }

        // ファイルのアップロードがされなかった場合
        if ($imgFile = $request->file('profile_img') === null) {

            // 元々の画像をセット
            $profile_img = $user->profile_img;
        }

        // 人数の表示をコントロールするための措置
        // 曖昧人数指定タイプの入力欄がいずれも空の場合
        if ($request->input('number_people_first') === null && $request->input('number_people_second') === null) {

            // 固定人数タイプを表示
            $number_people = CheckForm::CheckNumberPeople($request->input('number_people_single')); 

        // 曖昧人数指定タイプの入力欄のうち、一つでも記入があれば、それを表示
        } else {
            $number_people = CheckForm::CheckNumberPeople($request->input('number_people_first')) . '〜' . CheckForm::CheckNumberPeople($request->input('number_people_second'));
        }

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'profile_img' => $profile_img,
            'gender' => $request->input('gender'),
            'age' => $request->input('age'),
            'pr_comment' => $request->input('pr_comment'),
            'location' => $request->input('location'),
            'hobby' => $request->input('hobby'),
            'job' => $request->input('job'),
            'smoking' => $request->input('smoking'),
            'number_people' => $number_people,
            'day' => $day,
            'sake' => $request->input('sake'),
            'tag_1' => $request->input('tag_1'),
            'tag_2' => $request->input('tag_2'),
            'tag_3' => $request->input('tag_3'),
        ];

        return view('my_page.preview', compact('data', 'check'));
    }

    /**
     * 
     * MyPageController@update
     * 
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        // 変更したデータの保存
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->profile_img = $request->input('profile_img');
        $user->gender = $request->input('gender');
        $user->age = $request->input('age');
        $user->pr_comment = $request->input('pr_comment');
        $user->location = $request->input('location');
        $user->hobby = $request->input('hobby');
        $user->job = $request->input('job');
        $user->smoking = $request->input('smoking');
        $user->number_people = $request->input('number_people');
        $user->day = $request->input('day');
        $user->sake = $request->input('sake');
        $user->tag_1 = $request->input('tag_1');
        $user->tag_2 = $request->input('tag_2');
        $user->tag_3 = $request->input('tag_3');

        $user->save();

        return redirect('my_page/my_page');
    }
    
    public function delete(Request $request)
    {
        User::find($request->id)->delete();
        return redirect('');
    }
}
