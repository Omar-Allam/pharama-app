@extends('app')
@section('body')
    <form class="form-group" method="POST" action="{{route('medicine.update',$medicine)}}"
          enctype="multipart/form-data">
        {{csrf_field()}}{{method_field('PUT')}}
        @include('_form',$medicine)
    </form>
@endsection
