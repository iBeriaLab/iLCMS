@extends('admin.layouts.main')
@section('title', 'შეტყობინებები')
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


    @include('admin.messenger.partials.flash')




                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title font1">შეტყობინებები<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                        <div class="heading-elements">
                            <span class="label bg-success heading-text">@include('admin.messenger.unread-count') წაუკითხავი</span>
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-sync"></i> Update data</a></li>
                                        <li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li>
                                        <li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>



                    <div class="table-responsive">
                        <table class="table text-nowrap">

                            <tbody>

                    @each('admin.messenger.partials.thread', $threads, 'thread', 'admin.messenger.partials.no-threads')

                            </tbody>
                        </table>
                    </div>
                </div>




            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

@stop
