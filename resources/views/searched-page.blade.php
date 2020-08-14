@extends('layout.main')

@section('content')
    <div class="container">
        <div class="col">
            <h1 class="text-danger text-uppercase font-wieght">
                <strong>Search Result</strong>    
            </h1>
          <p>
              @foreach($Citizen as $name)
                    {{$name->full_name}}
              @endforeach
          </p>
        </div>
    </div>
    </div>
@endsection