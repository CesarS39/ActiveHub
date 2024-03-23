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
  <div class="flex h-screen">
  <!-- Sidebar -->
  <div class="w-64 border-r bg-white">
    <div class="px-4 py-6">
      <span class="grid h-10 w-32 place-content-center rounded-lg bg-gray-100 text-xs text-gray-600">
        Administrador
      </span>

      <ul class="mt-6 space-y-1">
        <li>
          <a href="#" class="block rounded-lg bg-gray-100 px-4 py-2 text-sm font-medium text-gray-700">
            General
          </a>
        </li>

        <li>
          <details class="group [&_summary::-webkit-details-marker]:hidden">
            <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
              <span class="text-sm font-medium">Usuarios</span>
              <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
              </span>
            </summary>

            <ul class="mt-2 space-y-1 px-4">
              <li>
                <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                  Profesores
                </a>
              </li>

              <li>
                <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                  Alumnos
                </a>
              </li>
            </ul>
          </details>
        </li>

        <li>
          <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
            Clases vendidas
          </a>
        </li>

        <li>
          <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
            Pagos
          </a>
        </li>

        <li>
          <details class="group [&_summary::-webkit-details-marker]:hidden">
            <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
              <span class="text-sm font-medium">Cuenta</span>
              <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
              </span>
            </summary>

            <ul class="mt-2 space-y-1 px-4">
              <li>
                <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                  Details
                </a>
              </li>

              <li>
                <a href="#" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                  Security
                </a>
              </li>

              <li>
                <form action="#">
                  <button type="submit" class="w-full rounded-lg px-4 py-2 text-sm font-medium text-gray-500 [text-align:_inherit] hover:bg-gray-100 hover:text-gray-700">
                    Logout
                  </button>
                </form>
              </li>
            </ul>
          </details>
        </li>
      </ul>
    </div>

    <div class="sticky inset-x-0 bottom-0 border-t border-gray-100">
      <a href="#" class="flex items-center gap-2 bg-white p-4 hover:bg-gray-50">
        <img alt="" src="https://scontent.flov1-1.fna.fbcdn.net/v/t39.30808-6/421610123_6951544938292427_7473454500116026481_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=XJe9SzpwJFcAX-YHood&_nc_ht=scontent.flov1-1.fna&oh=00_AfAbsmfIBtgD_3xFT_dyr9-dWoZWYMWOF531XbltA9L_1w&oe=65CD28EE" class="h-10 w-10 rounded-full object-cover"/>
        <div>
          <p class="text-xs">
            <strong class="block font-medium">César Enriquez</strong>
            <span>cesarsamuel@gmail.com</span>
          </p>
        </div>
      </a>
    </div>
  </div>

  <!-- Main content -->
  <div class="flex-grow ">
    <!-- Aquí va el contenido principal de tu página -->
    <!-- Puedes agregar contenido específico aquí según tus necesidades -->
    <section class="px-4 py-12 mx-auto max-w-7xl">
        <h1 class=" text-center text-3xl font-semibold text-blue-700">Dashboard</h1>
        <p class="text-center mt-4 text-gray-600">Welcome back, César Enriquez</p>
  <div class="grid grid-cols-1 gap-12 lg:grid-cols-3">
    <div class="card">
      <div class="px-4 py-3 border-0 card-header">
        <h4 class="font-medium text-gray-800">Posts Stats</h4>
        <span class="text-white badge bg-primary">32 Total</span>
      </div>
      <div class="px-4 mb-1 -mt-2 divide-y divide-gray-200 card-body">
        <div class="flex items-center justify-between py-3 text-sm">
          <div class="flex items-center space-x-2 text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5">
              <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
              <path
                fill-rule="evenodd"
                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                clip-rule="evenodd"
              />
            </svg>
            <span>Unique Views</span>
          </div>
          <span class="font-mono text-gray-900">132</span>
        </div>
        <div class="flex items-center justify-between py-3 text-sm">
          <div class="flex items-center space-x-2 text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5">
              <path
                fill-rule="evenodd"
                d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                clip-rule="evenodd"
              />
            </svg>
            <span>Comments</span>
          </div>
          <span class="font-mono text-gray-900">32,422</span>
        </div>
        <div class="flex items-center justify-between py-3 text-sm">
          <div class="flex items-center space-x-2 text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5">
              <path
                fill-rule="evenodd"
                d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                clip-rule="evenodd"
              />
            </svg>
            <span>Activities</span>
          </div>
          <span class="font-mono text-gray-900">0</span>
        </div>
        <div class="flex items-center justify-between py-3 text-sm">
          <div class="flex items-center space-x-2 text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            <span>Completed</span>
          </div>
          <span class="font-mono text-green-800 bg-green-200 badge">12</span>
        </div>
        <div class="flex items-center justify-between py-3 text-sm">
          <div class="flex items-center space-x-2 text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5">
              <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
            </svg>
            <span>Closed</span>
          </div>
          <span class="font-mono text-red-700 bg-red-200 badge">32</span>
        </div>
      </div>
      <a href="#" class="px-4 py-3 text-sm font-medium text-blue-700 hover: text-blue-900 card-footer">More Information</a>
    </div>
    <div class="card">
      <div class="flex-1 p-6">
        <div class="flex items-center justify-center space-x-2">
          <div class="avatar">
            <img src="/placeholder.jpg" alt="Photo of Praveen Juge" />
          </div>
          <div>
            <h4 class="mb-1 text-sm font-semibold text-gray-900">Praveen Juge</h4>
            <p class="text-sm font-medium leading-none text-gray-600">CEO of Birds</p>
          </div>
        </div>
        <div class="flex py-2 my-4 text-center border-t border-b border-gray-200 divide-x divide-gray-200">
          <div class="flex-1 p-2">
            <h5 class="text-sm font-bold text-gray-900">200</h5>
            <p class="text-sm font-medium leading-none text-gray-600">Posts</p>
          </div>
          <div class="flex-1 p-2">
            <h5 class="text-sm font-bold text-gray-900">46</h5>
            <p class="text-sm font-medium leading-none text-gray-600">Comments</p>
          </div>
          <div class="flex-1 p-2">
            <h5 class="text-sm font-bold text-gray-900">12,340</h5>
            <p class="text-sm font-medium leading-none text-gray-600">Likes</p>
          </div>
        </div>
        <p class="text-sm text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis laboriosam tempore eveniet consequatur impedit dolorem asperiores alias ex consectetur.</p>
      </div>
      <a href="#" class="justify-center px-4 py-3 text-sm font-medium text-blue-700 hover:text-blue-900 card-footer">View Full Profile</a>
    </div>
    <div class="card">
      <nav class="tab">
        <a class="tab-link active" href="#">Location</a>
        <a class="tab-link" href="#">Income</a>
        <a class="tab-link" href="#">Age</a>
      </nav>
      <div class="flex-1 overflow-y-auto">
        <a href="#" class="flex items-center justify-between w-full px-4 py-2 bg-white hover:bg-gray-200">
          <div class="flex items-center space-x-2">
            <div class="avatar avatar-xs">
              <img src="/placeholder.jpg" alt="Photo of Praveen Juge" />
            </div>
            <p class="text-xs font-medium text-left text-gray-800">Signed up from Chennai</p>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 text-gray-600">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
          </svg>
        </a>
        <a href="#" class="flex items-center justify-between w-full px-4 py-2 bg-gray-100 hover:bg-gray-200">
          <div class="flex items-center space-x-2">
            <div class="avatar avatar-xs">
              <img src="/placeholder.jpg" alt="Photo of Praveen Juge" />
            </div>
            <p class="text-xs font-medium text-left text-gray-800">Opened Email from Antarctica</p>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 text-gray-600">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
          </svg>
        </a>
        <a href="#" class="flex items-center justify-between w-full px-4 py-2 bg-white hover:bg-gray-200">
          <div class="flex items-center space-x-2">
            <div class="avatar avatar-xs">
              <img src="/placeholder.jpg" alt="Photo of Praveen Juge" />
            </div>
            <p class="text-xs font-medium text-left text-gray-800">Found a bird from India</p>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 text-gray-600">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
          </svg>
        </a>
        <a href="#" class="flex items-center justify-between w-full px-4 py-2 bg-gray-100 hover:bg-gray-200">
          <div class="flex items-center space-x-2">
            <div class="avatar avatar-xs">
              <img src="/placeholder.jpg" alt="Photo of Praveen Juge" />
            </div>
            <p class="text-xs font-medium text-left text-gray-800">Submitted New Post from Dubai</p>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 text-gray-600">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
      <a href="#" class="justify-between px-4 py-3 text-sm font-medium text-blue-700 hover:text-blue-900 card-footer">
        <span>Full Report</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4">
          <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
      </a>
    </div>
  </div>
</section>

<section class="px-4 py-12 mx-auto max-w-7xl">
  <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4">
    <div class="card">
      <div class="p-5">
        <p class="mb-2 text-xs font-semibold leading-none tracking-wide text-gray-500 uppercase">Total Income</p>
        <h2 class="text-3xl font-extrabold leading-none text-gray-800 truncate">$24,563</h2>
      </div>
      <a href="#" class="px-5 py-3 text-sm font-medium text-purple-700 card-footer hover:text-black">See all income reports</a>
    </div>
    <div class="card">
      <div class="p-5">
        <p class="mb-2 text-xs font-semibold leading-none tracking-wide text-gray-500 uppercase">Expenses</p>
        <h2 class="text-3xl font-extrabold leading-none text-gray-800 truncate">$562</h2>
      </div>
      <a href="#" class="px-5 py-3 text-sm font-medium text-blue-700 card-footer hover:text-black">See all expense tracking</a>
    </div>
    <div class="card">
      <div class="p-5">
        <p class="mb-2 text-xs font-semibold leading-none tracking-wide text-gray-500 uppercase">Last 30 days</p>
        <h2 class="text-3xl font-extrabold leading-none text-gray-800 truncate">$24</h2>
      </div>
      <a href="#" class="px-5 py-3 text-sm font-medium text-blue-700 card-footer hover:text-black">View all invoices</a>
    </div>
    <div class="card">
      <div class="p-5">
        <p class="mb-2 text-xs font-semibold leading-none tracking-wide text-gray-500 uppercase">Next Month</p>
        <h2 class="text-3xl font-extrabold leading-none text-gray-800 truncate">$655</h2>
      </div>
      <a href="#" class="px-5 py-3 text-sm font-medium text-blue-700 card-footer hover:text-black">Full projection report</a>
    </div>
  </div>
</section>




</div>
</div>
  </body>
</html>
@endsection

