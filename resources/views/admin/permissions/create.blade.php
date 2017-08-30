@extends('admin.layouts.main')
@section('title', 'უფლებები')
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
                    <a href="#" class="btn btn-link btn-float has-text text-size-small"><i class="icon-bars-alt text-indigo-400"></i><span>Statistics</span></a>
                    <a href="#" class="btn btn-link btn-float has-text text-size-small"><i class="icon-calculator text-indigo-400"></i> <span>Invoices</span></a>
                    <a href="#" class="btn btn-link btn-float has-text text-size-small"><i class="icon-calendar5 text-indigo-400"></i> <span>Schedule</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <div class="sidebar sidebar-main sidebar-default">
                <div class="sidebar-content">

                    <!-- Title -->
                    <div class="category-title h6">
                        <span>Components</span>
                        <ul class="icons-list">
                            <li><a href="#"><i class="icon-gear"></i></a></li>
                        </ul>
                    </div>
                    <!-- /title -->


                    <!-- Search task -->
                    <div class="sidebar-category">
                        <div class="category-title">
                            <span>Search task</span>
                            <ul class="icons-list">
                                <li><a href="#" data-action="collapse"></a></li>
                            </ul>
                        </div>

                        <div class="category-content"  style="display: none">
                            <form action="#">
                                <div class="has-feedback has-feedback-left">
                                    <input type="search" class="form-control" placeholder="Type and hit Enter">
                                    <div class="form-control-feedback">
                                        <i class="icon-search4 text-size-base text-muted"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /search task -->


                    <!-- Action buttons -->
                    <div class="sidebar-category">
                        <div class="category-title">
                            <span>Action buttons</span>
                            <ul class="icons-list">
                                <li><a href="#" data-action="collapse"></a></li>
                            </ul>
                        </div>

                        <div class="category-content" style="display: none">
                            <div class="row">
                                <div class="col-xs-6">
                                    <button class="btn bg-teal-400 btn-block btn-float btn-float-lg" type="button"><i class="icon-git-branch"></i> <span>Branch</span></button>
                                    <button class="btn bg-purple-300 btn-block btn-float btn-float-lg" type="button"><i class="icon-mail-read"></i> <span>Messages</span></button>
                                </div>

                                <div class="col-xs-6">
                                    <button class="btn bg-warning-400 btn-block btn-float btn-float-lg" type="button"><i class="icon-stats-bars"></i> <span>Statistics</span></button>
                                    <button class="btn bg-blue btn-block btn-float btn-float-lg" type="button"><i class="icon-people"></i> <span>Users</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /action buttons -->


                    <!-- Task navigation -->
                    <div class="sidebar-category sidebar-category-visible">
                        <div class="category-title">
                            <span>Navigation</span>
                            <ul class="icons-list">
                                <li><a href="#" data-action="collapse"></a></li>
                            </ul>
                        </div>

                        <div class="category-content no-padding">
                            <ul class="navigation navigation-main navigation-accordion">
                                <li class="navigation-header"><span>Actions</span> <i class="icon-menu" title="Actions"></i></li>
                                <li><a href="#"><i class="icon-googleplus5"></i> <span>Create task</span></a></li>
                                <li><a href="#"><i class="icon-portfolio"></i> <span>Create project</span></a></li>
                                <li><a href="#"><i class="icon-compose"></i> <span>Edit task list</span></a></li>
                                <li><a href="#"><i class="icon-user-plus"></i> <span>Assign users <span class="label label-success">94 online</span></span></a></li>
                                <li><a href="#"><i class="icon-collaboration"></i> <span>Create team</span></a></li>
                                <li class="navigation-header"><span>Tasks</span> <i class="icon-menu" title="Tasks"></i></li>
                                <li><a href="#"><i class="icon-files-empty"></i> <span>All tasks</span></a></li>
                                <li><a href="#"><i class="icon-file-plus"></i> <span>Active tasks <span class="badge badge-default">28</span></span></a></li>
                                <li><a href="#"><i class="icon-file-check"></i> <span>Closed tasks</span></a></li>
                                <li class="navigation-divider"></li>
                                <li><a href="#"><i class="icon-reading"></i> <span>Assigned to me <span class="badge badge-info">86</span></span></a></li>
                                <li><a href="#"><i class="icon-make-group"></i> <span>Assigned to my team <span class="badge badge-info">47</span></span></a></li>
                                <li><a href="#"><i class="icon-cog3"></i> <span>Settings</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /task navigation -->










                </div>
            </div>
            <!-- /main sidebar -->




            <!-- Main content -->
            <div class="content-wrapper">


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h6 class="panel-title">უფლებების დამატება<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                        <div class="heading-elements">
                            <!--<button type="button" class="btn btn-primary heading-btn legitRipple">Button</button>-->
                        </div>
                    </div>

                    <div class="panel-body">

                {{ Form::open(array('url' => 'app/permissions')) }}

                <div class="form-group">
                    {{ Form::label('name', 'სახელი') }}
                    {{ Form::text('name', '', array('class' => 'form-control')) }}
                </div><br>
                @if(!$roles->isEmpty()) //If no roles exist yet
                <h4>Assign Permission to Roles</h4>

                @foreach ($roles as $role)
                    {{ Form::checkbox('roles[]',  $role->id ) }}
                    {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                @endforeach
                @endif
                <br>
                {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

                {{ Form::close() }}


                    </div>
                </div>



            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->
@endsection