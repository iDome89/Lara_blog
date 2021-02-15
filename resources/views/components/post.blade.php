

@props(['post'=> $post])

    <div class="card text-center mt-2 mb-2">
        <div class="card-header">
            <strong>{{ $post->user->username }}</strong>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$post->post_title}}</h5>
            <p class="card-text">{{$post->post_content}}</p>
        </div>
        <div class="card-footer">
            <p class="text-muted">{{$post->created_at->diffForHumans()}}<p>
            <h6>Category: {{$post->category->name}}</h6>
        </div>
    </div>

