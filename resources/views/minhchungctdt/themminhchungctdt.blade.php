@extends('layouts.dash')
@section('section')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thêm Minh Chứng CTDT
            </h1>
            <br>
            {{ Session::get('message') }}
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- left column -->
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Điền thông tin Minh Chứng Cấp CSGD</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="post" action="" name="formulariol" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="box-body">
                        <div class="f-grid">
                            <div class="form-group f-grid-col">
                                <label>Số hiệu</label><small class="span8">Hộp 2- Tiêu chuẩn 1 - Tiêu chí 1.2 - Số
                                    thứ tự 01 </small>
                                <div class="control-group">
                                    <input type="text" name="sohieu" placeholder="H1-1-02-01" class="span8">
                                </div>
                            </div>
                            <div class="form-group f-grid-col">

                                <label>Tên Tiêu chuẩn</label>
                                <div class="control-group">
                                    <select name="tentieuchuan" onchange="chon();">
                                        @for ($i = 1; $i < 11; $i++)
                                            <option value="{{ $i }}">Tiêu Chuẩn {{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="form-group f-grid-col">
                                <label>Tên Tiêu chí</label>
                                <div class="control-group kt">
                                    <select name="tentieuchi" id="">
                                        <option value="-">Tiêu chí 1.1</option>
                                        <option value="-">Tiêu chí 1.2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tiêu Đề Minh Chứng</label>
                            <input type="text" class="form-control" name="tenminhchung" placeholder="Tên minh chứng">
                        </div>
                        <div class="form-group">
                            <label>Nơi ban hành</label>
                            <input type="text" class="form-control" name="noibanhanh" placeholder="Nơi ban hành">
                        </div>
                        <div class="form-group">
                            <label>Ngày ban hành</label>
                            <input type="date" class="span8" name="ngaybanhanh" data-form-field="category"
                                data-placeholder="Select category">
                        </div>
                        <div class="form-group">
                            <label>Tên chương trình đào tạo</label>
                            <input type="text" class="form-control" name="tenctdt" placeholder="Tên CTDT">
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea class="form-control noidung" rows="3" name="noidung" placeholder="Nhập nội dung ..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Chọn File</label>
                            <input name="file" type="file" id="exampleInputFile">

                            <p class="help-block">Chọn file minh chứng của bạn.</p>
                        </div>
                    </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Thêm minh chứng này</button>
            </div>
            </form>
            <script type="text/javascript">
                var opt_1 = new Array("Tiêu chí 1.1", "Tiêu chí 1.2");
                var opt_2 = new Array("Tiêu chí 2.1", "Tiêu chí 2.2", "Tiêu chí 2.3");
                var opt_3 = new Array("Tiêu chí 3.1", "Tiêu chí 3.2", "Tiêu chí 3.3", "Tiêu chí 3.4");
                var opt_4 = new Array("Tiêu chí 4.1", "Tiêu chí 4.2", "Tiêu chí 4.3", "Tiêu chí 4.4", "Tiêu chí 4.5",
                    "Tiêu chí 4.6", "Tiêu chí 4.7");
                var opt_5 = new Array("Tiêu chí 5.1", "Tiêu chí 5.2", "Tiêu chí 5.3", "Tiêu chí 5.4", "Tiêu chí 5.5",
                    "Tiêu chí 5.6", "Tiêu chí 5.7");
                var opt_6 = new Array("Tiêu chí 6.1", "Tiêu chí 6.2", "Tiêu chí 6.3", "Tiêu chí 6.4", "Tiêu chí 6.5");
                var opt_7 = new Array("Tiêu chí 7.1", "Tiêu chí 7.2", "Tiêu chí 7.3", "Tiêu chí 7.4", "Tiêu chí 7.5",
                    "Tiêu chí 7.6");
                var opt_8 = new Array("Tiêu chí 8.1", "Tiêu chí 8.2", "Tiêu chí 8.3", "Tiêu chí 8.4", "Tiêu chí 8.5",
                    "Tiêu chí 8.6", "Tiêu chí 8.7", "Tiêu chí 8.8");
                var opt_9 = new Array("Tiêu chí 9.1", "Tiêu chí 9.2", "Tiêu chí 9.3", "Tiêu chí 9.4", "Tiêu chí 9.5");
                var opt_10 = new Array("Tiêu chí 10.1", "Tiêu chí 10.2", "Tiêu chí 10.3", "Tiêu chí 10.4", "Tiêu chí 10.5");
                var opt_11 = new Array("Tiêu chí 11.1", "Tiêu chí 11.2", "Tiêu chí 11.3");

                function chon() {
                    var tentieuchuan;
                    tentieuchuan = document.formulariol.tentieuchuan[document.formulariol.tentieuchuan.selectedIndex].value;
                    if (tentieuchuan != 0) {
                        mis_opts = eval("opt_" + tentieuchuan);
                        num_opts = mis_opts.length;
                        document.formulariol.tentieuchi.length = num_opts;
                        for (i = 0; i < num_opts; i++) {
                            document.formulariol.tentieuchi.options[i].value = mis_opts[i];
                            document.formulariol.tentieuchi.options[i].text = mis_opts[i];
                        }
                    } else {
                        document.formulariol.tentieuchi.length = 1;
                        document.formulariol.tentieuchi.options[0].value = "-";
                        document.formulariol.tentieuchi.options[0].text = "-";
                    }
                    document.formulariol.tentieuchi.options[0].selected = true;
                }
            </script>
    </div>
    <!-- /.box -->
    <!-- /.row -->
    </section>
    <!-- /.content -->
    </div>
@endsection
