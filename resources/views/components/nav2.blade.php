<nav>
    <div class="w-full h-1/10 drop-shadow-lg fixed mt-0 me-0 border-b border-gray-600 transition-custom z-10 flex" id="scrollNav">
        <div class="w-1/4 md:w-1/12 h-full flex justify-center bg-red-500">
            <div class="my-auto bg-yellow-400"><a href="/" class="font-title font-bold text-5xl mx-auto my-auto ">EG</a></div>
        </div>
        <div class="w-1/2 md:w-10/12 h-full"></div>
        <div class="w-1/4 md:w-1/12 h-full ">
            <div class="flex justify-center h-full">
                <button id="menu" class="md:hover:scale-125">
                    <svg class="h-8 w-8 text-black"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                      </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
<div class="flex md:justify-end menu" id="menuNav">
    <div class="h-screen w-screen md:w-1/3 fixed blurNav" id="borderMenu">
        <div class="w-full h-1/10 flex justify-center md:justify-start  content-center">
            <button id="menuClose" class="md:ml-3">
                X
            </button>
        </div>
        <div class="w-full md:w-2/3 h-1/2 mt-5 justify-center md:ms-3 md:justify-start flex">
            <ul >
                <li class="text-center md:text-start ">
                    <a href="{{route('bio')}}" class="font-title text-3xl font-semibold md:hover:underline">{{__("messages.bio")}}</a></li>
                <li class="text-center md:text-start my-3 md:my-5">
                    <a href="{{route('medias')}}" class="font-title text-3xl font-semibold md:hover:underline">Media</a>
                </li>
                <li class="text-center md:text-start my-3 md:my-5">
                    <a href="{{route('projects')}}" class="font-title font-semibold text-3xl md:hover:underline">{{__("messages.projects")}}</a>
                </li>
                <li class="text-center md:text-start my-3 md:my-5">
                    <a href="{{route('teaching')}}" class="font-title font-semibold text-3xl md:hover:underline">{{__("messages.teaching")}}</a>
                </li>
                <li class="text-center md:text-start my-3 md:my-5">
                    <a href="{{route('contacts')}}" class="font-title font-semibold text-3xl md:hover:underline">{{__("messages.contacts")}}</a>
                </li>
                <li class="text-center md:text-start">
                    <button>
                        <svg class="sm:h-8 sm:w-8 md:h-6 md:w-6 text-black"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="12" r="9" />  <line x1="3.6" y1="9" x2="20.4" y2="9" />  <line x1="3.6" y1="15" x2="20.4" y2="15" />  <path d="M11.5 3a17 17 0 0 0 0 18" />  <path d="M12.5 3a17 17 0 0 1 0 18" /></svg>
                    </button>
                    <div id="lingue" class="h-auto w-full bg-gray-200 flex flex-col absolute mt-1 border-solid border-2 border-gray-700 rounded">
                        <form action="{{route('setLanguage', "en")}}" method="post">
                        @csrf
                            <button type="submit">English</button>
                        </form>
                        <form action="{{route('setLanguage', "it")}}" method="post">
                        @csrf
                            <button type="submit">Italiano</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>