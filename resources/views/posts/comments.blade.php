
        @if ($comments)
            <h5> Comments </h5>
            <ul>
                @foreach ($comments as $comment)
                    <li> {{ $comment->Description }} 

                            @if ($comment->id == $comment->parent_id)
                                <ul>
                                    <li> {{ $comment->Description }} </li>
                                </ul>
                            @endif

                    </li>

                    <a href="" id="reply"></a>
                    <form method="post" action="{{ route('comments.store') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="Description" class="form-control" />
                            <input type="hidden" name="post_id" value="{{ $comment->post_id }}" />
                            <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-warning" value="Reply" />
                        </div>
                    </form>
                @endforeach
            </ul>
        @endif

        <h4> Add Comment </h4>

        <form method="POST" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <textarea class="form-control" name="Description"></textarea>
                <input type="hidden" name="post_id" value="{{ $post->id }}">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Add Comment">
            </div>
        </form>