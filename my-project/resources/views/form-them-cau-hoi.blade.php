@extends('layout')

    @section('js')
    <!-- third party js -->
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
    <!-- third party js ends -->
    <!-- Sweet Alerts js -->
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Sweet alert init js-->
    <script src="{{ asset('assets/js/pages/sweet-alerts.init.js') }}"></script>
    <!-- Datatables init -->

    <script src="{{ asset('assets/libs/jquery-nice-select/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/libs/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>

    <!-- Init js-->
    <script src="{{ asset('assets/js/pages/form-advanced.init.js') }}"></script>
    @endsection

    @section('css')
    <!-- third party css -->
    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->


    <!--   !-- Plugins css -->
    
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
                        <h4 class="mb-3 header-title">Thêm mới câu hỏi</h4>

                        <form action="{{ route('cau-hoi.xl-them-moi') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nội dung câu hỏi</label>
                                <input type="text" class="form-control" 
                                id="noi_dung" name="noi_dung" placeholder="Nội dung câu hỏi">
                            </div>
                            
                              <div class="form-group">
                                   <!--  <p class="text-muted font-13 mt-12 mt-md-12"> -->
                                    <label for="linh_vuc">Tên lĩnh vực</label>  
                                    <!-- </p> -->
                                    <select class="selectpicker" data-live-search="true"  data-style="btn-light" id="linh_vuc" name="linh_vuc">
                                        <option>Chọn tên lĩnh vực</option>
                                           @foreach($dsLinhVuc as $linhVuc)
                                                <option value="{{ $linhVuc->id }}">{{ $linhVuc->ten_linh_vuc }}</option>
                                           @endforeach
                                       
                                    </select>
                                </div> 

                            <div class="form-group">
                                <label for="phuong_an_a">Phương án A</label>
                                <input type="text" class="form-control" 
                                id="phuong_an_a" name="phuong_an_a" placeholder="Phương án">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phương án B</label>
                                <input type="text" class="form-control" 
                                id="phuong_an_b" name="phuong_an_b" placeholder="Phương án">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phương án C</label>
                                <input type="text" class="form-control" 
                                id="phuong_an_c" name="phuong_an_c" placeholder="Phương án">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phương án D</label>
                                <input type="text" class="form-control" 
                                id="phuong_an_d" name="phuong_an_d" placeholder="Phương án">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Đáp án</label>
                                <input type="text" class="form-control" 
                                id="dap_an" name="dap_an" placeholder="đáp án">
                            </div>
                           <button onclick="myFuncion()" type="submit" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-content-save"></i> Lưu</button>
                        </form>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            <!-- end col -->

        </div>
        <script>
            function thongbaoxoa() {
                Swal.fire({
                    title: 'Bạn có Muốn Xóa Không?',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ok. Xóa nó!',
                    cancelButtonText:'Không'
                    }).then((result) => {
                    if (result.value) {
                        open("/linh-vuc") 
                    }
                })
            }
            function myFuncion(){
                swal.fire({"Good job!", "You clicked the button!", "success")
            }
        </script>
    @endsection