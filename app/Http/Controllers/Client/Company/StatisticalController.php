<?php

namespace App\Http\Controllers\Client\Company;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserRecruitment;
use App\Models\Usercandidate;
class StatisticalController extends Controller
{
    public function index(Request $request){
        
        $TongDon = Apply::where('blog_id',Auth::user()->id)->count('blog_id');
        $DonChuaDuyet = Apply::where('status','==','0')->where('blog_id',Auth::user()->id)->count('status');
        $TongTin = Blog::where('user_recruitment_id',Auth::user()->id)->count('user_recruitment_id');
        $id = Auth::user()->id;
        $company = UserRecruitment::find($id);
        $candidate = Usercandidate::where('location_id', $company['location_id'] )->where('cate_id', $company['cate_id'])->get();
        
        $data = $request->all();
        
        $stratWeek = Carbon::now('Asia/Ho_Chi_Minh')->startOfWeek()->toDateString();
        $endWeek = Carbon::now('Asia/Ho_Chi_Minh')->endOfWeek()->toDateString();
        $ngay = Apply::WhereDate('created_at', Carbon::today())->get();
        $tuan = Apply::WhereBetween('created_at', [$stratWeek, $endWeek])->get();
      
        return view('client.company.statistical.index',compact('TongDon','TongTin','DonChuaDuyet','tuan', 'ngay','candidate'));
    }
  
}
