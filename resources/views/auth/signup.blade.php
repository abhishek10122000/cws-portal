@extends('base')
@section('content')
<div class="flex h-screen bg-gray-500  place-content-center place-items-center ">
    <div class="w-1/4 bg-blue-500 rounded p-2  shadow">
        <h1 class="text-xl uppercase font-bold text-center ">Signin here</h1>
        <form action="{{route('signup')}}" method="post">
            @csrf
            <div class="flex flex-col py-4 ">
                <label for="" class="text-white font-xs">Name</label>
                <input type="text" name="name" value="{{old('name')}}" class="p-1 rounded border-2 shadow hover:border-green-300" placeholder="Enater name">
            </div>
            <div class="flex flex-col my-3">
                <label for="" class="text-white font-xs">Email</label>
                <input type="text" name="email" value="{{old('email')}}" class="p-1 rounded border-2 shadow hover:border-green-300" placeholder="Enater email">
            </div>
            <div class="flex flex-col my-3">
                <label for="" class="text-white font-xs">Password</label>
                <input type="password" name="password" value="{{old('password')}}" class="p-1 rounded border-2 shadow hover:border-green-300">
            </div>
            <div class="my-3 ">
                <input type="submit" class="px-3 py-2 w-full text-center bg-green-400 rounded ">
            </div>
            <div class="">
                <div class="text-end"><a href="{{route('login')}}" class="">login</a></div>
            </div>
        </form>
    </div>
</div>
@endsection