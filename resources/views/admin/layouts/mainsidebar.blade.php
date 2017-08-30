<!-- Main sidebar -->
<div class="sidebar sidebar-main sidebar-default">
    <div class="sidebar-content">

        <!-- Title
        <div class="category-title h6">
            <span>Components</span>
            <ul class="icons-list">
                <li><a href="#"><i class="icon-gear"></i></a></li>
            </ul>
        </div>
        <!-- /title -- -->


        <!-- Search task -->
        <div class="sidebar-category">
            <div class="category-title">
                <span class="font1">ძებნა</span>
                <ul class="icons-list">
                    <li><a href="#" data-action="collapse"></a></li>
                </ul>
            </div>

            <div class="category-content">
                <form action="{{ url('/app/search') }}">
                    <div class="has-feedback has-feedback-left">
                        <input type="search" name="search" class="form-control" placeholder="ჩაწერეთ სასურველი სიტყვა">
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