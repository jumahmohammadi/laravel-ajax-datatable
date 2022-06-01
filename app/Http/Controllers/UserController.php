<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

	public $user;

     public function __construct(){
        $this->user = new User();

    }
     public function dashboard(){
		 return view('dashboard');
	 }
	 
	 
    public function index(Request $request)
    {
		$data['title1'] = trans('label.users');
		$data['page'] = trans('label.users');
        $per_page = ($request->per_page) ? $request->per_page: 10;
        $key_word = ($request->key_word) ? $request->key_word: '';
        $column = isset($request->column) ? $request->column:'u.id';
        $sort = isset($request->sort)? $request->sort:'desc';

		$data['sort'] = $sort;
        $data['column'] = $column;
        $user_id = Auth::user()->id;
       $data['users'] = $this->user->getUser($per_page, $key_word, $column, $sort);
      if ($request->ajax()) {
            return view("users.partials.index",compact('data'));
        }
        return view('users.index',compact('data'));
    }


    public function create(Request $request)
    {
        return view('users.partials.add-form');
    }

     public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
	       'password' => 'required|min:6',
	       'confirm_password' => 'required|same:password',
        ];

    $customMessages = [
        'required' => 'The :attribute field is required.',
        'email' => 'Email format is not valid',
        'min' => 'Password must be at least 6 characters long',
		'same'=>"Password and Confirmation are not the same"
    ];	
	  $this->validate($request, $rules, $customMessages);
	  
	  
      User::create([
	      'name'=>$request->name,
	      'email'=>$request->email,
		  'password'=>Hash::make($request->password)
	  ]);
	  
	  return redirect()->back();
    }


    public function edit($id)
    {
        $data['user'] = User::where('id',$id)->first();	
        return view('users.partials.edit-form',compact('data'));
    }



  

    public function update(Request $request,$id)
    {
         $rules = [
            'name' => 'required',
            'email' => 'required|email',
	       'confirm_password' => 'same:password',
        ];

    $customMessages = [
        'required' => 'The :attribute field is required.',
        'email' => 'Email format is not valid',
        'min' => 'Password must be at least 6 characters long',
		'same'=>"Password and Confirmation are not the same"
    ];	
	  $this->validate($request, $rules, $customMessages);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
		
        if($request->password):
		   $data['password'] = Hash::make($request->password);
		endif; 
		
        User::where('id',$id)->update($data);		
       return redirect()->back();
    }


	public function destroy($id){
		return User::where('id',$id)->delete();
	}




 public function logout () {
        auth()->logout();
        return redirect('/');
    }
}