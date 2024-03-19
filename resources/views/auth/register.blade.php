@extends('app')
@section('content')
<link rel="stylesheet" href="resources/css/styles.css">
<section class="bg-white">
  <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
    <section class="relative flex h-40 items-end bg-gray-900 lg:col-span-5 lg:h-full xl:col-span-6">
        <img
            alt="Night"
            src="https://images.pexels.com/photos/17516383/pexels-photo-17516383/free-photo-of-deporte-tenis-red-sombra.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
            class="absolute inset-0 h-full w-full object-cover opacity-80"
        />
        <div class="lg:relative lg:block lg:p-12">
            <a class="block text-white" href="/">
            <span class="sr-only">Home</span>
            <!-- Logo or Home icon -->
            </a>
            <h2 class="mt-6 text-2xl font-bold text-white sm:text-3xl md:text-4xl">
            Welcome to ActiveHub🎾
            </h2>
            <p class="mt-4 leading-relaxed text-white/90">
            Sign up for access to the best class system
            </p>
        </div>
    </section>

    <main
      class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6"
    >
      <div class="max-w-xl lg:max-w-3xl">
        <h1 class="text-3xl font-bold text-blue-500">Create an account</h1>
        <!-- Compact form for smaller screens -->
        <form method="POST" action="{{ route('register') }}" class="mt-8 grid grid-cols-6 gap-6">
          @csrf
          <div class="col-span-6 sm:col-span-3">
            <label for="name" class="block text-sm font-medium text-gray-700">
              First Name
            </label>
            <input
              type="text"
              id="name"
              name="name"
              required
              autofocus
              autocomplete="name"
              class="mt-1 block w-full rounded-md border-2 border-gray-200 p-2 shadow-sm focus:outline-none focus:ring-blue-700 focus:border-blue-700"
            />
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label for="lastName" class="block text-sm font-medium text-gray-700">
              Last Name
            </label>
            <input
              type="text"
              id="lastName"
              name="lastName"
              required
              autocomplete="family-name"
              class="mt-1 block w-full rounded-md border-2 border-gray-200 p-2 shadow-sm focus:outline-none focus:ring-blue-700 focus:border-blue-700"
            />
          </div>

          <div class="col-span-6">
            <label for="phone" class="block text-sm font-medium text-gray-700">
              Phone number
            </label>
            <input
              type="text"
              id="phone"
              name="phone"
              required
              autocomplete="tel"
              class="mt-1 block w-full rounded-md border-2 border-gray-200 p-2 shadow-sm focus:outline-none focus:ring-blue-700 focus:border-blue-700"
            />
          </div>

          <div class="col-span-6">
            <label for="email" class="block text-sm font-medium text-gray-700">
              Email
            </label>
            <input
              type="email"
              id="email"
              name="email"
              required
              autocomplete="email"
              class="mt-1 block w-full rounded-md border-2 border-gray-200 p-2 shadow-sm focus:outline-none focus:ring-blue-700 focus:border-blue-700"
            />
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label for="password" class="block text-sm font-medium text-gray-700">
              Password
            </label>
            <input
              type="password"
              id="password"
              name="password"
              required
              autocomplete="new-password"
              class="mt-1 block w-full rounded-md border-2 border-gray-200 p-2 shadow-sm focus:outline-none focus:ring-blue-700 focus:border-blue-700"
            />
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
              Password Confirmation
            </label>
            <input
              type="password"
              id="password_confirmation"
              name="password_confirmation"
              required
              autocomplete="new-password"
              class="mt-1 block w-full rounded-md border-2 border-gray-200 p-2 shadow-sm focus:outline-none focus:ring-blue-700 focus:border-blue-700"
            />
          </div>

          <div class="col-span-6">
            <p class="text-sm text-gray-500">
              By creating an account, you agree to our
              <a href="#" class="text-gray-700 underline">terms and conditions</a>
              and
              <a href="#" class="text-gray-700 underline">privacy policy</a>.
            </p>
          </div>

          <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
            <button
              type="submit"
              class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
            >
              Create an account
            </button>

            <p class="mt-4 text-sm text-gray-500 sm:mt-0">
              Already have an account?
              <a href="{{ route('login') }}" class="text-blue-700 underline">Log in</a>.
            </p>
          </div>
        </form>
      </div>
    </main>
  </div>
</section>
@endsection

