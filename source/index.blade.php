@extends('_layouts.main')

@section('body')

<div class="relative">
    <div class="">
        <div class="w-full bg-no-repeat bg-cover h-96 lg:h-screen" style="z-index: -1; background-image: url('assets/images/bg.jpg');" x-show="!image">
        </div>
    </div>


</div>

<!--<div class="relative w-8 h-8 mx-auto my-10 border-2 rounded-full">
    <div class="mask">
      <div class="ring"></div>
    </div>
</div> -->

<div class="grid max-w-screen-xl grid-rows-4 gap-5 px-10 mx-auto my-10 md:grid-cols-4 md:grid-rows-none">
    <div class="grid grid-rows-2 bg-transparent">
        <div class="bg-center bg-no-repeat cover" style="background-image: url('https://images.pexels.com/photos/905163/pexels-photo-905163.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=67&w=114');">
        </div>
        <div class="py-2 text-center md:text-left">
            <h3 class="mb-8 text-lg font-bold lg:text-2xl md:text-xl">
                Traitement d'image</h3>
            <p class="leading-relaxed lg:text-lg text-md"> Pour parvenir à une image avec moins de bruit, nous appliquons
                une filtre de nuance de gris, thresholding.
            </p>
        </div>
    </div>
    <div class="grid grid-rows-2 bg-transparent">
        <div class="bg-center bg-no-repeat cover" style="background-image: url('https://images.pexels.com/photos/905163/pexels-photo-905163.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=67&w=114');">
        </div>
        <div class="py-2 text-center md:text-left">
            <h3 class="mb-8 text-lg font-bold lg:text-2xl md:text-xl"> Détection de ligne</h3>
            <p class="leading-relaxed lg:text-lg text-md"> 
                La détection de ligne se fait à l'algorithme de la transformation de Hough.
            </p>
        </div>
    </div>
    <div class="grid grid-rows-2 bg-transparent">
        <div class="bg-center bg-no-repeat cover" style="background-image: url('https://images.pexels.com/photos/905163/pexels-photo-905163.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=67&w=114');">
        </div>
        <div class="py-2 text-center md:text-left">
            <h3 class="mb-8 text-lg font-bold lg:text-2xl md:text-xl"> IA</h3>
            <p class="leading-relaxed lg:text-lg text-md"> 
                La reconnaissance de caractères se fait grâce à un réseau de neurones très corriace.
            </p>
        </div>
    </div>
    <div class="grid grid-rows-2 bg-transparent">
        <div class="bg-center bg-no-repeat cover" style="background-image: url('https://images.pexels.com/photos/905163/pexels-photo-905163.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=67&w=114');">
        </div>
        <div class="py-2 text-center md:text-left">
            <h3 class="mb-8 text-lg font-bold lg:text-2xl md:text-xl"> Interface graphique</h3>
            <p class="leading-relaxed lg:text-lg text-md"> 
                Grâce à GTK3, l'utilisateur peut profiter d'une interface graphique permettant de faciliter l'utilisation.
            </p>
        </div>
    </div>
</div>

<div style="background-image: url('assets/images/code.jpg');" class="text-3xl text-center text-white bg-fixed bg-center bg-no-repeat bg-cover h-96" style="line-height: 768px;">
    <p class="pt-44">Ne soyez plus jamais bloqué sur un sudoku</p>
</div>

<div class="p-5 pb-10 text-xl text-center" style="background-color: #FBFBFB;">
    <p class="pt-8 pb-16"> Pour parvenir à ce résultat, nous avons dû utilisé de nombreuses techniques</p>
    <p> Voici nos principaux algorithmes</p>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
   @foreach($projects as $proj)
       {{--  <x-cardproj title="{{$proj->title}}"/> --}}
       {{--     {{$proj}} --}}

       <div class="{{ $proj->bgcolor }} h-80" x-data="{imageLittleSize: true}"   >
        <div class="w-full h-full" x-cloak  x-show="imageLittleSize" x-on:mouseover="imageLittleSize = false">
            <p class="pt-8 pl-8 text-xl font-semibold text-white uppercase"> {{$proj->title}} </p>
            <img src="{{$proj->imgurl}}" alt="fleur"
            class="w-32 h-32 mx-auto mt-16 rounded-full ">
        </div>
        <div class="w-full h-full" x-cloak x-show="!imageLittleSize"
        x-on:mouseout="imageLittleSize = true"
        x-transition:enter="transition duration-700"
        x-transition:enter-start="opacity-0 transform scale-50"
        x-transition:enter-end="opacity-100 transform scale-100">
            <img src="{{$proj->imgurl}}" alt="fleur"
            class="w-full h-full">
        </div>
    </div>
    

    @endforeach
</div>

<div class="bg-gray-100 h-14 "></div>
<div class="h-24 bg-gray-100 ">
    <a href="https://github.com/realTartiflette/OCRSudoku" target="_blank" class="">
        <div class="flex items-center w-48 h-10 p-1 px-4 py-2 m-auto text-center text-white align-middle transition transform bg-blue-500 border-2 border-blue-500 border-solid rounded-lg shadow-lg hover:bg-white hover:text-blue-500 duration-900">
            {{-- Tablericons heart --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-auto mr-2" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
            </svg>
             <span class="mr-auto"> Voir notre GitHub </span> 
        </div> 
    </a>
</div>

<script>
    var texts = new Array();
    texts.push(" rapide");
    texts.push(" performante");
    texts.push(" efficace");

    var point = 0;

    function changeText()
    {
        $('#panic').html(texts[point]);
        if(point < texts.length - 1)
        {
            point ++;
        }
        else
        {
            point = 0;
        }
        setTimeout(changeText, 2000)
    }

    changeText();
</script>


<div class="text-5xl font-bold text-center text-white h-96" style="background-color: #554F5D; line-height: 24rem;">
    <p class="inline-block p-10 leading-normal align-middle"> Notre OCR est<span id="panic" class="text-blue-500 transition-transform " style="color: rgb(30, 107, 250); 
    transition-duration: 300ms;">  rapide </span></p>
</div>

<div class="p-10 pt-16 pb-24 bg-fixed bg-right bg-no-repeat" style="background-image: url('assets/images/Bg-Right-side.jpg');" >
    <div class="max-w-screen-lg mx-auto text-center bg-white-300">
        <h2 class="mb-10 text-5xl font-bold"> Qui sommes nous ? </h2>
        <p> Nous sommes tous les cinq étudiants en 2e année du cycle préparatoire d'Epita. Nous avons au cours de nos études étudié de différents langages comme
            le C, C#, OCAML et python.
        </p>
    </div>
</div>




@endsection
