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



        @include('admin.layouts.mainsidebar')




        <!-- Main content -->
            <div class="content-wrapper">


                <div class="panel">

                    <!-- ქვეყანა -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title font1">
                                <img style="width: 26px;" src="{{ url('/') }}/images/flags/svg/{{ strtolower($country['countrycode']) }}.svg" alt="{{ $country['countryname'] }}">
                                <strong>{{ $country->capitalname }}</strong>
                                <small>{{ $country->countryname }}</small>
                            </h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="map-container map-world"></div>


                        <script type="application/javascript">

                            var capital = <?php echo json_encode($country['capitalname']); ?>;
                            var country = <?php echo json_encode($country['countryname']); ?>;
                            var lat = <?php echo json_encode($country['capitallatitude']); ?>;
                            var lon = <?php echo json_encode($country['capitallongitude']); ?>;
                            var code = <?php echo json_encode($country['countrycode']); ?>;




                            $('.map-world').vectorMap({
                                map: 'world_mill_en',

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
                                        'fill': '#FF9800',
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
                                    $('.map-world').vectorMap('set', 'focus', code);

                                },
                                onRegionSelected: function(){
                                    map.getSelectedRegions(code);

                                },
                                markers: [
                                    {latLng: [lat, lon], name: capital }
                                ],
                                regionsSelectable: true,
                                regionsSelectableOne: true

                            });

                            var mapObj = $('.map-world').vectorMap('get', 'mapObject');

                            mapObj.setFocusLatLng = function(scale, lat, lng){
                                var point,
                                    proj = jvm.WorldMap.maps[this.params.map].projection,
                                    centralMeridian = proj.centralMeridian,
                                    width = this.width - this.baseTransX * 2 * this.baseScale,
                                    height = this.height - this.baseTransY * 2 * this.baseScale,
                                    inset,
                                    bbox,
                                    scaleFactor = this.scale / this.baseScale,
                                    centerX,
                                    centerY;

                                if (lng < (-180 + centralMeridian)) {
                                    lng += 360;
                                }

                                point = jvm.Proj[proj.type](lat, lng, centralMeridian);

                                inset = this.getInsetForPoint(point.x, point.y);
                                if (inset) {
                                    bbox = inset.bbox;

                                    centerX = (point.x - bbox[0].x) / (bbox[1].x - bbox[0].x);
                                    centerY = (point.y - bbox[0].y) / (bbox[1].y - bbox[0].y);

                                    this.setFocus(scale, centerX, centerY);
                                }
                            };

                            mapObj.setFocusLatLng(5, lat,lon);

                            //alert(country);
                        </script>


                    </div>
                    <!-- /ქვეყანა -->


                </div>





                <div class="panel bg-purple-400">


                    <div class="panel-body">
                        Solid panel with custom color using <code>.bg--*</code> class
                    </div>
                </div>





            </div>






        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

















@endsection
