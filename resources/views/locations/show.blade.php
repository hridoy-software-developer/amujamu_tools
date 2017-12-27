@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($location->name) ? $location->name : 'Location' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('locations.location.destroy', $location->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('locations.location.index') }}" class="btn btn-primary" title="Show All Location">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('locations.location.create') }}" class="btn btn-success" title="Create New Location">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('locations.location.edit', $location->id ) }}" class="btn btn-primary" title="Edit Location">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Location" onclick="return confirm(&quot;Delete Location??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ $location->name }}</dd>
            <dt>Description</dt>
            <dd>{{ $location->description }}</dd>
            <dt>Created At</dt>
            <dd>{{ $location->created_at }}</dd>
            <dt>Updated At</dt>
            <dd>{{ $location->updated_at }}</dd>

        </dl>

    </div>
</div>

@endsection