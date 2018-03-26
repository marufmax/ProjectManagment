@extends('layouts.dasboard')

@section('content')
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