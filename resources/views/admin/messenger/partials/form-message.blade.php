<h2>Add a new message</h2>


<div class="panel panel-flat">


    <div class="panel-body">


<form action="{{ route('messages.update', $thread->id) }}" method="post">
    {{ method_field('put') }}
    {{ csrf_field() }}








                <div class="form-group">
                    <textarea name="message" class="form-control mb-15" rows="3" cols="1" placeholder="What's on your mind?"></textarea>
                </div>

                <div class="row">
                    <div class="col-xs-6">
                        @if($users->count() > 0)
                                <div class="checkbox">
                                    @foreach($users as $user)
                                        <label title="{{ $user->name }}">
                                            <input type="checkbox" name="recipients[]" value="{{ $user->id }}">{{ $user->name }}
                                        </label>
                                    @endforeach
                                </div>
                            @endif

                    </div>

                    <div class="col-xs-6 text-right">
                        <button type="submit" class="btn btn-primary btn-labeled btn-labeled-right legitRipple">Send <b><i class="icon-circle-right2"></i></b></button>
                    </div>
                </div>







</form>


    </div>
</div>
