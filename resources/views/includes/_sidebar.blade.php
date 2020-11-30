<div class="list-group list-group-flush">

        <a href="/home" class="font-weight-bold list-group-item text-dark">
            Home
        </a>

      <a href="{{route('my.profile')}}" class="font-weight-bold list-group-item text-dark">
            {{auth()->user()->full_name}}
        </a>
        <a href="#" class="font-weight-bold list-group-item text-dark">
            Group
        </a>
    </div>
