@section('home')
<section class="relative w-full mx-auto py-24 z-0 overflow-hidden">
    <div class="transform transition-transform duration-300 hover:scale-105 absolute w-1/2 h-180 rotate-45 bg-blue-800 end-[-200px] opacity-12 z-0 animate-jump">
    </div>
    <div class="grid md:grid-cols-2 mx-auto w-11/12 text-white">
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
</section>
@endsection
