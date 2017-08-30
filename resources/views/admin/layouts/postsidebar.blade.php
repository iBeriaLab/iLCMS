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
                <span class="font1">კატეგორიები</span>
                <ul class="icons-list">
                    <li><a href="#" data-action="collapse"></a></li>
                </ul>
            </div>

            <div class="category-content no-padding">
                <ul class="navigation">

                    @foreach(\App\Category::with('children','parent')->get() as $category)
                        @if($category->children->count() > 0)
                            <li>
                                <a href="{{ url('/app/category',$category->id) }}"><small>{{ $category->name }}</small></a>
                                <ul style="display: block">
                                    @foreach($category->children as $submenu)
                                        <li><a href="{{  url('/app/category',$submenu->id) }}"><small>{{ $submenu->name }}</small></a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @elseif($category->parent === null)
                            <li><a href="{{ url('/app/category',$category->id) }}"><small>{{ $category->name }}</small></a></li>
                        @endif
                    @endforeach


                </ul>
            </div>
        </div>
        <!-- /task navigation -->










    </div>
</div>
<!-- /main sidebar -->