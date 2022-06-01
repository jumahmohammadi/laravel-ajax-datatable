<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    public  function getUser($per_page, $key_word, $column,$sort){

	$users=DB::table('users as u')
		->select('u.*')
        ->where('role',1);
		if($key_word!=""){
		    $users = $users->where(function ($qr) use($key_word){
			 $qr->where('u.first_name', 'like', '%'.$key_word.'%')
				->orwhere('u.last_name', 'like', '%'.$key_word.'%');
			});
		}
		 $users = $users->orderBy(''.$column.'', $sort);
		$users = $users->paginate($per_page);
	  return $users;
   }

   
	public function singleUser($id){
		return DB::table('users as ex')->where('id',$id)->first();
	}

    public function saveUser($data){
        try{
            DB::beginTransaction();
                DB::table("users")->insert($data);

            DB::commit();
            return 1;
        }catch(\Exception $e){
            DB::rollback();
            return 0;
        }
    }

    public function updateUser($data, $id){
     //dd($data);
	 try{
        DB::beginTransaction();
            DB::table("users")->where('id', $id)->update($data);
        DB::commit();
        return 1;
      }catch(\Exception $e){
        DB::rollback();
        return 0;
      }
    }

	public function deleteUser($id){
		try{
        DB::beginTransaction();
            DB::table("users")->where('id', $id)->delete();
        DB::commit();
        return 1;
      }catch(\Exception $e){
        DB::rollback();
        return 0;
      }
	}


    public function service(){
         return $this->belongsTo('App\Models\admin\Service');
    }


}