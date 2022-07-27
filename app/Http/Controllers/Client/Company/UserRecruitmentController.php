<?php

namespace App\Http\Controllers\client\company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;
use App\Models\Categories;
use App\Models\Locations;
use App\Models\UserRecruitment;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Console;

class UserRecruitmentController extends Controller
{
    public function editForm(){
        $cate = Categories::all();
        $loca = Locations::all();
        $company = UserRecruitment::find(Auth::user()->id);
        return view('client.company.userCompany.index' , compact('company','cate','loca'));
    }
    public function saveEdit(CompanyRequest $request){
        $model = UserRecruitment::find(Auth::user()->id);
        if(!$model){
            return redirect()->back();
        }
        
        $model->fill($request->all());
       
        if($request-> hasFile('image')){
            $newFileName = uniqid(). '-' . $request->image->getClientOriginalName();
            $path = $request->image->storeAs('public/images/company' , $newFileName);
            $model->image = str_replace('public/' , '' , $path);
        }
        if($request-> hasFile('avatar')){
            $newFileName = uniqid(). '-' . $request->avatar->getClientOriginalName();
            $path = $request->avatar->storeAs('public/images/company' , $newFileName);
            $model->avatar = str_replace('public/' , '' , $path);
        }
        if($request-> hasFile('banner')){
            $newFileName = uniqid(). '-' . $request->banner->getClientOriginalName();
            $path = $request->banner->storeAs('public/images/company' , $newFileName);
            $model->banner = str_replace('public/' , '' , $path);
        };
        
        $model->save();
        // return redirect('/nha-tuyen-dung/user-nha-tuyen-dung?mess=Cập nhật dữ liệu thành công');
       
        return redirect()->back()->with('msg', 'Cập nhật dữ liệu thành công');
        
    }
}
