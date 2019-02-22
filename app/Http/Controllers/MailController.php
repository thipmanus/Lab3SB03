<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
    public function Send_to_email(Request $request){
        $subject = $request->input('Subject');
        $email = $request->input('Email');
        $messager = $request->input('Messager');
        $data = array(
            'name' =>$subject,
            'messager'=>$messager
        );
        Mail::send('Test_mail', $data, function($message) use($request) 
      {
         $message->to($request->input('Email'), $request->input('Messager'))->subject($request->input('Subject'));
         $message->from('5910110148@psu.ac.th','Thipmanus rattananupong');

      });
      //echo "Sucess Email Sent. Check your inbox.";
      return back()->with('success','ได้ทำการส่งเรียบร้อย');
    }


 
   public function basic_email() {
      $data = array('name'=>"Thipmanus rattananupong");
   
      Mail::send(['text'=>'Test_mail'], $data, function($message) {
         $message->to('5910110148@psu.ac.th', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('5910110148@psu.ac.th','Thipmanus rattananupong');
      });
      echo "Basic Email Sent. Check your inbox.";
   }
   public function html_email() {
      $data = array('name'=>"Thipmanus rattananupong");
      Mail::send('Test_mail', $data, function($message) {
         $message->to('5910110148@psu.ac.th', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
         $message->from('5910110148@psu.ac.th','Thipmanus rattananupong');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
   public function attachment_email() {
      $data = array('name'=>"Thipmanus rattananupong");
      Mail::send('mail', $data, function($message) {
         $message->to('5910110148@psu.ac.th', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
         $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('5910110148@psu.ac.th','Thipmanus rattananupong');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
}