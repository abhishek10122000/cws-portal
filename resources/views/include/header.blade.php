<div class=" flex  shadow-lg py-4 justify-between items-center px-10">
    <span class="font-serif text-2xl">CWS Portal</span>
    <form action="" class="flex justify-items-end " method="post">
        <input type="text" class="border border-purple-300 py-2 rounded-tl-3xl rounded-bl-3xl border-r-0" size="60">
        <button type="button" class="bg-gray-200 border font-semibold border-purple-300 p-2 rounded-tr-3xl rounded-br-3xl border-l-0">search</button>
    </form>
    <ul class="flex mx-11 gap-3 ">
        <li><a href="" class="hover:text-green-400">cws Business</a></li>
        <li><a href="" class="hover:text-green-400">Teach on cws</a></li>
        @auth
        <li><a href="{{route('logout')}}" class=" p-2  px-4 border border-black hover:bg-green-100 font-bold">Loguot</a></li>
        @endauth
        @guest
        <li><a href="{{route('login')}}" class=" p-2  px-4 border border-black hover:bg-green-100 font-bold">Log in</a></li>
        <li><a href="{{route('signup')}}" class="p-2 px-4 bg-black border border-black text-white  hover:text-green-400 font-bold">Sign up</a></li>
        @endguest
    </ul>
</div>