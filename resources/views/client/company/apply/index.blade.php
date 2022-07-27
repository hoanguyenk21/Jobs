@extends('client.company.layout.layout')
@section('title', 'Quản lý đơn ứng tuyển')
@section('name', 'Quản lý đơn ứng tuyển')
@section('main-content')
<div class="inner_search_block_section padding-top-0 padding-bottom-40">
      <div class="container">
      <div class="col-md-12">

    <form action="" method="get" class="utf-intro-banner-search-form-block">
      <div class="utf-intro-search-field-item">
        <i class="icon-feather-search"></i>
        <input id="intro-keywords" name="keyword" type="text" placeholder="nhập tên vị trí ứng tuyển...">
      </div>


      <div class="utf-intro-search-button">
        <button class="button ripple-effect" type="submit" onclick="window.location.href='jobs-list-layout-leftside.html'"><i class="icon-material-outline-search"></i> Tìm kiếm</button>
      </div>
    </form>
    </div>
       </div>
       </div>
<div class="dashboard-box margin-top-0">
                <div class="row">
                  <div class="col-xl-12">
                    <div class=" table-responsive recent_booking dashboard-box">
                      <div class="headline">
                      <h3>Đơn ứng tuyển</h3> 
                      </div>
                      <div class="dashboard-list-box table-responsive invoices with-icons">
                        <table class="table table-hover" id="table-ung-tuyen">
                          <thead>
                            <tr class="tr">
                              <th>STT</th>
                              <th>Vị trí công việc</th>
                              <th>Số lượng đơn</th>
                              <!-- <th>Ngày</th> -->
                              <th>Xem thêm</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($blog as $b)
                            <tr style=" ">
                              <td>{{$loop->iteration}}</td>
                              <td>{{$b->title}}</td>
                              <td>{{count($b->apply)}}</td>
                              <!-- <td>{{$b->created_at->format('d/m/Y')}}</td> -->
                           
                              <td><a href="{{route('apply.detail', ['id' => $b->id])}}" class="button gray"><i class="icon-feather-eye"></i>Chi tiết</a></td>
                            </tr>
                            
                          @endforeach
                          </tbody>
                        </table>
                       
                      </div>
                    </div>
                  </div>
                </div>

              </div>
                <!-- Pagination -->
          <div class="clearfix"></div>
              <div class="utf-pagination-container-aera margin-top-20 margin-bottom-0">
                <nav class="pagination">
                  <ul>
                  {{$blog-> links()}}
                  </ul>
                </nav>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
@endsection