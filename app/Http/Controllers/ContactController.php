<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Carbon\Carbon;
use Mail;
use App\Mail\ContactMail;
use App\Mail\ContactMailClient;


class ContactController extends Controller
{
    public function index()
    {

        //現在時刻取得　2019/10/15 15:15
        $now = Carbon::now();
        $now->format('Y/m/d H:i');
        $ac_url = './contact';

        return view('contact/index', ['now' => $now, 'action' => $ac_url]);
    }

    public function check(ContactRequest $request)
    {

        $contactsData = array();
        $contactsData['day'] = $request->input('day'); //日付
        $contactsData['name'] = $request->input('name'); //名前
        $contactsData['email'] = $request->input('email'); //メールアドレス
        $contactsData['subject'] = $request->input('subject'); //件名
        $contactsData['message'] = $request->input('message'); //問い合わせ内容

        $ac_url = './contact/thanks';
        
        return view('contact/index', ['data' => $contactsData, 'action' => $ac_url]);
    }

    public function thanks(ContactRequest $request){

            $email = $request->input('email');

            //ユーザー確認用
            Mail::to($email)->send(new ContactMail($request));
            
            //クライアント用
            Mail::to('***@***.com')->send(new ContactMailClient($request));

            return view('contact/thanks');

    }
}
