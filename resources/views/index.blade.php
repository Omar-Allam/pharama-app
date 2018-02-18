@extends('app')

@section('body')

    <div class="row">
        @foreach(\App\Medicine::all() as $medicine)
            <div class="col-sm-2 col-md-2">
                <div class="thumbnail">
                    <img src="data:image/jpeg;base64,{{$medicine->image}}" height="200" width="200"/>
                    <div class="caption">
                        <label>{{$medicine->name}} {{$medicine->capacity}}</label>
                        <a href="{{route('medicine.edit',$medicine)}}" class="btn btn-xs btn-warning" role="button" >Edit</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection