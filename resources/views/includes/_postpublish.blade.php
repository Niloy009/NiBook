<div class="border border-primary rounded-lg px-8 py-6">
    {{Form::open(['method' => 'POST', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data' ])}}
    <div class="form-group m-2">

                <textarea type="text" name="body"
                          placeholder="What's up?" class="w-100 form-control" rows="2">
                </textarea>
    </div>
    <footer class="d-flex justify-content-between m-2">
        <img src="https://picsum.photos/40" alt="" class="rounded-circle mr-2">
        <button type="submit"
                class="btn btn-primary shadow px-2 py-2 text-white rounded-pill">
            Publish
        </button>
    </footer>
    {{Form::close()}}
</div>
