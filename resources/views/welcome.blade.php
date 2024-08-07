<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="/img/fav-icon.png" type="image/x-icon">

        <title>Meow</title>
        @vite('resources/css/app.css')

</head>

<body class="bg-black">
  <header class="">
    <section class="h-screen bg-cover bg-center bg-fixed" style="background-image: url(/img/hero-bg.png)">

      <div class="h-full items-center justify-center text-center">
        <h1 class="font-bold uppercase text-7xl pt-40 md:pt-52 md:text-7xl">
          Meow!
        </h1>
        <h2 class="text-xl md:text-2xl">Welcome to my feed!</h2>
      </div>
    </section>

  </header>

  <main class="">
    <div class="px-10 h-96 text-white content-center text-left bg-neutral-900 md:px-40 lg:px-40 xl:px-72">
      <h1 class="text-xl md:text-3xl">
        <span class="text-3xl font-bold">meow!</span> welcome to my corner of
        the internet! I'm <span class="font-bold text-orange-400">Nini</span>,
        the most dashing cat you'll ever meet.
      </h1>
    </div>

    <div class=" px-10 pt-20 md:px-40 lg:px-40 xl:px-72">

      <h1 class="pb-8 text-white font-bold text-5xl">Nini</h1>

      <div class="place-content-center grid lg:grid-cols-2 gap-10 pb-24">
        <img class="h-96 w-96 pb-5 lg:w-96 lg:h-96 object-cover" src="/img/niniTheCat.jpg" alt="">


        <div>

          <div class="w-full max-w-xl pb-4">
            <h1 class="text-white pb-2">Cuteness</h1>
            <div class="bg-gray-200 rounded-md h-6 dark:bg-gray-700">
              <div class="bg-orange-400 h-6 rounded-lg" style="width: 100%;"></div>
            </div>

          </div>

          <div class="w-full max-w-xl pb-4">
            <h1 class="text-white pb-2">Agility</h1>
            <div class="bg-gray-200 rounded-md h-6 dark:bg-gray-700">
              <div class="bg-orange-400 h-6 rounded-lg" style="width: 80%;"></div>
            </div>

          </div>

          <div class="w-full max-w-xl pb-4">
            <h1 class="text-white pb-2">Vocalization</h1>
            <div class="bg-gray-200 rounded-md h-6 dark:bg-gray-700">
              <div class="bg-orange-400 h-6 rounded-lg" style="width: 30%;"></div>
            </div>

          </div>

          <div class="w-full max-w-xl pb-4">
            <h1 class="text-white pb-2">Hunting Skills</h1>
            <div class="bg-gray-200 rounded-md h-6 dark:bg-gray-700">
              <div class="bg-orange-400 h-6 rounded-lg" style="width: 70%;"></div>
            </div>

          </div>

          <div class="w-full max-w-xl pb-4">
            <h1 class="text-white pb-2">Intelligence</h1>
            <div class="bg-gray-200 rounded-md h-6 dark:bg-gray-700">
              <div class="bg-orange-400 h-6 rounded-lg" style="width: 60%;"></div>
            </div>

          </div>

        </div>
      </div>

      <div class="md:mx-22 flex overflow-x-auto space-x-4 p-4 min-h-96 ">

        <div class="flex-shrink-0 w-64 rounded-xl overflow-hidden shadow-lg  bg-white ">
          <div class="h-48 bg-cover bg-center" style="background-image: url(/img/cat_img/box.jpg);">
          </div>
          <div class="px-6 pb-10 pt-4">
            <div class="font-bold text-xl">Cat in a box</div>
            <p class="text-gray-700 text-base">
              A fluffy cat curled up snugly inside a small cardboard box, purring softly in its sleep.
            </p>
          </div>
        </div>

        <div class="flex-shrink-0 w-64 rounded-xl overflow-hidden shadow-lg  bg-white">
          <div class="h-48 bg-cover bg-center" style="background-image: url(/img/cat_img/meditate.jpg);">
          </div>
          <div class="px-6 pb-10 pt-4">
            <div class="font-bold text-xl">A Meditating Cat</div>
            <p class="text-gray-700 text-base">
              A serene cat sits calmly with its eyes closed, appearing to be in a state of deep meditation.
            </p>
          </div>
        </div>

        <div class="flex-shrink-0 w-64 rounded-xl overflow-hidden shadow-lg  bg-white">
          <div class="h-48 bg-cover bg-center" style="background-image: url(/img/cat_img/selfie.jpg);">
          </div>
          <div class="px-6 pb-10 pt-4">
            <div class="font-bold text-xl">A Cat Selfie</div>
            <p class="text-gray-700 text-base">
              A cute quirky cat taking a selfie
            </p>
          </div>
        </div>

        <div class="flex-shrink-0 w-64 rounded-xl overflow-hidden shadow-lg  bg-white">
          <div class="h-48 bg-cover bg-center" style="background-image: url(/img/cat_img/ferosious.jpg);">
          </div>
          <div class="px-6 pb-10 pt-4">
            <div class="font-bold text-xl">The ferocious Cat</div>
            <p class="text-gray-700 text-base">
              A fierce cat, bares its sharp teeth and hisses menacingly.
            </p>
          </div>
        </div>


      </div>

      <div class="text-white">
        @php
            echo $users [0]['name']
        @endphp
      </div>





  </main>

  <footer>
    <div></div>


  </footer>
</body>

</html>
