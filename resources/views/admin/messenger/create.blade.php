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





                <div class="panel panel-flat timeline-content">
                    <div class="panel-heading">
                        <h6 class="panel-title">Conversation with James<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-circle-down2"></i>
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
                        <ul class="media-list chat-list content-group">
                            <li class="media date-step">
                                <span>Today</span>
                            </li>
                            <li class="media reversed">
                                <div class="media-body">
                                    <div class="media-content">Thus superb the tapir the wallaby blank frog execrably much since dalmatian by in hot. Uninspiringly arose mounted stared one curt safe</div>
                                    <span class="media-annotation display-block mt-10">Tue, 8:12 am <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
                                </div>
                                <div class="media-right">
                                    <a href="http://iberialab.com/assets/images/placeholder.jpg">
                                        <img src="http://iberialab.com/assets/images/placeholder.jpg" class="img-circle" alt="">
                                    </a>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-left">
                                    <a href="http://iberialab.com/assets/images/placeholder.jpg">
                                        <img src="http://iberialab.com/assets/images/placeholder.jpg" class="img-circle" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="media-content">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
                                    <span class="media-annotation display-block mt-10">Wed, 4:20 pm <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
                                </div>
                            </li>
                            <li class="media reversed">
                                <div class="media-body">
                                    <div class="media-content">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
                                    <span class="media-annotation display-block mt-10">2 hours ago <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
                                </div>
                                <div class="media-right">
                                    <a href="http://iberialab.com/assets/images/placeholder.jpg">
                                        <img src="http://iberialab.com/assets/images/placeholder.jpg" class="img-circle" alt="">
                                    </a>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-left">
                                    <a href="http://iberialab.com/assets/images/placeholder.jpg">
                                        <img src="http://iberialab.com/assets/images/placeholder.jpg" class="img-circle" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="media-content">Grunted smirked and grew less but rewound much despite and impressive via alongside out and gosh easy manatee dear ineffective yikes.</div>
                                    <span class="media-annotation display-block mt-10">13 minutes ago <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
                                </div>
                            </li>
                            <li class="media reversed">
                                <div class="media-body">
                                    <div class="media-content"><i class="icon-menu display-block"></i></div>
                                </div>
                                <div class="media-right">
                                    <a href="http://iberialab.com/assets/images/placeholder.jpg">
                                        <img src="http://iberialab.com/assets/images/placeholder.jpg" class="img-circle" alt="">
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <textarea name="enter-message" class="form-control content-group" rows="3" cols="1" placeholder="Enter your message..."></textarea>
                        <div class="row">
                            <div class="col-xs-6">
                                <ul class="icons-list icons-list-extended mt-10">
                                    <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send photo"><i class="icon-file-picture"></i></a></li>
                                    <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send video"><i class="icon-file-video"></i></a></li>
                                    <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send file"><i class="icon-file-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-xs-6 text-right">
                                <button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-circle-right2"></i></b> Send</button>
                            </div>
                        </div>
                    </div>
                </div>








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
