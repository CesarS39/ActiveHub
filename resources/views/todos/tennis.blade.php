@extends('app')
@section('content')
<link rel="stylesheet" href="resources/css/styles.css">

</head>

<body>
<section  class="bg-gradient-to-b from-blue-500 to-white text-white">
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
    <header class="text-center">
      <h2 class="text-xl font-bold text-blue-700 sm:text-3xl">TENNIS</h2>

      <p class="mx-auto mt-4 max-w-md text-white">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
        dicta incidunt est ipsam, officia dolor fugit natus?
      </p>
    </header>

    <ul class="mt-8 grid grid-cols-1 gap-4 lg:grid-cols-3">
      <li>
        <a href="#" class="group relative block">
          <img
            src="https://images.pexels.com/photos/5741292/pexels-photo-5741292.jpeg?auto=compress&cs=tinysrgb&w=600"
            alt=""
            class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90"
          />

          <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
            <h3 class="text-xl font-medium text-white">Equipment</h3>

            <span
              class="mt-1.5 inline-block bg-blue-700 px-5 py-3 text-xs font-medium uppercase tracking-wide text-white"
            >
              Shop Now
            </span>
          </div>
        </a>
      </li>

      <li>
        <a href="#" class="group relative block">
          <img
            src="https://images.pexels.com/photos/16140853/pexels-photo-16140853/free-photo-of-toma-aerea-de-mi-amigo-y-yo-jugando-tenis-fue-un-empate-jajaja.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            alt=""
            class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90"
          />

          <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
            <h3 class="text-xl font-medium text-white">Clubs</h3>

            <span
              class="mt-1.5 inline-block bg-blue-700 px-5 py-3 text-xs font-medium uppercase tracking-wide text-white"
            >
              Discover
            </span>
          </div>
        </a>
      </li>

      <li class="lg:col-span-2 lg:col-start-2 lg:row-span-2 lg:row-start-1">
        <a href="http://127.0.0.1:8000/maestroTennis1" class="group relative block">
          <img
            src="https://images.pexels.com/photos/11941535/pexels-photo-11941535.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
            alt=""
            class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-85 bg-blue-700"
          />

          <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
            <h3 class="text-xl font-medium text-white">Mario Alcaraz</h3>

            <span
              class="mt-1.5 inline-block bg-blue-700 px-5 py-3 text-xs font-medium uppercase tracking-wide text-white"
            >
              Train Now
            </span>
          </div>
        </a>
      </li>
    </ul>
  </div>
</section>
<span class="flex items-center">
  <span class="h-px flex-1 bg-blue-700"></span>
  <span class="shrink-0 px-6 text-blue-700">Profesores</span>
  <span class="h-px flex-1 bg-blue-700"></span>
</span>

<section class="">
  <div class="flex flex-wrap mx-auto md:flex-nowrap p-12 justify-center">

    <a href="http://127.0.0.1:8000/maestroTennis1">
      <div class="flex w-full">
        <div class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:-ml-16 md:hover:-translate-x-16 md:hover:-translate-y-8">
          <img class="object-cover object-center w-full rounded-t-xl lg:h-48 md:h-36" src="/img/tennis.png" alt="blog">
          <div class="px-6 py-8">
            <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
              <span class="text-blue-700">Maestro 1</span>
            </h4>
            <p class="mt-4 text-base font-normal text-gray-500 leading-relax">Install Tailwind CSS without any Javascript Framewrok locally with purgeCSS, enable the dark mode option, prefferences or class is upt to you.</p>
          </div>
        </div>
      </div>
    </a>

    <a href="">
      <div class="flex w-full">
        <div class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:-ml-16 md:hover:-translate-x-16 md:hover:-translate-y-8">
          <img class="object-cover object-center w-full rounded-t-xl lg:h-48 md:h-36" src="/assets/images/placeholders/neon-4.jpg" alt="blog">
          <div class="px-6 py-8">
            <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
              <span class="text-blue-700">Maestro 2</span>
            </h4>
            <p class="mt-4 text-base font-normal text-gray-500 leading-relax">Install Tailwind CSS without any Javascript Framewrok locally with purgeCSS, enable the dark mode option, prefferences or class is upt to you.</p>
          </div>
        </div>
      </div>
    </a>

    <a href="">
      <div class="flex w-full">
        <div class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:-ml-16 md:hover:-translate-x-16 md:hover:-translate-y-8">
          <img class="object-cover object-center w-full rounded-t-xl lg:h-48 md:h-36" src="/assets/images/placeholders/neon-2.jpg" alt="blog">
          <div class="px-6 py-8">
            <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
              <span class="text-blue-700">Maestro 3</span>
            </h4>
            <p class="mt-4 text-base font-normal text-gray-500 leading-relax">Install Tailwind CSS without any Javascript Framewrok locally with purgeCSS, enable the dark mode option, prefferences or class is upt to you.</p>
          </div>
        </div>
      </div>
    </a>
    
    <a href="">
      <div class="flex w-full">
        <div class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:-ml-16 md:hover:-translate-x-16 md:hover:-translate-y-8">
          <img class="object-cover object-center w-full rounded-t-xl lg:h-48 md:h-36" src="/assets/images/placeholders/neon-3.jpg" alt="blog">
          <div class="px-6 py-8">
            <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
              <span class="text-blue-700">Maestro 4</span>
            </h4>
            <p class="mt-4 text-base font-normal text-gray-500 leading-relax">Install Tailwind CSS without any Javascript Framewrok locally with purgeCSS, enable the dark mode option, prefferences or class is upt to you.</p>
          </div>
        </div>
      </div>
    </a>

  </div>
</section>
</body>
@endsection