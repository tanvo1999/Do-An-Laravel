@extends('layout')

    @section('js')

    <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>

    <script src="{{ asset('assets/libs/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>

        <!-- Init js-->
    <script src="{{ asset('assets/js/pages/form-advanced.init.js') }}"></script>

    <script src="https://unpkg.com/[email protected]/dist/sweetalert2.all.js"></script>

    <script src="https://unpkg.com/[email protected]/dist/sweetalert2.all.js"></script>


    <!-- third party js -->
    <!-- third party js ends -->
    <!-- Sweet Alerts js -->
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Sweet alert init js-->
    <script src="{{ asset('assets/js/pages/sweet-alerts.init.js') }}"></script>
    <!-- Datatables init -->
    @endsection
    @section('css')
    <!-- third party css -->
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->


    <!-- third party css -->
    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- Plugins css -->
        <link href="{{ asset('assets/libs/jquery-nice-select/nice-select.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" type="text/css" />
    @endsection

    @section('main-content')

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3 header-title">Cập nhật câu hỏi</h4>
                        <form action="{{ route('cau-hoi.xl-cap-nhat',$cauHoi->id) }}" method="POST">
                            @if(count($errors) > 0)
                            <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{ $err }}<br/>
                             @endforeach
                            </div>
                            @endif

                            @if(session('thongbao'))
                                <div class="alert alert-success">
                                    {{session('thongbao')}}
                                </div>

                            @endif
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nội dung</label>
                                <input type="text" class="form-control" 
                                id="noi_dung" name="noi_dung" value="{{ $cauHoi->noi_dung }}" > <br/>
                               <!--  <label for="exampleInputEmail1">Lĩnh vực</label>
                                <input type="text" class="form-control" 
                                id="linh_vuc_id" name="linh_vuc_id" placeholder="Lĩnh vực"> <br/> -->
                                <div class="form-groups">
                                    <!-- <label for="linh-vuc">Chọn tên lĩnh vực</label>
                                    
                                    <select id="linh_vuc_id" name="linh_vuc_id" class="selectpicker" data-live-search="true"  data-style="btn-light"  >
                                         <option>Chọn lĩnh vực</option>
                                        @foreach($dsLinhVuc as $linhVuc)
                                            <option value="{{ $linhVuc->id }}" >{{ $linhVuc->ten_linh_vuc}}</option>
                                        @endforeach
                                       
                                    </select> -->

                                    <label for="exampleInputEmail1">Tên lĩnh vực</label>
                                    <input type="text" class="form-control" 
                                    id="linh_vuc_id" name="linh_vuc_id" value="{{ $cauHoi->linh_vuc_id }}"><br/>
                                    <!-- <option value="{{ $cauHoi->linh_vuc_id }}" >{{ $linhVuc->ten_linh_vuc}}</option> -->

                                </div>
                                <label for="exampleInputEmail1">Phương án A</label>
                                <input type="text" class="form-control" 
                                id="phuong_an_a" name="phuong_an_a" value="{{ $cauHoi->phuong_an_a }}"> <br/>
                                <label for="exampleInputEmail1">Phương án B</label>
                                <input type="text" class="form-control" 
                                id="phuong_an_b" name="phuong_an_b"value="{{ $cauHoi->phuong_an_b }}"> <br/>
                                <label for="exampleInputEmail1">Phương án C</label>
                                <input type="text" class="form-control" 
                                id="phuong_an_c" name="phuong_an_c" value="{{ $cauHoi->phuong_an_c }}"> <br/>
                                <label for="exampleInputEmail1">Phương án D</label>
                                <input type="text" class="form-control" 
                                id="phuong_an_d" name="phuong_an_d"value="{{ $cauHoi->phuong_an_d }}"> <br/>
                                <label for="exampleInputEmail1">Đáp án</label>
                                <input type="text" class="form-control" 
                                id="dap_an" name="dap_an" value="{{ $cauHoi->dap_an }}">
                            </div>
                            <button type="submit" class="btn btn-info waves-effect waves-light">
                                <i class="mdi mdi-content-save" ></i> Lưu
                            </button>
                        </form>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            <!-- end col -->
        </div>
    @endsection