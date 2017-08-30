@extends('admin.layouts.main')

@section('content')


<!-- Page header -->
<div class="page-header">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Forms</span> - Tag Inputs</h4>

            <ul class="breadcrumb breadcrumb-caret position-right">
                <li><a href="index.html">Home</a></li>
                <li><a href="form_tag_inputs.html">Forms</a></li>
                <li class="active">Tag inputs</li>
            </ul>
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

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Tokenfield title -->
            <h6 class="content-group text-semibold">
                Tokenfield for Bootstrap
                <small class="display-block">Advanced tagging/tokenizing plugin</small>
            </h6>
            <!-- /tokenfield title -->


            <!-- Tokenfield basic -->
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Basic usage</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">

                            <!-- Basic example -->
                            <div class="form-group">
                                <label>Basic example</label>
                                <input type="text" class="form-control tokenfield" value="These,are,tokens">
                            </div>
                            <!-- /basic example -->


                            <!-- Limit tokens number -->
                            <div class="form-group">
                                <label>Limit tokens number</label>
                                <input type="text" class="form-control tokenfield" data-limit="5" value="Maximum,five,tokens">
                            </div>
                            <!-- /limit tokens number -->


                            <!-- Disabled field -->
                            <div class="form-group">
                                <label>Disabled field</label>
                                <input type="text" class="form-control tokenfield" disabled="disabled" value="This,is,disabled,field">
                            </div>
                            <!-- disabled field -->


                            <!-- Readonly field -->
                            <div class="form-group">
                                <label>Readonly field</label>
                                <input type="text" class="form-control tokenfield" readonly="readonly" value="This,is,readonly,field">
                            </div>
                            <!-- readonly field -->


                            <!-- Using typeahead -->
                            <div class="form-group">
                                <label>Using Twitter Typeahead</label>
                                <input type="text" class="form-control tokenfield-typeahead" value="Enter,color,names">
                            </div>
                            <!-- /using typeahead -->


                            <!-- Keyboard support -->
                            <div class="form-group">
                                <label>Keyboard support</label>
                                <input type="text" class="form-control tokenfield" value="Try,pressing,backspace">
                            </div>
                            <!-- /keyboard support -->


                            <!-- Copy paste support -->
                            <div class="form-group">
                                <label>Copy and paste support</label>
                                <input type="text" class="form-control tokenfield" value="Copy,and,paste">
                            </div>
                            <!-- /copy paste support -->

                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Advanced examples</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">

                            <!-- Inside form group with addon -->
                            <div class="form-group">
                                <label>Input group with addon</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-price-tag"></i></span>
                                    <input type="text" class="form-control tokenfield" value="cool,nice,great">
                                </div>
                            </div>
                            <!-- /inside form group with addon -->


                            <!-- Inside form group with button -->
                            <div class="form-group">
                                <label>Input group with button</label>
                                <div class="input-group">
                                    <input type="text" class="form-control tokenfield" value="Cool,nice,great">

                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-icon dropdown-toggle" data-toggle="dropdown"><i class="icon-cog5"></i><span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li><a href="#">One more line</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /inside form group with button -->


                            <!-- Set tokens method -->
                            <div class="form-group">
                                <label>Set tokens method</label>
                                <div class="input-group">
                                    <input type="text" class="form-control tokenfield" id="set-tokens-field" value="Click,button">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default" id="set-tokens">Set tokens</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /set tokens method -->


                            <!-- Create token method -->
                            <div class="form-group">
                                <label>Create token method</label>
                                <div class="input-group">
                                    <input type="text" class="form-control tokenfield" id="create-token-field" value="Create,token">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default" id="create-token">Create token</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /create token method -->


                            <!-- Disable/enable methods -->
                            <div class="form-group">
                                <label>Disable / enable methods</label>
                                <div class="input-group">
                                    <input type="text" class="form-control tokenfield-disable" value="Disable,and,enable">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default" id="disable">Disable</button>
                                        <button type="button" class="btn btn-info" id="enable">Enable</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /disable/enable methods -->


                            <!-- Readonly/writeable methods -->
                            <div class="form-group">
                                <label>Readonly / writable methods</label>
                                <div class="input-group">
                                    <input type="text" class="form-control tokenfield-readonly" value="Readonly,and,writeable">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default" id="readonly">Readonly</button>
                                        <button type="button" class="btn btn-info" id="writeable">Writeable</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /readonly/writeable methods -->


                            <!-- Destroy method -->
                            <div class="form-group">
                                <label>Destroy</label>
                                <div class="input-group">
                                    <input type="text" class="form-control tokenfield-destroy" value="Destroy,and,create">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default" id="destroy">Destroy</button>
                                        <button type="button" class="btn btn-info" id="create">Create</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /destroy method -->

                        </div>
                    </div>

                </div>
            </div>
            <!-- /tokenfield basic -->


            <!-- Tokenfield inputs sizing -->
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Input sizing</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">

                            <!-- Large input size -->
                            <div class="form-group">
                                <label>Large input size</label>
                                <input type="text" class="form-control tokenfield input-lg" value="Red,blue,green">
                            </div>
                            <!-- /large input size -->


                            <!-- Default input size -->
                            <div class="form-group">
                                <label>Default input size</label>
                                <input type="text" class="form-control tokenfield" value="Red,blue,green">
                            </div>
                            <!-- /default input size -->


                            <!-- Small input size -->
                            <div class="form-group">
                                <label>Small input size</label>
                                <input type="text" class="form-control tokenfield input-sm" value="Red,blue,green">
                            </div>
                            <!-- /small input size -->

                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Input group sizing</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">

                            <!-- Large input group size -->
                            <div class="form-group">
                                <label>Large input group size</label>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-addon"><i class="icon-menu7"></i></div>
                                    <input type="text" class="form-control tokenfield" value="Red,blue,green">
                                </div>
                            </div>
                            <!-- /large input group size -->


                            <!-- Default input group size -->
                            <div class="form-group">
                                <label>Default input group size</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="icon-cash3"></i></div>
                                    <input type="text" class="form-control tokenfield" value="Red,blue,green">
                                </div>
                            </div>
                            <!-- /default input group size -->


                            <!-- Small input group size -->
                            <div class="form-group">
                                <label>Small input group size</label>
                                <div class="input-group input-group-sm">
                                    <div class="input-group-addon"><i class="icon-lifebuoy"></i></div>
                                    <input type="text" class="form-control tokenfield" value="Red,blue,green">
                                </div>
                            </div>
                            <!-- /small input group size -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- /tokenfield inputs sizing -->


            <!-- Tokenfield styling -->
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Validation states</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">

                            <!-- Error validation state -->
                            <div class="form-group has-error">
                                <label class="control-label">Input with error</label>
                                <div class="has-feedback">
                                    <input type="text" class="form-control tokenfield-danger" value="Red,blue,green">
                                    <div class="form-control-feedback">
                                        <i class="icon-cancel-circle2"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- /error validation state -->


                            <!-- Success validation state -->
                            <div class="form-group has-success">
                                <label class="control-label">Input with success</label>
                                <div class="has-feedback">
                                    <input type="text" class="form-control tokenfield-success" value="Red,blue,green">
                                    <div class="form-control-feedback">
                                        <i class="icon-checkmark-circle"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- /success validation state -->


                            <!-- Warning validation state -->
                            <div class="form-group has-warning">
                                <label class="control-label">Input with warning</label>
                                <div class="has-feedback">
                                    <input type="text" class="form-control tokenfield-warning" value="Red,blue,green">
                                    <div class="form-control-feedback">
                                        <i class="icon-notification2"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- /warning validation state -->

                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Custom colors</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">

                            <!-- Custom blue color -->
                            <div class="form-group">
                                <label>Custom blue color</label>
                                <input type="text" class="form-control tokenfield-primary" value="Red,blue,green">
                            </div>
                            <!-- /custom blue color -->


                            <!-- Custom green color -->
                            <div class="form-group">
                                <label>Custom green color</label>
                                <input type="text" class="form-control tokenfield-teal" value="Red,blue,green">
                            </div>
                            <!-- /custom green color -->


                            <!-- Custom red color -->
                            <div class="form-group">
                                <label>Custom red color</label>
                                <input type="text" class="form-control tokenfield-purple" value="Red,blue,green">
                            </div>
                            <!-- /custom red color -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- /tokenfield basic -->


            <!-- Bootstrap tags input -->
            <h6 class="content-group text-semibold">
                Bootstrap Tags Input
                <small class="display-block">User interface for managing tags</small>
            </h6>

            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Initialization</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">

                            <!-- Default usage -->
                            <div class="content-group">
                                <h6 class="text-semibold">Default usage</h6>
                                <p>Tags input is a simple and flexible extension with plenty of useful features and support of Twitter Typeahead library. To initialize tags input, you can use both javascript and data attributes.</p>

                                <div class="content-group">
                                    <input type="text" value="Amsterdam,Washington,Sydney,Beijing" class="tags-input">
                                </div>

                                <div class="content-group">
                                    <div class="mb-5">Returned values</div>
                                    <pre class="val"><code class="language-javascript">"Amsterdam,Washington,Sydney,Beijing"</code></pre>
                                </div>

                                <div class="content-group-lg">
                                    <div class="mb-5">Returned items</div>
                                    <pre class="items"><code class="language-javascript">["Amsterdam","Washington","Sydney","Beijing"]</code></pre>
                                </div>
                            </div>
                            <!-- /default usage -->


                            <!-- Using data attributes -->
                            <div class="content-group">
                                <h6 class="text-semibold">Using data attributes</h6>
                                <p>Just add <code>data-role="tagsinput"</code> to your input field to automatically change it to a tags input field. <span class="text-semibold">Note:</span> currently tags input supports only default options if intinalized via data attributes.</p>

                                <div class="content-group">
                                    <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput">
                                </div>

                                <div class="content-group">
                                    <div class="mb-5">Returned values</div>
                                    <pre class="val"><code class="language-javascript"></code></pre>
                                </div>

                                <div class="content-group">
                                    <div class="mb-5">Returned items</div>
                                    <pre class="items"><code class="language-javascript"></code></pre>
                                </div>
                            </div>
                            <!-- /using data attributes -->

                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Basic options</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">

                            <!-- Maximum tags -->
                            <div class="content-group">
                                <h6 class="text-semibold">Maximum tags allowed</h6>
                                <p>When set, no more than the given number of tags are allowed to add (default: undefined). When maxTags is reached, a class 'bootstrap-tagsinput-max' is placed on the tagsinput element.</p>

                                <div class="content-group">
                                    <input type="text" value="Amsterdam,Washington,Sydney" class="tagsinput-max-tags">
                                </div>

                                <div class="content-group">
                                    <div class="mb-5">Returned values</div>
                                    <pre class="val"><code class="language-javascript">"Amsterdam,Washington,Sydney"</code></pre>
                                </div>

                                <div class="content-group-lg">
                                    <div class="mb-5">Returned items</div>
                                    <pre class="items"><code class="language-javascript">["Amsterdam","Washington","Sydney"]</code></pre>
                                </div>
                            </div>
                            <!-- /maximum tags -->


                            <!-- Custom tag class -->
                            <div class="content-group">
                                <h6 class="text-semibold">Custom tags class</h6>
                                <p>Tag element uses basic <code>.label</code> element markup and supports all color options available for it. Default color alternative is <code>info</code>, to use another color add proper class to <code>tagClass</code> option.</p>

                                <div class="content-group">
                                    <input type="text" value="Amsterdam,Washington,Sydney" class="tagsinput-custom-tag-class">
                                </div>

                                <div class="content-group">
                                    <div class="mb-5">Returned values</div>
                                    <pre class="val"><code class="language-javascript">"Amsterdam,Washington,Sydney"</code></pre>
                                </div>

                                <div class="content-group">
                                    <div class="mb-5">Returned items</div>
                                    <pre class="items"><code class="language-javascript">["Amsterdam","Washington","Sydney"]</code></pre>
                                </div>
                            </div>
                            <!-- /maximum tags -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- /bootstrap tags input -->


            <!-- Tags input options -->
            <div class="row">
                <div class="col-md-6">

                    <!-- Advanced examples -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Advanced examples</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">

                            <!-- Typeahead support -->
                            <div class="form-group">
                                <label>Typeahead support</label>
                                <input type="text" value="Washington,Alaska" data-role="tagsinput" class="tagsinput-typeahead">
                            </div>
                            <!-- /typeahead support -->


                            <!-- Categorizing tags -->
                            <div class="form-group">
                                <label>Categorizing tags</label>
                                <input type="text" class="tagsinput-tag-categorizing">
                            </div>
                            <!-- /categorizing tags -->


                            <!-- Objects as tags -->
                            <div class="form-group">
                                <label>Objects as tags</label>
                                <input type="text" class="tagsinput-tag-objects">
                            </div>
                            <!-- /objects as tags -->


                            <!-- Allow dublicates -->
                            <div class="form-group">
                                <label>Allow dublicates</label>
                                <select multiple="multiple" class="tags-input-dublicates">
                                    <option value="Amsterdam" selected="selected">Amsterdam</option>
                                    <option value="Washington" selected="selected">Washington</option>
                                    <option value="Washington" selected="selected">Washington</option>
                                </select>
                            </div>
                            <!-- /allow dublicates -->

                        </div>
                    </div>
                    <!-- /advanced examples -->

                </div>

                <div class="col-md-6">

                    <!-- Tags input methods -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Tags input methods</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">

                            <!-- Add tag -->
                            <div class="form-group">
                                <label>Add one tag</label>
                                <div class="input-group">
                                    <input type="text" value="Washington,Alaska" class="tagsinput-add-tag">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default add-tag-button">Add Beijing</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /add tag -->


                            <!-- Remove tag -->
                            <div class="form-group">
                                <label>Remove one tag</label>
                                <div class="input-group">
                                    <input type="text" value="Washington,Alaska" class="tagsinput-remove-tag">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default remove-tag-button">Remove Sydney</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /remove tag -->


                            <!-- Remove all tags -->
                            <div class="form-group">
                                <label>Remove all tags</label>
                                <div class="input-group">
                                    <input type="text" value="Washington,Alaska" class="tagsinput-remove-tags">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default remove-all-tags-button">Remove all</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /remove all tags -->


                            <!-- Destroy tags input -->
                            <div class="form-group">
                                <label>Destroy Tagsinput</label>
                                <div class="input-group">
                                    <input type="text" value="Washington,Alaska" class="tagsinput-destroy">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default destroy-tagsinput-button">Destroy</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /destroy tags input -->

                        </div>
                    </div>
                    <!-- /tags input methods -->

                </div>
            </div>
            <!-- /tags input options -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

    @section('js')

        <script type="application/javascript">
            /* ------------------------------------------------------------------------------
             *
             *  # Tag inputs
             *
             *  Specific JS code additions for form_tag_inputs.html page
             *
             *  Version: 1.2
             *  Latest update: Aug 10, 2016
             *
             * ---------------------------------------------------------------------------- */

            $(function() {


                // ========================================
                //
                // Tokenfield
                //
                // ========================================


                // Basic initialization
                $('.tokenfield').tokenfield();


                // Styling
                // ------------------------------

                //
                // Primary
                //

                // Add class on init
                $('.tokenfield-primary').on('tokenfield:initialize', function (e) {
                    $(this).parent().find('.token').addClass('bg-primary')
                });

                // Initialize plugin
                $('.tokenfield-primary').tokenfield();

                // Add class when token is created
                $('.tokenfield-primary').on('tokenfield:createdtoken', function (e) {
                    $(e.relatedTarget).addClass('bg-primary')
                });


                //
                // Teal
                //

                // Add class on init
                $('.tokenfield-teal').on('tokenfield:initialize', function (e) {
                    $(this).parent().find('.token').addClass('bg-teal')
                });

                // Initialize plugin
                $('.tokenfield-teal').tokenfield();

                // Add class when token is created
                $('.tokenfield-teal').on('tokenfield:createdtoken', function (e) {
                    $(e.relatedTarget).addClass('bg-teal')
                });


                //
                // Purple
                //

                // Add class on init
                $('.tokenfield-purple').on('tokenfield:initialize', function (e) {
                    $(this).parent().find('.token').addClass('bg-purple')
                });

                // Initialize plugin
                $('.tokenfield-purple').tokenfield();

                // Add class when token is created
                $('.tokenfield-purple').on('tokenfield:createdtoken', function (e) {
                    $(e.relatedTarget).addClass('bg-purple')
                });


                //
                // Success
                //

                // Add class on init
                $('.tokenfield-success').on('tokenfield:initialize', function (e) {
                    $(this).parent().find('.token').addClass('bg-success')
                });

                // Initialize plugin
                $('.tokenfield-success').tokenfield();

                // Add class when token is created
                $('.tokenfield-success').on('tokenfield:createdtoken', function (e) {
                    $(e.relatedTarget).addClass('bg-success')
                });


                //
                // Danger
                //

                // Add class on init
                $('.tokenfield-danger').on('tokenfield:initialize', function (e) {
                    $(this).parent().find('.token').addClass('bg-danger')
                });

                // Initialize plugin
                $('.tokenfield-danger').tokenfield();

                // Add class when token is created
                $('.tokenfield-danger').on('tokenfield:createdtoken', function (e) {
                    $(e.relatedTarget).addClass('bg-danger')
                });


                //
                // Warning
                //

                // Add class on init
                $('.tokenfield-warning').on('tokenfield:initialize', function (e) {
                    $(this).parent().find('.token').addClass('bg-warning')
                });

                // Initialize plugin
                $('.tokenfield-warning').tokenfield();

                // Add class when token is created
                $('.tokenfield-warning').on('tokenfield:createdtoken', function (e) {
                    $(e.relatedTarget).addClass('bg-warning')
                });



                // Other examples
                // ------------------------------

                //
                // Typeahead support
                //

                // Use Bloodhound engine
                var engine = new Bloodhound({
                    local: [
                        {value: 'red'},
                        {value: 'blue'},
                        {value: 'green'} ,
                        {value: 'yellow'},
                        {value: 'violet'},
                        {value: 'brown'},
                        {value: 'purple'},
                        {value: 'black'},
                        {value: 'white'}
                    ],
                    datumTokenizer: function(d) {
                        return Bloodhound.tokenizers.whitespace(d.value);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });

                // Initialize engine
                engine.initialize();

                // Initialize tokenfield
                $('.tokenfield-typeahead').tokenfield({
                    typeahead: [null, {
                        displayKey: 'value',
                        source: engine.ttAdapter()
                    }]
                });



                // Methods
                // ------------------------------

                // Set tokens
                $('#set-tokens').on('click', function() {
                    $('#set-tokens-field').tokenfield('setTokens', ['blue','red','white']);
                })


                // Create tokens
                $('#create-token').on('click', function() {
                    $('#create-token-field').tokenfield('createToken', { value: 'new', label: 'New token' });
                })


                //
                // Disable, enable
                //

                // Initialize plugin
                $('.tokenfield-disable').tokenfield();

                // Disable on click
                $('#disable').on('click', function() {
                    $('.tokenfield-disable').tokenfield('disable');
                });

                // Enabe on click
                $('#enable').on('click', function() {
                    $('.tokenfield-disable').tokenfield('enable');
                });


                //
                // Readonly, writeable
                //

                // Initialize plugin
                $('.tokenfield-readonly').tokenfield();

                // Readonly on click
                $('#readonly').on('click', function() {
                    $('.tokenfield-readonly').tokenfield('readonly');
                });

                // Writeable on click
                $('#writeable').on('click', function() {
                    $('.tokenfield-readonly').tokenfield('writeable');
                });


                //
                // Destroy, create
                //

                // initialize plugin
                $('.tokenfield-destroy').tokenfield();

                // Destroy on click
                $('#destroy').on('click', function() {
                    $('.tokenfield-destroy').tokenfield('destroy');
                });

                // Create on click
                $('#create').on('click', function() {
                    $('.tokenfield-destroy').tokenfield();
                });




                // ========================================
                //
                // Tags input
                //
                // ========================================


                // Display values
                $('.tags-input, [data-role="tagsinput"], .tagsinput-max-tags, .tagsinput-custom-tag-class').on('change', function(event) {
                    var $element = $(event.target),
                        $container = $element.parent().parent('.content-group');

                    if (!$element.data('tagsinput'))
                        return;

                    var val = $element.val();
                    if (val === null)
                        val = "null";

                    $('pre.val > code', $container).html( ($.isArray(val) ? JSON.stringify(val) : "\"" + val.replace('"', '\\"') + "\"") );
                    $('pre.items > code', $container).html(JSON.stringify($element.tagsinput('items')));
                    Prism.highlightAll();
                }).trigger('change');



                // Basic examples
                // ------------------------------

                // Basic initialization
                $('.tags-input').tagsinput();


                // Allow dublicates
                $('.tags-input-dublicates').tagsinput({
                    allowDuplicates: true
                });


                // Set maximum allowed tags
                $('.tagsinput-max-tags').tagsinput({
                    maxTags: 5
                });


                // Custom tag class
                $('.tagsinput-custom-tag-class').tagsinput({
                    tagClass: function(item){
                        return 'label bg-success';
                    }
                });


                //
                // Typeahead implementation
                //

                // Matcher
                var substringMatcher = function(strs) {
                    return function findMatches(q, cb) {
                        var matches, substringRegex;

                        // an array that will be populated with substring matches
                        matches = [];

                        // regex used to determine if a string contains the substring `q`
                        substrRegex = new RegExp(q, 'i');

                        // iterate through the pool of strings and for any string that
                        // contains the substring `q`, add it to the `matches` array
                        $.each(strs, function(i, str) {
                            if (substrRegex.test(str)) {

                                // the typeahead jQuery plugin expects suggestions to a
                                // JavaScript object, refer to typeahead docs for more info
                                matches.push({ value: str });
                            }
                        });
                        cb(matches);
                    };
                };

                // Data
                var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
                    'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
                    'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
                    'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
                    'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
                    'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
                    'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
                    'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
                    'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
                ];

                // Attach typeahead
                $('.tagsinput-typeahead').tagsinput('input').typeahead(
                    {
                        hint: true,
                        highlight: true,
                        minLength: 1
                    },
                    {
                        name: 'states',
                        displayKey: 'value',
                        source: substringMatcher(states)
                    }
                ).bind('typeahead:selected', $.proxy(function (obj, datum) {
                    this.tagsinput('add', datum.value);
                    this.tagsinput('input').typeahead('val', '');
                }, $('.tagsinput-typeahead')));


                //
                // Objects as tags
                //

                // Use Bloodhound engine
                var countries = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    limit: 10,
                    prefetch: {
                        url: 'assets/demo_data/tags_input/cities.json'
                    }
                });

                // Kicks off the loading/processing of `local` and `prefetch`
                countries.initialize();

                // Define element
                var elt = $('.tagsinput-tag-objects');

                // Initialize
                elt.tagsinput({
                    itemValue: 'value',
                    itemText: 'text',
                    typeaheadjs: {
                        name: 'countries',
                        displayKey: 'text',
                        source: countries.ttAdapter()
                    }
                });

                // Add data
                elt.tagsinput('add', { "value": 1 , "text": "Amsterdam"   , "continent": "Europe"    });
                elt.tagsinput('add', { "value": 4 , "text": "Washington"  , "continent": "America"   });
                elt.tagsinput('add', { "value": 7 , "text": "Sydney"      , "continent": "Australia" });
                elt.tagsinput('add', { "value": 10, "text": "Beijing"     , "continent": "Asia"      });
                elt.tagsinput('add', { "value": 13, "text": "Cairo"       , "continent": "Africa"    });


                //
                // Categorize tags
                //

                // Use Bloodhound engine
                var continents = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('continent'),
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    limit: 10,
                    prefetch: {
                        url: 'assets/demo_data/tags_input/cities.json'
                    }
                });

                // Kicks off the loading/processing of `local` and `prefetch`
                continents.initialize();

                // Define element
                var elt2 = $('.tagsinput-tag-categorizing');

                // Initialize
                elt2.tagsinput({
                    tagClass: function(item) {
                        switch (item.continent) {
                            case 'Europe'   : return 'label bg-indigo-400';
                            case 'America'  : return 'label bg-danger';
                            case 'Australia': return 'label bg-success';
                            case 'Africa'   : return 'label bg-primary';
                            case 'Asia'     : return 'label bg-pink-400';
                        }
                    },
                    itemValue: 'value',
                    itemText: 'text',
                    typeaheadjs: {
                        name: 'continents',
                        displayKey: 'text',
                        source: continents.ttAdapter()
                    }
                });

                // Add data
                elt2.tagsinput('add', { "value": 1 , "text": "Amsterdam"   , "continent": "Europe"    });
                elt2.tagsinput('add', { "value": 4 , "text": "Washington"  , "continent": "America"   });
                elt2.tagsinput('add', { "value": 7 , "text": "Sydney"      , "continent": "Australia" });
                elt2.tagsinput('add', { "value": 10, "text": "Beijing"     , "continent": "Asia"      });
                elt2.tagsinput('add', { "value": 13, "text": "Cairo"       , "continent": "Africa"    });


                //
                // Methods
                //

                // Define elements
                var tagsMethods = $('.tagsinput-add-tag, .tagsinput-remove-tag, .tagsinput-remove-tags, .tagsinput-destroy, .tagsinput-refresh');

                // Initialize
                tagsMethods.tagsinput({
                    itemValue: 'id',
                    itemText: 'text'
                });

                // Add values
                tagsMethods.tagsinput('add', {id: 1, text: 'Amsterdam'});
                tagsMethods.tagsinput('add', {id: 2, text: 'Washington'});
                tagsMethods.tagsinput('add', {id: 3, text: 'Sydney'});

                // "Add" methos
                $('.add-tag-button').on('click', function() {
                    $('.tagsinput-add-tag').tagsinput('add', {id: 4, text: 'Beijing'});
                    $(this).addClass('disabled');
                });

                // "Remove" method
                $('.remove-tag-button').on('click', function() {
                    $('.tagsinput-remove-tag').tagsinput('remove', {id: 3, text: 'Sydney'});
                    $(this).addClass('disabled');
                });

                // "Remove all" method
                $('.remove-all-tags-button').on('click', function() {
                    $('.tagsinput-remove-tags').tagsinput('removeAll');
                    $(this).addClass('disabled');
                });

                // "Destroy" method
                $('.destroy-tagsinput-button').on('click', function() {
                    $('.tagsinput-destroy').tagsinput('destroy');
                    $(this).addClass('disabled');
                });

            });

        </script>

        @show

@endsection