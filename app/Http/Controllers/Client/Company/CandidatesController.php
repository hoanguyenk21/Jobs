<?php

namespace App\Http\Controllers\Client\Company;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use App\Models\Categories;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use App\Models\Usercandidate;
use App\Models\UserRecruitment;
use App\Models\Locations;
use Illuminate\Http\Request;

class CandidatesController extends Controller
{
    public function index(Request $request)
    {
        
        $candidatetQuery = Usercandidate::where('name' , 'like' , "%".$request->keyword."%");
        if($request->has('cate_id') && $request->cate_id > 0){
            $candidatetQuery = $candidatetQuery->where('cate_id' , $request->cate_id );
        }
        if($request->has('location_id') && $request->location_id > 0){
            $candidatetQuery = $candidatetQuery->where('location_id' , $request->location_id );
        }
        if($request->has('gender') && $request->gender > 0){
            $candidatetQuery = $candidatetQuery->where('gender' , $request->gender );
        }
      
        $candidate = $candidatetQuery->paginate(10); 
        $candidate->load('user'); 
        $cate = Categories::all();
        $loca = Locations::all();
        return view('client.company.candidate.index',compact('candidate','cate', 'loca'));
    }
    public function delete($id)
    {
        Usercandidate::destroy($id);
        return redirect()->back();
    }
    
}
