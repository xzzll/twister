@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!<br/>
                    welcome to twister!
                    <form class="" action="{{url('test')}}" method="get">

                    please  return:<br/>
                    <input type="submit" name="" value="twisters">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
