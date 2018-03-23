@extends('layouts.dasboard')

@section('content')

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button class="btn btn-sm btn-outline-secondary">Share</button>
                            <button class="btn btn-sm btn-outline-secondary">Export</button>
                            <button class="btn btn-sm btn-outline-primary">New Company</button>
                        </div>
                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>
                <h2>List of companies</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-hover">

                        <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Representative</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $company)
                            <tr>
                                <td><a href="/companies/{{$company->id}}"> {{ $company->id  }}</a></td>
                                <td><a href="/companies/{{$company->id}}">{{ $company->name }}</a></td>
                                <td>{{ $company->description }}</td>
                                <td><a href="/user/{{$company->user->id}}"> {{ $company->user->name }}</a></td>
                                <td><a href="/companies/{{$company->id}}"> <button type="button" class="btn btn-outline-primary"> View Details </button> </a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

@endsection