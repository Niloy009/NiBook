@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-2">@include('includes._sidebar')</div>
        <div class="col-8">
            <div class="border border-primary rounded-lg px-8 py-6">
                {{Form::open(['method' => 'POST', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data' ])}}
                <div class="form-group m-2">

                <textarea name="body" id=""
                          placeholder="What's up?" class="w-100 form-control">
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
            <div class=""></div>
        </div>
        <div class="col-2">@include('includes._friends')</div>
    </div>
@endsection
