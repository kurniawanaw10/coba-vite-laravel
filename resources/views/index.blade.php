<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punk</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-zinc-600">
  {{-- <div class="navbar bg-base-100">
    <div class="navbar-start">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
          <li><a>Home</a></li>
          <li>
            <a>Service</a>
            <ul class="p-2">
              <li><a>Pricelist</a></li>
              <li><a>Spare Part</a></li>
            </ul>
          </li>
          <li><a>Contact</a></li>
        </ul>
      </div>
      <a class="btn btn-ghost text-xl">Halooo App</a>
    </div>
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1">
        <li><a>Home</a></li>
        <li>
          <details>
            <summary>Service</summary>
            <ul class="p-2">
              <li><a>Pricelist</a></li>
              <li><a>Spare Part</a></li>
            </ul>
          </details>
        </li>
        <li><a>Contact</a></li>
      </ul>
    </div>
    <div class="navbar-end">
      <a class="btn">Sign Up</a>
    </div>
  </div> --}}
  <div class="hero min-h-screen bg-base-200" style="background-image: url(../img/background-hero.jpg);">
    <div class="hero-overlay bg-opacity-50"></div>
    <div class="hero-content text-center">
      <div class="max-w-md text-stone-200">
        <h1 class="text-5xl font-bold">Hello there</h1>
        <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
        <button class="btn glass" href=".content" >Get Started</button>
      </div>
    </div>
  </div>
  <div class="content min-h-screen bg-neutral-400" id="content"></div>
</body>
</html> 