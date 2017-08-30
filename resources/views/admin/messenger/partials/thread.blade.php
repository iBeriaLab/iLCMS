<?php $class = $thread->isUnread(Auth::id()) ? 'bg-indigo-300' : ''; ?>



@if($thread->creator()->id !== Auth::user()->id)

    <tr class="media {{ $class }}">
        <td>
            <div class="media-left media-middle">
                <a href="{{ route('messages.show', $thread->id) }}">
                    <img src="{{ url('/images/avatars', $thread->creator()->avatar) }}" class="img-circle img-sm" alt="">
                    <span class="badge bg-danger-400 media-badge">{{ $thread->userUnreadMessagesCount(Auth::id()) }}</span>
                </a>
            </div>
            <div class="media-left">
                <div class="">
                    <span class="text-semibold">{{ $thread->creator()->name }}</span>
                </div>
                <div class="text-muted text-size-small">
                    <span class="text-muted">{{ str_limit($thread->latestMessage->body) }}</span>
                </div>
            </div>
        </td>
        <td> <span class="media-annotation pull-right">04:58</span></td>
    </tr>
@endif

