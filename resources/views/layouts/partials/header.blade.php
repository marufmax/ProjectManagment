<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <div class="mr-1" >
            <a class="btn btn-info" href="{{ URL::previous() }}">back</a>
            <a class="btn btn-info" href="/companies"> All Company</a>
            @if(Request::route()->getName() == "projects.create")
            <a href="{{route("projects.create")}}" class="btn btn-outline-primary">Create New Project</a>
            @else
                <a href="{{route("companies.create")}}" class="btn btn-outline-primary">Create New Company</a>
            @endif
        </div>
</div>

    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            @if(Request::route()->getName() != "companies.create" && Request::route()->getName() != "companies.index")
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
            </form> @endif
        </div>
    </div>