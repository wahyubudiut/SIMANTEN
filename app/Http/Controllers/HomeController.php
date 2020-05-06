<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Sertifikat;
use Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $home = \App\User::where('is_admin', 0)->get();
        return view('user.home', compact('home'));
    }

    public function cari(Request $request)
    {
        $code = $request->code;
        $data = DB::table('sertifikats')
                        ->join('users', 'sertifikats.nim', '=', 'users.nim')
                        ->select([
                            'users.name',
                            'sertifikats.code',
                        ])->where('sertifikats.code',$code)->get();   
        $nama = DB::table('sertifikats')
                        ->join('users', 'sertifikats.nim', '=', 'users.nim')
                        ->select([
                            'users.name',
                        ])->where('sertifikats.code',$code)
                        ->value('name');                  
           
        $count = $data->count();                 
        if( $count > 0)
        {
            DB::table('sertifikats')->where('code',$code)
            ->increment('validated',1);
            $img = Image::make(public_path('images/Certificate.png'));  
            $img->text($code, 400, 900, function($font) {  
            $font->file(public_path('/fonts/Open_Sans/OpenSans-Regular.ttf'));  
            $font->size(40);  
       
            });    
            $img->text($nama, 400, 1400, function($font) {  
            $font->file(public_path('/fonts/Open_Sans/OpenSans-ExtraBold.ttf'));  
            $font->size(110);  
        
            });    
            $file_name =  str_replace('/','-',$code);
            $img->save(public_path('images/Certificate/'.$file_name.'.jpg'));  
        }
        
        return view('sertifikat',compact('count','data','code'));
    }

    public function adminLogin()
    {
        return view('admin.login');
    }

    public function adminHome()
    {
        return view('admin.home');
    }
}
