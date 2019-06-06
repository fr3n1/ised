	@extends('layouts.app')
	@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div id="app">
        <base-container></base-container>
    </div>

