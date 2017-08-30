@extends('admin.layouts.main')

@section('title', 'პოსტები')
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


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h6 class="panel-title"><a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                        <div class="heading-elements">
                            <!--<button type="button" class="btn btn-primary heading-btn legitRipple">Button</button>-->
                        </div>
                    </div>

                    <div class="panel-body">


                        {{-- Using the Laravel HTML Form Collective to create our form --}}
                        {{ Form::open(array('route' => 'posts.store', 'enctype'=>'multipart/form-data', 'files' => true)) }}

                        <div class="form-group">
                            <div class="col-md-6">
                                {{ Form::label('title', 'სათაური') }}
                                {{ Form::text('title', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="col-md-6">
                                {{ Form::label('category', 'საკვანძო სიტყვები') }}
                                {{ Form::text('meta', null, array('class' => 'form-control', 'id' => 'tokenfield', 'value' => '')) }}

                                <script type="application/javascript">

                                    $('#tokenfield').tokenfield({
                                        autocomplete: {
                                            source: ['red','blue','green','yellow','violet','brown','purple','black','white'],
                                            delay: 100
                                        },
                                        showAutocompleteOnFocus: true
                                    })
                                </script>
                            </div>
                            <br><br><br><br>
                            <div class="col-md-12">
                                {{ Form::textarea('body', null, array('class' => 'ckeditor')) }}
                            </div>





                                            <div class="col-sm-6">

                                                {{ Form::file('image', array('class' => 'form-control')) }}



                                                {{ Form::hidden('author_id', Auth::user()->id, array('class' => 'form-control', 'name' => 'author_id')) }}

                                            </div>

                                            <div class="col-sm-6">


                                                {{ Form::label('status', 'გამოქვეყნება') }}


                                                {!! Form::checkbox('status', 1, array('class' => 'switchery switchery-default')) !!}
                                            </div>




                            <br>
                            <div class="col-md-12">
                                {{ Form::submit('პოსტის დამატება', array('class' => 'btn btn-success btn-lg btn-block')) }}
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

@section('js')

    <script type="text/javascript" src="{{ url('assets/js/pages/editor_ckeditor.js') }}"></script>

    <script type="text/javascript">
        CKEDITOR.replace(jQuery('.ckeditor'));
    </script>
@stop