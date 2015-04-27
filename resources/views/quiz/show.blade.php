@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Question #{{ $question->id }}</div>

                <div class="panel-body">
                    <p class="lead">{{ $question->description }}<p>
                </div>

                <div class="list-group">
                    @foreach($answers as $answer)
                        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-ok-sign" style="color:green;" aria-hidden="true"></span> {{ $answer->description }}</a>
                    @endforeach

                </div>

            </div>
            <button class="btn btn-primary form-control" type="submit">Answer</button>
        </div>
    </div>
</div>
@stop