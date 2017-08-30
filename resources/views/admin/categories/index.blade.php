@extends('admin.layouts.main')

@section('title', 'კატეგორიები')
@show
@section('js')
    <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
    <script>
        $('.children').on('click', function (event) {
            document.getElementById("children").style.display = "inline-block";
        });
    </script>
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



                <div class="panel panel-flat">

                    <table class="table text-nowrap">

                        <tbody>
                        <tr class="active border-double">
                            <td class="font1" colspan="2"><h6 class="panel-title font1"> <i class="icon-menu6"></i> კატეგორიები </h6></td>
                            <td class="text-right">
                                <span class="badge bg-blue">{{ $categories->count() }}</span>
                            </td>
                        </tr>
                        @foreach($categories as $parent)
                            @if ($parent->parent == null)
                                @if ($parent->children->count() == null)
                                    <tr>
                                    @else
                            <tr data-toggle="collapse" data-target="#children" class="clickable">
                                @endif
                                <td class="text-center">
                                    <h6 class="no-margin" style="cursor: pointer;">
                                        {{ $parent->children->count() }}
                                        <small class="display-block text-size-small no-margin font1">
                                        ქვე <br/> კატეგორია
                                        </small>
                                    </h6>
                                </td>
                                <td>
                                    <div class="media-left media-middle">
                                        <a href="{{ url('/app/post') }}" class="btn bg-teal-400 btn-icon btn-xs">
                                            <strong class="no-margin text-bold font1">{{ str_limit($parent->name, 1, '') }}</strong>
                                        </a>
                                    </div>

                                    <div class="media-body">
                                        <a href="{{ url('/app/post') }}" class="display-inline-block text-default text-semibold letter-icon-title font1">
                                            <strong>{{ $parent->name }}</strong> <small>{{ $parent->parent['id'] }}</small>
                                        </a>
                                        <div class="text-muted text-size-small font1">
                                            <small>{{ $parent->description }}</small>
                                        </div>

                                    </div>
                                </td>

                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="{{ url('/app/stats') }}"><small class="font1"><i class="icon-pencil5"></i> შესწორება</small></a></li>
                                                <li><a href="{{ url('/app/stats') }}"><small class="font1 text-danger"><i class="icon-trash text-danger"></i> წაშლა</small></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @endif

                            @if ($parent->children->count())
                                <tr id="children" class="collapse" style="background-color: #eeeded;">
                                    @foreach ($parent->children as $child)

                                        <td class="text-center">
                                            
                                        </td>
                                        <td>
                                            <div class="media-body">
                                                <a href="{{ url('/app/post') }}" class="display-inline-block text-default text-semibold letter-icon-title font1">
                                                    <strong>{{ $child->name }}</strong> <small>{{ $child->parent['name'] }}</small>
                                                </a>
                                                <div class="text-muted text-size-small font1">
                                                    <small>{{ $child->description }}</small>
                                                </div>

                                            </div>
                                        </td>

                                        <td class="text-center">
                                            <ul class="icons-list">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="{{ url('/app/stats') }}"><i class="icon-undo"></i> სრული სტატესტიკა</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </td>
                                    @endforeach
                                </tr>
                            @endif
                        @endforeach







                        </tbody>
                    </table>
                </div>


                <select data-placeholder="Select product" style="width:350px;" class="chosen-select" tabindex="5">
                    <option value=""></option>
                    @foreach ($categories as $category)
                        @if($category->parent === null)
                            <optgroup value="{{$category->id }}" label="{{ $category->name }}">
                            <option value="{{$category->id }}">{{ $category->name }}</option>

                        @endif
                    @foreach ($category->children as $child)
                                <option>{{$child->name}}</option>
                    @endforeach
                            </optgroup>
                    @endforeach
                </select>


            </div>






        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->
@endsection

