@extends('admin.adminBase')
@section('content')
<div class="flex">
    <div class="2/6 bg-gray-700 h-screen">
        @include('admin.side')
        
    </div>
    <div class="4/6 bg-blend-hard-light h-screen item-center w-full mt-1">
        <form action="{{route('course.update',['course'=>$course])}}" method="post" enctype="multipart/form-data">
            @method("put")
            @csrf
            <div class="grid grid-cols-3 p-4">
                <div class="flex flex-col p-2 ">
                    <label for="">title</label>
                    <input type="text" name="title" value="{{$course->title}}" class="border border-gray-400 py-2 px-1 rounded">
                </div>
                <div class="flex flex-col p-2 ">
                    <label for="">duration</label>
                    <input type="text" name="duration" value="{{$course->duration}}" class="border border-gray-400 py-2 px-1 rounded">
                </div>
                <div class="flex flex-col p-2">
                    <label for="">price</label>
                    <input type="text" name="price" value="{{$course->price}}" class="border border-gray-400 py-2 px-1 rounded">
                </div>
                <div class="flex flex-col p-2 ">
                    <label for="">discount_price</label>
                    <input type="text" name="discount_price" value="{{$course->discount_price}}" class="border border-gray-400 py-2 px-1 rounded">
                </div>
                {{-- <div class="flex flex-col p-2 col-span-2">
                    <label for="">image</label>
                    <input type="file" name="image" class="border border-gray-400 py-2 px-1 rounded">
                </div> --}}
                <div class="flex flex-col p-2 col-span-3">
                    <label for="">description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="border border-gray-400 py-2 px-1 rounded">value="{{$course->description}}"</textarea>
                </div>
                <div class="flex justify-end col-span-3 p-3">
                    <input type="submit" class="p-2 text-white bg-slate-800 rounded">
                </div>

    
            </div>
        </form>

    </div>
</div>
    
@endsection