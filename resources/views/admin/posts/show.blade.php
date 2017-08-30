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



        @include('admin.layouts.postsidebar')




        <!-- Main content -->
            <div class="content-wrapper">











            <div class="panel">

                <div class="panel-heading">
                    <h6 class="panel-title">{{ $post['title'] }}</h6>
                    <div class="heading-elements">


                        <span class="label label-danger heading-text">Label</span>

                        <ul class="icons-list">
                            <li><a href="#"><i class="icon-database-edit2"></i></a></li>
                            <li><a href="#"><i class="icon-pin-alt"></i></a></li>
                            <li><a href="#"><i class="icon-portfolio"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="content-group-lg">
                        <div class="content-group text-center">
                            <a href="#" class="display-inline-block">
                                <img src="{{ url('/uploads/posts', $post['image']) }}" class="img-responsive" alt="">
                            </a>
                        </div>

                        <h3 class="text-semibold mb-5">
                            <a href="#" class="text-default"></a>
                        </h3>

                        <ul class="list-inline list-inline-separate text-muted content-group">
                            <li>ავტორი: <a href="{{ url('/app/account', $post->author->id) }}" class="text-muted">{{ $post->author->name }}</a></li>
                            <li>კატეგორია: <a href="{{ url('/app/category', $post->category->id) }}" class="text-muted">{{ $post->category->name }}</a></li>
                            <li>{{ date( "d M Y", strtotime($post['created_at']) ) }}</li>
                            <li><a href="#" class="text-muted">12 comments</a></li>
                            <li><a href="#" class="text-muted"><i class="icon-heart6 text-size-base text-pink position-left"></i>






                                    {{ \App\Like::with('post_id')->where('like','=',1)->where('post_id', $post->id)->count()}}




                                </a></li>
                            <li><a href="#" class="text-muted"><i class="icon-eye text-size-base position-left"></i>

                                {{ Counter::showAndCount('post', $post->id) }}
                                </a>
                            </li>
                        </ul>

                        <div class="content-group">
                            {{ strip_tags($post['body']) }}
                        </div>

                        <div class="content-group">


                                <div class="form-group">
                                    <a href="#" class="like"> {{ Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 1 ? 'Liked' : 'Like' : 'Like' }}</a> |
                                    <a href="#" class="like">{{ Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 0 ? 'Disliked' : 'Dislike' : 'Dislike' }} </a>
                                    <!--<a href="#" class="like"><i class="icon icon-thumbs-up3"></i> Like</a> |
                                    <a href="#" class="like"><i class="icon icon-thumbs-down3"></i> Dislike</a>-->


                                    <script type="application/javascript">

                                        var token = '{{ Session::token() }}';
                                        var url = '{{ route('like') }}';


                                        $('.like').on('click', function (event) {
                                            event.preventDefault();
                                            var isLike = event.target.previousElementSibling == null;
                                            $.ajax({
                                                method: "POST",
                                                headers: {
                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                },
                                                url: url,
                                                data: {isLike: isLike, postId: '{{ $post->id }}', _token: token}
                                            })
                                                .done(function () {

                                                    event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'Liked' : 'Like' : event.target.innerText == 'Dislike' ? 'Disliked' : 'Dislike';
                                                    if (isLike){
                                                        event.target.nextElementSibling.innerText = 'Dislike';
                                                    } else {
                                                        event.target.previousElementSibling.innerText = 'Like';
                                                    }
                                                });
                                        });

                                    </script>
                                </div>

                        </div>


                    </div>


                </div>
            </div>


            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">About the author<a class="heading-elements-toggle"><i class="icon-more"></i></a><a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>

                    <div class="heading-elements">
                        <ul class="icons-list icons-list-extended heading-text">
                            <li><a href="#" data-popup="tooltip" data-container="body" title="" data-original-title="Google Drive"><i class="icon-google-drive"></i></a></li>
                            <li><a href="#" data-popup="tooltip" data-container="body" title="" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
                            <li><a href="#" data-popup="tooltip" data-container="body" title="" data-original-title="Github"><i class="icon-github"></i></a></li>
                            <li><a href="#" data-popup="tooltip" data-container="body" title="" data-original-title="Linked In"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="media panel-body no-margin">
                    <div class="media-left">
                        <a href="#">
                            <img src="assets/images/placeholder.jpg" style="width: 68px; height: 68px;" class="img-circle" alt="">
                        </a>
                    </div>

                    <div class="media-body">
                        <h6 class="media-heading text-semibold">James Alexander</h6>
                        <p>So slit more darn hey well wore submissive savage this shark aardvark fumed thoughtfully much drank when angelfish so outgrew some alas vigorously therefore warthog superb less oh groundhog less alas gibbered barked some hey despicably with aesthetic hamster jay by luckily</p>

                        <ul class="list-inline list-inline-separate no-margin">
                            <li><a href="#">Author profile</a></li>
                            <li><a href="#">All posts by James</a></li>
                            <li><a href="#">http://website.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>









</div>






        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->



<script>
    var token = '{{ csrf_token() }}';
</script>













@endsection

@section('js')


    <script type="text/javascript">
        CKEDITOR.replace(jQuery('.ckeditor'));
    </script>
@stop