<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight ">
            Home
        </h2>
    </x-slot>



@if (session('success'))
    <div class="alert alert-success text-white mx-20 scale-100 p-6 bg-white dark:bg-gray-900/30 dark:bg-gradient-to-bl from-black-800/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="z-index:1000; position:absolute;" id="success-message">
        {{ session('success') }}
    </div>

    <script>
        // Set a timeout to hide the success message after 5000 milliseconds (5 seconds)
        setTimeout(function() {
            document.getElementById('success-message').style.display = 'none';
        }, 5000);
    </script>
@endif


    <div class="max-w-5xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
 

        <div class=" flex flex-col justify-center ">
            <section class=" mx-auto space-y-8 ">
                <div style='width:800px;' class="container flex flex-row items-stretch justify-center w-full max-w-4xl space-x-12" x-data="{tab: 1}">
                    <div class="text-black flex flex-col justify-start w-1/4 space-y-4">
                        <a class=" text-sm" :class="{ }" href="#" @click.prevent="tab = 1">
                            <img src="https://res.cloudinary.com/nieleche/image/upload/v1709737600/okidilogo_4x_t7snua.png" class="w-32" alt="">
                            <p class="py-2 text-xs text-black">FLORAL DESIGN STUDIO</p>
                        </a>
                        <a class="px-4 py-2 text-sm" :class="{'z-20 border-l-2 transform translate-x-2 border-black font-bold': tab === 2, ' transform -translate-x-2': tab !== 2}" href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                            Services
                        </a>
                        <a class="px-4 py-2 text-sm" :class="{'z-20 border-l-2 transform translate-x-2 border-black font-bold': tab === 3, ' transform -translate-x-2': tab !== 3}" href="#" @click.prevent="tab = 3" @click.prevent="tab = 3">
                            Contact
                        </a>
                    
                    </div>
                    <div class="w-3/4">
                        <div class="space-y-6" x-show="tab === 1">
                            <div style="width:100%;" class=" self-end">
                                <div class="carousel ">
                                    <div class="carousel-inner2">
                                        <div class="carousel-item2" data-title="Slide">
                                            <img class="" src="https://res.cloudinary.com/nieleche/image/upload/v1709739066/Asset_4-80_hfstfv.jpg" alt="">
                                        </div>
                                    
                                        <div class="carousel-item2" data-title="Slide">
                                            <img class=" " src="https://res.cloudinary.com/nieleche/image/upload/v1709739061/Asset_5-50_cvvtpq.jpg" alt="">
                                        </div>
                                        <div class="carousel-item2" data-title="Slide">
                                            <img class=" " src="https://res.cloudinary.com/nieleche/image/upload/v1709740614/IMG_3564_vhl7fi.jpg" alt="">
                                        </div>
                                        <div class="carousel-item2" data-title="Slide">
                                            <img class=" " src="https://res.cloudinary.com/nieleche/image/upload/v1709740613/IMG_3661_cgjohg.jpg" alt="">
                                        </div>
                                        <div class="carousel-item2" data-title="Slide">
                                            <img class=" " src="https://res.cloudinary.com/nieleche/image/upload/v1709739063/Asset_6-50_w6t5vt.jpg" alt="">
                                        </div>
                                        <div class="carousel-item2" data-title="Slide">
                                            <img class=" " src="https://res.cloudinary.com/nieleche/image/upload/v1709740613/IMG_3865_pfxm0u.jpg" alt="">
                                        </div>
                                        <div class="carousel-item2" data-title="Slide">
                                            <img class=" " src="https://res.cloudinary.com/nieleche/image/upload/v1709740611/93AE8CD4-8209-4D76-BE80-8B7E40071238_vj2yjm.jpg" alt="">
                                        </div>
                                        <div class="carousel-item2" data-title="Slide">
                                            <img class=" " src="https://res.cloudinary.com/nieleche/image/upload/v1709739063/Asset_7-50_fg6qyt.jpg" alt="">
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                          
                        </div>

                        <div class="space-y-6  text-black" x-show="tab === 2">
                            <h3 class="text-base font-bold leading-tight" x-show="tab === 2" x-transition:enter="transition duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                            Select Events and Weddings
                            </h3>
                            <p class="text-sm text-black" x-show="tab === 2" x-transition:enter="transition delay-100 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                            Conceptual design for intimate gatherings and private dinners 
                            Brand Activation and Workshops 
                            </p>

                            <h3 class="text-base font-bold leading-tight" x-show="tab === 2" x-transition:enter="transition duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                            Standing Orders
                            </h3>
                            <p class="text-sm text-black" x-show="tab === 2" x-transition:enter="transition delay-100 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                            For Retail, Restaurants, Hotels and Working spaces
                            </p>

                            <h3 class="text-base font-bold leading-tight" x-show="tab === 2" x-transition:enter="transition duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                            Styling
                            </h3>
                            <p class="text-sm text-black" x-show="tab === 2" x-transition:enter="transition delay-100 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                            Set design, Editorial, Film, Galleries and Installations
                            </p>
                         
                           
                        </div>

                        <div class="space-y-6" x-show="tab === 3">
                            <h3 class="text-base text-black font-bold leading-tight py-4" x-show="tab === 3" x-transition:enter="transition duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                               Contact
                            </h3>
                          
                            <form action="{{ route('subscribe') }}" method="post">
                                @csrf
                                <style>
                                        .footercustom-input {
                                        border: none;
                                        outline: none;
                                        border-radius: 0;
                                        background:transparent;
                                        Color:#000;
                                        font-size:12px;
                                        width:100%;
                                        border-bottom: 1px solid #000;
                                    }

                                </style>
                                <div class="lg:grid grid-cols-1 md:grid-cols-1 gap-6">
                                        
                                    <div class="mb-4">
                                        <label for="name" class="block text-sm font-medium text-black">Full Name</label>
                                        <input type="text" id="name" name="name" class="footercustom-input focus:outline-none p-2 w-full border rounded-md">
                                    </div>

                                    
                                    <div class="mb-4">
                                        <label for="email" class="block text-sm font-medium text-black">Email</label>
                                        <input type="email" id="email" name="email" class="footercustom-input focus:outline-none p-2 w-full border rounded-md">
                                    </div>

                                    <div class="mb-4 ">
                                        <label for="inquiry" class="block text-sm font-medium text-black">Message</label>
                                        <textarea id="Inquiry" name="Inquiry" rows="1" class="footercustom-input focus:outline-none p-2 w-full border rounded-md"></textarea>
                                    </div>

                                    <div class=" text-left">
                                        <button type="submit" class="text-lg border-black text-black rounded-md">Send</button>
                                    </div>
                                </div>
                                
                            </form>
                            <hr class="border-black py-4">

                            <a href="www.instagram.com" target="_blank" class="text-sm text-black " x-show="tab === 3" x-transition:enter="transition delay-200 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                               <img class="w-6" src="https://res.cloudinary.com/nieleche/image/upload/v1711544958/black-instagram-icon_hozini.webp" alt="">
                            </a>
                        </div>

                        <div class="space-y-6" x-show="tab === 4">
                            <h3 class="text-xl font-bold leading-tight" x-show="tab === 4" x-transition:enter="transition duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                                BATMAN: THE KILLING JOKE (2016)
                            </h3>
                            <p class="text-base text-gray-600" x-show="tab === 4" x-transition:enter="transition delay-100 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                                Rottentomatoes 39%
                            </p>
                            <p class="text-xl" x-show="tab === 4" x-transition:enter="transition delay-200 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                                Fathom Events, Warner Bros. and DC Comics invite you to a premiere event when Batman: The Killing Joke comes to... 
                            </p>
                            <p class="text-base" x-show="tab === 4" x-transition:enter="transition delay-300 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                                Is this the right batman for me?
                            </p>
                            <a href="https://twitter.com/smilesharks" class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-blue-500 border-black cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-blue-500 focus-within:border-black focus-within:text-white sm:text-base lg:text-lg" class="text-base" x-show="tab === 4" x-transition:enter="transition delay-500 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                                Learn more
                            </a>
                        </div>

                    </div>
                </div>
            </section>
        </div>
           
    </div>


    <style>
          .carousel {
                position: relative;
                overflow: hidden;
                margin: 0 auto;
            }

            .carousel-inner, .carousel-inner2 {
                display: flex;
                transition: transform 0.5s ease;
            }

        

            .carousel-item2 {
                flex: 0 0 100%;
                display:flex;
                justify-content:flex-end;
                width: 500px;
                height:500px;
                object-fit:cover;
            }

             .carousel-item2 img {
                width: 500px;
                height:500px;
                object-fit:cover;
            }

         
    </style>

        
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const prevBtn = document.querySelector('.prev-btn2');
            const nextBtn = document.querySelector('.next-btn2');
            const carouselInner = document.querySelector('.carousel-inner2');
            const counter = document.querySelector('.counter2');
            let currentIndex = 0;

            function updateCounter() {
                counter.innerHTML = '';
                for (let i = 0; i < carouselInner.children.length; i++) {
                    const counterNumber = document.createElement('div');
                    counterNumber.textContent = i + 1;
                    counterNumber.classList.add('counter-number2');
                    if (i === currentIndex) {
                        counterNumber.classList.add('active');
                    }
                    counter.appendChild(counterNumber);
                }
            }

            function goToNextSlide() {
                currentIndex = (currentIndex + 1) % carouselInner.children.length;
                carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
                updateCounter();
            }

            // Add automatic sliding
            const slideInterval = setInterval(goToNextSlide, 3000); // Adjust the interval time as needed (in milliseconds)

            prevBtn.addEventListener('click', function () {
                clearInterval(slideInterval); // Stop automatic sliding when user interacts with buttons
                currentIndex = (currentIndex - 1 + carouselInner.children.length) % carouselInner.children.length;
                carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
                updateCounter();
            });

            nextBtn.addEventListener('click', function () {
                clearInterval(slideInterval); // Stop automatic sliding when user interacts with buttons
                goToNextSlide();
            });

            updateCounter();
        });
    </script>         

</x-app-layout>
