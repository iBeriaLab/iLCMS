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





            @foreach($videos as $video)
                <div class="col-md-4">
                    <a href="{{ url('app/video', $video->id->videoId) }}">
                    <div class="panel panel-body bg-pink-400" style="background-image: url({{ $video->snippet->thumbnails->medium->url }});">
                        <div class="media no-margin">
                            <div class="media-left media-middle">
                                <i class=" icon-youtube3 icon-2x text-danger"></i>
                            </div>

                            <div class="media-body text-right" style="background: #000; opacity: 0.7;">
                                <h6 class="media-heading text-semibold">{{ str_limit($video->snippet->title, 20) }}</h6>
                                <span class="text-muted">{{ str_limit($video->snippet->description, 20) }}</span>
                            </div>
                        </div>
                    </div>
                    </a>

                </div>

            @endforeach









            </div>






        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

















@endsection

@section('js')


@stop