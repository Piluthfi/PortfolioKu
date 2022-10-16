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
    <!-- Contact Section Start -->
    <section id="contact" class="pt-36 pb-32 dark:bg-dark">
      <div class="container">
      <form action="pesan.php" method="post">
        <div class="w-full px-4">
          <div class="mx-auto mb-16 max-w-xl text-center">
            <h4 class="mb-3 text-lg font-bold uppercase text-primary">contact</h4>
            <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">Contact Me</h2>
          </div>
        </div>

        <form>
          <div class="w-full lg:mx-auto lg:w-2/3">
            <div class="mb-8 w-full px-4">
              <label for="name" class="text-base font-bold text-primary">Name</label>
              <input type="text" id="name" name="nama" class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" />
            </div>
            <div class="mb-8 w-full px-4">
              <label for="email" class="text-base font-bold text-primary">Email</label>
              <input type="email" id="email" name="email" class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" />
            </div>
            <div class="mb-8 w-full px-4">
              <label for="message" class="text-base font-bold text-primary">Message</label>
              <textarea type="text" id="pesan" name="pesan" class="h-32 w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary"></textarea>
            </div>
            <div class="w-full px-4">
              <button class="w-full rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-500 hover:opacity-80 hover:shadow-lg">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!-- Contact Section End -->
  </body>
</html>
