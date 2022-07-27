@extends('client.company.layout.layout')
@section('title', 'Quản lý tin tuyển dụng')
@section('name', 'Quản lý tin tuyển dụng')

@section('main-content')
    <div class="inner_search_block_section padding-top-0 padding-bottom-40">
      <div class="container">
      <div class="col-md-12">

    <form action="" method="get" class="utf-intro-banner-search-form-block">
      <div class="utf-intro-search-field-item">
        <i class="icon-feather-search"></i>
        <input id="intro-keywords" name="keyword" type="text" placeholder="Nhập tên tin tuyển dụng...">
      </div>
      <div class="utf-intro-search-field-item">
        <select class="selectpicker default" name="cate_id" data-live-search="true" data-selected-text-format="count" data-size="5" title="Chọn nghành nghề">
          @foreach($cate as $c)
          <option value="{{$c->id}}">{{$c->name}}</option>
          @endforeach

        </select>
      </div>
      <div class="utf-intro-search-field-item">
        <select class="selectpicker default" name="location_id" data-live-search="true" data-selected-text-format="count" data-size="5" title="Chọn địa điểm">
          @foreach($loca as $l)     
          <option value="{{$l->id}}">{{$l->name}}</option>;
          @endforeach

        </select>
      </div>
      <div class="utf-intro-search-button">
        <button class="button ripple-effect" type="submit" onclick="window.location.href='jobs-list-layout-leftside.html'"><i class="icon-material-outline-search"></i> Tìm kiếm</button>
      </div>
    </form>
    </div>
       </div>
       </div>
<div class="dashboard-box margin-top-0">
  <div class="headline">
    <h3>Danh sách tin tuyển dụng</h3>
  </div>
  <div class="content">
    <ul class="utf-dashboard-box-list">
      @foreach($viewBlog as $blog)
      <li>
        <div class="utf-job-listing">
          <div class="utf-job-listing-details">
            <a href="dashboard-manage-resume.html" class="utf-job-listing-company-logo"><img src="{{asset('storage/' . $blog->image )}}" alt=""></a>
            <div class="utf-job-listing-description">
              <!-- <span class="dashboard-status-button utf-status-item green">Chờ phê duyệt</span> -->
              <h3 class="utf-job-listing-title">
                <a href="dashboard-manage-resume.html">{{$blog->title}}</a>
                @if($blog->working_time == 'Full time')
                <span class="dashboard-status-button green">
                  <i class="icon-material-outline-business-center"></i>Full Time
                </span>
                @elseif($blog->working_time == 'Part time')
                <span class="dashboard-status-button yellow">
                  <i class="icon-material-outline-business-center"></i>Part Time</span>
                  @elseif($blog->working_time == 'Full time,Part time')
                <span class="dashboard-status-button yellow">
                  <i class="icon-material-outline-business-center"></i>Full time,Part time</span>
                  @elseif($blog->working_time == 'Part time,Full time')
                <span class="dashboard-status-button yellow">
                  <i class="icon-material-outline-business-center"></i>Full time,Part time</span>

                @endif
              </h3>
              <div class="utf-job-listing-footer">
                <ul> 
                  <li><i class="icon-feather-briefcase"></i>{{$blog->position}}</li>
                  <li><i class="icon-material-outline-date-range"></i>{{$blog->deadline}}</li>
                  <li><i class="icon-material-outline-account-balance-wallet"></i>{{number_format($blog->salary_min)}}đ->{{number_format($blog->salary_max)}}đ </li>
                   <li><i class="icon-material-outline-location-on"></i>{{$blog->location->name}}</li>
                </ul>
                <div class="utf-buttons-to-right">
                  <a href="{{route('blog.edit',['id' => $blog->id])}}" class="button green ripple-effect ico" title="Sửa" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                  <a href="{{route('blog.delete' , ['id' => $blog->id])}}" Onclick="return ConfirmDelete();" class="button red ripple-effect ico" title="Xóa" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                  <script>
                          function ConfirmDelete()
                          {
                            var x = confirm("Bạn có chắc chắn muốn xóa chứ?");
                            if (x)
                                return true;
                            else
                              return false;
                          }
</script>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>

      @endforeach

    </ul>
  </div>

</div>

          <!-- Pagination -->
          <div class="clearfix"></div>
              <div class="utf-pagination-container-aera margin-top-20 margin-bottom-0">
                <nav class="pagination">
                  <ul>
                  {{$viewBlog-> links()}}
                  </ul>
                </nav>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>

@endsection