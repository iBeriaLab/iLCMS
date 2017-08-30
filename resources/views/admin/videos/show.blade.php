@extends('admin.layouts.main')

@section('title', 'ვიდეოები')
@show

@section('content')

    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <div class="page-title">
                    <h4>
                        <a class="text-purple-400" href="{{ redirect()->back()->getTargetUrl() }}"> <i class="icon-arrow-left52 position-left"></i></a>
                        <a class="text-purple-400" href="{{ url('/') }}/app"><span class="text-semibold font1">მთავარი</span></a> <small class="text-grey"> @yield('title')</small>
                        <small class="display-block">გამარჯობა, {{Auth::user()->name}}!</small>
                    </h4>
                </div>
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








                <div class="panel panel-flat timeline-content">
                    <div class="panel-heading">
                        <h6 class="panel-title">{{ $video->snippet->title }}<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                        <div class="heading-elements">
                            <span class="heading-text"><i class="icon-checkmark-circle position-left text-success"></i> Yesterday, 7:52 am</span>
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-arrow-down12"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-user-lock"></i> Hide user posts</a></li>
                                        <li><a href="#"><i class="icon-user-block"></i> Block user</a></li>
                                        <li><a href="#"><i class="icon-user-minus"></i> Unfollow user</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="icon-embed"></i> Embed post</a></li>
                                        <li><a href="#"><i class="icon-blocked"></i> Report this post</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="video-container content-group">
                            <iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://www.youtube.com/embed/{{ $video->id }}" webkitallowfullscreen=""></iframe>
                        </div>

                        {{ $video->snippet->description }}
                    </div>

                    <div class="panel-footer panel-footer-transparent"><a class="heading-elements-toggle"><i class="icon-more"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline list-inline-condensed heading-text">

                                <li><a href="#" class="text-default"><i class="icon-thumbs-up3 text-success-400 position-left"></i> {{ $video->statistics->likeCount }}</a></li>
                                <li><a href="#" class="text-default"><i class="icon-thumbs-down3 text-danger-400 position-left"></i> {{ $video->statistics->dislikeCount }}</a></li>
                            </ul>

                            <ul class="heading-btn pull-right">
                                <ul class="list-inline list-inline-condensed heading-text">
									<li><a href="#" class="text-default"><i class="icon-eye4 position-right"></i> {{ $video->statistics->viewCount }}</a></li>
									<li><a href="#" class="text-default"><i class="icon-heart5 text-danger-400 position-right"></i> {{ $video->statistics->favoriteCount }}</a></li>
									<li><a href="#" class="text-default"><i class="icon-bubbles10 position-right"></i> {{ $video->statistics->commentCount }}</a></li>
                                </ul>
                        </div>
                    </div>
                </div>






            </div>






        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

















@endsection

@section('js')


@stop