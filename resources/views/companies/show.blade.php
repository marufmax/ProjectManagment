@extends('layouts.dasboard')
@section('content')
                <h2 class="display-4">Hello {{ $company->name  }}</h2>
                <p class="lead"> {{ $company->description  }}</p>
                <hr />
                <h3 class="mb-5"> Your Projects</h3>
                <div class="row" style="background-color: white; margin: 10px;">
                    @foreach( $company->projects as $project)
                    <div class="col-lg-4">
                        <h2>{{ $project->name }}</h2>
                        <p>{{$project->description  }}</p>
                        <p><a class="btn btn-primary" href="#" role="button">View details »</a></p>
                    </div>
                    @endforeach<!-- /.col-lg-4 -->
                </div>
@endsection