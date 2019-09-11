


@foreach($comments as $comment)

    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <div class="col-md-12 offset-md-0" style="text-align: left;" >
            <img src="{{asset( $comment->user->profile->file)}}" alt="{{$comment->user->profile->name}}" class="cir-responsive"/>
            <strong>{{ $comment->user->name }}</strong>
            <hr>
            <div>
                <p>{{ $comment->body }}</p>
                <a href="" id="reply"></a>


                <form method="post" action="{{ route('comments.store') }}">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="body" class="form-control" >
                        <input type="hidden" name="post_id" value="{{ $post_id }}" />
                        <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-warning" >
                                <i class="fas fa-reply"></i>
                            </button>
                        </span>
                    </div>
                </form>

            </div>
            @include('admin.posts.commentsDisplay', ['comments' => $comment->replies])
        </div>


    </div>

@endforeach

