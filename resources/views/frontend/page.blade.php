@extends('frontend_layout.frontend_design_ca')

@section('title')
{{$pageDetails->name}}


@endsection
@section('name')
{{$pageDetails->name}}


@endsection


@section('content')


{!! $pageDetails->content !!}

@endsection