
@extends('admin.layouts.app')

@section('title', 'Criando Post')

@section('content')

    <table class="items-center text-center ">
<h1 class="'text-center text-3x1 uppercase font-black my-4"> Criando novo Post</h1>

<div class="'w-11/12 p-12 bg-black sm:w-8/12 md:w-1/2 lg:w-5/12 mx-auto"></div>
<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
@include('admin.posts._partials.form')
</form>

<a href="/posts">Voltar</a>
</table>
@endsection
