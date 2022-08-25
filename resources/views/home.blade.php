@extends('base')
@section('content')
    @include('include.header')
    <div class="flex bg-gradient-to-r from-indigo-400 to-pink-400 h-auto">
        <div class="px-8 py-5 w-3/2" style="width: 1500px">
            <div class="bg-white shadow-lg w-1/2 rounded-lg p-5 mt-12">
                <h1 class="text-4xl font-bold py-1">Frist course 100% free</h1>
                <p class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora necessitatibus laboriosam ab quos consequatur cumque reprehenderit ipsum dicta voluptate laborum a exercitationem eius facilis quam amet similique corporis, illum suscipit?</p>
                <div class="flex justify-end mt-4">
                    <a href="" class="p-3 bg-green-400 rounded text-xl">Explorer Courses</a>
                </div>
            </div>
        </div>
        <div class="">
            <img src="https://cutewallpaper.org/24/coding-png/coding-by-freepik-stories-svg-png-illustrationtechnology-web-programming-codi%E2%80%A6-creative-poster-design-powerpoint-background-design-isometric-illustration.png" alt="" class="" style="height: 500px ;width: 1200px ">

        </div>
    </div>
    <div class="mx-32 mt-16 ">
        <h1 class="text-3xl font-serif text-blue-600">Our Courses</h1>
        <div class="text-sm p-2">Lorem ipsum dolor sit amet</div>
    </div>
    <div class="flex gap-5 my-4 px-10 mx-20">
        @foreach ($course as $item)
        <div class="w-1/6 ">
            <div class="bg-white rounded-2xl border shadow ">
                <div class="p-2">
                    <a href="{{route('view',['id'=>$item->id])}}"><img src="{{asset('image/'.$item->image)}}" alt="" class="rounded-full p-7"></a>
                <hr>
                <h2 class="pb-10">{{$item->title}}</h2>
                </div>
                <div class="bg-teal-800 font-bold text-white w-full p-3 rounded-bl-lg rounded-br-lg">Duration : {{$item->duration}}  moths</div>
            </div>
        </div>
        @endforeach
    </div>
    {{-- <div class="container">
        <div class="row">
            <div class="col mx-auto">
                {{$course->link()}}
            </div>
        </div>
    </div> --}}
    <div class="mx-32 mt-16 ">
        <h1 class="text-3xl font-serif text-blue-600">Our Students In Industry</h1>
        <div class="text-sm p-1">Contributing Nation Development</div>
    </div>
    <div class="flex gap-5 my-4 px-20 py-10 mx-10 h-48">
        <div class="w-1/5 ">
            <div class="bg-white rounded-2xl border shadow w-60">
                <div class="p-2 text-center">
                    <img src="https://codewithsadiq.com/public/images/placement/1640426510.jpg" alt="" class="rounded-xl  h-48 w-60">
                    
                    <h2 class="font-bold text-lg p-1">Akhilesh kumar</h2>
                    <div class="text-sm ">Python developer</div>
                    <div class="text-sm p-1">@ BIL</div>

                </div>
            </div>
        </div>
        <div class="w-1/5 ">
            <div class="bg-white rounded-2xl border shadow w-60">
                <div class="p-2 text-center">
                    <img src="https://codewithsadiq.com/public/images/placement/1639922975.jpg" alt="" class="rounded-xl  h-48 w-60">
                    
                    <h2 class="font-bold text-lg p-1">Akhilesh kumar</h2>
                    <div class="text-sm ">Python developer</div>
                    <div class="text-sm p-1">@ BIL</div>

                </div>
            </div>
        </div>
        <div class="w-1/5 ">
            <div class="bg-white rounded-2xl border shadow w-60">
                <div class="p-2 text-center">
                    <img src="https://codewithsadiq.com/public/images/placement/1640065387.jpg" alt="" class="rounded-xl  h-48 w-60">
                    
                    <h2 class="font-bold text-lg p-1">Akhilesh kumar</h2>
                    <div class="text-sm ">Python developer</div>
                    <div class="text-sm p-1">@ BIL</div>

                </div>
            </div>
        </div>
        <div class="w-1/5 ">
            <div class="bg-white rounded-2xl border shadow w-60">
                <div class="p-2 text-center">
                    <img src="https://codewithsadiq.com/public/images/placement/1654461038.webp" alt="" class="rounded-xl  h-48 w-60">
                    
                    <h2 class="font-bold text-lg p-1">Akhilesh kumar</h2>
                    <div class="text-sm ">Python developer</div>
                    <div class="text-sm p-1">@ BIL</div>

                </div>
            </div>
        </div>
        <div class="w-1/5 ">
            <div class="bg-white rounded-2xl border shadow w-60">
                <div class="p-2 text-center">
                    <img src="https://codewithsadiq.com/public/images/placement/1654531611.jpg"  alt="" class="rounded-xl  h-48 w-60">
                    
                    <h2 class="font-bold text-lg p-1">Akhilesh kumar</h2>
                    <div class="text-sm ">Python developer</div>
                    <div class="text-sm p-1">@ BIL</div>

                </div>
            </div>
        </div>
    </div>
    <div class="mt-72">
        @include('include.footer')
    </div>
    
@endsection