@extends('core::v1.admin.master')

@section('breadcrumbs')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('admin.role.index') }}">{{ __('acl::role.index.page_title') }}</a></li>
                    </ol>
                </div>
                <h4 class="page-title">{{ __('acl::role.index.page_title') }}</h4>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="mb-2">
                    <div class="row">
                        <div class="col-12 text-sm-center form-inline">
                            <div class="form-group mr-2">
                                <a id="demo-btn-addrow" class="btn btn-primary" href="{{ route('admin.role.create') }}"><i class="mdi mdi-plus-circle mr-2"></i> Add New Role</a>
                            </div>
                            <div class="form-group">
                                <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-centered table-striped table-bordered mb-0 toggle-circle">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>{{ __('acl::role.name') }}</th>
                            <th>{{ __('acl::role.display_name') }}</th>
                            <th>{{ __('acl::role.created_at') }}</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                        <tr>
                            <td><a href="{{ route('admin.role.edit', $item->id) }}">{{ $item->id }}</a></td>
                            <td><a href="{{ route('admin.role.edit', $item->id) }}">{{ $item->name }}</a></td>
                            <td>{{ $item->display_name }}</td>
                            <td>{{ $item->created_at }}</td>
{{--                                <td><span class="tag tag-success">Approved</span></td>--}}
                            <td class="text-right">
                                @admincan('acl.admin.role.edit')
                                <a href="{{ route('admin.role.edit', $item->id) }}" class="btn btn-success-soft btn-sm mr-1" style="background-color: rgb(211 250 255); color: #0fac04; width: 32px;border-color: rgb(167 255 247); border: 1px solid">
                                    <i class="fas fa-pencil-alt" style="font-size: 15px; margin-left: -5px; margin-top: 5px"></i>
                                </a>
                                @endadmincan

                                <x-button-delete-v1 url="{{ route('admin.role.destroy', $item->id) }}"></x-button-delete-v1>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <div class="float-right">
                        {{ $items->links() }}
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop
