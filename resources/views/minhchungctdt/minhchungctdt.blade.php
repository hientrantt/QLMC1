@extends('layouts.dash')
@section('section')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Danh Sách Minh Chứng CTDT
            </h1>

        </section>

        <!-- Main content -->
        <section class="invoice">
            <!-- Table row -->
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th style="width:10%">Tên Minh Chứng</th>
                                <th>Nơi Ban Hành</th>
                                <th>Ngày Ban Hành</th>
                                <th>CTDT</th>
                                <th>Số Hiệu</th>
                                <th>Tiêu Chuẩn</th>
                                <th>Tiêu Chí</th>
                                <th class="col-2 col-sm-3">Nội Dung</th>
                                <th colspan="3">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->tenminhchung }}</td>
                                    <td>{{ $row->noibanhanh }}</td>
                                    <td>{{ $row->ngaybanhanh }}</td>
                                    <td>{{ $row->tenctdt }}</td>
                                    <td>{{ $row->sohieu }}</td>
                                    <td>{{ $row->tentieuchuan }}</td>
                                    <td>{{ $row->tentieuchi }}</td>
                                    <td>{{ $row->noidung }}</td>

                                    <td>
                                        <a href="{{ url('/uploads') }}/{{ $row->hash_file }}"
                                            class="glyphicon glyphicon-download" download="{{ $row->file }}"></a>
                                    </td>

                                    <td>
                                        <a href="{{ url('/suaminhchungctdt') }}/{{ $row->id }}"
                                            class="glyphicon glyphicon-edit"></a>
                                    </td>
                                    <td> <a href="{{ url('/xoaminhchungctdt') }}/{{ $row->id }}"
                                            onclick="return  confirm(' Bạn có chắc muốn xóa minh chứng này chứ!')"
                                            class="glyphicon glyphicon-remove"></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
        <div class="clearfix"></div>
    </div>
@stop
