@extends('app')
@section('content')
<!-- Section: Design Block -->

<section class="relative flex flex-wrap lg:h-screen lg:items-center">
  <div class="w-full px-4 py-12 sm:px-6 sm:py-16 lg:w-1/2 lg:px-8 lg:py-24">
    <div class="mx-auto max-w-lg text-center">
      <h1 class="text-2xl font-bold sm:text-3xl text-blue-700">Get active today!</h1>

      <p class="mt-4 text-gray-500">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et libero nulla eaque error neque ipsa culpa! 🎾🛹🚲🥊🏀🏐
      </p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="mx-auto mb-0 mt-8 max-w-md space-y-4">
      @csrf
      <div>
        <label for="email" class="sr-only">Email</label>
        <div class="relative">
          <input
            type="email"
            name="email"
            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
            placeholder="Enter email"
            required
            autofocus
          />
        </div>
      </div>

      <div>
        <label for="password" class="sr-only">Password</label>
        <div class="relative">
          <input
            type="password"
            name="password"
            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
            placeholder="Enter password"
            required
          />
        </div>
      </div>

      <div class="flex items-center justify-between">
        <p class="text-sm text-gray-500">
          No account?
          <a class="underline text-blue-700" href="{{ route('register') }}">Sign up</a>
        </p>

        @if (Route::has('password.request'))
            <a class="underline text-sm text-blue-700 hover:text-purple-900" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif

        <button
          type="submit"
          class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
        >
          Log in
        </button>
      </div>
    </form>
  </div>

  <div class="relative h-64 w-full sm:h-96 lg:h-full lg:w-1/2">
    <img
      alt="Welcome"
      src="https://images.pexels.com/photos/2435292/pexels-photo-2435292.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
      class="absolute inset-0 h-full w-full object-cover"
    />
  </div>
</section>

@endsection
