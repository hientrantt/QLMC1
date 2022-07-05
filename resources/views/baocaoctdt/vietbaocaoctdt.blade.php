@extends('layouts.dash')
@section('section')
<style>
    optgroup#main-menu .sub-menu{
        display: none;
    }
    optgroup#main-menu option:hover .sub-menu{
        display: block;
    }
    ul {
  list-style: none;
  }
</style>
</style>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Viết Báo Cáo CTDT
      </h1>
      <br>
      {{ Session::get('message')}}
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- left column -->
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Điền thông tin báo cáo ctdt</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="" name="formulariol">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="form-group">
                    <label><a href="{{ url('/chonminhchungctdt')}}">Chọn số hiệu minh chứng</a></label>
                    <div class="control-group kt">
                    <input type="text" name="sohieuminhchung" class="form-control" placeholder="Nhập các số hiệu minh chứng đã chọn">
                  </div>
                  </div>

                <div class="f-grid">
                  <div class="form-group f-grid-col">
                    <label>Tên đơn vị</label>
                    <div class="control-group kt">
                    <input type="text" name="tennhombaocao" placeholder="Nhập tên đơn vị">
                  </div>
                  </div>
                  <div class="form-group f-grid-col">
                    
                  <label><a href="{{ url('/chontieuchuanctdt')}}">Chọn tiêu chuẩn</a></label>
                    <div class="control-group">
                   <select name="tentieuchuan" onchange="chon();">

                        <option value="1">Tiêu Chuẩn 1</option>
                      <option value="2" class="showhim">Tiêu Chuẩn 2</option>
                      <option value="3" class="showhim">Tiêu Chuẩn 3</option>
                      <option value="4" class="showhim">Tiêu Chuẩn 4</option>
                      <option value="5" class="showhim">Tiêu Chuẩn 5</option>
                      <option value="6" class="showhim">Tiêu Chuẩn 6</option>
                      <option value="7" class="showhim">Tiêu Chuẩn 7</option>
                      <option value="8" class="showhim">Tiêu Chuẩn 8</option>
                      <option value="9" class="showhim">Tiêu Chuẩn 9</option>
                      <option value="10" class="showhim">Tiêu Chuẩn 10</option>
                      <option value="11" class="showhim">Tiêu Chuẩn 11</option>
                    </select> 
                    </div>
                  </div>
                <div class="form-group f-grid-col">
                  <label><a href="{{ url('/chontieuchictdt')}}">Chọn tiêu chí</a></label>
                    
                    <div class="control-group kt">
                    <select name="tentieuchi" id="">
                      <option value="-">Tiêu chí 1.1</option>
                      <option value="-">Tiêu chí 1.2</option>
                    </select>
                  </div>
                  </div>
                  </div>

        <div class="row">
        <div class="col-md-12">
          <div class="box">
            
            <div class="box-header">
              <h3 class="box-title">Nhập tên báo cáo</h3>
                <input type="text" name="tenbaocao" style="width: 100%; height: 30px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
              <h3 class="box-title" style="margin-top: 10px;">Nhập nội dung báo cáo
                <small style="margin-left: 10px;">1. Mô tả; 2.Điểm mạnh; 3.Tồn tại; 4.Kế hoạch hành động; 5.Tự đánh giá</small>
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <textarea  placeholder="Nhập nội dung báo cáo gồm: 1. Mô tả; 2.Điểm mạnh; 3.Tồn tại; 4.Kế hoạch hành động; 5.Tự đánh giá" name="noidungbaocao" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
        <!-- /.col-->
                <div class="form-group">
                  <label>Đánh giá</label>
                  <div class="checkbox">
                  <label class="dat">Không đáp ứng
                  <input type="radio" checked="checked" name="danhgia" value="Không đáp ứng">
                  </label>
                  <label class="dat">Chưa đáp ứng cần nhiều cải tiến
                  <input type="radio" checked="checked" name="danhgia" value="Chưa đáp ứng cần nhiều cải tiến">
                  </label>
                  <label class="dat">Chưa đáp ứng cần vài cải tiến nhỏ
                  <input type="radio" checked="checked" name="danhgia" value="Chưa đáp ứng cần vài cải tiến nhỏ">
                  </label>
                  <br>
                  <label class="dat">Đáp ứng đầy đủ
                  <input type="radio" checked="checked" name="danhgia" value="Đáp ứng đầy đủ">
                  </label>
                  <label class="dat">Đáp ứng cao
                  <input type="radio" checked="checked" name="danhgia" value="Đáp ứng cao">
                  </label>
                  <label class="dat">Thực hiện tốt
                  <input type="radio" checked="checked" name="danhgia" value="Thực hiện tốt">
                  </label>
                  <label class="dat">Thực hiện xuất sắc
                  <input type="radio" checked="checked" name="danhgia" value="Thực hiện xuất sắc">
                  </label>
                </div>
                </div>
                  </div>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Lưu báo cáo này</button>
              </div>
            </form>
            <script type="text/javascript">
              var opt_1 = new Array("Tiêu chí 1.1", "Tiêu chí 1.2");
              var opt_2 = new Array("Tiêu chí 2.1", "Tiêu chí 2.2", "Tiêu chí 2.3");
              var opt_3 = new Array("Tiêu chí 3.1", "Tiêu chí 3.2", "Tiêu chí 3.3", "Tiêu chí 3.4");
              var opt_4 = new Array("Tiêu chí 4.1", "Tiêu chí 4.2", "Tiêu chí 4.3", "Tiêu chí 4.4", "Tiêu chí 4.5", "Tiêu chí 4.6", "Tiêu chí 4.7");
              var opt_5 = new Array("Tiêu chí 5.1", "Tiêu chí 5.2", "Tiêu chí 5.3", "Tiêu chí 5.4", "Tiêu chí 5.5", "Tiêu chí 5.6", "Tiêu chí 5.7");
              var opt_6 = new Array("Tiêu chí 6.1", "Tiêu chí 6.2", "Tiêu chí 6.3", "Tiêu chí 6.4", "Tiêu chí 6.5");
              var opt_7 = new Array("Tiêu chí 7.1", "Tiêu chí 7.2", "Tiêu chí 7.3", "Tiêu chí 7.4", "Tiêu chí 7.5", "Tiêu chí 7.6");
              var opt_8 = new Array("Tiêu chí 8.1", "Tiêu chí 8.2", "Tiêu chí 8.3", "Tiêu chí 8.4", "Tiêu chí 8.5", "Tiêu chí 8.6", "Tiêu chí 8.7", "Tiêu chí 8.8");
              var opt_9 = new Array("Tiêu chí 9.1", "Tiêu chí 9.2", "Tiêu chí 9.3", "Tiêu chí 9.4", "Tiêu chí 9.5");
              var opt_10 = new Array("Tiêu chí 10.1", "Tiêu chí 10.2", "Tiêu chí 10.3", "Tiêu chí 10.4", "Tiêu chí 10.5");
              var opt_11 = new Array("Tiêu chí 11.1", "Tiêu chí 11.2", "Tiêu chí 11.3");

              function chon(){
                var tentieuchuan;
                tentieuchuan = document.formulariol.tentieuchuan[document.formulariol.tentieuchuan.selectedIndex].value;
                if(tentieuchuan!=0){
                  mis_opts=eval("opt_" +  tentieuchuan);
                  num_opts=mis_opts.length;
                  document.formulariol.tentieuchi.length = num_opts;
                  for(i=0; i<num_opts;i++){
                    document.formulariol.tentieuchi.options[i].value=mis_opts[i];
                    document.formulariol.tentieuchi.options[i].text=mis_opts[i];
                }
                }else{
                  document.formulariol.tentieuchi.length = 1;
                  document.formulariol.tentieuchi.options[0].value="-";
                  document.formulariol.tentieuchi.options[0].text="-";
                }
                document.formulariol.tentieuchi.options[0].selected = true;             
              }

            </script>
            <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
          </div>
          <!-- /.box -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
