<div class="border border-primary rounded-lg px-8 py-6">
    {{Form::open(['route' => ['post.create', auth()->user()->id],'method' => 'POST', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'id' => 'postForm' ])}}
    <div class="form-group m-2">
                <textarea type="text" name="body"
                          placeholder="What's up?"
                          class="w-100 form-control @error('body') is-invalid @enderror"
                          rows="2"></textarea>
        <span class="text-danger">
            {{$errors->has('body') ? $errors->first('body') : ''}}
        </span>
        <input id="file" name="files[]" multiple class="d-none" type="file" accept="image/*,video/*">
            <button type="button" class="btn btn-success rounded-pill mt-2"
                    onclick="document.getElementById('file').click();">
                Add to your post<i class="fas fa-1x fa-photo-video ml-1"></i></button>

    </div>
    <footer class="row justify-content-between m-2">
        <img src="https://picsum.photos/40" alt="" class="rounded-circle mr-2">
        <button type="submit"
                class="btn btn-primary shadow px-2 py-2 text-white rounded-pill">
            Publish
        </button>
    </footer>
    {{Form::close()}}
</div>
@section('script')
    <script>
    // $(document).ready(function () {    //Create forum post form frontend validation
    //     $('#postForm').validate({
    //         rules: {
    //             body: {
    //                 required: true,
    //             },
    //         },
    //         messages: {
    //             body: {
    //                 required: "Please add some text",
    //             },
    //         },
    //         submitHandler: function (form) {
    //                 form.submit();
    //         },
    //
    //         errorElement: 'span',
    //         errorPlacement: function (error, element) {
    //             error.addClass('invalid-feedback error-right-msg');
    //             element.closest('.form-group').append(error);
    //         },
    //         highlight: function (element, errorClass, validClass) {
    //             $(element).addClass('is-invalid');
    //         },
    //         unhighlight: function (element, errorClass, validClass) {
    //             $(element).removeClass('is-invalid');
    //         }
    //     });
    // });
    </script>
@endsection
