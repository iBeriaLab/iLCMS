@extends('admin.layouts.main')

@section('title', 'პოსტები')
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



                <div class="panel panel-flat">


                    {{ $stat->title }}



                    <canvas id="stat-chart" width="400" height="200"></canvas>

<script>

    var view = '{{ Counter::show('post', $stat->id) }}';

    new Chart(document.getElementById("stat-chart"), {
        type: 'line',
        data: {
            labels: ['იან','თებ','მარ','აპრ','მაი','ივნ','ივლ','აგვ','სექ','ოქტ','ნოე','დეკ'],
            datasets: [{
                data: [view,view,view,view,view,view,view,view,view,view,view,view,],
                label: "მომხმარებელი",
                borderColor: "#90A4AE",
                fill: false
            }
            ]
        },
        options: {
            title: {
                display: true,
                text: 'რეგისტრირებული მომხმარებელი, თვეების მიხედვით'
            }
        }
    });
</script>

                </div>







            </div>






        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->
@endsection

