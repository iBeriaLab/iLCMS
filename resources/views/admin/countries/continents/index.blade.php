@extends('admin.layouts.main')

@section('title', 'დედაქალაქები')
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





                <div class="map-container map-continents"></div>



                <script type="application/javascript">



                    //კონტინენტების რუკა

                    $('.map-continents').vectorMap({
                        map: 'continents_mill',
                        normalizeFunction: 'polynomial',
                        backgroundColor: 'transparent',
                        zoomOnScroll: false,
                        regionStyle: {
                            initial: {
                                fill: '#26A69A'
                            },
                            hover: {
                                cursor: 'pointer'
                            },
                            selected: {
                                fill: '#EF5350'
                            }
                        },

                        hoverOpacity: 0.7,
                        hoverColor: false,
                        markerStyle: {
                            initial: {
                                r: 7,
                                'fill': '#ad0303',
                                'fill-opacity': 0.8,
                                'stroke': '#fff',
                                'stroke-width' : 1.5,
                                'stroke-opacity': 0.9
                            },
                            hover: {
                                'stroke': '#fff',
                                'fill-opacity': 1,
                                'stroke-width': 1.5,
                                'cursor': 'pointer'
                            }
                        },

                        onRegionClick: function(e,  code,  isSelected,  selectedRegions){
                            $('.map-continents').vectorMap('set', 'focus', code);
                        },
                        regionsSelectable: true,
                        regionsSelectableOne: true

                    });




                </script>







                <div class="panel">

















                    <!-- ქვეყნები -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title font1">დედაქალაქები</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <table class="table datatable-column-search-selects">
                            <thead>
                            <tr class="font1">
                                <th>დროშა</th>

                                <th>დედაქალაქი</th>

                                <th>ქვეყანა</th>
                                <th>კოდი</th>
                                <th>კონტინენტი</th>
                                <th class="text-center"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($countries as $continent)

                                    <tr>
                                        <td><a href="{{ url('/app/capital', $continent['id']) }}">{{ $continent['continentname'] }}</a></td>
                                        <td>{{ $continent['countryname'] }}</td>

                                        <td class="text-center">
                                            <ul class="icons-list">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <i class="icon-menu9"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                                        <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                                        <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>


                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr class="font1">
                                <td>დროშა</td>

                                <td>დედაქალაქი</td>

                                <td>ქვეყანა</td>

                                <td>კოდი</td>
                                <td>კონტინენტი</td>
                                <td></td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /ქვეყნები -->











                </div>












            </div>






        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

















@endsection
