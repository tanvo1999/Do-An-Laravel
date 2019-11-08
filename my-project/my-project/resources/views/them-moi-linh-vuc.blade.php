@extends('layout')

    @section('main-content')

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3 header-title">Thêm mới lĩnh vực</h4>

                        <form action="{{ route('linh-vuc.xl-them-moi', ['type' => 'xls']) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên lĩnh vực</label>
                                <input type="text" class="form-control" 
                                id="ten_linh_vuc" name="ten_linh_vuc" placeholder="tên lĩnh vực">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <!-- <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkmeout0">
                                    <label class="custom-control-label" for="checkmeout0">Check me out !</label>
                                </div>
                            </div> -->
                           <button type="submit" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-content-save"></i> Lưu</button>
                        </form>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            <!-- end col -->

        </div>

    @endsection
