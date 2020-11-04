<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chat;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    //
    /**
     * chat
     * 
     * 
     */
    public function chat($id) {

        // chatテーブルの呼び出し
        $chat = new Chat;

        $all_user = new User;

        // other_id（二人称の呼び出し）
        $other_id = $all_user::find($id);

        $user_id = Auth::user();

        // チャットルーム内の一人称 & 二人称のみのメッセージの取得
        $chat_messages = $chat
        ->where('other_id', $user_id->id)
        ->where('user_id', $other_id->id)
        ->orWhere('other_id', $other_id->id)
        ->where('user_id', $user_id->id)

        ->get();

        // マッチしていない場合（お気に入りしていない場合、または、お気に入りされていない場合）は、チャットルームには入れない
        if (empty($user_id->isFavoriting($other_id->id)) || empty($user_id->isFavorited($other_id->id))) {
            
            // マッチしていない場合は、マイページへリダイレクト
            return redirect('my_page/my_page');
        }

        return view('chat.chat', compact('other_id', 'chat_messages', 'all_user'));
    }
    
    /**
     * chatStore
     * 
     * 
     */
    public function chatStore($id, Request $request)
    {
        // Chatテーブル取得
        $chat = new Chat;

        // チャットの一人称（送信）取得
        $user_id = Auth::user();

        // Userテーブル取得
        $all_user = new User;

        // チャットの二人称（受信）取得
        $other_id = $all_user::find($id);

        // 送信されたチャットメッセージを取得
        $chat_message = $request->input('chat_message');

        // それぞれのデータを$data変数にまとめる
        $data = [
            'user_id' => $user_id->id,
            'other_id' => $other_id->id,
            'chat_message' => $chat_message,
        ];

        // Chatテーブルに格納
        $chat->user_id = $data['user_id'];
        $chat->other_id = $data['other_id'];
        $chat->chat_message = $data['chat_message'];

        $chat->save();

        return back();
    }

    /**
     * result
     * Chatテーブル内にあるデータをJSONデータとして取得する
     * 
     */
    public function result($id)
    {

        $chat = new Chat;

        $all_user = new User;

        $other_id = $all_user::find($id);

        $user_id = Auth::user();

        // チャットメッセージ及び、送信者の情報（リレーション先のUserテーブル）を取得
        $chat_messages = $chat
        ->where('other_id', $user_id->id)
        ->where('user_id', $other_id->id)
        ->orWhere('other_id', $other_id->id)
        ->where('user_id', $user_id->id)
        ->with('users:name,profile_img,id')
        ->get(['chat_message','created_at','user_id']);

        // 上記で取得したデータをJSONデータとして取得
        $json = ["chat_messages" => $chat_messages];
        
        return response()->json($json);
    }

    
}
