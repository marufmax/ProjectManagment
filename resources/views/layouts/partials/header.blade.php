<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <div class="mr-1" >
        <a class="btn btn-info" href="{{ URL::previous() }}">back</a>
        <a class="btn btn-info" href="/companies/{{ $company->id }}"> All Projects</a>
    </div>
    <div class="mr-1"> This company is managed by <a href="/user/{{$company->user->id}}">{{$company->user->name}}</a></div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a href="/companies/{{$company->id}}/edit" class="btn btn-outline-secondary">Edit</a>
            <a class="btn btn-outline-secondary" onclick="
                            var result = confirm('Are you sure you wish to delete this project?');
                                if (result) {
                                    event.preventDefault();
                                    document.getElementById('delete-form').submit();
                                }"
            >Delete</a>
            <form id="delete-form" action="{{ route('companies.destroy', [$company->id]) }}" method="POST" style="display: none;">
                <input type="hidden" name="_method" value="delete">
                {{ csrf_field() }}
            </form>
            <a class="btn btn-outline-secondary">Add New User</a>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
        </button>
    </div>
</div>