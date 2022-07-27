@extends('client.company.layout.layout')
@section('title', 'Chi tiết đơn ứng tuyển')
@section('name', 'Chi tiết đơn ứng tuyển')
@section('main-content')

<div class="dashboard-box margin-top-0" style='margin-b'>
    <div class="row">
        <div class="col-xl-12">
            <div class="table-responsive recent_booking dashboard-box">
                <div class="headline">
                    @foreach($blog as $b)

                    <h3>Đơn ứng tuyển: {{$b->title}}</h3>
                    @endforeach

                </div>
                <div class="dashboard-list-box table-responsive invoices with-icons">
                    <table class="table table-hover" id="table-ung-tuyen">
                        <thead>
                            <tr style="  text-align: left;">
                                <th>Stt</th>
                                <th>Ảnh</th>
                                <th>Tên Ứng viên</th>

                                <th>File</th>
                                <th>SĐT</th>
                                <th>Email</th>
                                <th>Trạng Thái</th>
                                <th>Ghi Chú</th>
                                <th>Hành động</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($apply as $a)
                            <tr class="tr" style="  text-align: left;">
                                <td>{{$loop->iteration}}</td>
                                <td><img alt="" class="rounded-circle shadow-lg"
                                        src="{{asset('storage/' . $a->usercandidate->avatar )}}" width="50" height="50"
                                        data-tippy-placement="top" data-tippy="">
                                </td>
                                <td>{{$a->name_candidate}}</td>

                                <td><a href="{{$a->file}}"><i class="icon-feather-file-text"
                                            style="color:black;  font-size: 30px !important; "></i></a></td>
                                <td>{{$a->phone_candidate}}</td>
                                <td>{{$a->email_candidate}}</td>                             
                                <td><select id="action" data-id="{{$a->id}}"
                                        class="badge badge-pill badge-primary text-uppercase "
                                        style="width:50%; font-size: 14px">
                                        @foreach(config('common.apply_status') as $key => $val)
                                        <option @if($a->status == $key) selected @endif value="{{$key}}">{{$val}}
                                        </option>
                                        @endforeach
                                    </select></td>
                                <td><a onclick="getDetail(<?= $a->id ?>)" class="popup-with-zoom-anim" data-id="{{$a->id}}"
                                        href="#small-dialog"><i class="icon-material-outline-note-add"
                                            style="font-size: 30px !important; color:black">
                                        </i></a></td>
                                        <td>
                                        <a href="#small-dialog" style="border-radius: 50px; height:40px" class="popup-with-zoom-anim button ripple-effect" data-tippy-placement="top" data-tippy="" data-original-title="Send Message"><i class="icon-feather-mail"></i> Gửi mail</a>
                                        </td>
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
                  {{$apply-> links()}}
                  </ul>
                </nav>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
<script>
    function getDetail(id) {
        $('#apply_id').val(id);
        $.ajax({
            url: '/api/ghi-chu/' + id,
            type: 'GET',
            data: {
                id: id
            },
            success: function(data) {
                console.log(data);
                $('#tab').html(data);
            }
        });
    }
</script>

<script>
$(document).ready(function() {
    $('select#action').change(function() {
        var act = $(this).val();
        var id = $(this).data('id');
        $.ajax({
            type: 'GET',
            url: "{{route('apply.update')}}",
            data: {
                'id': id,
                'act': act
            },
            success: function(data) {
                alertify.success('Sửa trạng thái thành công !');
            },
            error: function(data) {
                alertify.error('Sửa trạng thái thất bại !');
            },
        });

    });
});
</script>
<!-- <script>
function load() {
    var id = $('#apply_id').val();
    $('#apply_id').val(id);
    $.ajax({
        url: '/api/ghi-chu/' + id,
        type: 'POST',
        data: {
            id: id
        },
        success: function(data) {
            console.log(data);
            $('#tab').html(data);
        }
    });

}

</script> -->



<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
    <div class="utf-signin-form-part">
        <ul class="utf-popup-tabs-nav-item">
            <li class="modal-title">Ghi chú</li>
        </ul>
        <div class="utf-popup-container-part-tabs">
            <div class="utf-popup-tab-content-item" id="tab" style="padding:30px 20px; height:300px;
            overflow-x:hidden;
            overflow-y:auto; ">

            </div>
            <input type="hidden" id="apply_id" value=""style="">
            <div style="position: relative;">
            <div style="margin-top: 10px !important;  " class="utf-no-border">
                <input style="    padding-right: 57px;" type="text"  class="utf-with-border" name="name" id="name_note" placeholder="Ghi chú..." />
               
            </div>


            <button style="position: absolute; top:15px; right:30px" id="submit_add" 
                type="submit"> <i class="icon-feather-send"></i></button> </div></ul>
        </div>
    </div>
</div>


<!-- <script>

    function getDetail(id) {
        function load() {
       
    }
    load();
}
</script> -->

<script>
$(document).ready(function() {
    $('#submit_add').on('click', function() {
        var name = $('#name_note').val();
        var id = $('#apply_id').val();
        $.ajax({
            type: 'POST',
            url: 'http://127.0.0.1:8000/api/them-ghi-chu',
            data: 'apply_id=' + id + '&name=' + name,
            success: function(data) {
                alertify.success('Thêm ghi chú thành công !');
            },
            error: function(data) {
                alertify.error('Thêm ghi chú thất bại !');
            },
        })
        getDetail(id);
        $('#name_note').val("");
    })
})
</script>

<script>
function ConfirmDelete(id, apply_id){
        $.ajax({
            type: "POST",
            url: "http://127.0.0.1:8000/api/xoa-ghi-chu/",
            data: "note_id=" + id,
            success: function(data) {
                alertify.success("xóa ghi chú thành công !");
            }
        })
        getDetail(apply_id);
}
</script>

@endsection