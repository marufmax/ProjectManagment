@extends('layouts.dasboard')

@section('content')
        <h2 class="display-4">Editing {{ $company->name  }}</h2>
        <hr />
            <form method="post" action="{{ route('companies.update', [$company->id]) }}"
                  style="background-color: white; margin: 10px;">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">

                <div class="form-group">

                    <label for="company-form">Name <span class="required">*</span> </label>
                    <input class="form-control" name="name" id="company-name"
                           placeholder="Enter Name" value="{{ $company->name }}" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea  class="form-control" id="company-description"
                              placeholder="Enter Description" name="description"
                              rows="5">{{ $company->description  }} </textarea>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit" />
                </div>
            </form>

@endsection