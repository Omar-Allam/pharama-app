@extends('app')

@section('body')
    <form class="form-group" method="POST" action="{{route('medicine.store')}}" enctype="multipart/form-data">
        {{csrf_field()}}



    </form>
@endsection