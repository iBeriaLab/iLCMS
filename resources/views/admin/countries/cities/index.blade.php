@extends('admin.layouts.main')

@section('title', 'დედაქალაქები')
@show

@section('content')

    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4>
                    <a class="text-purple-400" href="{{ redirect()->back()->getTargetUrl() }}"> <i class="icon-arrow-left52 position-left"></i></a>
                    <a class="text-purple-400" href="{{ url('/') }}/app"><span class="text-semibold font1">მთავარი</span></a> <small class="text-grey"> @yield('title')</small>
                    <small class="display-block">გამარჯობა, {{Auth::user()->name}}!</small>
                </h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <button data-toggle="modal" data-target="#addpost" class="btn bg-purple-400 btn-raised legitRipple font1"><i class="icon-diff-added position-left"></i> პოსტის დამატება</button>
                    <button data-toggle="modal" data-target="#addcategory" class="btn btn-default btn-raised legitRipple font1"><i class="icon-diff-added position-left"></i> კატეგორიის დამატება</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">



        @include('admin.layouts.mainsidebar')




        <!-- Main content -->
            <div class="content-wrapper">











                <div class="panel">

















                    <!-- ქვეყნები -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title font1">დედაქალაქები</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <table class="table datatable-column-search-selects">
                            <thead>
                            <tr class="font1">
                                <th>დროშა</th>

                                <th>დედაქალაქი</th>

                                <th>ქვეყანა</th>
                                <th>კოდი</th>
                                <th>კონტინენტი</th>
                                <th class="text-center"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($countries as $capital)
                                    <tr>
                                        <td><img style="width: 26px;" src="{{ url('/') }}/images/flags/svg/{{ strtolower($capital['countrycode']) }}.svg" alt="{{ $capital['countryname'] }}"></td>



                                        <td><a href="{{ url('/app/capital', $capital['capitalname']) }}">{{ $capital['capitalname'] }}</a></td>

                                        <td>{{ $capital['countryname'] }}</td>

                                        <td>{{ $capital['countrycode'] }}</td>
                                        <td><span class="label label-info">{{ $capital['continentname'] }}</span></td>
                                        <td class="text-center">
                                            <ul class="icons-list">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <i class="icon-menu9"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                                        <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                                        <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>


                            @endforeach

                            </tbody>

                        </table>
                        <div class="panel-footer"><a class="heading-elements-toggle"><i class="icon-more"></i></a>
                            <div class="heading-elements">
                                <ul class="pagination pagination-flat pagination-xs pull-right">
                                    {{ $countries->links() }}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /ქვეყნები -->











                </div>












            </div>






        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

















@endsection
