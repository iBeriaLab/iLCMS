<!-- Second navbar -->
<div class="navbar navbar-default" id="navbar-second">
    <div class="navbar-boxed">
        <ul class="nav navbar-nav no-border visible-xs-block">
            <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
        </ul>

        <div class="navbar-collapse collapse" id="navbar-second-toggle">
            <ul class="nav navbar-nav">
                <li class="font1"><a href="{{ url('/') }}/app"><i class="icon-display4 position-left"></i> მთავარი</a></li>



                @hasanyrole('administrator|moderator')


                <li class="dropdown mega-menu mega-menu-wide">
                    <a href="#" class="dropdown-toggle font1" data-toggle="dropdown"><i class="icon-color-sampler position-left"></i> ფუნქციები <span class="caret"></span></a>

                    <div class="dropdown-menu dropdown-content">
                        <div class="dropdown-content-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <span class="menu-heading underlined font1">მედია</span>
                                    <ul class="menu-list">
                                        <li>
                                            <a href="#"><i class="icon-pencil3"></i> პოსტები</a>
                                            <ul>
                                                <li><a href="{{ url('/app/posts') }}">პოსტების სია</a></li>
                                                <li>
                                                    <a href="{{ url('/app/categories') }}">კატეგორიები</a>
                                                </li>
                                                <li><a href="form_tag_inputs.html">Tag inputs</a></li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-video-camera"></i> ვიდეო</a>
                                            <ul>
                                                <li><a href="{{ url('/app/videos') }}">ვიდეო გალერეა</a></li>
                                                <li><a href="alpaca_advanced.html">Advanced inputs</a></li>
                                                <li><a href="alpaca_controls.html">Controls</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-image2"></i> ფოტო</a>
                                            <ul>
                                                <li><a href="wizard_steps.html">ფოტო გალერეა</a></li>
                                                <li><a href="wizard_form.html">Form wizard</a></li>
                                                <li><a href="wizard_stepy.html">Stepy wizard</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-music"></i> მუსიკა</a>
                                            <ul>
                                                <li><a href="editor_summernote.html">Summernote editor</a></li>
                                                <li><a href="editor_ckeditor.html">CKEditor</a></li>
                                                <li><a href="editor_wysihtml5.html">WYSIHTML5 editor</a></li>
                                                <li><a href="editor_code.html">Code editor</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <span class="menu-heading underlined font1">აპლიკაციები</span>
                                    <ul class="menu-list">
                                        <li>
                                            <a href="#"><i class="icon-map5"></i> გეოგრაფია</a>
                                            <ul>
                                                <li><a href="{{ url('/app/capitals') }}">ქალაქები</a></li>
                                                <li><a href="{{ url('/app/countries') }}">ქვეყნები</a></li>
                                                <li><a href="{{ url('/app/continents') }}">კონტინენტები</a></li>
                                                <li><a href="#">სიმბოლიკა</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-weather-windy"></i> ამინდის პროგნოზი</a>
                                            <ul>
                                                <li><a href="editor_summernote.html">Summernote editor</a></li>
                                                <li><a href="editor_ckeditor.html">CKEditor</a></li>
                                                <li><a href="editor_wysihtml5.html">WYSIHTML5 editor</a></li>
                                                <li><a href="editor_code.html">Code editor</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-browser"></i> Content panels</a>
                                            <ul>
                                                <li><a href="panels.html">Panels</a></li>
                                                <li><a href="panels_heading.html">Heading elements</a></li>
                                                <li><a href="panels_footer.html">Footer elements</a></li>
                                                <li><a href="panels_draggable.html">Draggable panels</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-droplets"></i> Content styling</a>
                                            <ul>
                                                <li><a href="appearance_text_styling.html">Text styling</a></li>
                                                <li><a href="appearance_typography.html">Typography</a></li>
                                                <li><a href="appearance_helpers.html">Helper classes</a></li>
                                                <li><a href="appearance_syntax_highlighter.html">Syntax highlighter</a></li>
                                                <li><a href="appearance_content_grid.html">Grid system</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-gift"></i> Extra components</a>
                                            <ul>
                                                <li><a href="extra_sliders_noui.html">NoUI sliders</a></li>
                                                <li><a href="extra_sliders_ion.html">Ion range sliders</a></li>
                                                <li><a href="extra_trees.html">Dynamic tree views</a></li>
                                                <li><a href="extra_context_menu.html">Context menu</a></li>
                                                <li><a href="extra_fab.html">Floating action buttons</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-wrench3"></i> Tools</a>
                                            <ul>
                                                <li><a href="tools_session_timeout.html">Session timeout</a></li>
                                                <li><a href="tools_idle_timeout.html">Idle timeout</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <span class="menu-heading underlined font1">მართვა</span>
                                    <ul class="menu-list">
                                        <li>
                                            <a href="#"><i class="icon-users"></i> მომხმარებლები</a>
                                            <ul>
                                                <li><a href="{{ url('/') }}/app/users">მომხმარებლების სია</a></li>
                                                <li><a href="extension_blockui.html">Block UI</a></li>
                                                <li><a href="extension_dnd.html">Drag and drop</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-cog3"></i> როლები</a>
                                            <ul>
                                                <li><a href="{{ url('/') }}/app/roles">როლების მართვა</a></li>
                                                <li><a href="jqueryui_forms.html">Forms</a></li>
                                                <li><a href="jqueryui_components.html">Components</a></li>
                                                <li><a href="jqueryui_sliders.html">Sliders</a></li>
                                                <li><a href="jqueryui_navigation.html">Navigation</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-cog7"></i> უფლებები</a>
                                            <ul>
                                                <li><a href="{{ url('/') }}/app/permissions">უფლებების მართვა</a></li>
                                                <li><a href="uploader_bootstrap.html">Bootstrap file uploader</a></li>
                                                <li><a href="uploader_dropzone.html">Dropzone</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-calendar3"></i> Event calendars</a>
                                            <ul>
                                                <li><a href="fullcalendar_views.html">Basic views</a></li>
                                                <li><a href="fullcalendar_styling.html">Event styling</a></li>
                                                <li><a href="fullcalendar_formats.html">Language and time</a></li>
                                                <li><a href="fullcalendar_advanced.html">Advanced usage</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-sphere"></i> Internationalization</a>
                                            <ul>
                                                <li><a href="internationalization_switch_direct.html">Direct translation</a></li>
                                                <li><a href="internationalization_switch_query.html">Querystring parameter</a></li>
                                                <li><a href="internationalization_on_init.html">Set language on init</a></li>
                                                <li><a href="internationalization_after_init.html">Set language after init</a></li>
                                                <li><a href="internationalization_fallback.html">Language fallback</a></li>
                                                <li><a href="internationalization_callbacks.html">Callbacks</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <span class="menu-heading underlined">Tables</span>
                                    <ul class="menu-list">
                                        <li>
                                            <a href="#"><i class="icon-table2"></i> Basic tables</a>
                                            <ul>
                                                <li><a href="table_basic.html">Basic examples</a></li>
                                                <li><a href="table_sizing.html">Table sizing</a></li>
                                                <li><a href="table_borders.html">Table borders</a></li>
                                                <li><a href="table_styling.html">Table styling</a></li>
                                                <li><a href="table_elements.html">Table elements</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-grid7"></i> Data tables</a>
                                            <ul>
                                                <li><a href="datatable_basic.html">Basic initialization</a></li>
                                                <li><a href="datatable_styling.html">Basic styling</a></li>
                                                <li><a href="datatable_advanced.html">Advanced examples</a></li>
                                                <li><a href="datatable_sorting.html">Sorting options</a></li>
                                                <li><a href="datatable_api.html">Using API</a></li>
                                                <li><a href="datatable_data_sources.html">Data sources</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-alignment-unalign"></i> Data tables extensions</a>
                                            <ul>
                                                <li><a href="datatable_extension_reorder.html">Columns reorder</a></li>
                                                <li><a href="datatable_extension_row_reorder.html">Row reorder</a></li>
                                                <li><a href="datatable_extension_fixed_columns.html">Fixed columns</a></li>
                                                <li><a href="datatable_extension_fixed_header.html">Fixed header</a></li>
                                                <li><a href="datatable_extension_autofill.html">Auto fill</a></li>
                                                <li><a href="datatable_extension_key_table.html">Key table</a></li>
                                                <li><a href="datatable_extension_scroller.html">Scroller</a></li>
                                                <li><a href="datatable_extension_select.html">Select</a></li>
                                                <li>
                                                    <a href="#">Buttons</a>
                                                    <ul>
                                                        <li><a href="datatable_extension_buttons_init.html">Initialization</a></li>
                                                        <li><a href="datatable_extension_buttons_flash.html">Flash buttons</a></li>
                                                        <li><a href="datatable_extension_buttons_print.html">Print buttons</a></li>
                                                        <li><a href="datatable_extension_buttons_html5.html">HTML5 buttons</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="datatable_extension_colvis.html">Columns visibility</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-file-spreadsheet"></i> Handsontable</a>
                                            <ul>
                                                <li><a href="handsontable_basic.html">Basic configuration</a></li>
                                                <li><a href="handsontable_advanced.html">Advanced setup</a></li>
                                                <li><a href="handsontable_cols.html">Column features</a></li>
                                                <li><a href="handsontable_cells.html">Cell features</a></li>
                                                <li><a href="handsontable_types.html">Basic cell types</a></li>
                                                <li><a href="handsontable_custom_checks.html">Custom &amp; checkboxes</a></li>
                                                <li><a href="handsontable_ac_password.html">Autocomplete &amp; password</a></li>
                                                <li><a href="handsontable_search.html">Search</a></li>
                                                <li><a href="handsontable_context.html">Context menu</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-versions"></i> Responsive options</a>
                                            <ul>
                                                <li><a href="table_responsive.html">Responsive basic tables</a></li>
                                                <li><a href="datatable_responsive.html">Responsive data tables</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>


                <!------------------>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-make-group position-left"></i> სტატესტიკა <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu width-250">
                        <li class="dropdown-header">სტატესტიკის მართვა</li>
                        <li class="dropdown-submenu">
                            <a href="#"><i class="icon-task"></i> სტატიები</a>
                            <ul class="dropdown-menu width-200">
                                <li><a href="{{ url('/app/stats') }}">ცალკეული სტატესტიკა</a></li>
                            </ul>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="#"><i class="icon-images2"></i> გვერდები</a>
                            <ul class="dropdown-menu width-200">
                                <li><a href="{{ url('/app/stats') }}">ცალკეული სტატესტიკა</a></li>
                            </ul>
                        </li>


                    </ul>
                </li>

                <li class="font1"><a href="{{ url('/') }}/app"><i class="icon-folder6 position-left"></i> ფაილები</a></li>
                <li class="font1"><a href="{{ url('/app/help') }}"><i class="icon-help position-left"></i> დახმარება</a></li>

                @else

                    fsdfd
                    @endhasanyrole
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-add"></i>
                        <span class="visible-xs-inline-block position-right">Share</span>
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a class="font1" data-toggle="modal" data-target="#addpost"><i class="icon-add"></i> პოსტის დამატება</a></li>
                        <li><a class="font1" href="#"><i class="icon-add"></i> გალერეა</a></li>
                        <!--<li><a href="#"><i class="icon-add"></i> Accessibility</a></li>-->
                        <li class="divider"></li>
                        <li><a class="font1" href="#"><i class="icon-gear"></i> პარამეტრები</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /second navbar -->




@include('admin.layouts.modals')




<!-- Vertical form modal
<div id="addpost" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Vertical form</h5>
            </div>

            <form action="#">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label>First name</label>
                                <input type="text" placeholder="Eugene" class="form-control">
                            </div>

                            <div class="col-sm-6">
                                <label>Last name</label>
                                <input type="text" placeholder="Kopyov" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Address line 1</label>
                                <input type="text" placeholder="Ring street 12" class="form-control">
                            </div>

                            <div class="col-sm-6">
                                <label>Address line 2</label>
                                <input type="text" placeholder="building D, flat #67" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label>City</label>
                                <input type="text" placeholder="Munich" class="form-control">
                            </div>

                            <div class="col-sm-4">
                                <label>State/Province</label>
                                <input type="text" placeholder="Bayern" class="form-control">
                            </div>

                            <div class="col-sm-4">
                                <label>ZIP code</label>
                                <input type="text" placeholder="1031" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
                                    <input type="checkbox" class="switch" checked="checked">
                                    Live update:
                                </label>
                            </div>

                            <div class="col-sm-6">
                                <label>Phone #</label>
                                <input type="text" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" class="form-control">
                                <span class="help-block">+99-99-9999-9999</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</div>
/vertical form modal -->