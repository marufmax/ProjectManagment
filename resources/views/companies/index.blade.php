@extends('layouts.app')

@section('content')
    <div class="col-md-6 col-md-lg-6 mx-auto">
        <div class="card">
            <h5 class="card-header d-block">Companies</h5>
                    <div class="list-group">
                        @foreach($companies as $company)
                        <li class="list-group-item"><a class="list-group-item list-group-item-action" href="/companies/{{$company->id}}"> {{ $company->name }} </a></li>
                        @endforeach
                    </div>
                <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

@endsection