@extends('core::admin.master')

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('acl::role.create.page_title') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.role.index') }}">{{ __('acl::role.create.breadcrumb') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('acl::role.create.index') }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <form role="form" action="{{ route('admin.role.store') }}" method="POST">
            @csrf
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('acl::role.create.page_title') }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        @include('acl::admin.role._field')

                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{ __('core::button.save') }}</button>
                            <button class="btn btn-secondary" name="continue" value="1" type="submit">{{ __('core::button.save_and_edit') }}</button>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-6">
{{--                    <dnsoft-tree></dnsoft-tree>--}}
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('acl::role.permissions') }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <dnsoft-tree></dnsoft-tree>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </form>
    </div>
@stop