@extends('layout')

@section('content')
    <h1>Create link</h1>
    <form action="{{route('createLink')}}" method="POST">
       @csrf
        <div class="mb-3 row">
            <label for="link" class="col-sm-2 col-form-label">Original link</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="link" name="link">
            </div>
        </div>
        @if($errors->has('link'))
            @foreach($errors->get('link') as $error)
                <div class="alert alert-danger" role="alert">
                    <p class="warning_inner">{{$error}}</p>
                </div>
            @endforeach
        @endif
        <div class="row align-items-center">
            <div class="col">
                <label for="hour" class="col-sm-2 col-form-label">Hour(s)</label>
                <input type="number" class="form-control" id="hour" name="hour" min="0" max="24" value="0">
            </div>
            @if($errors->has('hour'))
                @foreach($errors->get('hour') as $error)
                    <div class="alert alert-danger" role="alert">
                        <p class="warning_inner">{{$error}}</p>
                    </div>
                @endforeach
            @endif
            <div class="col">
                <label for="minute" class="col-sm-2 col-form-label">Minutes</label>
                <input type="number" class="form-control" id="minute" name="minute" min="1" max="60" value="0">
            </div>
            @if($errors->has('minute'))
                @foreach($errors->get('minute') as $error)
                    <div class="alert alert-danger" role="alert">
                        <p class="warning_inner">{{$error}}</p>
                    </div>
                @endforeach
            @endif
            <div class="col">
                <label for="limit" class="col-sm-2 col-form-label">limit</label>
                <input type="number" class="form-control" id="link" name="limit" min="0" value="0">
            </div>
        </div>
        @if($errors->has('limit'))
            @foreach($errors->get('limit') as $error)
                <div class="alert alert-danger" role="alert">
                    <p class="warning_inner">{{$error}}</p>
                </div>
            @endforeach
        @endif
        <button type="submit" class="btn btn-primary">Save</button>

    </form>

@endsection
