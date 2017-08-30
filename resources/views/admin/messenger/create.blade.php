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




    <h1>Create a new message</h1>
    <form action="{{ route('messages.store') }}" method="post">
        {{ csrf_field() }}

            <!-- Subject Form Input -->
            <div class="form-group">
                <input type="hidden" class="form-control" name="subject" placeholder="Subject"
                       value="{{ Auth::user()->name}} {{Auth::user()->lastname }}">
            </div>

            <!-- Message Form Input -->
            <div class="form-group">
                <label class="control-label font1">შეტყობინება</label>
                <textarea name="message" class="form-control ckeditor">{{ old('message') }}</textarea>
            </div>

            @if($users->count() > 0)
                <div class="form-group">
                    @foreach($users as $user)


                            <label title="{{ $user->name }}">
                                <input type="checkbox" name="recipients[]" value="{{ $user->id }}">
                                {!!$user->name!!}
                            </label>

                    @endforeach
                </div>
            @endif
    
            <!-- Submit Form Input -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Submit</button>
            </div>

    </form>









            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

@stop
