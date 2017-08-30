@extends('admin.layouts.main')

@section('title', 'კატეგორიები')
@show
@section('js')
    <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
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



                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h6 class="panel-title"><a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                        <div class="heading-elements">
                            <!--<button type="button" class="btn btn-primary heading-btn legitRipple">Button</button>-->
                        </div>
                    </div>

                    <div class="panel-body">





                    {{ Form::open(array('route' => 'categories.store', 'enctype'=>'multipart/form-data')) }}

                    <div class="form-group">
                        <div class="col-md-6">
                            {{ Form::label('name', 'სახელი') }}
                            {{ Form::text('name', null, array('class' => 'form-control')) }}

                            {{ Form::label('description', 'აღწერა') }}
                            {{ Form::text('description', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="col-md-6">
                            {{ Form::label('parent_id', 'მშობელი') }}
                            {!! Form::select('parent_id', $categories, null, ['multiple' => true, 'class' => 'form-control']) !!}

                        </div>





                        <br>
                        <div class="col-md-12">
                            {{ Form::submit('კატეგორიის დამატება', array('class' => 'btn btn-success btn-lg btn-block')) }}
                            {{ Form::close() }}
                        </div>
                    </div>
                    </div>




                </div>




            </div>






        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->
@endsection

