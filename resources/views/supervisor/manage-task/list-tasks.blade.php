@extends('supervisor.layouts.app')
@section('css')
    <link rel="stylesheet" type="text/css"
          href="{{ asset('bower_components/bower_package/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/supervisor_list_courses.css') }}">
@endsection
@section('content')
    <div id="main" class="layout-column flex">
        <div id="content" class="flex ">
            <div class="d-flex flex fixed-content">
                <div class="d-flex flex fixed-content">
                    <div class="fade aside aside-sm" id="content-aside">
                        <div class="modal-dialog d-flex flex-column w-md bg-body" id="user-nav">
                            <div class="navbar">
                                <span class="text-md mx-2">{{ trans('supervisor.list_subjects.group') }}</span>
                            </div>
                            <div class="scrollable hover">
                                <div class="sidenav p-2">
                                    <nav class="nav-active-text-primary" data-nav>
                                        <ul class="nav">
                                            <li>
                                                <a href="#">
                                                    <span class="nav-text">{{ trans('supervisor.list_subjects.all') }}</span>
                                                </a>
                                            </li>
                                            <div class="sidenav h-100 modal-dialog bg-light">
                                                <div class="flex scrollable hover">
                                                    <div class="nav-active-text-primary" data-nav>
                                                        <ul class="nav ">
                                                            <li>
                                                                <a href="#">
                                                                    <span class="nav-text">
                                                                        {{ trans('supervisor.app.course') }}
                                                                    </span>
                                                                    <span class="nav-caret"></span>
                                                                </a>
                                                                <ul class="nav-sub nav-mega">
                                                                    <li>
                                                                        <a href="#" class="">
                                                                            <span class="nav-text">
                                                                                {{ trans('supervisor.app.subject') }}
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="">
                                                                            <span class="nav-text">
                                                                                {{ trans('supervisor.app.subject') }}
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="page-content page-container" id="page-content">
                            <div class="padding">
                                <div class="table-responsive">
                                    <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <form class="flex">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-theme
                                                    form-control-sm search" placeholder="Search" required>
                                                <span class="input-group-append">
                                                    <button class="btn btn-white no-border btn-sm" type="button">
                                                        <span class="d-flex text-muted"><i data-feather="search"></i></span>
                                                    </button>
                                                </span>
                                            </div>
                                        </form>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="datatable"
                                                    class="table table-theme table-row v-middle dataTable no-footer"
                                                    role="grid"
                                                    aria-describedby="datatable_info">
                                                    <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc column-width27" tabindex="0" aria-controls="datatable"
                                                            rowspan="1" colspan="1" aria-sort="ascending"
                                                            aria-label="ID: activate to sort column descending">
                                                            <span class="text-muted">
                                                                {{ trans('supervisor.list_tasks.id') }}
                                                            </span>
                                                        </th>
                                                        <th class="sorting column-width39" tabindex="0" aria-controls="datatable" rowspan="1"
                                                            colspan="1" aria-label="Owner: activate to sort column ascending">
                                                            <span class="text-muted">
                                                                {{ trans('supervisor.list_tasks.created_at') }}
                                                            </span>
                                                        </th>
                                                        <th class="sorting column-width768" tabindex="0" aria-controls="datatable" rowspan="1"
                                                            colspan="1" aria-label="Project: activate to sort column ascending">
                                                            <span class="text-muted">
                                                                {{ trans('supervisor.list_tasks.subject') }}
                                                            </span>
                                                        </th>
                                                        <th class="sorting column-width34" tabindex="0" rowspan="1"
                                                            aria-controls="datatable" colspan="1" aria-label="Tasks">
                                                            <span class="text-muted d-none d-sm-block">
                                                                {{ trans('supervisor.list_tasks.trainee') }}
                                                            </span>
                                                        </th>
                                                        <th class="sorting column-width34" rowspan="1" colspan="1" aria-label="Tasks">
                                                            <span class="text-muted d-none d-sm-block">
                                                                {{ trans('supervisor.list_tasks.status') }}
                                                            </span>
                                                        </th>
                                                        <th class="sorting_disabled column-width17" rowspan="1" colspan="1">
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd" data-id="1" role="row">
                                                            <td class="sorting_1 column-id">
                                                                <small class="text-muted">
                                                                    {{--ID--}}
                                                                </small>
                                                            </td>
                                                            <td class="flex">
                                                                <a href="#" class="item-title text-color ">
                                                                    {{--created at--}}
                                                                </a>
                                                            </td>
                                                            <td class="flex">
                                                                <a href="#" class="item-title text-color ">
                                                                    {{--subject--}}
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <span class="item-amount d-none d-sm-block text-sm ">
                                                                    {{--trainee--}}
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span class="item-amount d-none d-sm-block text-sm ">
                                                                    {{--status--}}
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <a href="#">
                                                                    <span class="nav-icon"><i data-feather='eye'></i></span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled" id="datatable_previous">
                                                            <a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0"
                                                               class="page-link">{{ trans('supervisor.list_subjects.previous') }}</a></li>
                                                            <li class="paginate_button page-item ">
                                                                <a href="#" aria-controls="datatable" data-dt-idx="1"
                                                                    tabindex="0" class="page-link">
                                                                    {{--Trang--}}
                                                                </a>
                                                            </li>
                                                        <li class="paginate_button page-item next" id="datatable_next">
                                                            <a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0"
                                                               class="page-link">{{ trans('supervisor.list_subjects.next') }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('bower_components/bower_package/typeahead.js/dist/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('bower_components/bower_package/js/plugins/typeahead.js') }}"></script>
    <script
        src="{{ asset('bower_components/bower_package/jquery-fullscreen-plugin/jquery.fullscreen-min.js') }}"></script>
    <script src="{{ asset('bower_components/bower_package/js/plugins/fullscreen.js') }}"></script>
    <script src="{{ asset('bower_components/bower_package/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script
        src="{{ asset('bower_components/bower_package/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('bower_components/bower_package/js/plugins/datatable.js') }}"></script>
@endsection
