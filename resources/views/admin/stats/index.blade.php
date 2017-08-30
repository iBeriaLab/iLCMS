@extends('admin.layouts.main')

@section('title', 'პოსტები')
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



                <div class="panel panel-flat">

                    <table class="table text-nowrap">

                        <tbody>
                        <tr class="active border-double">
                            <td class="font1" colspan="2">სტატიების სტატესტიკა</td>
                            <td class="text-right">
                                <span class="badge bg-blue">ddd</span>
                            </td>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td class="text-center">
                                    <h6 class="no-margin">{{ Counter::show('post', $post->id) }} <small class="display-block text-size-small no-margin font1">ნახვა</small></h6>
                                </td>
                                <td>
                                    <div class="media-left media-middle">
                                        <a href="{{ url('/app/post', $post->id) }}" class="btn bg-teal-400 btn-icon btn-xs">
                                            <strong class="no-margin text-bold font1">{{ str_limit($post->title, 1, '') }}</strong>
                                        </a>
                                    </div>

                                    <div class="media-body">
                                        <a href="{{ url('/app/post', $post->id) }}" class="display-inline-block text-default text-semibold letter-icon-title font1"> <strong>{{ $post->title }}</strong></a>
                                        <div class="text-muted text-size-small font1">
                                            @if ($post->status == 1)
                                                <span class="status-mark border-green position-left"></span> <small>გამოქვეყნებული</small>
                                            @elseif ($post->status == 0)
                                                <span class="status-mark border-danger position-left"></span> <small>გამოუქვეყნებელი</small>
                                            @else
                                                <span class="status-mark border-blue position-left"></span>
                                            @endif


                                        </div>
                                    </div>
                                </td>

                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="{{ url('/app/stats', $post->id) }}"><i class="icon-undo"></i> სრული სტატესტიკა</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach







                        </tbody>
                    </table>
                </div>

                {{ $posts->links() }}





            </div>






        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->
    @endsection