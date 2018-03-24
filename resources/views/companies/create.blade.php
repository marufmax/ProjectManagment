@extends('layouts.dasboard')

@section('content')
    <h2 class="display-4">Creating new company</h2>
    <hr />
<form method="post" action="{{ route('companies.store') }}">
    {{--<input type="hidden" name="_method" value="put">--}}
    {{ csrf_field() }}
    <div class="form-group">
        <label for="company-form">Name <span class="required">*</span> </label>
        <input class="form-control" name="name" id="company-name"
               placeholder="Enter Name" required>
    </div>

    <div class="form-group">
        <label for="company-description">Description</label>
        <textarea  class="form-control" id="company-description"
                   placeholder="Enter Description" name="description"
                   rows="5"> </textarea>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit" />
    </div>
</form>

@endsection