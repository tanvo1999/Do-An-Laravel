@extends('layout')

    @section('js')
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
    @endsection

    @section('main-content')

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3 header-title">Thêm mới câu hỏi</h4>
                        <form action="{{ route('cau-hoi.xl-them-moi') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nội dung</label>
                                <input type="text" class="form-control" 
                                id="noi_dung" name="noi_dung" placeholder="Nội dung"> <br/>
                                <label for="exampleInputEmail1">Lĩnh vực</label>
                                <input type="text" class="form-control" 
                                id="linh_vuc_id" name="linh_vuc_id" placeholder="Lĩnh vực"> <br/>
                                <label for="exampleInputEmail1">Phương án A</label>
                                <input type="text" class="form-control" 
                                id="phuong_an_a" name="phuong_an_a" placeholder="Phương án A"> <br/>
                                <label for="exampleInputEmail1">Phương án B</label>
                                <input type="text" class="form-control" 
                                id="phuong_an_b" name="phuong_an_b" placeholder="Phương án B"> <br/>
                                <label for="exampleInputEmail1">Phương án C</label>
                                <input type="text" class="form-control" 
                                id="phuong_an_c" name="phuong_an_c" placeholder="Phương án C"> <br/>
                                <label for="exampleInputEmail1">Phương án D</label>
                                <input type="text" class="form-control" 
                                id="phuong_an_d" name="phuong_an_d" placeholder="Phương án D"> <br/>
                                <label for="exampleInputEmail1">Đáp án</label>
                                <input type="text" class="form-control" 
                                id="dap_an" name="dap_an" placeholder="Đáp án">
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