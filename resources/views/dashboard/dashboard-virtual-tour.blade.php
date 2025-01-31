<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <title>Dashboard</title>
</head>
<body class="font-space">
  
  <main class="pt-4 px-7">
    <div class="dark:bg-[#101010] rounded-3xl flex p-4">
      <div class="dark:bg-[#101010] flex flex-col items-center rounded-3xl text-white w-1/4 transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="pt-10">
          <h1 class="text-2xl font-bold">{{ Str::upper(Auth::user()->name) }}</h1>
          <h2 class="text-sm">{{ Auth::user()->email }}</h2>
          <button class="border border-white rounded-md py-1 px-3 mt-4 hover:bg-red-600">Log Out</button>
        </div>
        <ul class="space-y-2 font-medium mt-16">
          <li>
              <a href="/deskripsi-wisata" class="{{ request()->is('deskripsi-wisata') ? 'side-nav text-blue-500' : 'side-nav dark:text-white text-black'}}">
                  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="size-5 opacity-75"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2" 
                      >
                      <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
                      />
                  </svg>
                  <span class="text-sm font-medium">Deskripsi Wisata</span>
              </a>
          </li>
          <li>
              <a href="/virtual-tour" class="{{ request()->is('virtual-tour') ? 'side-nav text-blue-500' : 'side-nav dark:text-white text-black'}}">
                  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="size-5 opacity-75"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2" 
                      >
                      <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
                      />
                  </svg>
                  <span class="text-sm font-medium">Virtual Tour</span>
              </a>
          </li>
        </ul>
      </div>
      <div class="bg-white w-full rounded-3xl">conten</div>
    </div>
  </main>

  <script src="/js/flowbite.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>