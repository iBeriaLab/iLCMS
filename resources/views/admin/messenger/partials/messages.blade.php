<div class="media">

    @if($message->user->name != Auth::user()->name)
    <a class="pull-right" href="{{ url('/app/account', $message->user->id) }}">
        <img src="{{ url('/images/avatars', $message->user->avatar) }}"
             alt="{{ $message->user->name }}" class="img-circle" style="width: 50px;">
    </a>
        <div class="media-body navbar navbar-default navbar-component navbar-xs p-10">
            <small>{!! $message->body !!}</small>
        </div>
        <div class="text-muted">
            <small>გამოგზავნილია {{ $message->created_at->diffForHumans() }}</small>
        </div>
    @else
        <a class="pull-left" href="#">
            <img src="{{ url('/images/avatars', $message->user->avatar) }}"
                 alt="{{ $message->user->name }}" class="img-circle" style="width: 50px;">
        </a>

    <div class="media-body navbar navbar-default navbar-component navbar-xs p-10 bg-indigo-400">
        <small>{!! $message->body !!}</small>
    </div>
    <div class="text-muted">
        <small>გაგზავნილია {{ $message->created_at->diffForHumans() }}</small>
    </div>
    @endif
</div>