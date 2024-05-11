@include('users.layouts.header')
<body>
    @include('users.layouts.navigation')
    <section class="bg-blue-950 h-89vh flex justify-between items-center">
        <div class="flex text-white flex-col gap-16 w-1/2 items-center">
            <div class="flex flex-col text-center gap-6 justify-center"> 
                <h1 class="text-5xl font-sans">Shop Till you drop, <br> We won't Stop.</h1> 
                <p class="font-mono text-yellow-400">Find everything you look and feel your best. <br> Shop now and get amazing deals</p>
            </div>
            <button class="rounded-xl text-center w-1/6 py-1 cursor-pointer bg-yellow-600 hover:bg-gray-500 "> Shop Now!</button>
        </div>
        <div> <img class="" src="{{asset('users/assets/images/graphic-1.png')}}" alt=""></div>
    </section>
@include('users.layouts.scripts')