<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contacts;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Excel;

class ContactsController extends Controller
{
    public function addContacts(Request $request){
        
        $contacts = App\Flight::create([
            'name' => $request->input('name'),
            'telphone' => $request->input('telphone'),
            'birthday' => $request->input('birthday'),
            'user_id' => $request->input('user_id'),
        ]);
    }
    
    public function contactsList(){
       $user = Sentinel::getUser();
       $contacts = $user->contacts;
       return view('contactsList',['contacts'=>$contacts]);
    }
    
    public function appContactsList(){
        $user = Sentinel::getUser();
        $contacts = $user->contacts;
        return $contacts;
    }
    
    public function import(Request $request){
        if(Sentinel::guest()){
           return abort(401, "未登录或登录已过期"); 
        }
        $user = Sentinel::getUser();
        $filePath = $request->file('file')->getRealPath();
        $data = Excel::load($filePath, function($reader) {})->get();
        $record = 0;
        $success = 0;
        foreach($data as $v){
            $exist = Contacts::where('name',$v['Last Name'])->where('telphone',$v['Mobile Phone'])->where('user_id',$user->id)->first();
            if($exist){
                $record++;
                continue;
            }
            $contacts = Contacts::create([
                'name' => $v['Last Name'],
                'telphone'=>$v['Mobile Phone'],
                'user_id'=>$user->id
            ]);
            $success++;
        }
        return "重复记录".$record."条已忽略,成功导入". $success."条记录";
    }
    
}

