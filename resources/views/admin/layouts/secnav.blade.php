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
                                                <li><a href="alpaca_basic.html">ვიდეო გალერეა</a></li>
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


                <li class="dropdown mega-menu mega-menu-wide">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-puzzle4 position-left"></i> Components <span class="caret"></span></a>

                    <div class="dropdown-menu dropdown-content">
                        <div class="dropdown-content-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <span class="menu-heading underlined">Forms</span>
                                    <ul class="menu-list">
                                        <li>
                                            <a href="#"><i class="icon-pencil3"></i> Form components</a>
                                            <ul>
                                                <li><a href="form_inputs_basic.html">Basic inputs</a></li>
                                                <li><a href="form_checkboxes_radios.html">Checkboxes &amp; radios</a></li>
                                                <li><a href="form_input_groups.html">Input groups</a></li>
                                                <li><a href="form_controls_extended.html">Extended controls</a></li>
                                                <li><a href="form_floating_labels.html">Floating labels</a></li>
                                                <li>
                                                    <a href="#">Selects</a>
                                                    <ul>
                                                        <li><a href="form_select2.html">Select2 selects</a></li>
                                                        <li><a href="form_multiselect.html">Bootstrap multiselect</a></li>
                                                        <li><a href="form_select_box_it.html">SelectBoxIt selects</a></li>
                                                        <li><a href="form_bootstrap_select.html">Bootstrap selects</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="form_tag_inputs.html">Tag inputs</a></li>
                                                <li><a href="form_dual_listboxes.html">Dual Listboxes</a></li>
                                                <li><a href="form_editable.html">Editable forms</a></li>
                                                <li><a href="form_validation.html">Validation</a></li>
                                                <li><a href="form_inputs_grid.html">Inputs grid</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-file-css"></i> JSON forms</a>
                                            <ul>
                                                <li><a href="alpaca_basic.html">Basic inputs</a></li>
                                                <li><a href="alpaca_advanced.html">Advanced inputs</a></li>
                                                <li><a href="alpaca_controls.html">Controls</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-footprint"></i> Wizards</a>
                                            <ul>
                                                <li><a href="wizard_steps.html">Steps wizard</a></li>
                                                <li><a href="wizard_form.html">Form wizard</a></li>
                                                <li><a href="wizard_stepy.html">Stepy wizard</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-spell-check"></i> Editors</a>
                                            <ul>
                                                <li><a href="editor_summernote.html">Summernote editor</a></li>
                                                <li><a href="editor_ckeditor.html">CKEditor</a></li>
                                                <li><a href="editor_wysihtml5.html">WYSIHTML5 editor</a></li>
                                                <li><a href="editor_code.html">Code editor</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-select2"></i> Pickers</a>
                                            <ul>
                                                <li><a href="picker_date.html">Date &amp; time pickers</a></li>
                                                <li><a href="picker_color.html">Color pickers</a></li>
                                                <li><a href="picker_location.html">Location pickers</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-insert-template"></i> Form layouts</a>
                                            <ul>
                                                <li><a href="form_layout_vertical.html">Vertical form</a></li>
                                                <li><a href="form_layout_horizontal.html">Horizontal form</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <span class="menu-heading underlined">Appearance</span>
                                    <ul class="menu-list">
                                        <li>
                                            <a href="#"><i class="icon-grid"></i> Components</a>
                                            <ul>
                                                <li><a href="components_modals.html">Modals</a></li>
                                                <li><a href="components_dropdowns.html">Dropdown menus</a></li>
                                                <li><a href="components_tabs.html">Tabs component</a></li>
                                                <li><a href="components_pills.html">Pills component</a></li>
                                                <li><a href="components_navs.html">Accordion and navs</a></li>
                                                <li><a href="components_buttons.html">Buttons</a></li>
                                                <li><a href="components_notifications_pnotify.html">PNotify notifications</a></li>
                                                <li><a href="components_notifications_others.html">Other notifications</a></li>
                                                <li><a href="components_popups.html">Tooltips and popovers</a></li>
                                                <li><a href="components_alerts.html">Alerts</a></li>
                                                <li><a href="components_pagination.html">Pagination</a></li>
                                                <li><a href="components_labels.html">Labels and badges</a></li>
                                                <li><a href="components_loaders.html">Loaders and bars</a></li>
                                                <li><a href="components_thumbnails.html">Thumbnails</a></li>
                                                <li><a href="components_page_header.html">Page header</a></li>
                                                <li><a href="components_breadcrumbs.html">Breadcrumbs</a></li>
                                                <li><a href="components_media.html">Media objects</a></li>
                                                <li><a href="components_affix.html">Affix and Scrollspy</a></li>
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
                                    <span class="menu-heading underlined">Extensions</span>
                                    <ul class="menu-list">
                                        <li>
                                            <a href="#"><i class="icon-puzzle4"></i> Extensions</a>
                                            <ul>
                                                <li><a href="extension_image_cropper.html">Image cropper</a></li>
                                                <li><a href="extension_blockui.html">Block UI</a></li>
                                                <li><a href="extension_dnd.html">Drag and drop</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-popout"></i> JQuery UI</a>
                                            <ul>
                                                <li><a href="jqueryui_interactions.html">Interactions</a></li>
                                                <li><a href="jqueryui_forms.html">Forms</a></li>
                                                <li><a href="jqueryui_components.html">Components</a></li>
                                                <li><a href="jqueryui_sliders.html">Sliders</a></li>
                                                <li><a href="jqueryui_navigation.html">Navigation</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-upload"></i> File uploaders</a>
                                            <ul>
                                                <li><a href="uploader_plupload.html">Plupload</a></li>
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

                <li class="dropdown mega-menu mega-menu-wide">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-stars position-left"></i> Features <span class="caret"></span></a>

                    <div class="dropdown-menu dropdown-content">
                        <div class="dropdown-content-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <span class="menu-heading underlined">Main content</span>
                                    <ul class="menu-list">
                                        <li>
                                            <a href="#"><i class="icon-stack2"></i> Page layouts</a>
                                            <ul>
                                                <li><a href="layout_navbar_main_fixed.html">Fixed main navbar</a></li>
                                                <li><a href="layout_navbar_secondary_fixed.html">Fixed secondary navbar</a></li>
                                                <li><a href="layout_navbar_main_hideable.html">Hideable main navbar</a></li>
                                                <li><a href="layout_navbar_secondary_hideable.html">Hideable secondary navbar</a></li>
                                                <li><a href="layout_footer_fixed.html">Fixed footer</a></li>
                                                <li><a href="layout_sidebar_sticky_custom.html">Sticky sidebar (custom scroll)</a></li>
                                                <li><a href="layout_sidebar_sticky_native.html">Sticky sidebar (native scroll)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-align-center-horizontal"></i> Fixed width</a>
                                            <ul>
                                                <li><a href="boxed_full.html">Boxed full width</a></li>
                                                <li><a href="boxed_default.html">Boxed with default sidebar</a></li>
                                                <li><a href="boxed_mini.html">Boxed with mini sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-copy"></i> Layouts</a>
                                            <ul>
                                                <li><a href="../../../layout_1/LTR/default/index.html" id="layout1">Layout 1</a></li>
                                                <li><a href="../../../layout_2/LTR/default/index.html" id="layout2">Layout 2</a></li>
                                                <li><a href="../../../layout_3/LTR/default/index.html" id="layout3">Layout 3</a></li>
                                                <li><a href="index.html" id="layout4">Layout 4 <span class="label bg-warning-400">Current</span></a></li>
                                                <li><a href="../../../layout_5/LTR/default/index.html" id="layout5">Layout 5</a></li>
                                                <li class="disabled"><a href="../../layout_6/LTR/default/index.html" id="layout6">Layout 6 <span class="label bg-slate-300">Coming soon</span></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-droplet2"></i> Color system</a>
                                            <ul>
                                                <li><a href="colors_primary.html">Primary palette</a></li>
                                                <li><a href="colors_danger.html">Danger palette</a></li>
                                                <li><a href="colors_success.html">Success palette</a></li>
                                                <li><a href="colors_warning.html">Warning palette</a></li>
                                                <li><a href="colors_info.html">Info palette</a></li>
                                                <li class="divider"></li>
                                                <li><a href="colors_pink.html">Pink palette</a></li>
                                                <li><a href="colors_violet.html">Violet palette</a></li>
                                                <li><a href="colors_purple.html">Purple palette</a></li>
                                                <li><a href="colors_indigo.html">Indigo palette</a></li>
                                                <li><a href="colors_blue.html">Blue palette</a></li>
                                                <li><a href="colors_teal.html">Teal palette</a></li>
                                                <li><a href="colors_green.html">Green palette</a></li>
                                                <li><a href="colors_orange.html">Orange palette</a></li>
                                                <li><a href="colors_brown.html">Brown palette</a></li>
                                                <li><a href="colors_grey.html">Grey palette</a></li>
                                                <li><a href="colors_slate.html">Slate palette</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="../../RTL/default/index.html"><i class="icon-width"></i> RTL version</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <span class="menu-heading underlined">Layout</span>
                                    <ul class="menu-list">
                                        <li>
                                            <a href="#"><i class="icon-indent-decrease2"></i> Sidebars</a>
                                            <ul>
                                                <li><a href="sidebar_default_collapse.html">Default collapsible</a></li>
                                                <li><a href="sidebar_default_hide.html">Default hideable</a></li>
                                                <li><a href="sidebar_mini_collapse.html">Mini collapsible</a></li>
                                                <li><a href="sidebar_mini_hide.html">Mini hideable</a></li>
                                                <li>
                                                    <a href="#">Dual sidebar</a>
                                                    <ul>
                                                        <li><a href="sidebar_dual.html">Dual sidebar</a></li>
                                                        <li><a href="sidebar_dual_double_collapse.html">Dual double collapse</a></li>
                                                        <li><a href="sidebar_dual_double_hide.html">Dual double hide</a></li>
                                                        <li><a href="sidebar_dual_swap.html">Swap sidebars</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Double sidebar</a>
                                                    <ul>
                                                        <li><a href="sidebar_double_collapse.html">Collapse main sidebar</a></li>
                                                        <li><a href="sidebar_double_hide.html">Hide main sidebar</a></li>
                                                        <li><a href="sidebar_double_fix_default.html">Fix default width</a></li>
                                                        <li><a href="sidebar_double_fix_mini.html">Fix mini width</a></li>
                                                        <li><a href="sidebar_double_visible.html">Opposite sidebar visible</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="sidebar_categories.html">Separate categories</a></li>
                                                <li><a href="sidebar_hidden.html">Hidden sidebar</a></li>
                                                <li><a href="sidebar_dark.html">Dark sidebar</a></li>
                                                <li><a href="sidebar_components.html">Sidebar components</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-sort"></i> Vertical navigation</a>
                                            <ul>
                                                <li><a href="navigation_vertical_collapsible.html">Collapsible menu</a></li>
                                                <li><a href="navigation_vertical_accordion.html">Accordion menu</a></li>
                                                <li><a href="navigation_vertical_sizing.html">Navigation sizing</a></li>
                                                <li><a href="navigation_vertical_bordered.html">Bordered navigation</a></li>
                                                <li><a href="navigation_vertical_right_icons.html">Right icons</a></li>
                                                <li><a href="navigation_vertical_labels_badges.html">Labels and badges</a></li>
                                                <li><a href="navigation_vertical_disabled.html">Disabled navigation links</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-transmission"></i> Horizontal navigation</a>
                                            <ul>
                                                <li><a href="navigation_horizontal_click.html">Submenu on click</a></li>
                                                <li><a href="navigation_horizontal_hover.html">Submenu on hover</a></li>
                                                <li><a href="navigation_horizontal_elements.html">With custom elements</a></li>
                                                <li><a href="navigation_horizontal_tabs.html">Tabbed navigation</a></li>
                                                <li><a href="navigation_horizontal_disabled.html">Disabled navigation links</a></li>
                                                <li><a href="navigation_horizontal_mega.html">Horizontal mega menu</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-paragraph-justify3"></i> Navbars</a>
                                            <ul>
                                                <li><a href="navbar_single.html">Single navbar</a></li>
                                                <li>
                                                    <a href="#">Multiple navbars</a>
                                                    <ul>
                                                        <li><a href="navbar_multiple_navbar_navbar.html">Navbar + navbar</a></li>
                                                        <li><a href="navbar_multiple_header_navbar.html">Header + navbar</a></li>
                                                        <li><a href="navbar_multiple_navbar_content.html">Navbar + content</a></li>
                                                        <li><a href="navbar_multiple_top_bottom.html">Top + bottom</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="navbar_colors.html">Color options</a></li>
                                                <li><a href="navbar_sizes.html">Sizing options</a></li>
                                                <li><a href="navbar_hideable.html">Hide on scroll</a></li>
                                                <li><a href="navbar_components.html">Navbar components</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-tree5"></i> Menu levels</a>
                                            <ul>
                                                <li><a href="#"><i class="icon-IE"></i> Second level</a></li>
                                                <li>
                                                    <a href="#"><i class="icon-firefox"></i> Second level with child</a>
                                                    <ul>
                                                        <li><a href="#"><i class="icon-android"></i> Third level</a></li>
                                                        <li>
                                                            <a href="#"><i class="icon-apple2"></i> Third level with child</a>
                                                            <ul>
                                                                <li><a href="#"><i class="icon-html5"></i> Fourth level</a></li>
                                                                <li><a href="#"><i class="icon-css3"></i> Fourth level</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#"><i class="icon-windows"></i> Third level</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#"><i class="icon-chrome"></i> Second level</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <span class="menu-heading underlined">Data visualization</span>
                                    <ul class="menu-list">
                                        <li>
                                            <a href="#"><i class="icon-graph"></i> Echarts library</a>
                                            <ul>
                                                <li><a href="echarts_lines_areas.html">Lines and areas</a></li>
                                                <li><a href="echarts_columns_waterfalls.html">Columns and waterfalls</a></li>
                                                <li><a href="echarts_bars_tornados.html">Bars and tornados</a></li>
                                                <li><a href="echarts_scatter.html">Scatter charts</a></li>
                                                <li><a href="echarts_pies_donuts.html">Pies and donuts</a></li>
                                                <li><a href="echarts_funnels_chords.html">Funnels and chords</a></li>
                                                <li><a href="echarts_candlesticks_others.html">Candlesticks and others</a></li>
                                                <li><a href="echarts_combinations.html">Chart combinations</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-statistics"></i> D3 library</a>
                                            <ul>
                                                <li><a href="d3_lines_basic.html">Simple lines</a></li>
                                                <li><a href="d3_lines_advanced.html">Advanced lines</a></li>
                                                <li><a href="d3_bars_basic.html">Simple bars</a></li>
                                                <li><a href="d3_bars_advanced.html">Advanced bars</a></li>
                                                <li><a href="d3_pies.html">Pie charts</a></li>
                                                <li><a href="d3_circle_diagrams.html">Circle diagrams</a></li>
                                                <li><a href="d3_tree.html">Tree layout</a></li>
                                                <li><a href="d3_other.html">Other charts</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-stats-dots"></i> Dimple library</a>
                                            <ul>
                                                <li>
                                                    <a href="#">Line charts</a>
                                                    <ul>
                                                        <li><a href="dimple_lines_horizontal.html">Horizontal orientation</a></li>
                                                        <li><a href="dimple_lines_vertical.html">Vertical orientation</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Bar charts</a>
                                                    <ul>
                                                        <li><a href="dimple_bars_horizontal.html">Horizontal orientation</a></li>
                                                        <li><a href="dimple_bars_vertical.html">Vertical orientation</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Area charts</a>
                                                    <ul>
                                                        <li><a href="dimple_area_horizontal.html">Horizontal orientation</a></li>
                                                        <li><a href="dimple_area_vertical.html">Vertical orientation</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Step charts</a>
                                                    <ul>
                                                        <li><a href="dimple_step_horizontal.html">Horizontal orientation</a></li>
                                                        <li><a href="dimple_step_vertical.html">Vertical orientation</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="dimple_pies.html">Pie charts</a></li>
                                                <li><a href="dimple_rings.html">Ring charts</a></li>
                                                <li><a href="dimple_scatter.html">Scatter charts</a></li>
                                                <li><a href="dimple_bubble.html">Bubble charts</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-stats-bars"></i> C3 library</a>
                                            <ul>
                                                <li><a href="c3_lines_areas.html">Lines and areas</a></li>
                                                <li><a href="c3_bars_pies.html">Bars and pies</a></li>
                                                <li><a href="c3_advanced.html">Advanced examples</a></li>
                                                <li><a href="c3_axis.html">Chart axis</a></li>
                                                <li><a href="c3_grid.html">Grid options</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-google"></i> Google visualization</a>
                                            <ul>
                                                <li><a href="google_lines.html">Line charts</a></li>
                                                <li><a href="google_bars.html">Bar charts</a></li>
                                                <li><a href="google_pies.html">Pie charts</a></li>
                                                <li><a href="google_scatter_bubble.html">Bubble &amp; scatter charts</a></li>
                                                <li><a href="google_other.html">Other charts</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <span class="menu-heading underlined">Extras</span>
                                    <ul class="menu-list">
                                        <li><a href="animations_css3.html"><i class="icon-spinner3 spinner position-left"></i> CSS3 animations</a></li>
                                        <li>
                                            <a href="#"><i class="icon-spinner10 spinner position-left"></i> Velocity animations</a>
                                            <ul>
                                                <li><a href="animations_velocity_basic.html">Basic usage</a></li>
                                                <li><a href="animations_velocity_ui.html">UI pack effects</a></li>
                                                <li><a href="animations_velocity_examples.html">Advanced examples</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-map5"></i> Maps integration</a>
                                            <ul>
                                                <li>
                                                    <a href="#">Google maps</a>
                                                    <ul>
                                                        <li><a href="maps_google_basic.html">Basics</a></li>
                                                        <li><a href="maps_google_controls.html">Controls</a></li>
                                                        <li><a href="maps_google_markers.html">Markers</a></li>
                                                        <li><a href="maps_google_drawings.html">Map drawings</a></li>
                                                        <li><a href="maps_google_layers.html">Layers</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="maps_vector.html">Vector maps</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-magazine"></i> Timelines</a>
                                            <ul>
                                                <li><a href="timelines_left.html">Left timeline</a></li>
                                                <li><a href="timelines_right.html">Right timeline</a></li>
                                                <li><a href="timelines_center.html">Centered timeline</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-thumbs-up2 position-left"></i> Icons</a>
                                            <ul>
                                                <li><a href="icons_glyphicons.html">Glyphicons</a></li>
                                                <li><a href="icons_icomoon.html">Icomoon</a></li>
                                                <li><a href="icons_fontawesome.html">Font awesome</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

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