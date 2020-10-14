@extends('layouts.app')
@section('title')
    Nibook
@endsection
@section('content')
    <div class="row">
        <div class="col-md-2">@include('includes._sidebar')</div>
        <div class="col-md-8">
            @include('includes._postpublish')
            <div class="border border-secondary rounded mt-3">
                @include('includes._allPosts')
            </div>
        </div>
        <div class="col-md-2">@include('includes._friends')</div>
    </div>
@endsection
