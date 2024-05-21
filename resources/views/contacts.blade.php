<x-layout>
    <div class="h-auto w-screen background-contact bg-contacts absolute top-0 z-0" id="bgContacts">
        <div class="relative mt-16">
            <div class="flex">
                <div class="w-10/12 mx-auto ">
                    <h1 class="font-title text-8xl font-semibold text-center m-5">Contatti</h1>
                </div>
            </div>
            @if (session('message'))
                <div class="sm:w-10/12 md:w-2/3 mx-auto h-full rounded-lg bg-slate-300 border border-solid border-slate-700 p-3">
                    {{ session('message') }}
                </div>
            @endif
            <div class="w-10/12 h-full mx-auto flex  mt-10">
                <div class="w-1/2 h-2/3 ">
                     <h2 class="font-text text-xl pe-5 pt-3 font-semibold text-end">Telefono</h2>
                     <h2 class="font-text text-xl pe-5 pt-10 font-semibold text-end">E-mail</h2>   
                </div>
                <div class="w-1/2 h-full ">
                    <h2 class="font-text text-xl ps-5 pt-3 font-semibold">+39 339 145 4267 <br>+31 (0)6 33 27 7471</h2>
                    <h2 class="font-text text-xl ps-5 pt-3 font-semibold">elena.gelmi90@gmail.com</h2> 
                </div>
            </div>
            <div class="w-10/12 h-full mx-auto mt-5">
                <h2 class="font-text text-center  p-2 text-xl font-semibold">Social</h2>
                <div class="grid grid-cols-3 justify-center">
                    <div class=" flex justify-end">
                        <a href="" target="blank">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 48 48">
                                <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path><path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"></path>
                            </svg>
                            <p class="font-text -ms-4 font-medium">Facebook</p>
                        </a>
                    </div>
                    <div class=" flex justify-center">
                        <a href="" class="ms-5" target="blank">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0,0,256,256"style="fill:#000000;">
                            <g fill="#e00b0b" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M44.89844,14.5c-0.39844,-2.19922 -2.29687,-3.80078 -4.5,-4.30078c-3.29687,-0.69922 -9.39844,-1.19922 -16,-1.19922c-6.59766,0 -12.79687,0.5 -16.09766,1.19922c-2.19922,0.5 -4.10156,2 -4.5,4.30078c-0.40234,2.5 -0.80078,6 -0.80078,10.5c0,4.5 0.39844,8 0.89844,10.5c0.40234,2.19922 2.30078,3.80078 4.5,4.30078c3.5,0.69922 9.5,1.19922 16.10156,1.19922c6.60156,0 12.60156,-0.5 16.10156,-1.19922c2.19922,-0.5 4.09766,-2 4.5,-4.30078c0.39844,-2.5 0.89844,-6.10156 1,-10.5c-0.20312,-4.5 -0.70312,-8 -1.20312,-10.5zM19,32v-14l12.19922,7z"></path></g></g>
                            </svg>
                            <p class="font-text -ms-4 font-medium">YouTube</p>
                        </a>
                    </div>
                    <div class=" flex justify-start">
                        <a href="https://www.instagram.com/gelmielena/?igshid=MzNlNGNkZWQ4Mg%3D%3D" class="ms-5" target="blank">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 48 48">
                                <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fd5"></stop><stop offset=".328" stop-color="#ff543f"></stop><stop offset=".348" stop-color="#fc5245"></stop><stop offset=".504" stop-color="#e64771"></stop><stop offset=".643" stop-color="#d53e91"></stop><stop offset=".761" stop-color="#cc39a4"></stop><stop offset=".841" stop-color="#c837ab"></stop></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path><radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#4168c9"></stop><stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path><path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path><circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle><path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                                </svg>
                            <p class="font-text -ms-4 font-medium">Instagram</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-10 w-2/3 h-full mx-auto bg-slate-200 rounded-xl border border-solid border-slate-600">
                <h3 class="font-text text-xl font-semibold text-center p-3">Contact me!</h3>
                <div class="mt-2 w-2/3 h-full mx-auto justify-center">
                    <form action="{{route('contact_mail')}}" method="post" class="">
                        @csrf
                        <div class="flex justify-center w-full">
                            <label class="w-full text-base p-1  text-center" for="">Name and Surname</label>
                        </div>
                        <input type="text" name="name" id="" placeholder="Insert name and surname" class="border border-solid border-black rounded-md w-full h-8">
                        <div class="flex justify-center w-full">
                            <label class="w-full text-base p-1 text-center" for="">E-mail</label>
                        </div>
                        <input type="email" name="email" id="" placeholder="example@gmail.com" class="border border-solid border-black rounded-md w-full h-8">
                        <div class="flex justify-center w-full">
                            <label class="w-full text-base p-1 text-center" for="">Subject</label>
                        </div>
                        <input type="text" name="subject" id="" placeholder="Insert subject" class="border border-solid border-black rounded-md w-full h-8">
                        <div class="flex justify-center w-full">
                            <label class="w-full text-base p-1 text-center" for="">Message</label>
                        </div>
                        <textarea name="message" id="" cols="30" rows="5" class="w-full rounded-md border border-solid border-black" placeholder="leave your message here"></textarea>
                        <button class="text-center font-text p-2 border border-solid mb-3 mx-auto rounded-md w-full bg-slate-400 border-black" type="submit">Send</button>
                    </form>
                </div>    
            </div>
        </div>
    </div>
    
</x-layout>



{{-- <input class="border border-black rounded" type="text" name="" id="" placeholder="inserisci nome"> --}}