<form action="{{ route('messages.update', $thread->id) }}" method="post">
    {{ method_field('put') }}
    {{ csrf_field() }}

<textarea name="message" class="form-control content-group" rows="3" cols="1" placeholder="დაწერეთ შეტყობინება..."></textarea>
<div class="row">
    <div class="col-xs-6">
        <ul class="icons-list icons-list-extended mt-10">
            <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send photo"><i class="icon-file-picture"></i></a></li>
            <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send video"><i class="icon-file-video"></i></a></li>
            <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send file"><i class="icon-file-plus"></i></a></li>
        </ul>

        <ul class="icons-list icons-list-extended mt-10">
            <li>
                @if($users->count() > 0)
                    <div class="checkbox">
                        @foreach($users as $user)
                            <label title="{{ $user->name }}">
                                <input type="checkbox" name="recipients[]" value="{{ $user->id }}">{{ $user->name }}
                            </label>
                        @endforeach
                    </div>
                @endif
            </li>
        </ul>
    </div>
    <div class="col-xs-6 text-right">
        <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-circle-right2"></i></b> გაგზავნა</button>
    </div>
</div>

</form>
