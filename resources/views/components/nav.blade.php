<nav>
    <div class="w-full h-1/10 drop-shadow-lg fixed mt-0 me-0 border-b border-gray-600 transition-custom z-10" id="scrollNav">
        <div class="flex flex-row gap-0 h-full">
            {{-- Logo  --}}
            <div class="basis-1/12 flex justify-start my-auto">
                <a href="/" class="font-title font-bold text-5xl ms-3">EG</a>
            </div>
            {{-- nav items  --}}
            <div class="md:hidden mx-auto my-auto" >
                <button id="menu">
                    <svg class="h-8 w-8 text-black"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                      </svg>
                </button>
                
            </div>
            <div class="hidden md:basis-10/12 md:flex md:justify-start md:my-auto">
                <div class="basis-1/6 flex justify-center ms-2">
                    <a href="{{route('bio')}}" class="font-title text-2xl font-semibold hover:underline">{{__('messages.bio')}}</a>
                </div>
                <div class="basis-1/5 flex justify-center me-3">
                    <a href="{{route('medias')}}" class="font-title text-2xl font-semibold hover:underline">Media</a>
                </div>
                <div class="basis-1/5 flex justify-center me-5">
                    <a href="{{route('projects')}}" class="font-title text-2xl font-semibold hover:underline">{{__("messages.projects")}}</a>
                </div>
                <div class="basis-1/5 flex justify-center me-3">
                    <a href="{{route('teaching')}}" class="font-title text-2xl font-semibold hover:underline">{{__("messages.teaching")}}</a>
                </div>
                <div class="basis-1/5 flex justify-center me-1">
                    <a href="{{route('contacts')}}" class="font-title text-2xl font-semibold hover:underline">{{__("messages.contacts")}}</a>
                </div>
            </div>
            {{-- lingue  --}}
            <div class="basis-1/12 flex justify-center my-auto me-5 relative">
                <button id="dropdownLingue">
                    <svg class="sm:h-8 sm:w-8 md:h-6 md:w-6 text-black"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="12" r="9" />  <line x1="3.6" y1="9" x2="20.4" y2="9" />  <line x1="3.6" y1="15" x2="20.4" y2="15" />  <path d="M11.5 3a17 17 0 0 0 0 18" />  <path d="M12.5 3a17 17 0 0 1 0 18" /></svg>
                </button>
                <div id="lingue" class="h-auto w-auto bg-gray-200 flex flex-col absolute mt-8 border-solid border-2 border-gray-700 rounded hidden">
                    <form action="{{route('setLanguage', "en")}}" method="post">
                    @csrf
                        <button type="submit">EN</button>
                    </form>
                    <form action="{{route('setLanguage', "it")}}" method="post">
                    @csrf
                        <button type="submit">ITA</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
<div id="menuNav" class="hidden md:hidden w-screen absolute mt-0 bg-slate-200 ">
    <ul >
        <li class="text-center">
            <a href="" class="font-title text-2xl ">Bio</a></li>
        <li class="text-center">
            <a href="" class="font-title text-2xl">Media</a>
        </li>
        <li class="text-center">
            <a href="" class="font-title text-2xl">Projects</a>
        </li>
        <li class="text-center">
            <a href="" class="font-title text-2xl">Teaching</a>
        </li>
        <li class="text-center">
            <a href="" class="font-title text-2xl">Contacts</a>
        </li>
    </ul>
</div>