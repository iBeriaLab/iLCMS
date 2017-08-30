@extends('admin.layouts.main')

@section('title', 'სტატიები კატეგორიის მიხედვით')
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

        @include('admin.layouts.postsidebar')




        <!-- Main content -->
            <div class="content-wrapper">














                <!-- Marketing campaigns -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title font1"> <i class="icon-menu6"></i>

                                {{ $category->name }}
                        </h6>
                        <div class="heading-elements">
                            <span class="label bg-success heading-text">{{ \App\Posts::where('status','=','1')->count() }} აქტიური</span>

                        </div>
                    </div>



                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                            <tr>
                                <th class="font1">სათაური</th>
                                <th class="col-md-2 font1">აღწერა</th>
                                <th class="col-md-2 font1">კატეგორია</th>
                                <th class="col-md-2 font1">ავტორი</th>
                                <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($posts as $post)

                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="{{ url('/app/post', $post->id) }}"><img src="{{ url('/uploads/posts', $post['image']) }}" class="img-circle img-xs" alt=""></a>
                                        </div>
                                        <div class="media-left">
                                            <div class=""><a href="{{ url('/app/post', $post->id) }}" class="text-semibold font1"><strong>{!!  $post['title'] !!}</strong></a></div>
                                            <div class="text-muted text-size-small">


                                                @if ($post->status == 1)
                                                    <span class="status-mark border-green position-left"></span>
                                                @elseif ($post->status == 0)
                                                    <span class="status-mark border-danger position-left"></span>
                                                @else
                                                    <span class="status-mark border-blue position-left"></span>
                                                @endif

                                                {{ date( "d M", strtotime($post['created_at']) ) }}
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                    <span class="text-muted">
                                        {{ strip_tags(str_limit($post['body'],40)) }}
                                    </span>
                                    </td>

                                    <td><small class="text-muted font1">

                                            {{$post->category->name}}

                                        </small></td>
                                    <td><span class="label bg-blue">{{ $post->author->name }}</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
                                                    <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
                                                    <li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                            @endforeach


                            </tbody>
                        </table>
                    </div>



                </div>
                <!-- /marketing campaigns -->


                {{ $posts->links() }}



            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

















@endsection

@section('js')


    <script type="text/javascript">
        CKEDITOR.replace(jQuery('.ckeditor'));
    </script>
@stop