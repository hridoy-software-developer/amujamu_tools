@extends('layouts.app')

@section('content')
<div class='row'>
    <div class='col-xs-12'>
        <div class="box-header with-border">
            <h3 class="box-title">Dashboard <small>Locations</small></h3>
            <div class="box-tools pull-right">
                <span id='current-time' class='pull-right'></span>
            </div>
        </div>
        <div class="box-body">
        @if(count($locations) == 0)
            <div class="panel-body text-center">
                <h4>No Locations Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($locations as $location)
                        <tr>
                            <td>

                                <form method="POST" action="{!! route('locations.location.destroy', $location->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('locations.location.show', $location->id ) }}" class="btn btn-info" title="Show Location">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('locations.location.edit', $location->id ) }}" class="btn btn-primary" title="Edit Location">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Location" onclick="return confirm(&quot;Delete Location?&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $locations->render() !!}
        </div>
        
        @endif
        </div>
    </div>
</div>

<div class="container-fluid pl-0 pr-0">
    <div class="row row-justified ml-0 mr-0">
        <!-- Dashboard: Visitors -->
        <div class="col-xs-12 pl-0 pr-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Dashboard <small>Create New Manual Booking</small>
                        <span id='current-time' class='pull-right'></span>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- / .row -->
    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif
    <div class="container-fluid pl-0 pr-0">
    <div class="row row-justified ml-0 mr-0">
        <!-- Dashboard: Visitors -->
        <div class="col-xs-12 pl-0 pr-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Locations
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- / .row -->
    
</div> <!-- / .container-fluid -->


    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Locations</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('locations.location.create') }}" class="btn btn-success" title="Create New Location">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($locations) == 0)
            <div class="panel-body text-center">
                <h4>No Locations Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($locations as $location)
                        <tr>

                            <td>

                                <form method="POST" action="{!! route('locations.location.destroy', $location->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('locations.location.show', $location->id ) }}" class="btn btn-info" title="Show Location">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('locations.location.edit', $location->id ) }}" class="btn btn-primary" title="Edit Location">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Location" onclick="return confirm(&quot;Delete Location?&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $locations->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection