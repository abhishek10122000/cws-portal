@extends('base')
@section('content')
<div class="bg-indigo-500 t-orange-400 form-green-600 h-screen">
    <div class="w-1/4 mx-auto ">
        <div class="bg-slate-500 rounded p-2 ">
            <h1 class="text-xl uppercase font-bold text-center bg-black">Signin here</h1>
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="flex flex-col my-3">
                    <label for="" class="text-white font-xs">Email</label>
                    <input type="text" name="email" value="{{old('email')}}" class="p-1 rounded border-2 shadow hover:border-green-300" placeholder="Enater email">
                </div>
                <div class="flex flex-col my-3">
                    <label for="" class="text-white font-xs">Password</label>
                    <input type="password" name="password" value="{{old('password')}}" class="p-1 rounded border-2 shadow hover:border-green-300">
                </div>
                <div class="my-3 ">
                    <input type="submit" class="px-3 py-2 bg-green-400 rounded text-end">
                </div>
                <div class="">
                    <span><a href="{{route('signup')}}" class="">Signup</a></span>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection