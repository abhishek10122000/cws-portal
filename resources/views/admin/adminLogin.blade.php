@extends('admin.adminBase')
@section('content')
    <div class="flex bg-slate-300 h-screen  place-content-center place-items-center">
        <div class="w-1/4 bg-gray-500 p-4 rounded-xl">
            <form action="" method="post">
                <div class="flex flex-col py-3">
                    <label for="">email</label>
                    <input type="text" name="email" value="{{old('email')}}" class="p-2 rounded border-2 shadow-sm">
                </div>
                <div class="flex flex-col py-3">
                    <label for="">email</label>
                    <input type="text" name="password" value="" class="p-2 rounded border-2 shadow-sm">
                </div>
                <div class="flex flex-col py-3 mt-3">
                    <input type="submit" class="p-2 w-full bg-green-500 rounded">
                </div>
                
            </form>

        </div>
    </div>
@endsection