@foreach($allPosts as $post)
    <div class="post m-3">
        <div class="user-block">
            <img class="img-circle img-bordered-sm" src="https://picsum.photos/40" alt="user image">
            <span class="username">
                          <a href="#">{{$post->user->full_name}}</a>
                        </span>
            <span class="description">{{showDiffForHuman($post->created_at)}}</span>
        </div>
        <div>
            {{$post->body}}
            <div class="">
                @foreach($post->files as $key => $file)
                    @if($file->isImage == 0)
                        <div class="filtr-item col-sm-2 d-inline-block"
                             data-category="1"
                             data-sort="white sample">
                            <img src="{{filePath($file->files)}}"
                                 class="img-fluid" alt="post image"/>
                        </div>
                    @else
                        <video width="320" height="240" controls>
                            <source src="{{filePath($file->files)}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                @endforeach
            </div>

        </div>

        <p class="mt-1">
            <a href="#" class="text-dark mr-2"><i class="far fa-thumbs-up mr-1"></i></a>
            <a href="#" class="text-dark"><i class="far fa-comments mr-1"></i></a>
            <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
        </p>

        <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
    </div>
@endforeach
