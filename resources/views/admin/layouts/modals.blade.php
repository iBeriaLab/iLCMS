<!-- Add Post Modal -->
<div id="addpost" class="modal fade">
    <div class="modal-dialog modal-full">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title font1">პოსტის დამატება</h5>
            </div>

            <form action="#">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>სათაური</label>
                                    <input type="text" placeholder="მაგ: ტესტ სათაური" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Basic example</label>
                                    <input type="text" placeholder="მაგ: ტესტ სათაური" class="form-control" id="tokenfield" value="" />
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label class="display-block">კატეგორია</label>





                                <select class="js-example-basic-single form-control" multiple>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="FL">Florida</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Address line 1</label>
                                <textarea class="ckeditor" name="editor"></textarea>
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
                                    გამოქვეყნება:
                                </label>
                            </div>

                            <div class="col-sm-6">

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
<!-- /Add Post Modal -->























<!-- Profile image Change Modal -->
<div id="avatarchange" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title font1">პოსტის დამატება</h5>
            </div>

            <form action="/app/account" method="post" enctype="multipart/form-data">
                <div class="modal-body">


                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label>პროფილის სურათის ატვირთვა</label>

                                <input type="file" name="avatar">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            </div>

                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Profile image Change Modal -->



