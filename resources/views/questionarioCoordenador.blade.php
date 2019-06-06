@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div id="app">
    <base-container-coord></base-container-coord>
</div>
