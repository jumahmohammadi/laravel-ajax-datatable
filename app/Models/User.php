<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use DB; 


class User extends Authenticatable
{
    use HasFactory, Notifiable;
     protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
	
	
	 public  function getUser($per_page, $key_word, $column,$sort){
     	$users=DB::table('users as u')
		->select('u.*');
		if($key_word!=""){
		    $users = $users->where(function ($qr) use($key_word){
			 $qr->where('u.name', 'like', '%'.$key_word.'%')
				->orwhere('u.email', 'like', '%'.$key_word.'%');
			});
		}
		 $users = $users->orderBy(''.$column.'', $sort);
		$users = $users->paginate($per_page);
	  return $users;
   }
}