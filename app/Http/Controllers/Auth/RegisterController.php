<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\CheckForm\CheckForm;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\CreateProfileRequest;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'main/main';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * profile
     * CreateUserRequestクラスの展開（バリデーション）
     * 
     */
    public function profile(CreateUserRequest $request)
    {
        // 会員情報の取得
        $data = [
            'password' => Hash::make($request->input('password')),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'profile_img' => $request->input('profile_img'),
            'gender' => $request->input('gender'),
            'age' => $request->input('age'),
            'location' => $request->input('location'),
            'pr_comment' => $request->input('pr_comment'),
            'job' => $request->input('job'),
            'hobby' => $request->input('hobby'),
            'day' => $request->input('day'),
            'sake' => $request->input('sake'),
            'number_people' => $request->input('number_people'),
            'smoking' => $request->input('smoking'),
            'tag_1' => $request->input('tag_1'),
            'tag_2' => $request->input('tag_2'),
            'tag_3' => $request->input('tag_3'),
        ];
        
        return view('auth/profile', compact('data'));
    }

    /**
     * check
     *  CreateProfileRequestクラスの展開（バリデーション）
     * 
     */
    public function check(CreateProfileRequest $request) 
    {
        // CheckForm（valueや、DBに格納された値を文字列として表示するためのクラス）
        $check = new CheckForm;

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

            // デフォルト画像を設置
            $profile_img = 'no-img/no-image.png';
        }

        // $days（配列）を横一列の文字列に変換するための記述
        if (!empty($request->input('day'))) {
            $day = '';
            foreach ($request->input('day') as $value) {
                $day .= $value; 
            }
        } else {
            $day = '';
        }

        // 人数の表示をコントロールするための措置
        // 曖昧人数指定（例）6人〜5人 タイプの入力欄がいずれも空の場合
        if ($request->input('number_people_first') === null && $request->input('number_people_second') === null) {

            // 固定人数タイプを表示
            $number_people = CheckForm::CheckNumberPeople($request->input('number_people_single')); 

        // 曖昧人数指定タイプの入力欄のうち、一つでも記入があれば、それを表示
        } else {
            $number_people = CheckForm::CheckNumberPeople($request->input('number_people_first')) . '〜' . CheckForm::CheckNumberPeople($request->input('number_people_second'));
        }

        // profile.blade.phpで送信された情報を$data内で一括管理
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'pr_comment' => $request->get('pr_comment'),
            'profile_img' => $profile_img,
            'day' =>  $day,
            'job' =>  $request->get('job'),
            'hobby' =>  $request->get('hobby'),
            'gender' => $request->get('gender'),
            'age' => $request->get('age'),
            'location' => $request->get('location'),
            'number_people' => $number_people,
            'smoking' => $request->get('smoking'),
            'sake' => $request->get('sake'),
            'tag_1' => $request->get('tag_1'),
            'tag_2' => $request->get('tag_2'),
            'tag_3' => $request->get('tag_3'),
        ];
        
        return view('auth/check', compact('data', 'request', 'check'));
    }

    /**
     * store
     * 
     * 
     */
    public function store(Request $request)
    {
        // Userコントローラーのインスタンス化
        $user = new User;

        // それぞれの値をusersテーブルへ挿入
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
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

        // 値の挿入後、main画面へリダイレクト
        return redirect('main/main');
    }
}

