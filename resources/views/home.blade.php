<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-white">
            <!-- Header -->
            <header class="absolute inset-x-0 top-0 z-50">
              <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                  <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                  </a>
                </div>
                <div class="flex lg:hidden">
                  <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                  </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                  <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Product</a>
                  <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
                  <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
                  <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end gap-3">
                  <a href="{{ route('login') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Log in</a>
                  <a href="{{ route('register') }}" class="rounded-md bg-orange-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign up</a>
                </div>
              </nav>
              <!-- Mobile menu, show/hide based on menu open state. -->
              <div class="lg:hidden" role="dialog" aria-modal="true">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50"></div>
                <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                  <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                      <span class="sr-only">Your Company</span>
                      <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                      <span class="sr-only">Close menu</span>
                      <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </button>
                  </div>
                  <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                      <div class="space-y-2 py-6">
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Product</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                      </div>
                      <div class="py-6">
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </header>
          
            <main class="isolate">
              <!-- Hero section -->
              <div class="relative pt-14">
                <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                  <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                </div>
                <div class="py-24 sm:py-32">
                  <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl text-center">
                      <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Deploy to the cloud with confidence</h1>
                      <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                      <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
                        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                    <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                </div>
              </div>
          
              <!-- Featured Article -->
              @if ($featured !== null)
                <a href="{{ route('articles.show', $featured) }}" class="mx-auto max-w-7xl sm:px-6 lg:px-8 block cursor-pointer">
                  <div class="relative overflow-hidden bg-gray-900 px-6 py-20 shadow-xl sm:rounded-3xl sm:px-10 sm:py-24 md:px-12 lg:px-20">
                    <img class="absolute inset-0 h-full w-full object-cover brightness-150 saturate-0" src="{{ $featured->image }}" alt="">
                    <div class="absolute inset-0 bg-gray-900/90 mix-blend-multiply"></div>
                    <div class="absolute -left-80 -top-56 transform-gpu blur-3xl" aria-hidden="true">
                      <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-r from-[#ff4694] to-[#776fff] opacity-[0.45]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                    <div class="hidden md:absolute md:bottom-16 md:left-[50rem] md:block md:transform-gpu md:blur-3xl" aria-hidden="true">
                      <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-r from-[#ff4694] to-[#776fff] opacity-25" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                    <div class="relative mx-auto lg:mx-0">
                      <div class="flex items-center justify-between">
                        <p class="text-3xl font-semibold text-white">{{ $featured->title }}</p>
                        <span href="#" class="relative z-10 rounded-full bg-gray-50 mx-8 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $featured->category->name }}</span>
                      </div>

                      <figure>
                        <blockquote class="mt-6 text-lg font-semibold text-white sm:text-xl sm:leading-8">
                          <p>{{ $featured->body }}</p>
                        </blockquote>
                        <figcaption class="mt-6 text-base text-white">
                          <div class="font-semibold">Written by <i>{{ $featured->author->fullName() }}</i> on <i>{{ $featured->created_at->toFormattedDateString() }}</i></div>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                </a>
              @endif

              <!-- Recents -->
              <div class="bg-white py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                  <div class="mx-auto max-w-2xl text-center">
                    @empty(!$latest)
                      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Recents</h2>
                      <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.</p>
                    @endempty
                  </div>
                  <div class="mx-auto mt-16 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    @foreach ($latest as $article)
                    <a href="{{ route('articles.show', $article) }}" class="inline-block cursor-pointer">
                      <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-20">
                          <img src="{{ $article->image }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
                          <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                          <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                          <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                            <div class="mb-20">{{ substr($article->body, 0, 600) }}...</div>
                            <time datetime="2020-03-16" class="mr-8">{{ $article->created_at->toFormattedDateString() }}</time>
                            <div class="-ml-4 flex items-center gap-x-4">
                              <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                                <circle cx="1" cy="1" r="1" />
                              </svg>
                              <div class="flex gap-x-2.5">
                                <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-6 w-6 flex-none rounded-full bg-white/10">
                                {{ $article->author->fullName() }}
                              </div>
                            </div>
                          </div>
                          <h3 class="mt-3 font-semibold leading-6 text-white">
                            <span class="text-lg">
                              <span class="absolute inset-0"></span>
                              {{ $article->title }}
                            </span>
                            <span class="relative z-10 rounded-full bg-gray-50 mx-8 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $article->category->name }}</span>
                          </h3>
                        </article>
                    </a>
                      @endforeach
                  </div>
                </div>
              </div>
          
              <!-- Blogs -->
              <div class="bg-white pb-24">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                  <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Articles</h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.</p>
                  </div>
                  <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3 pb-8">
                    @foreach ($articles as $article)
                    <a href="{{ route('articles.show', $article) }}" class="inline-block cursor-pointer">
                      <article class="flex flex-col items-start justify-between">
                        <div class="relative w-full">
                          <img src="{{ $article->image }}" alt="" class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                          <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        </div>
                        <div class="max-w-xl">
                          <div class="mt-8 flex items-center gap-x-4 text-xs">
                            <time datetime="2020-03-16" class="text-gray-500">{{ $article->created_at->toFormattedDateString() }}</time>
                            <span class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $article->category->name }}</span>
                          </div>
                          <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                <span class="absolute inset-0"></span>
                                {{ $article->title }}
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                              {{ substr($article->body, 0, 600) }}...
                            </p>
                          </div>
                          <div class="relative mt-8 flex items-center gap-x-4">
                            <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-100">
                            <div class="text-sm leading-6">
                              <p class="font-semibold text-gray-900">
                                  <span class="absolute inset-0"></span>
                                  {{ $article->author->fullName() }}
                              </p>
                              <p class="text-gray-600">Co-Founder / CTO</p>
                            </div>
                          </div>
                        </div>
                      </article>
                    </a>
                    @endforeach
                  </div>
                  {{ $articles->links() }}
                </div>
              </div>
              
            </main>
          
            <!-- Footer -->
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
              <footer aria-labelledby="footer-heading" class="relative border-t border-gray-900/10 py-24">
                <h2 id="footer-heading" class="sr-only">Footer</h2>
                  <div class="mt-16 grid grid-cols-3 gap-32 xl:col-span-2 xl:mt-0">
                    <div class="mt-10 xl:mt-0">
                        <h3 class="text-sm font-semibold leading-6 text-gray-900">Subscribe to our newsletter</h3>
                        <p class="mt-2 text-sm leading-6 text-gray-600">The latest news, articles, and resources, sent to your inbox weekly.</p>
                        <form class="mt-6 sm:flex sm:max-w-md">
                          <label for="email-address" class="sr-only">Email address</label>
                          <input type="email" name="email-address" id="email-address" autocomplete="email" required class="w-full min-w-0 appearance-none rounded-md border-0 bg-white px-3 py-1.5 text-base text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:w-64 sm:text-sm sm:leading-6 xl:w-full" placeholder="Enter your email">
                          <div class="mt-4 sm:ml-4 sm:mt-0 sm:flex-shrink-0">
                            <button type="submit" class="flex w-full items-center justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Subscribe</button>
                          </div>
                        </form>
                      </div>
                    <div class="pl-10">
                        <h3 class="text-sm font-semibold leading-6 text-gray-900">Tags</h3>
                        <ul role="list" class="mt-6 space-y-4">
                          <li>
                            <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Hosting</a>
                          </li>
                          <li>
                            <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Data Services</a>
                          </li>
                          <li>
                            <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Uptime Monitoring</a>
                          </li>
                          <li>
                            <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Enterprise Services</a>
                          </li>
                        </ul>
                    </div>
                    <div  class="pl-10">
                        <h3 class="text-sm font-semibold leading-6 text-gray-900">Archives</h3>
                        <ul role="list" class="mt-6 space-y-4">
                          <li>
                            <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Hosting</a>
                          </li>
                          <li>
                            <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Data Services</a>
                          </li>
                          <li>
                            <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Uptime Monitoring</a>
                          </li>
                          <li>
                            <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Enterprise Services</a>
                          </li>
                        </ul>
                    </div>
                </div>
              </footer>
            </div>
          </div>
    </body>
</html>