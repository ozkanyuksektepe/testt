<?php

namespace App\Http\Controllers;

use App\Models\Kullanici;
use App\Services\HobiesServices;
use App\Services\UserServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    protected $userService;
    protected $hobiesService;

    public function __construct()
    {
        $this->userService = new UserServices();
        $this->hobiesService = new HobiesServices();
    }

    public function index()
    {
        return view('index');

    }

    public function createUser(Request $request)
    {
        if (Auth::check()){
            return redirect()->route("hobies");
        }
        $this->validate($request, [
            'sifre' => 'required',
            'sifreonay' => 'required|same:sifre'
        ]);

        $result = $this->userService->insertUser($request);
        if ($result) {
            return redirect()->route("hobies");
        }
        return redirect()->back();
    }

    public function page()
    {
        $data["hobies"] = $this->hobiesService->getHobies();
        $data["userHobbies"] = $this->hobiesService->getUserHobbies();
        return view('hobies',$data);
    }

    public function addHobi(Request $request){
        $this->hobiesService->addHobie($request);
        return redirect()->back()->with('status','Hobi Başarıyla Eklendi');
    }

    public function addGlobalHobie(Request $request){
        $this->hobiesService->addGlobalHobie($request);
        return redirect()->back()->with('status','Hobi Başarıyla Eklendi');
    }

}
