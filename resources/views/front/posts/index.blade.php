@extends('front.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="gallery-title">Gallery</h1>
            </div>

            <div align="center">
                <button class="btn btn-default filter-button" data-filter="all">ყველა</button>
                @foreach($categories as $category)
                    <button class="btn btn-default filter-button" data-filter="{{ $category->id }}">{{ $category->name }}</button>
                @endforeach
            </div>
            <br/>


            @foreach($posts as $post)


            <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter {{ $post->category_id }}">
                <img src="{{ url('/uploads/posts/', $post->image) }}" class="img-responsive" sizes="(min-width: 40em) 80vw, 100vw">
            </div>
            @endforeach

        </div>
    </div>

<script>
    $(document).ready(function(){

        $(".filter-button").click(function(){
            let value = $(this).attr('data-filter');

            if(value === "all")
            {
                //$('.filter').removeClass('hidden');
                $('.filter').show('1000');
            }
            else
            {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                $(".filter").not('.'+value).hide('3000');
                $('.filter').filter('.'+value).show('3000');

            }
        });

        if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
        }
        $(this).addClass("active");

    });
</script>

@endsection