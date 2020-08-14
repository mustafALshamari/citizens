@extends('layout.main')


@section('content')
    <div class="container">
        <div class="col">
            <h1 class="text-danger text-uppercase font-wieght">
                <strong>Search a citizen</strong>    
           
            </h1>
      
            <form action="{{route('find-name')}}" method="GET">
                {!! csrf_field() !!}
                <div class="input-group mb-3">
                    <input type="text" name="fullName" class="form-control" placeholder="Citizen name" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                     </div>
                    
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>
    </div>
@endsection