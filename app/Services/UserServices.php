<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserServices
{

    public function insertUser($request)
    {



        if($request->sifreonay !== $request->sifre) {
            return redirect()->route("index");
        }

        if(!User::where(["email" => $request->email])->first()){
            $insert = User::create([
                "name" => $request->ad,
                "surname" => $request->soyad,
                "password" => bcrypt($request->sifre) ,
                "confirm" => bcrypt($request->sifreonay),
                "gender" => $request->gender,
                "email" => $request->email,
                "phone" => $request->telefon,
                "address" => $request->adres,
                "postal" => $request->posta,
            ]);

            if ($insert) {
                return Auth::attempt(["email" => $request->email , "password" => $request->sifre]);
            }
        }

    }


}
