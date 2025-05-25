<x-layout>
    <div class="bg-stone-500 h-screen">
        <div class="h-1/10"></div>
        <div class="h-full">
            <h2 class="text-center font-title font-bold sm:text-4xl md:text-6xl mt-5">VIDEOS</h2>
            <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-3 justify-center bg-red-500">
                <div class="bg-red-800 w-full flex justify-center">
                    <iframe class="my-5" width="350" height="250" src="https://www.youtube.com/embed/J0Q5diLsaoU?si=5QRYLdqVngk_6Ux2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="bg-red-800 w-full flex justify-center">
                    <iframe class="mt-5" width="350" height="250" src="https://www.youtube.com/embed/J0Q5diLsaoU?si=5QRYLdqVngk_6Ux2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="bg-red-800 w-full flex justify-center">
                    <iframe class="mt-5" width="350" height="250" src="https://www.youtube.com/embed/J0Q5diLsaoU?si=5QRYLdqVngk_6Ux2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="bg-red-800 w-full flex justify-center">
                    <iframe class="mt-5" width="350" height="250" src="https://www.youtube.com/embed/J0Q5diLsaoU?si=5QRYLdqVngk_6Ux2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="bg-red-800 w-full flex justify-center">
                    <iframe class="mt-5" width="350" height="250" src="https://www.youtube.com/embed/J0Q5diLsaoU?si=5QRYLdqVngk_6Ux2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                
            </div>
        </div>
        <div class="h-1/2 bg-stone-500">
            <h2 class="text-center font-title font-bold sm:text-4xl md:text-6xl mt-5">PHOTOS</h2>
            <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-3 justify-center bg-red-500">
                <div>
                    <a href="{{route('detailPhoto', ['title' => 'photo1'])}}">Foto 1</a>
                    <div class="h-1/10 w-1/10 my3 mx-3">
                    <img src="/media/img/DSC_2523.JPG" alt="img1">
                    </div>
                </div>
                <div>
                    <a href="{{route('detailPhoto', ['title' => 'photo2'])}}">Foto 2</a>
                </div>
                <div>
                    <a href="{{route('detailPhoto', ['title' => 'photo3'])}}">Foto 3</a>
                </div>
                <div>
                    <a href="{{route('detailPhoto', ['title' => 'photo4'])}}">Foto 4</a>
                </div>
            </div>    
        </div>

    </div>
</x-layout>