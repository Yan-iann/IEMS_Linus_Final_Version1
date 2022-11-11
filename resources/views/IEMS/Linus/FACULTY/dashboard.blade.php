@extends('layout')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
<style>
    body{
    background-attachment: fixed;
    background-size: cover;
}
.title{
    background-color: maroon;
    color: white;
    margin-top: 3px;
    padding-top: 20px;
    padding-bottom: 20px;
    font-family: 'Times New Roman', serif;
}
.container{
    width: 10000px;
}
.card-body{
    text-align: center;
}
#card-body {
    text-align: left;
}
h1{
  text-align:center;
  font-size: 300px;
  color: cyan;
}
</style>
<br>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand"  href="{{ url('/') }}" >LINUS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('wildlife') }}">WILDLIFE<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('thesis') }}">THESIS PAPER<span class="sr-only"></span></a>
      </li> 
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('journal') }}">JOURNAL ARTICLE<span class="sr-only"></span></a>
      </li>
    </ul>
  </div>
</nav>
<h1>LINUS</h1>
</body>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
