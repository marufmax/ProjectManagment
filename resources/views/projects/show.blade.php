@extends('layouts.dasboard')
@section('content')
                <h2 class="display-4">Hello {{ $company->name  }}</h2>
                <p class="lead"> {{ $company->description  }}</p>
                <hr />
                <div class="row">
                    <div class="col-sm">
                        <h3 class="mb-5"> Your Projects</h3>
                    </div>
                    <div class="col-sm">
                        <a href="{{ route('projects.create') }}" type="button" class="float-right btn btn-outline-primary btn-lg">Create Project</a>
                    </div>
                </div>

                <div class="row" style="background-color: white; margin: 10px;">
                    @foreach( $company->projects as $project)
                    <div class="border border-info col-lg-4 m-2">
                        <div class="mt-3">
                        <h2>{{ $project->name }}</h2>
                        <p>{{$project->description  }}</p>
                        <p><a class="btn btn-primary" href="#" role="button">View details »</a></p>
                        </div>
                    </div>
                    @endforeach<!-- /.col-lg-4 -->
                </div>
@endsection