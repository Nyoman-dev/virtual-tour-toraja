<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <title>Login</title>
</head>
<body class="font-space">
  <x-navbar></x-navbar>
  <section class="bg-gray-50 dark:bg-gray-900 h-screen">
    <div class="py-8 px-4 mx-auto lg:py-32">
      @if (session()->has('eror'))
      <div data-aos="fade-down" id="toast-warning" class="flex items-center mx-auto w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
          <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z"/>
              </svg>
              <span class="sr-only">Warning icon</span>
          </div>
          <div class="ms-3 text-sm font-normal">{{ session('eror') }}</div>
          <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-warning" aria-label="Close">
              <span class="sr-only">Close</span>
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
              </svg>
          </button>
      </div>
      @endif
      <div class="w-full mx-auto lg:max-w-md p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow-xl dark:bg-gray-800">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
          Login Dashboard
        </h2>
        <form class="space-y-4 md:space-y-6 flex flex-col gap-3" action="/sigin" method="POST">
          @csrf
          <div>
              <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User Name</label>
              <input value="{{ old('name') }}" type="text" name="name" id="name" autofocus class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="UserName" required="">
              @error('name')
              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
              @enderror
          </div>
          <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
              <input value="{{ old('email') }}" type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
              @error('email')
              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
              @enderror
          </div>
          <div>
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
              <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
              @error('password')
              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
              @enderror
          </div>
          {{-- <div class="flex items-start">
              <div class="flex items-center h-5">
                  <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
              </div>
              <div class="ml-3 text-sm">
                  <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
              </div>
          </div> --}}
          <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Register</button>
          <p class="text-sm font-light text-gray-500 dark:text-gray-400">
              Already have an account? <a href="/login" class="text-blue-600 font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
          </p>
      </form>
      </div>
    </div>
  </section>
</body>
</html>