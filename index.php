<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PortfolioKu</title>
    <link href="dist/output.css" rel="stylesheet" />
    <script>
      if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
      } else {
        document.documentElement.classList.remove('dark');
      }
    </script>
  </head>
  <body>
    <!-- Header Start -->
    <header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
      <div class="container">
        <div class="relative flex items-center justify-between">
          <div class="px-4">
            <a href="" class="block py-6 text-lg font-bold text-primary">Muhammad Luthfi</a>
          </div>
          <div class="flex items-center px-4">
            <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
              <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
              <span class="hamburger-line transition duration-300 ease-in-out"></span>
              <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
            </button>

            <nav
              id="nav-menu"
              class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg dark:bg-dark dark:shadow-slate-500 lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none lg:dark:bg-transparent"
            >
              <ul class="block lg:flex">
                <li class="group">
                  <a href="index.php" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Home</a>
                </li>
                <li class="group">
                  <a href="about.php" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">About</a>
                </li>
                <li class="group">
                  <a href="skills.php" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Skills</a>
                </li>
                <li class="group">
                  <a href="projects.php" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Projects</a>
                </li>
                <li class="group">
                  <a href="contact.php" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Contact</a>
                </li>
                <li class="mt-3 flex items-center pl-8 lg:mt-0">
                  <div class="flex">
                    <span class="mr-2 text-sm text-slate-500">light</span>
                    <input type="checkbox" class="hidden" id="dark-toggle" />
                    <label for="dark-toggle">
                      <div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">
                        <div class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-in-out"></div>
                      </div>
                    </label>
                    <span class="ml-2 text-sm text-slate-500">dark</span>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->
    <!-- Hero Section Start -->
    <section id="home" class="pt-36 dark:bg-dark">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4 lg:w-1/2">
            <h1 class="text-base font-semibold text-primary md:text-xl">Hello My Name is<span class="mt-1 block text-4xl font-bold text-dark dark:text-white lg:text-5xl">Muhammad Luthfi Pratama Putra</span></h1>
          </div>
          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="relative mt-10 lg:right-0 lg:mt-9">
              <img src="dist/img/luthfi.png" alt="Muhammad Luthfi" class="relative z-10 mx-auto max-w-full" />
              <span class="absolute bottom-0 left-1/2 -translate-x-1/2 md:scale-125">
                <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                  <path
                    fill="#14b8a6"
                    d="M38.4,-51.2C54.2,-41.4,74.5,-36.1,79.1,-25C83.8,-13.8,72.9,3.2,62.1,15.2C51.4,27.3,40.9,34.6,30.6,43.4C20.3,52.2,10.1,62.6,-0.5,63.3C-11,63.9,-22.1,54.7,-35.3,46.9C-48.6,39,-64,32.4,-70.7,20.8C-77.5,9.2,-75.6,-7.4,-70.3,-22.6C-65,-37.8,-56.3,-51.7,-44.1,-62.6C-31.8,-73.6,-15.9,-81.5,-2.3,-78.3C11.3,-75.2,22.6,-61,38.4,-51.2Z"
                    transform="translate(100 100) scale(1.1)"
                  />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->
  </body>
</html>
