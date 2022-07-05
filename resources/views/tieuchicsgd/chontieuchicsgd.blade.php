@extends('layouts.dash')
@section('section')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Hãy Chọn Một Tiêu Chí CSGD
      </h1>
    
    </section>
<form method="post" action="vietbaocaocsgd.blade.php" name="SelectForm">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <!-- Main content -->
    <section class="invoice">
      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>ID Tiêu Chí</th>
              <th>Tên Tiêu Chí</th>
              <th>Tên Tiêu Chuẩn</th>
              <th>Tên Cấp</th>
              <th>Nội Dung</th>
            </tr>
            </thead>
            <tbody>
              @foreach($data as $row)
              <tr>
                <td><input value="{{$row->tentieuchi}}" id="{{$row->tentieuchi}}" type="checkbox" name="chon"></td>
                <td>{{$row->id}}</td>
                <td>{{$row->tentieuchi}}</td>
                <td>{{$row->tentieuchuan}}</td>
                <td>{{$row->tencap}}</td>
                <td>{{$row->noidung}}</td>
               </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="box-footer">
          <input type="button" id="btn" value="Hiển thị tiêu chí đã chọn"/>     
        </div>
        <div><a href="{{ URL::previous() }}">Quay lại Trang Viết Báo Cáo</a></div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </form>
    <!-- /.content -->
    <div class="clearfix"></div>
    <script language="javascript">
            document.getElementById('btn').onclick = function()
            {
                // Khai báo tham số
                var checkbox = document.getElementsByName('chon');
                var result = "";
                 
                // Lặp qua từng checkbox để lấy giá trị
                for (var i = 0; i < checkbox.length; i++){
                    if (checkbox[i].checked === true){
                        result += ' [' + checkbox[i].value + ']';
                    }
                }
                 
                // In ra kết quả
                alert("Tiêu chí đã chọn có tên: " + result);
            };
        </script>
  </div>
  
  @stop