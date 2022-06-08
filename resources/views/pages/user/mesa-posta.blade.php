@extends('layouts.master')

@push('custom-css')
<link :href="'/img/content/sonia/sonia-cropped-headline_WH_668x639px.webp'" rel="preload" as="image">
<link rel="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="preload" as="font">
@endpush

@section('content')
    <navbar-component></navbar-component>
@endsection