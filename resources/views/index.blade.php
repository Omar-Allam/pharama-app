@extends('app')

@section('body')

    <div class="row">
        @foreach($medicines as $medicine)

            <div class="col-sm-2">
                <div class="thumbnail">
                    <img src="data:image/jpeg;base64,{{$medicine->image}}" height="100%" width="100%"/>
                    <div class="caption">
                        <h3>{{$medicine->name}}</h3>
                        <p>{{$medicine->capacity}}</p>
                        <p><a href="{{route('medicine.edit',$medicine)}}" class="btn btn-xs btn-warning" role="button">Edit</a>
                        </p>
                    </div>
                </div>
            </div>


        @endforeach
    </div>

    <div class="text-center">
        {{$medicines->links()}}
    </div>
@endsection