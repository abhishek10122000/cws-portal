@extends('admin.adminBase')
@section('content')
<div class="flex">
    <div class="2/6 bg-gray-700 h-screen">
        @include('admin.side')
        
    </div>
    <div class="4/6 bg-blend-hard-light h-screen item-center w-full">
        <div class="flex justify-between p-4">
            <h2 class="font-serif text-2xl">Manage Courses</h2>
            <a href="{{route("course.create")}}" class="bg-green-600 text-white px-3 py-2 rounded hover:bg-green-800">add coursees</a>
            
        </div>
        <div class="px-3 mt-4">
            <table class="table-flex w-full border">
                <thead>
                    <tr class="border bg-slate-800 text-gray-300 border-black ">
                        <th class="p-3">Id</th>
                        <th>Title</th>
                        <th>Duration</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Discount price</th>
                        <th>Pescription</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach ($course as $item)
                        <tr class=" text-center ">
                            <td class="p-2">{{$item->id}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->duration}}</td>
                            <td>{{$item->image}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->discount_price}}</td>
                            <td>{{$item->description}}</td>
                            <td>
                                <div class="flex">
                                    <div class="pt-2"><a href="{{route('course.edit',$item)}}" class="p-2 bg-pink-500 text-white rounded">Update</a></div>
                                    <div class="pt-2 pl-2"><a href="{{route('course.show',$item)}}" class="p-2 bg-pink-500 text-white rounded"><i class="bi bi-view-list"></i></a></div>
                                    <div class="pl-2">
                                        <form action="{{route('course.destroy',['course'=>$item])}}" method="post" >
                                            @method("delete")
                                            @csrf
                                            <button class="p-2 bg-red-500 rounded">
                                                <i class="bi bi-trash3"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>                
        </div>

    </div>
</div>
    
@endsection