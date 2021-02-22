<?php

namespace App\Http\Controllers\Api\Bot;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\Bot\UserResource;
use App\Http\Resources\Bot\UserCollection;
class UserController extends Controller
{

    public function index()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($telegram_user_id)
    {

        
        return new UserResource(User::where('telegram_user_id',$telegram_user_id)->firstOrFail());

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function punishe(Request $request){

        $data = $request->all();
        // // return 1;
        // return $data;

        $puser = $this->find($data['punishement']['ptelegram_user_id']);
        $cuser =$this->find($data['punishement']['ctelegram_user_id']);

        return $puser->punishes()->create([
        'cuser_id' =>$cuser->id,
        'reason' =>$request->input('punishement.reason'),
        ]);
    }
    

    private function find($telegram_user_id){
        
        return User::where('telegram_user_id',$telegram_user_id)->firstOrFail();
    }

    public function search(Request $req){


        $key = $req->query('key');

        $users =  User::query()->where('full_name','LIKE',"%{$key}%")->paginate(1);

        return  new UserCollection($users);





        

    }
}
