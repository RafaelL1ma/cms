@extends('layouts.master')

@section('css')
<!-- Responsive Table css -->
<link href="{{ URL::asset('assets/libs/rwd-table/rwd-table.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

@endsection

@section('script')

<!-- Responsive Table js -->
<script src="{{ URL::asset('assets/libs/rwd-table/rwd-table.min.js')}}"></script>

<!-- Init js -->
<script src="{{ URL::asset('assets/js/pages/responsive-table.init.js')}}"></script>

@endsection
