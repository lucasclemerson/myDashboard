
<section id="formNewContact" class="relative w-full mx-auto py-16 z-0 overflow-hidden bg-white">
    <div style="z-index:-999" class="transform transition-transform duration-300 hover:scale-105 absolute z-0 h-100 w-150 bg-black end-[-200px] opacity-20 animate-jump">
    </div>
    <div style="z-index:-999" class="transform transition-transform duration-300 hover:scale-105 absolute z-0 h-100 w-150 bg-black bottom-0 start-[-200px] opacity-20 animate-jump">
    </div>
    <div class="z-10 grid grid-cols-1 py-12 justify-center mx-auto w-11/12 px-4 rounded-4xl bg-white mt-3 shadow-2xl">
        <h5 class="text-center text-5xl mt-8 mb-16">Contact us</h5>

        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="flex">
                <div class="grid w-11/12 mx-auto">
                    <ul class="gap-y-6">
                        <h2 class="text-5xl mb-2">Tell us</h2>
                        <li>Send us a message and we’ll get back to you as soon as possible.</li>
                        <li>Fill out the form below and our team will contact you shortly.</li>
                        <li>Your message is important to us. Let us know how we can help.</li>
                    </ul>
                    <a href="#" class="text-red-500">More details</a>
                </div>
            </div>
            
            <div class="grid grid-cols-1 mx-auto lg:mx-0">
                <form action="{{ route('new_contact') }}" method="POST">
                    @csrf
                    <div class="grid w-11/12 lg:w-5/6">
                        <label for="subject">Your Email: <span class="text-red-500">*</span></label>
                        <input required type="email" class="px-2 border-2 focus:outline-0 border-neutral-300 rounded-2xl text-neutral-900 my-2 py-2">
                    </div>
                    
                    <div class="grid w-11/12 lg:w-5/6">
                        <label for="subject">Subject: <span class="text-red-500">*</span></label>
                        <input required type="text" class="px-2 border-2 focus:outline-0 border-neutral-300 rounded-2xl text-neutral-900 my-2 py-2">
                    </div>

                    <div class="grid w-11/12 lg:w-5/6">
                        <label for="subject">Description: <span class="text-red-500">*</span></label>
                        <textarea required type="text" class="px-2 border-2 focus:outline-0 border-neutral-300 rounded-2xl text-neutral-900 my-2 py-2"></textarea>
                    </div>
                    <div class="fled gap-3 w-11/12 lg:w-5/6 justify-start">
                        <button class="cursor-pointer bg-amber-400 text-black px-4 py-3 rounded-2xl" type="reset">Clear input's</button>
                        <button class="cursor-pointer bg-blue-700 text-white px-4 py-3 rounded-2xl" type="submit">Send contact</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</section>