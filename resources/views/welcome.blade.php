<!DOCTYPE html>
<html>

<head>
    <title>Schoene Florist</title>
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    

    <link rel="icon" type="image/x-icon" href="{{ asset('icon/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/icon/apple-touch-icon.png') }}">
    <link rel="icon" sizes="32x32" href="{{ asset('icon/favicon-32x32.png') }}">
    <link rel="icon" sizes="16x16" href="{{ asset('icon/favicon-16x16.png') }}">

</head>

<body>

    {{-- <div class="debug p-5 z-10 text-white fixed sm:bg-red-600 md:bg-orange-600 lg:bg-yellow-600 xl:bg-green-600 2xl:bg-blue-600" style="bottom: 50%">
    STILL IN DEV
    </div> --}}
    <header1 id="home" class="bg-white flex justify-center header">
        <div></div>
        <div class="flex flex-col items-center pt-5">
            <div class="flex flex-row">
                {{-- <img src="{{ URL::to('/icon/icon.png')}}" class=" h-36 lg:h-24"> --}}
                <img src="{{ URL::to('/icon/icon.png')}}" class=" h-36 lg:h-24">
            </div>
        </div>
        <div>
            
        </div>
    </header1>

    <header3 id="hiddenfixer"
        class="hidden flex text-md py-8 lg:py-5 z-10">
        <div class="flex flex-row gap-10 text-md tracking-widest items-center text-nowrap text-2xl lg:text-base text-transparent">
            a
        </div>
    </header3>

    <header2 id="home2"
        class="flex flex-row gap-10 text-md tracking-widest py-8 lg:py-5 items-center text-nowrap justify-center backdrop-blur-2xl bg-white/70 z-10">
        <div class="flex flex-row gap-10 text-md tracking-widest items-center text-nowrap text-2xl lg:text-base">
            <a href="#home">Home</a>
            <a href="#products">Produk</a>
            <a href="#gallery">Galeri</a>
            <a href="#contact">Hubungi Kami</a>
            <a href="/admin">(TEMP: ADMIN)</a>
        </div>
    </header2>

    <banner id="banner" style="background-color:rgb(210, 159, 177); width: 100%">
        <div class="bannercontainer" style="width: 100%">
            @foreach ($banner->take(1) as $post)
            <a href="#contact">
                <img class="object-cover" style="width:100%; max-height: 550px;" src="{{ asset('storage/' . $post['image']) }}" alt="{{ $post['name'] }}">
            </a>
            @endforeach
        </div>
    </banner>

    <carousel id="products" class="flex flex-col items-center">
        <div class="flex flex-col items-center mt-20">
            <div class="text-zinc-700 text-4xl lg:text-2xl tracking-widest items-center text-nowrap mb-16">
                OUR PRODUCTS
            </div>
            <container class="container grid grid-cols-2 lg:grid-cols-4 gap-7 justify-center" style="max-width: 90%">
                @foreach ($carousel as $post)
                <div style="height: 700px" class="flex justify-center">
                    <img class=" object-cover defaulthoverable" style="width: inherit; height: inherit;"
                        src="{{ asset('storage/' . $post['image']) }}" alt="{{ $post['name'] }}">
                </div>
                @endforeach
            </container>
        </div>
    </carousel>
    <gallery id="gallery" class="flex flex-col items-center">
        <div class="flex flex-col items-center mt-16">
            <div class="text-zinc-700 text-4xl lg:text-2xl tracking-widest items-center text-nowrap mb-16 ">
                GALLERY
            </div>

            <container class="container grid grid-cols-2 lg:grid-cols-4 gap-7 justify-center mb-28" style="max-width: 90%">
                @foreach ($gallery as $post)
                <div style="height: 363px;" class="flex justify-center">
                    <img class="object-cover defaulthoverable" style="width: 100%; height: inherit;"
                    src="{{ asset('storage/' . $post['image']) }}" alt="{{ $post['name'] }}">
                </div>
                @endforeach
                
            </container>
        </div>
    </gallery>
    <div class="flex justify-center items-center" id="contact" style="background-color:rgb(231, 217, 223)">
        <div class="my-20">
            <div class="bg-white grid grid-cols-1 2xl:grid-cols-2 p-10 gap-8">
                <div class="container defaulthoverable">
                    <div class="flex justify-center">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no"
                                    marginheight="0" marginwidth="0"
                                    src="https://maps.google.com/maps?width=680&amp;height=400&amp;hl=en&amp;q=Schoene Florist&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                                    href="https://embed-googlemap.com">google map embed html</a></div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    width: 680px;
                                    height: 400px;
                                }

                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    width: 680px;
                                    height: 400px;
                                }

                                .gmap_iframe {
                                    width: 680px !important;
                                    height: 400px !important;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <div style="width: 90%" class="text-xl lg:text-base">
                        <div class=" text-zinc-700 text-2xl">SCHOENE FLORIST</div>
                        <br>
                        <h1 class=" font-semibold">Location</h1>
                        <h1>Jl. Sultan Alauddin No.6, Gn. Sari, Kec. Rappocini, Kota Makassar, Sulawesi Selatan 90221</h1>
                        <br>
                        <h1 class=" font-semibold">Kontak Kami</h1>
                        <h1>WhatsApp: 082347307178</h1>
                        <h1>Email: schoeneflorist@gmail.com</h1>
                        <br>
                        <h1 class=" font-semibold">Jam Aktif</h1>
                        <h1>09:00 - 21:00 WITA</h1>
                        <br>
                        <div class="flex flex-row justify-center lg:justify-normal gap-5 pt-5">
                            <button type="button" class="w-80 h-20 text-2xl lg:w-auto lg:h-auto lg:text-base font-semibold defaulthoverable mapbutton  px-5 py-2.5 me-2 mb-2"> <a
                                href="https://www.google.com/maps/dir//Schoene+Florist,+Jl.+Sultan+Alauddin+No.6,+Gn.+Sari,+Kec.+Rappocini,+Kota+Makassar,+Sulawesi+Selatan+90221"
                                target="_blank">OPEN MAPS</a>
                            </button>
                            <button type="button" class="w-80 h-20 text-2xl lg:w-auto lg:h-auto lg:text-base font-semibold text-white defaulthoverable contactus  px-5 py-2.5 me-2 mb-2"><a
                                href="https://wa.me/6282252913336" target="_blank">CONTACT US</a></button>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>

    </div>
    <footer class="flex flex-col items-center my-10 gap-2">
        <div class="flex flex-row items-center gap-2 text-zinc-700 ">
            <a href="https://www.instagram.com/schoeneflorist/" target="_blank" class="text-3xl lg:text-xl"><i
                    class="fa-brands fa-instagram"></i></a>
            <a href="https://wa.me/6282252913336" target="_blank" class="text-3xl lg:text-xl"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <div class="text-2xl lg:text-base">© SCHOENE FLORIST</div>
    </footer>
</body>

</html>

<script>

window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("home2");
var fixer = document.getElementById("hiddenfixer")

// Get the offset position of the navbar
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    fixer.classList.remove("hidden");
  } else {
    header.classList.remove("sticky");
    fixer.classList.add("hidden");
  }
}
</script>

<style>

</style>
