<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\PostImage;
use App\Models\User;
use App\Models\user_review;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    // public function Showform(){
    //     return view('daftar');
    // }

    public function Register( Request $request){

        // validate the incoming data
        $request->validate([
            'username' => 'required|min:5|max:12',
            'email' => 'required|email',
            'password' => 'required|min:7|max:10|confirmed'
        ]);

        // input data via model into DB
        $data = [
            'name' => $request -> input('username'),
            'email' => $request -> input('email'),
            'password' => Hash::make($request -> password),
        ];

        Pengguna::create($data);
        return redirect('/daftar') -> with('success','berhasil Register!'); 

    }

    public function showloginform (){
        return view ('login2');
    }

    public function login_user (Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'exists:\App\Models\Pengguna,email', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Harap masukkan email!',
            'email.exists' => 'Pengguna dengan email ini tidak ditemukan!',
            'email.email' => 'Harap masukkan email!',
            'password.required' => 'Harap masukkan password!'
        ]);

 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('/home');
        }
 
        return back()->withErrors([
            'password' => 'The provided credentials do not match our records.',
        ]);
    }

    

    public function log_out( Request $request)
    {
        Auth::logout();
        return \redirect()->route('login');
    }



    //show review page 

    // public function index(){
    //     $reviews = user_review::with('pengguna')->get();
    //     dd($reviews);
    //     return view('review2', compact('reviews'));
    // }


    public function ShowUlasan(){

        $reviews = user_review::orderBy('created_at', 'desc')->get();
        return view('review2', ['data' => $reviews ]);
    }


    // untuk ulasan 
    public function store_ulasan( Request $request)
    {

        if($request->has('submit')){
            $request->validate([
                'ulasan' => 'required|max:100'
            ]);
    
            $data_ulasan = [
                'review' => $request -> input('ulasan')
            ];
    
            $ulasan = new user_review;
            $ulasan -> review = $request -> input('ulasan');
            $ulasan -> save();
            return redirect('/review') -> with('success','Terima Kasih atas Ulasan anda');
        }
        elseif($request->has('non_submit')){
            return redirect()->back();
        }
        
    }

    public function update(Request $request, string $id){
        if($request->has('submit')){
            $request->validate([
                'ulasan' => 'required|max:100'
            ]);
    
            $data_ulasan = [
                'review' => $request -> input('ulasan')];
    
            user_review::where('id', $id)->update($data_ulasan);
            return redirect('/review')->with('success','berhasil update review');
        }

        
        
    }

    //image function

    public function show_img()
    {
        $data = PostImage::orderBy('image')->get();
        return view('galery2',['data' => $data]);
        
        
    }


    public function store_image(Request $request)
    {
        
        if($request->has('upload')){
            $validated = $request->validate([
                'image' => "required|image|mimes:jpg,jpeg,png",
                
            ]);

            $validated['image'] = $request->file('image')->store('image');

            PostImage::create($validated);
            return redirect('/gambar') -> with('success','menambah Gambar!');
            
        }
        elseif($request->has('batal')){
            return redirect()->back();
        }

         
    }

    // public function update_image(Request $request, $id)
    // {
    //     //find img
    //     $image = PostImage::findOrFail($id);

    //     $validated = $request->validate([
    //         'image' => 'sometimes|image|mimes:jpg,jpeg,png'
    //     ]);

    //     if($request->hasFile('image')){
    //         Storage::disk('public')->delete($image->image);
    //         $validated['image'] = $request->file('image')->store('upload/image', 'public');
    //     }

    //     //update record DB
    //     $image->update($validated);

    //     return redirect('/gambar')->with('success', 'gamabr berhasil di update'); 
    // }
   
}
 