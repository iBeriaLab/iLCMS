@extends('admin.layouts.main')

@section('title', 'ძებნა')
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
                    <a href="#" class="btn btn-link btn-float has-text text-size-small"><i class="icon-bars-alt text-indigo-400"></i><span>Statistics</span></a>
                    <a href="#" class="btn btn-link btn-float has-text text-size-small"><i class="icon-calculator text-indigo-400"></i> <span>Invoices</span></a>
                    <a href="#" class="btn btn-link btn-float has-text text-size-small"><i class="icon-calendar5 text-indigo-400"></i> <span>Schedule</span></a>
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



                @if (count($articles) === 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h6 class="panel-title"><a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                            <div class="heading-elements">
                                <!--<button type="button" class="btn btn-primary heading-btn legitRipple">Button</button>-->
                            </div>
                        </div>

                        <div class="panel-body">

                    ჩანაწერი ვერ მოიძებნა...

                        </div>
                    </div>


                @elseif (count($articles) >= 1)

                    @foreach($articles as $article)



                        <div class="col-sm-4">
                            <div class="panel panel-body">
                                <div class="media">
                                    <a href="{{ url('/app/post', $article->id) }}" class="media-left">
                                        <img src="{{ url('/uploads/posts', $article->image) }}" class="img-circle img-lg" alt="">
                                    </a>

                                    <div class="media-body">
                                        <h7 class="media-heading">{{ $article->title }}</h7>
                                        <span class="text-muted">{{ strip_tags(str_limit($article->body, 10)) }}</span>
                                    </div>

                                    <div class="media-right media-middle">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-comment-discussion pull-right"></i> Start chat</a></li>
                                                    <li><a href="#"><i class="icon-phone2 pull-right"></i> Make a call</a></li>
                                                    <li><a href="#"><i class="icon-mail5 pull-right"></i> Send mail</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-statistics pull-right"></i> Statistics</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    @endforeach
                @endif


                        <div class="col-md-12">
                    {{ $articles->links() }}
                        </div>


            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->
@endsection