<div class="bg-pink-300 h-80" x-data="{image: true}">
    <p class="pt-8 pl-8 text-xl text-white" x-show="image">  </p>
    <img src="assets/images/fleur.jpg" alt="fleur"
    class="relative w-32 h-32 rounded-full left-1/4 top-1/4" x-show="image" x-on:mouseover="image = !image">
    <img src="assets/images/fleur.jpg" alt="fleur"
    class="w-full h-full" x-show="!image" x-on:mouseout="image = true">
</div>
