@extends('admin.layouts.main')

@section('title', 'დახმარება')
@show

@section('content')




    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">



        @include('admin.layouts.mainsidebar')




        <!-- Main content -->
            <div class="content-wrapper">





                <!-- Basic accordion -->
                <h6 class="content-group text-semibold no-margin-top">
                    Basic accordion
                    <small class="display-block">Basic accordion functionality</small>
                </h6>

                <div class="panel-group content-group-lg" id="accordion1">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h6 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#accordion-group1">Accordion Item #1</a>
                            </h6>
                        </div>
                        <div id="accordion-group1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h6 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion-group2">Accordion Item #2</a>
                            </h6>
                        </div>
                        <div id="accordion-group2" class="panel-collapse collapse">
                            <div class="panel-body">
                                Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h6 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion-group3">Accordion Item #3</a>
                            </h6>
                        </div>
                        <div id="accordion-group3" class="panel-collapse collapse">
                            <div class="panel-body">
                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /basic accordion -->








            </div>






        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

















@endsection

@section('js')


@stop