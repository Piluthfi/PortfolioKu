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
            <a href="index.php" class="block py-6 text-lg font-bold text-primary">Muhammad Luthfi</a>
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
    <!-- Projects Section Start -->
    <section id="projects" class="pt-36 pb-16 dark:bg-dark">
      <div class="container">
        <div class="w-full px-4">
          <div class="mx-auto mb-16 max-w-xl text-center">
            <h4 class="mb-3 text-lg font-bold uppercase text-primary">projects</h4>
            <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">My Project</h2>
          </div>
        </div>
        <div class="flex w-full flex-wrap justify-center px-4 xl:mx-auto xl:w-10/12">
          <div class="mb-12 p-4 md:w-1/2">
            <div class="overflow-hidden rounded-md shadow-md">
              <a href="https://membuat-web-kampus.muhammad-luth17.repl.co" target="_blank"><img src="dist/img/portfolio/kampus.png" alt="Web-Kampus" width="w-full""></a>
            </div>
            <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Website Kampus</h3>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="overflow-hidden rounded-md shadow-md">
            <a href="https://form-jalur-pendaftaran.muhammad-luth17.repl.co" target="_blank"><img src="dist/img/portfolio/jalur.png" alt="jalur-pendaftaran" width="w-full""></a>            </div>
            <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Form Jalur Pendaftaran</h3>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="overflow-hidden rounded-md shadow-md">
            <a href="https://kota-bandung.muhammad-luth17.repl.co" target="_blank"><img src="dist/img/portfolio/bandung.png" alt="bandung" width="w-full""></a>
            </div>
            <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Kota Bandung</h3>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="overflow-hidden rounded-md shadow-md">
            <a href="https://kalkulator.muhammad-luth17.repl.co" target="_blank"><img src="dist/img/portfolio/kalkulator.png" alt="kalkulator" width="w-full""></a>
            </div>
            <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Kalkulator</h3>
          </div>
        </div>
      </div>
    </section>
    <!-- Projects Section End -->
  </body>
</html>
