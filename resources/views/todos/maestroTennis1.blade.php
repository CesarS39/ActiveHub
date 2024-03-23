@extends('app')
@section('content')
<!-- component -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="./assets/styles/styles.css" /> -->
    <script defer src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"></script>
  </head>
  <body>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex w-full mb-20 flex-wrap">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-blue-700 lg:w-1/3 lg:mb-0 mb-4 text-center">Mario Alcaraz</h1>
            <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
            </div>
            
            <div class="flex flex-wrap md:-m-2 -m-1">
            <div class="flex flex-wrap w-1/2">
                <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://th.bing.com/th/id/R.4061c2f41cd8c98edf055bdb4ec0b604?rik=NzksKm%2bBE7%2fn5g&pid=ImgRaw&r=0">
                </div>
                <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://www.atptour.com/en/tournaments/beijing/747/-/media/images/atp-tournaments/tournament-images/beijing_tournimage_16_2_1920x1015.jpg">
                </div>
                <div class="md:p-2 p-1 w-full">
                <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://cdn.pixabay.com/photo/2020/11/27/18/59/tennis-5782695_1280.jpg">
                </div>
            </div>
            <div class="flex flex-wrap w-1/2">
                <div class="md:p-2 p-1 w-full">
                <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://www.parklandssports.com.au/wp-content/uploads/2023/02/2585453-1-scaled-optimized.jpg">
                </div>
                <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://justpadel.ae/wp-content/uploads/2023/09/Playing-Tennis-padel-1.jpg">
                </div>
                <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://contents.mediadecathlon.com/s831965/k$6102acb5bdfee4b05ee38e3770c0626c/1200x0/1.91cr1/default.jpg?format=auto">
                </div>
            </div>
            </div>
        </div>
    </section>

    <section>
  <div class="relative items-center w-full mx-auto md:px-12 lg:px-16 max-w-7xl">
    <div>
      <div class="relative p-10 space-y-12 overflow-hidden lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-8 rounded-xl">
        <div class="relative flex flex-col p-8 bg-white">
          <div class="flex-1">
            <h3 class="text-xl font-semibold text-neutral-600">Freelancer</h3>
            <p class="flex items-baseline mt-4 text-neutral-600">
              <span class="text-5xl font-extrabold tracking-tight">$24</span>
              <span class="ml-1 text-xl font-semibold">/month</span>
            </p>
            <p class="mt-6 text-gray-500">The essentials to provide your best work for clients.</p>

            <!-- Feature list -->
            <ul role="list" class="pt-6 mt-6 space-y-6 border-t">
              <span class="text-lg font-semibold text-neutral-600">What's included?</span>

              <li class="flex">
                <div class="inline-flex items-center w-6 h-6 bg-blue-600 rounded-xl">
                  <svg class="flex-shrink-0 w-4 h-4 mx-auto text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                </div>
                <span class="ml-3 text-neutral-600">Up to 10 credit cards</span>
              </li>

              <li class="flex">
                <div class="inline-flex items-center w-6 h-6 bg-blue-600 rounded-xl">
                  <svg class="flex-shrink-0 w-4 h-4 mx-auto text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                </div>
                <span class="ml-3 text-neutral-600">Up to 1,000 credits</span>
              </li>

              <li class="flex">
                <div class="inline-flex items-center w-6 h-6 bg-blue-600 rounded-xl">
                  <svg class="flex-shrink-0 w-4 h-4 mx-auto text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                </div>
                <span class="ml-3 text-neutral-600">Tacky wallet</span>
              </li>

              <li class="flex">
                <div class="inline-flex items-center w-6 h-6 bg-blue-600 rounded-xl">
                  <svg class="flex-shrink-0 w-4 h-4 mx-auto text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                </div>
                <span class="ml-3 text-neutral-600">Personal profile only</span>
              </li>
            </ul>
          </div>
          <div class="mt-6 rounded-lg">
            <a href="#" type="highlight" class="w-full items-center block px-10 py-3.5 text-base font-medium text-center text-blue-600 transition duration-500 ease-in-out transform border-2 border-white shadow-md rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 bg-white"> Get Started </a>
          </div>
        </div>
        <div class="relative flex flex-col p-8 bg-blue-600 rounded-2xl">
          <div class="relative flex-1">
            <h3 class="text-xl font-semibold text-white">Startup</h3>

            <p class="flex items-baseline mt-4 text-white">
              <span class="text-5xl font-extrabold tracking-tight">$32</span>
              <span class="ml-1 text-xl font-semibold">/month</span>
            </p>
            <p class="mt-6 text-white text-solitud">A plan that scales with your rapidly growing business.</p>

            <!-- Feature list -->
            <ul role="list" class="pt-6 mt-6 space-y-6 border-t">
              <span class="text-lg font-semibold text-white">What's included?</span>

              <li class="flex">
                <div class="inline-flex items-center w-6 h-6 bg-white rounded-xl">
                  <svg class="flex-shrink-0 w-4 h-4 mx-auto text-neutral-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                </div>
                <span class="ml-3 text-white">Up to 10 credit cards</span>
              </li>

              <li class="flex">
                <div class="inline-flex items-center w-6 h-6 bg-white rounded-xl">
                  <svg class="flex-shrink-0 w-4 h-4 mx-auto text-neutral-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                </div>
                <span class="ml-3 text-white">Up to 10,000 credits</span>
              </li>

              <li class="flex">
                <div class="inline-flex items-center w-6 h-6 bg-white rounded-xl">
                  <svg class="flex-shrink-0 w-4 h-4 mx-auto text-neutral-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                </div>
                <span class="ml-3 text-white">Less tacky wallet </span>
              </li>

              <li class="flex">
                <div class="inline-flex items-center w-6 h-6 bg-white rounded-xl">
                  <svg class="flex-shrink-0 w-4 h-4 mx-auto text-neutral-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                </div>
                <span class="ml-3 text-white">Profile and portafolio</span>
              </li>

              <li class="flex">
                <div class="inline-flex items-center w-6 h-6 bg-white rounded-xl">
                  <svg class="flex-shrink-0 w-4 h-4 mx-auto text-neutral-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                </div>
                <span class="ml-3 text-white">Support</span>
              </li>
            </ul>
          </div>
          <div class="z-50 mt-6 rounded-lg">
            <a href="/pricing" type="highlight" class="w-full items-center block px-10 py-3.5 text-base font-medium text-center text-blue-600 transition duration-500 ease-in-out transform border-2 border-white shadow-md rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 bg-white"> Get started </a>
          </div>
        </div>
        <div class="relative flex flex-col p-8 bg-white">
          <div class="flex-1">
            <h3 class="text-xl font-semibold text-neutral-600">Enterprise</h3>
            <p class="flex items-baseline mt-4 text-neutral-600">
              <span class="text-5xl font-extrabold tracking-tight">$48</span>
              <span class="ml-1 text-xl font-semibold">/month</span>
            </p>
            <p class="mt-6 text-gray-500">Dedicated support and infrastructure for your company.</p>

            <!-- Feature list -->
            <ul role="list" class="pt-6 mt-6 space-y-6 border-t">
              <span class="text-lg font-semibold text-neutral-600">What's included?</span>

              <li class="flex">
                <div class="inline-flex items-center w-6 h-6 bg-blue-600 rounded-xl">
                  <svg class="flex-shrink-0 w-4 h-4 mx-auto text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                </div>
                <span class="ml-3 text-neutral-600">Unlimited credit cards</span>
              </li>

              <li class="flex">
                <div class="inline-flex items-center w-6 h-6 bg-blue-600 rounded-xl">
                  <svg class="flex-shrink-0 w-4 h-4 mx-auto text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                </div>
                <span class="ml-3 text-neutral-600">Unlimited credits</span>
              </li>

              <li class="flex">
                <div class="inline-flex items-center w-6 h-6 bg-blue-600 rounded-xl">
                  <svg class="flex-shrink-0 w-4 h-4 mx-auto text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                </div>
                <span class="ml-3 text-neutral-600">A super wallet</span>
              </li>

              <li class="flex">
                <div class="inline-flex items-center w-6 h-6 bg-blue-600 rounded-xl">
                  <svg class="flex-shrink-0 w-4 h-4 mx-auto text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                </div>
                <span class="ml-3 text-neutral-600">Shout out </span>
              </li>

              <li class="flex">
                <div class="inline-flex items-center w-6 h-6 bg-blue-600 rounded-xl">
                  <svg class="flex-shrink-0 w-4 h-4 mx-auto text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                </div>
                <span class="ml-3 text-neutral-600">Better support</span>
              </li>

              <li class="flex">
                <div class="inline-flex items-center w-6 h-6 bg-blue-600 rounded-xl">
                  <svg class="flex-shrink-0 w-4 h-4 mx-auto text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                </div>
                <span class="ml-3 text-neutral-600">Custom integrations</span>
              </li>
            </ul>
          </div>

          <div class="mt-6 rounded-lg">
            <a href="#" type="highlight" class="w-full items-center block px-10 py-3.5 text-base font-medium text-center text-blue-600 transition duration-500 ease-in-out transform border-2 border-white shadow-md rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 bg-white"> Get Started </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  </body>
</html>
@endsection
