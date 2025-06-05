<div class="w-1/2 h-200 rotate-45 bg-blue-800 fixed end-[-200px] opacity-12 z-0 animate-jump"></div>
<header class="w-full bg-blue-600 z-50 py-3 fixed top-0">
    <div class="flex grid-cols-2 gap-4 text-white">
        <!-- logo + atalhos -->
        <div class="w-1/2 flex grid-cols-5 justify-center align-middle gap-5">
            <img class="flex" src="{{ asset('images/logo.png') }}" alt="logo the web site" width="140">
            <ul class="hidden md:flex gap-4 justify-items-center align-baseline py-2">
                <li><a class="@if ($content=='home') text-amber-400 @endif font-bold hover:text-yellow-300" href="{{ route('home') }}">Home</a></li>
                <li><a class="@if ($content=='newsletter') text-amber-400 @endif font-bold hover:text-yellow-300" href="#formNewsletter">Newsletter</a></li>
                <li><a class="@if ($content=='about') text-amber-400 @endif font-bold hover:text-yellow-300" href="#">About</a></li>
                <li><a class="@if ($content=='contact') text-amber-400 @endif font-bold hover:text-yellow-300" href="#">Contact</a></li>
                <li><a class="@if ($content=='blog') text-amber-400 @endif font-bold hover:text-yellow-300" href="#">Blog</a></li>
            </ul>
        </div>

        <!-- botões -->
        <div class="w-1/2 flex grid-cols-2 gap-3 justify-center align-middle z-50">
            <a href="#" class="inline-block text-white py-2 px-4 hover:text-yellow-300 hover:font-bold">
                Login
            </a>
            <a href="#" class="border-2 rounded-2xl border-white py-2 px-4 hover:border-amber-400 hover:bg-amber-400 ">
                Register here
            </a>
        </div>
    </div>
</header>

@section('home')
    <div class="w-11/12 mx-auto py-24">
        <div class="grid md:grid-cols-2 text-white">
            <div class="gap-y-6">
                <h1 class="text-7xl my-4">The simplest way to manage your personal finances</h1>
                <p>More than 4 million people have chosen our product to manage their financial careers on a daily basis and thus have managed to avoid getting a surprise at the end of the month. </p>
           
                <form id="formNewsletter" action="{{ route('home') }}" method="POST">
                    @csrf
                    <div class="flex justify-between mt-5 rounded-4xl bg-white p-2">
                        <div class="w-2/3 mx-2 my-auto">
                            <label class="mb-3" for="email"> </label>
                            <input required class="w-full text-black border-0 focus:outline-0" type="email" placeholder="Enter your email to stay informed">
                        </div>
                        <div class="w-1/3">
                            <button type="submit" class="bg-amber-400 text-black py-3 rounded-4xl px-3 cursor-pointer hover:bg-blue-300">
                                Click for news letter
                            </button>
                        </div>
                    </div>
                </form>
                <div class="mt-3 flex gap-3">
                    <p>For applications</p>
                    <div class="gap-4">
                        <i class="bi bi-android2"></i>
                        <i class="bi bi-apple"></i>
                    </div>
                </div>
            </div> 
        </div>
    </div>
@endsection










