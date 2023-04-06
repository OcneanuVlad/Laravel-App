@extends('layouts.master')

@section('content')
<div class="h-auto overflow-x-clip bg-white">
    <div class="flex flex-col h-full bg-white">
        <!-- intro -->
        <div class="intro carousel-container h-auto w-screen overflow-hidden relative">
            <!-- logos -->
            <img src="{{asset('images/intro/logo_01.png')}}" class="absolute left-5p top-10p z-10 w-1/12 select-none pointer-events-none" />
            <img src="{{asset('images/intro/logo_02.png')}}" class="absolute right-5p top-10p z-10 w-1/12 select-none pointer-events-none" />
            <!-- carousel -->
            <div class="carousel-track flex w-max h-section transition-transform ease-in-out">
                <div class="current-slide carousel-item h-full w-screen bg-yellow">
                    <div class="relative flex flex-col float-left h-full w-1/2 justify-center items-center">
                        <div class="absolute left-1/4 top-30p flex flex-col items-start z-10">
                            <p class="whitespace-nowrap text-4v leading-none -skew-x-12 bg-black text-yellow p-0.5 md:p-1.5">
                                {{ $posts[0]->title }}
                            </p>
                            <p class="whitespace-nowrap text-4v leading-none -skew-x-12 bg-black text-white p-0.5 md:p-1.5">
                                {!! strip_tags($posts[0]->body) !!}
                            </p>
                            <p class="whitespace-nowrap text-4v leading-none -skew-x-12 bg-black text-white p-0.5 md:p-1.5">
                                {{ $posts[0]->excerpt }}
                            </p>
                        </div>
                        <p class="absolute left-40p top-55p text-1.5v w-5/12 mt-10p leading-tight italic font-extrabold">
                            {{ $posts[0]->meta_description }}
                        </p>
                    </div>
                    <div class="float-right w-1/2">
                        <img src="{{ asset('storage/' . $posts[0]->image) }}" class="float-right select-none pointer-events-none" />
                    </div>
                </div>
                <div class="carousel-item w-screen h-full bg-pink">
                    <div class="relative flex flex-col float-left h-full w-1/2 justify-center items-center">
                        <div class="absolute left-1/4 top-30p flex flex-col items-start z-10">
                            <p class="whitespace-nowrap text-4v leading-none -skew-x-12 bg-black text-pink p-0.5 md:p-1.5">
                                {{ $posts[1]->title }}
                            </p>
                            <p class="whitespace-nowrap text-4v leading-none -skew-x-12 bg-black text-white p-0.5 md:p-1.5">
                                {!! strip_tags($posts[1]->body) !!}
                            </p>
                            <p class="whitespace-nowrap text-4v leading-none -skew-x-12 bg-black text-white p-0.5 md:p-1.5">
                                {{ $posts[1]->excerpt }}
                            </p>
                        </div>
                        <p class="absolute left-40p top-55p bottom-1/4 text-1.5v w-5/12 mt-10p leading-tight italic font-extrabold">
                            {{ $posts[1]->meta_description }}
                        </p>
                    </div>
                    <div class="float-right w-1/2">
                        <img src="{{ asset('storage/' . $posts[1]->image) }}" class="float-right select-none pointer-events-none" />
                    </div>
                </div>
                <div class="carousel-item w-screen h-full bg-blue">
                    <div class="relative flex flex-col float-left h-full w-1/2 justify-center items-center">
                        <div class="absolute left-1/4 top-30p flex flex-col items-start z-10">
                            <p class="whitespace-nowrap text-4v leading-none -skew-x-12 bg-black text-blue p-0.5 md:p-1.5">
                                {{ $posts[2]->title }}
                            </p>
                            <p class="whitespace-nowrap text-4v leading-none -skew-x-12 bg-black text-white p-0.5 md:p-1.5">
                                {!! strip_tags($posts[2]->body) !!}
                            </p>
                            <p class="whitespace-nowrap text-4v leading-none -skew-x-12 bg-black text-white p-0.5 md:p-1.5">
                                {{ $posts[2]->excerpt }}
                            </p>
                        </div>
                        <p class="absolute left-40p top-55p bottom-1/4 text-1.5v w-5/12 mt-10p leading-tight italic font-extrabold">
                            {{ $posts[2]->meta_description }}
                        </p>
                    </div>
                    <div class="float-right w-1/2">
                        <img src="{{ asset('storage/' . $posts[2]->image) }}" class="float-right select-none pointer-events-none" />
                    </div>
                </div>
                <div class="carousel-item w-screen h-full bg-teal">
                    <div class="relative flex flex-col float-left h-full w-1/2 justify-center items-center">
                        <div class="absolute left-1/4 top-30p flex flex-col items-start z-10">
                            <p class="whitespace-nowrap text-4v leading-none -skew-x-12 bg-black text-teal p-0.5 md:p-1.5">
                                {{ $posts[3]->title }}
                            </p>
                            <p class="whitespace-nowrap text-4v leading-none -skew-x-12 bg-black text-white p-0.5 md:p-1.5">
                                {!! strip_tags($posts[3]->body) !!}
                            </p>
                            <p class="whitespace-nowrap text-4v leading-none -skew-x-12 bg-black text-white p-0.5 md:p-1.5">
                                {{ $posts[3]->excerpt }}
                            </p>
                        </div>
                        <p class="absolute left-40p top-55p bottom-1/4 text-1.5v w-5/12 mt-10p leading-tight italic font-extrabold">
                            {{ $posts[3]->meta_description }}
                        </p>
                    </div>
                    <div class="float-right w-1/2">
                        <img src="{{ asset('storage/' . $posts[3]->image) }}" class="float-right select-none pointer-events-none" />
                    </div>
                </div>
            </div>
            <div class="absolute bottom-0 right-0 flex items-center w-1/2 h-1/6">
                <!-- indicators -->
                <div class="gap-1 absolute flex items-center text-2v left-15p w-1/6">
                    <p class="indicator font-extrabold">01</p>
                    <div class="h-px w-1/4 bg-black"></div>
                    <p>04</p>
                </div>
                <!-- buttons -->
                <div class="flex absolute right-5p w-1/6">
                    <button class="carousel-prev mx-auto">
                        <img src="{{asset('images/intro/next.png')}}" class="rotate-y-180 opacity-70 transition-opacity ease-in-out hover:opacity-100 w-90p select-none" />
                    </button>
                    <button class="carousel-next">
                        <img src="{{asset('images/intro/next.png')}}" class="opacity-70 transition-opacity ease-in-out hover:opacity-100 w-90p select-none" />
                    </button>
                </div>
            </div>
        </div>
        <!-- sticky -->
        <a href="#newsletter-anchor" class="sticky z-20 top-0 ml-auto mr-3 md:mr-10 w-concurs bg-white"><img src="{{asset('images/concurs.png')}}" class="w-full object-contain"></a>
        <!-- features -->
        <div class="features">
            <div class="relative w-screen">
                <img src="{{asset('images/features/bg-01.png')}}" class="select-none pointer-events-none" />
                <p class="absolute left-20p italic font-extrabold text-3v w-1/4 top-5p">
                    DE CE SA ALEGI FATOFF!?
                </p>
                <div class="-top-5p left-0 absolute grid grid-cols-4 grid-rows-2 h-full w-full">
                    <div class="col-start-3 h-90p bg-white p-15p flex flex-col items-start gap-3 md:gap-10 transition ease-out rounded-lg hover:z-10 hover:shadow-xl hover:scale-105">
                        <img src="{{ asset('storage/' . $posts[4]->image) }}" class="w-1/4 select-none pointer-events-none" />
                        <p class="text-1.5v w-3/4 italic font-bold">
                            {{ $posts[4]->title }}
                        </p>
                    </div>
                    <div class="h-90p bg-white p-15p flex flex-col items-start gap-3 md:gap-10 transition ease-out rounded-lg hover:z-10 hover:shadow-xl hover:scale-105">
                        <img src="{{ asset('storage/' . $posts[5]->image) }}" class="w-1/4 select-none pointer-events-none" />
                        <p class="text-1.5v w-3/4 italic font-bold">
                            {{ $posts[5]->title }}
                        </p>
                    </div>
                    <div class="col-start-2 h-90p bg-white p-15p flex flex-col items-start gap-3 md:gap-10 transition ease-out rounded-lg hover:z-10 hover:shadow-xl hover:scale-105">
                        <img src="{{ asset('storage/' . $posts[6]->image) }}" class="w-1/4 select-none pointer-events-none" />
                        <p class="text-1.5v w-3/4 italic font-bold">
                            {{ $posts[6]->title }}
                        </p>
                    </div>
                    <div class="h-90p bg-white p-15p flex flex-col items-start gap-3 md:gap-10 transition ease-out rounded-lg hover:z-10 hover:shadow-xl hover:scale-105">
                        <img src="{{ asset('storage/' . $posts[7]->image) }}" class="w-1/4 select-none pointer-events-none" />
                        <p class="text-1.5v w-3/4 italic font-bold">
                            {{ $posts[7]->title }}
                        </p>
                    </div>
                    <div class="h-90p bg-white p-15p flex flex-col items-start gap-3 md:gap-10 transition ease-out rounded-lg hover:z-10 hover:shadow-xl hover:scale-105">
                        <img src="{{ asset('storage/' . $posts[8]->image) }}" class="w-1/4 select-none pointer-events-none" />
                        <p class="text-1.5v w-3/4 italic font-bold">
                            {{ $posts[8]->title }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- product -->
        <div class="product">
            <div class="relative w-screen flex flex-col items-center text-white">
                <img src="{{asset('images/product/bg-02.png')}}" class="select-none pointer-events-none" />
                <div class="absolute flex flex-col items-center leading-tight top-10p">
                    <p class="text-1v">DY Nutrition</p>
                    <p class="italic font-extrabold text-4v">
                        BATOANE PROTEICE
                    </p>
                </div>
                <div class="absolute bottom-20p flex w-90p h-5/12">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/' . $posts[9]->image) }}" class="w-90p select-none pointer-events-none" />
                        <p class="italic font-extrabold text-1.5v">
                            {{ $posts[9]->excerpt }}
                        </p>
                        <p class="italic text-1.25v">
                            {{ $posts[9]->title }}
                        </p>
                        <button class="w-8/12 h-1/12 border border-white mt-10p font-bold text-1v transition ease-in-out hover:bg-white hover:text-black">
                            Vezi Produsul
                        </button>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/' . $posts[10]->image) }}" class="w-90p select-none pointer-events-none" />
                        <p class="italic font-extrabold text-1.5v">
                            {{ $posts[10]->excerpt }}
                        </p>
                        <p class="italic text-1.25v">
                            {{ $posts[10]->title }}
                        </p>
                        <button class="w-8/12 h-1/12 border border-white mt-10p font-bold text-1v transition ease-in-out hover:bg-white hover:text-black">
                            Vezi Produsul
                        </button>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/' . $posts[11]->image) }}" class="w-90p select-none pointer-events-none" />
                        <p class="italic font-extrabold text-1.5v">
                            {{ $posts[11]->excerpt }}
                        </p>
                        <p class="italic text-1.25v">
                            {{ $posts[11]->title }}
                        </p>
                        <button class="w-8/12 h-1/12 border border-white mt-10p font-bold text-1v transition ease-in-out hover:bg-white hover:text-black">
                            Vezi Produsul
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner & newsletter -->
        <div class="relative banner newsletter flex justify-center">
            <!-- banner -->
            <div class="relative flex justify-center text-white">
                <p class="z-10 leading-none absolute top-10p font-extrabold text-4v bg-black text-white p-1 md:p-3 -skew-x-12">
                    CASTIGA CU FATOFF
                </p>
                <div class="relative float-left w-1/2 flex items-center justify-center">
                    <img src="{{asset('images/banner/bg-03.png')}}" class="pointer-events-none select-none" />
                    <div class="absolute leading-tight left-1/3 top-35p w-3/4">
                        <p class="italic text-2v w-1/2">{{ $posts[12]->excerpt }}</p>
                        <p class="italic font-extrabold text-4v w-full">
                        {{ $posts[12]->title }}
                        </p>
                        <div id="newsletter-anchor"></div>
                    </div>
                </div>
                <div class="relative float-right w-1/2 flex items-center justify-center">
                    <img src="{{asset('images/banner/bg-04.png')}}" class="select-none pointer-events-none" />
                    <div class="absolute leading-tight left-15p top-35p">
                        <p class="italic text-2v">{{ $posts[13]->excerpt }}</p>
                        <p class="italic font-extrabold text-4v">
                        {{ $posts[13]->title }}
                        </p>
                        <p class="w-6/12 font-semibold text-1v leading-snug">
                        {!! strip_tags($posts[13]->body) !!}
                        </p>
                    </div>
                </div>
            </div>
            <!-- newsletter -->
            <div id="newsletter" class="absolute -bottom-40p z-10 flex justify-center text-white w-11/12">
                <img src="{{asset('images/newsletter/bg-05.png')}}" class="select-none pointer-events-none" />
                <div class="flex flex-col items-center absolute top-10p w-full h-full">
                    <p class="italic font-extrabold text-3v leading-loose">
                        INSCRIE-TE LA NEWSLETTER
                    </p>
                    <p class="text-1.5v">
                        Inscrie-te la newsletter si participa la
                        concurs.
                    </p>
                    <div class="w-3/4 mt-2.5p flex flex-col">
                        <form action="/" method="POST" class="flex w-full h-1/2">
                            @csrf
                            <input name="name" type="text" placeholder="Nume" class="text-1v h-full w-22.5p font-semibold bg-transparent border border-white p-1 md:p-4 box-border focus:outline-0 mr-auto placeholder:text-white focus:placeholder:opacity-0 autofill:filter-none" />
                            <input name="email" type="text" placeholder="Email" class="text-1v h-full w-22.5p font-semibold bg-transparent border border-white p-1 md:p-4 box-border focus:outline-0 mx-auto placeholder:text-white focus:placeholder:opacity-0 autofill:bg-transparent" />
                            <input name="phone" type="text" placeholder="Telefon" class="text-1v h-full w-22.5p font-semibold bg-transparent border border-white p-1 md:p-4 box-border focus:outline-0 mx-auto placeholder:text-white focus:placeholder:opacity-0 autofill:bg-transparent" />
                            <button name="submit" type="submit" class="flex items-center justify-center text-1v h-full w-22.5p font-semibold bg-transparent border border-white p-1 md:p-4 box-border ml-auto hover:bg-white hover:text-black transition ease-in-out">
                                Trimite
                            </button>
                        </form>
                        <p class="mt-2.5p text-1v">
                            Prin completarea formularului acceptati si
                            sunteti de acord cu GDPR si termeni si
                            conditii.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="footer">
            <div class="relative flex justify-center items-center">
                <img src="{{asset('images/footer/bg-06.png')}}" class="pointer-events-none select-none" />
                <div class="absolute flex w-3/4 h-40p bottom-0 text-1v leading-loose">
                    <div class="mx-auto flex flex-col items-start w-2/12">
                        <img src="{{asset('images/intro/logo_01.png')}}" class="pointer-events-none select-none w-2/4" />
                    </div>
                    <div class="mx-auto flex flex-col items-start w-1/5">
                        <p class="italic font-bold">Companie</p>
                        <a href="" class="mt-15p">Despre DY Nutrition</a>
                        <a href="">Contact</a>
                        <div class="flex mt-15p w-7/12">
                            <a href="" class="mr-auto w-1/12p"><img src="{{asset('images/footer/facebook.png')}}" class="w-full" alt="facebook" /></a>
                            <a href="" class="mx-auto w-1/12p"><img src="{{asset('images/footer/twitter.png')}}" class="w-full" alt="twitter" /></a>
                            <a href="" class="mx-auto w-1/12p"><img src="{{asset('images/footer/linkedin.png')}}" class="w-full" alt="linkedin" /></a>
                            <a href="" class="ml-auto w-1/12p"><img src="{{asset('images/footer/instagram.png')}}" class="w-full" alt="instagram" /></a>
                        </div>
                    </div>
                    <div class="mx-auto flex flex-col items-start w-1/5">
                        <p class="opacity-0">\</p>
                        <a href="" class="mt-15p">Termeni si Conditii</a>
                        <a href="" class="whitespace-nowrap">Politica de Confidentialitate</a>
                    </div>
                    <div class="mx-auto flex flex-col items-start w-1/5">
                        <p class="italic font-bold">Ai intrebari?</p>
                        <div class="flex mt-15p w-8/12">
                            <img src="{{asset('images/footer/phone.png')}}" class="pointer-events-none select-none object-contain w-2/12" />
                            <div class="flex flex-col ml-2 md:ml-5">
                                <p>Suna la</p>
                                <p class="font-bold whitespace-nowrap">
                                    0756 348 348
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto flex flex-col items-start w-1/5">
                        <p class="italic font-bold opacity-0">\</p>
                        <div class="flex mt-15p w-8/12">
                            <img src="{{asset('images/footer/mail.png')}}" class="pointer-events-none select-none object-contain w-2/12" />
                            <div class="flex flex-col ml-2 md:ml-5">
                                <p>Email</p>
                                <p class="font-bold">
                                    contact@dynutrition.ro
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection