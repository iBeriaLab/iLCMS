

    @if($message->user->name != Auth::user()->name)

        <li class="media">
            <div class="media-left">
                <a href="{{ url('/app/account', $message->user->id) }}">
                    <img src="{{ url('/images/avatars', $message->user->avatar) }}" class="img-circle" alt="{{ $message->user->name }}">
                </a>
            </div>
            <div class="media-body">
                <div class="media-content"><small>{!! $message->body !!}</small></div>
                <span class="media-annotation display-block mt-10">{{ $message->created_at->diffForHumans() }}<a href="#"><i class="icon-watch2 position-right text-muted"></i></a></span>
            </div>
        </li>

    @else

        <li class="media reversed">
            <div class="media-body">
                <div class="media-content"><small>{!! $message->body !!}</small></div>
                <span class="media-annotation display-block mt-10">{{ $message->created_at->diffForHumans() }}<a href="#"><i class="icon-watch2 position-right text-muted"></i></a></span>
            </div>
            <div class="media-right">
                <a href="{{ url('/app/account', $message->user->id) }}">
                    <img src="{{ url('/images/avatars', $message->user->avatar) }}" class="img-circle" alt="{{ $message->user->name }}">
                </a>
            </div>
        </li>
    @endif
