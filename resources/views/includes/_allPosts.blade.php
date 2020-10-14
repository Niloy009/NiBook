
@foreach($allPosts as $post)
<div class="post m-3">
    <div class="user-block">
        <img class="img-circle img-bordered-sm" src="https://picsum.photos/40" alt="user image">
        <span class="username">
                          <a href="#">{{$post->user->fname}}</a>
                        </span>
        <span class="description">{{showDiffForHuman($post->created_at)}}</span>
    </div>
    <p>
        {{$post->body}}
    </p>

    <p>

        <a href="#" class="link-black text-sm mr-2"><i class="far fa-thumbs-up mr-1"></i> Like</a>
        <a href="#" class="link-black text-sm"><i class="far fa-comments mr-1"></i> Comment</a>
        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
    </p>

    <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
</div>
@endforeach
