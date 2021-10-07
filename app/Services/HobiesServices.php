<?php

namespace App\Services;

use App\Models\Hobies;
use App\Models\HobieUser;
use Illuminate\Support\Facades\Auth;


class HobiesServices
{
    public function addHobie($request)
    {
        if (!HobieUser::where(["user_id" => Auth::id(), "hobie_id" => $request->hobie_id])->first()) {
            HobieUser::insert([
                "user_id" => Auth::id(),
                "hobie_id" => $request->hobie_id
            ]);
        }
    }

    public function getHobies()
    {
      return Hobies::all();
    }

    public function getUserHobbies(){
       return HobieUser::where("user_id" , Auth::id())->with("getHobies")->get();
    }

    public function addGlobalHobie($request){

        if(Hobies::where("hobie",$request->hobi)->first()){
            return redirect()->back();
        }
        return Hobies::insert([
            "hobie" => $request->hobi
        ]);
    }
}
