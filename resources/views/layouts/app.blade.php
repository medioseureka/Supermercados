<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <div class="flex flex-row h-full">
      <!-- Sidebar -->
          <nav class="bg-gray-900 w-20 sahdow-md absolute left-0 h-full justify-between flex flex-col ">
            <div class="mt-10 mb-10">
              <a href="/dashboard">
                <img
                  src="{{ asset('img/icono-eureka.png') }}"
                  class="rounded-full w-10 h-10 mb-3 mx-auto"
                />
              </a>
              <div class="mt-10">
                <ul>
                @role('super-admin')
                  <li class="mb-6">
                    <a href="{{ route('roles.index') }}" title="{{ trans('history.roles') }}">
                      <span>
                        <svg
                          class="fill-current h-5 w-5 text-gray-300 mx-auto hover:text-green-500"
                          viewBox="0 0 24 24"
                        >
                          <path
                            d="M12 13H7v5h5v2H5V10h2v1h5v2M8
                              4v2H4V4h4m2-2H2v6h8V2m10 9v2h-4v-2h4m2-2h-8v6h8V9m-2
                              9v2h-4v-2h4m2-2h-8v6h8v-6z"
                          ></path>
                        </svg>
                      </span>
                    </a>
                  </li>
                @endrole
                  @can('create users')
                      <li class="mb-6">
                        <a href="{{ route('users.index') }}" title="{{ trans('history.users') }}">
                          <span>
                            <svg
                                class="fill-current h-5 w-5 text-gray-300 mx-auto hover:text-green-500"
                                fill="none"
                                viewBox="0 0 511.999 511.999"
                                width="512" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <g>
                                        <path d="M245.333,85.333c-41.173,0-74.667,33.493-74.667,74.667s33.493,74.667,74.667,74.667S320,201.173,320,160    C320,118.827,286.507,85.333,245.333,85.333z M245.333,213.333C215.936,213.333,192,189.397,192,160    c0-29.397,23.936-53.333,53.333-53.333s53.333,23.936,53.333,53.333S274.731,213.333,245.333,213.333z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M394.667,170.667c-29.397,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333S448,253.397,448,224    S424.064,170.667,394.667,170.667z M394.667,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32s32,14.357,32,32    C426.667,241.643,412.309,256,394.667,256z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M97.515,170.667c-29.419,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333s53.333-23.936,53.333-53.333    S126.933,170.667,97.515,170.667z M97.515,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32c17.643,0,32,14.357,32,32    C129.515,241.643,115.157,256,97.515,256z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M245.333,256c-76.459,0-138.667,62.208-138.667,138.667c0,5.888,4.779,10.667,10.667,10.667S128,400.555,128,394.667    c0-64.704,52.629-117.333,117.333-117.333s117.333,52.629,117.333,117.333c0,5.888,4.779,10.667,10.667,10.667    c5.888,0,10.667-4.779,10.667-10.667C384,318.208,321.792,256,245.333,256z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M394.667,298.667c-17.557,0-34.752,4.8-49.728,13.867c-5.013,3.072-6.635,9.621-3.584,14.656    c3.093,5.035,9.621,6.635,14.656,3.584C367.637,323.712,380.992,320,394.667,320c41.173,0,74.667,33.493,74.667,74.667    c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667C490.667,341.739,447.595,298.667,394.667,298.667z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M145.707,312.512c-14.955-9.045-32.149-13.845-49.707-13.845c-52.928,0-96,43.072-96,96    c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667C21.333,353.493,54.827,320,96,320    c13.675,0,27.029,3.712,38.635,10.752c5.013,3.051,11.584,1.451,14.656-3.584C152.363,322.133,150.741,315.584,145.707,312.512z"/>
                                    </g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                          </span>
                        </a>
                      </li>
                  @endcan
                  @can('create companies')
                      <li class="mb-6">
                        <a href="{{ route('companies.index') }}" title="{{ trans('history.companies') }}">
                          <span>
                            <svg
                                class="fill-current h-5 w-5 text-gray-300 mx-auto hover:text-green-500"
                                fill="none"
                                viewBox="0 0 511.999 511.999"
                                width="512" xmlns="http://www.w3.org/2000/svg">
                                <g><path d="m476 120.004h-190v-110.004c0-5.522-4.477-10-10-10h-240c-5.523 0-10 4.478-10 10v491.999c0 5.522 4.477 10 10 10h240 200c5.523 0 10-4.478 10-10v-371.995c0-5.523-4.478-10-10-10zm-190 20h180v251.995h-180zm-160 351.995v-80h60v80zm70-100h-80c-5.523 0-10 4.478-10 10v90h-60v-471.999h220v471.999h-60v-90c0-5.522-4.478-10-10-10zm89.999 100v-80h180v80z"/><path d="m145.999 80.001h19.997c5.523 0 10-4.477 10-10v-20c0-5.523-4.477-10-10-10h-19.997c-5.523 0-10 4.477-10 10v20c0 5.523 4.477 10 10 10z"/><path d="m145.999 150.001h19.997c5.523 0 10-4.477 10-10v-20c0-5.523-4.477-10-10-10h-19.997c-5.523 0-10 4.477-10 10v20c0 5.523 4.477 10 10 10z"/><path d="m145.999 220.001h19.997c5.523 0 10-4.477 10-10v-20c0-5.523-4.477-10-10-10h-19.997c-5.523 0-10 4.477-10 10v20c0 5.523 4.477 10 10 10z"/><path d="m145.999 290h19.997c5.523 0 10-4.477 10-10v-20c0-5.523-4.477-10-10-10h-19.997c-5.523 0-10 4.477-10 10v20c0 5.523 4.477 10 10 10z"/><path d="m145.999 360h19.997c5.523 0 10-4.477 10-10v-20c0-5.523-4.477-10-10-10h-19.997c-5.523 0-10 4.477-10 10v20c0 5.523 4.477 10 10 10z"/><path d="m76.001 80.001h19.997c5.523 0 10-4.477 10-10v-20c0-5.523-4.477-10-10-10h-19.997c-5.523 0-10 4.477-10 10v20c0 5.523 4.477 10 10 10z"/><path d="m76.001 150.001h19.997c5.523 0 10-4.477 10-10v-20c0-5.523-4.477-10-10-10h-19.997c-5.523 0-10 4.477-10 10v20c0 5.523 4.477 10 10 10z"/><path d="m76.001 220.001h19.997c5.523 0 10-4.477 10-10v-20c0-5.523-4.477-10-10-10h-19.997c-5.523 0-10 4.477-10 10v20c0 5.523 4.477 10 10 10z"/><path d="m76.001 290h19.997c5.523 0 10-4.477 10-10v-20c0-5.523-4.477-10-10-10h-19.997c-5.523 0-10 4.477-10 10v20c0 5.523 4.477 10 10 10z"/><path d="m76.001 360h19.997c5.523 0 10-4.477 10-10v-20c0-5.523-4.477-10-10-10h-19.997c-5.523 0-10 4.477-10 10v20c0 5.523 4.477 10 10 10z"/><path d="m235.998 40.001h-19.997c-5.523 0-10 4.477-10 10v20c0 5.523 4.477 10 10 10h19.997c5.523 0 10-4.477 10-10v-20c0-5.523-4.477-10-10-10z"/><path d="m235.998 110h-19.997c-5.523 0-10 4.477-10 10v20c0 5.523 4.477 10 10 10h19.997c5.523 0 10-4.477 10-10v-20c0-5.522-4.477-10-10-10z"/><path d="m235.998 180h-19.997c-5.523 0-10 4.477-10 10v20c0 5.523 4.477 10 10 10h19.997c5.523 0 10-4.477 10-10v-20c0-5.522-4.477-10-10-10z"/><path d="m235.998 250h-19.997c-5.523 0-10 4.477-10 10v20c0 5.523 4.477 10 10 10h19.997c5.523 0 10-4.477 10-10v-20c0-5.522-4.477-10-10-10z"/><path d="m235.998 320h-19.997c-5.523 0-10 4.477-10 10v20c0 5.523 4.477 10 10 10h19.997c5.523 0 10-4.477 10-10v-20c0-5.523-4.477-10-10-10z"/><path d="m420.997 180h-19.997c-5.523 0-10 4.477-10 10v20c0 5.523 4.477 10 10 10h19.997c5.523 0 10-4.477 10-10v-20c0-5.522-4.478-10-10-10z"/><path d="m420.997 250h-19.997c-5.523 0-10 4.477-10 10v20c0 5.523 4.477 10 10 10h19.997c5.523 0 10-4.477 10-10v-20c0-5.522-4.478-10-10-10z"/><path d="m420.997 320h-19.997c-5.523 0-10 4.477-10 10v20c0 5.523 4.477 10 10 10h19.997c5.523 0 10-4.477 10-10v-20c0-5.523-4.478-10-10-10z"/><path d="m350.999 180h-19.997c-5.523 0-10 4.477-10 10v20c0 5.523 4.477 10 10 10h19.997c5.523 0 10-4.477 10-10v-20c0-5.522-4.478-10-10-10z"/><path d="m350.999 250h-19.997c-5.523 0-10 4.477-10 10v20c0 5.523 4.477 10 10 10h19.997c5.523 0 10-4.477 10-10v-20c0-5.522-4.478-10-10-10z"/><path d="m350.999 320h-19.997c-5.523 0-10 4.477-10 10v20c0 5.523 4.477 10 10 10h19.997c5.523 0 10-4.477 10-10v-20c0-5.523-4.478-10-10-10z"/></g></svg>
                          </span>
                        </a>
                      </li>
                  @endcan
                  @can('create reports')
                      <li>
                        <a href="{{ route('reports.index') }}" title="{{ trans('history.reports') }}">
                          <span>
                            <svg
                              class="fill-current h-5 w-5 text-gray-300 mx-auto hover:text-green-500"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M22.775 8C22.9242 8.65461 23 9.32542 23 10H14V1C14.6746 1 15.3454 1.07584 16 1.22504C16.4923 1.33724 16.9754 1.49094 17.4442 1.68508C18.5361 2.13738 19.5282 2.80031 20.364 3.63604C21.1997 4.47177 21.8626 5.46392 22.3149 6.55585C22.5091 7.02455 22.6628 7.5077 22.775 8ZM20.7082 8C20.6397 7.77018 20.5593 7.54361 20.4672 7.32122C20.1154 6.47194 19.5998 5.70026 18.9497 5.05025C18.2997 4.40024 17.5281 3.88463 16.6788 3.53284C16.4564 3.44073 16.2298 3.36031 16 3.2918V8H20.7082Z"
                                fill="currentColor"
                              />
                              <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M1 14C1 9.02944 5.02944 5 10 5C10.6746 5 11.3454 5.07584 12 5.22504V12H18.775C18.9242 12.6546 19 13.3254 19 14C19 18.9706 14.9706 23 10 23C5.02944 23 1 18.9706 1 14ZM16.8035 14H10V7.19648C6.24252 7.19648 3.19648 10.2425 3.19648 14C3.19648 17.7575 6.24252 20.8035 10 20.8035C13.7575 20.8035 16.8035 17.7575 16.8035 14Z"
                                fill="currentColor"
                              />
                            </svg>
                          </span>
                        </a>
                  </li>
                 @endcan
                </ul>
              </div>
            </div>
            <div class="mb-4 flex flex-col justify-between">
                <a href="{{ route('profile.show') }}" class="mb-4" title="{{ trans('history.profile') }}">
                  <span>
                    <svg
                      class="fill-current h-5 w-5 mx-auto text-gray-300 hover:text-green-500"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M12 4a4 4 0 014 4 4 4 0 01-4 4 4 4 0 01-4-4 4 4 0
                          014-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4
                          8-4z"
                      ></path>
                    </svg>
                  </span>
                </a>
                <a href="#" class="mb-4" title="{{ trans('history.alerts') }}">
                  <span>
                    <svg
                      class="fill-current h-5 w-5 text-gray-300 mx-auto hover:text-green-500 "
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M14 3V3.28988C16.8915 4.15043 19 6.82898 19 10V17H20V19H4V17H5V10C5 6.82898 7.10851 4.15043 10 3.28988V3C10 1.89543 10.8954 1 12 1C13.1046 1 14 1.89543 14 3ZM7 17H17V10C17 7.23858 14.7614 5 12 5C9.23858 5 7 7.23858 7 10V17ZM14 21V20H10V21C10 22.1046 10.8954 23 12 23C13.1046 23 14 22.1046 14 21Z"
                        fill="currentColor"
                      />
                    </svg>
                  </span>
                </a>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                  <a href="{{ route('logout') }}" class="mb-4" onclick="event.preventDefault(); this.closest('form').submit();" title="{{ trans('history.logout') }}">
                    <span>
                      <svg
                        class="fill-current h-5 w-5 text-gray-300 mx-auto hover:text-red-500"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M13 4.00894C13.0002 3.45665 12.5527 3.00876 12.0004 3.00854C11.4481 3.00833 11.0002 3.45587 11 4.00815L10.9968 12.0116C10.9966 12.5639 11.4442 13.0118 11.9965 13.012C12.5487 13.0122 12.9966 12.5647 12.9968 12.0124L13 4.00894Z"
                          fill="currentColor"
                        />
                        <path
                          d="M4 12.9917C4 10.7826 4.89541 8.7826 6.34308 7.33488L7.7573 8.7491C6.67155 9.83488 6 11.3349 6 12.9917C6 16.3054 8.68629 18.9917 12 18.9917C15.3137 18.9917 18 16.3054 18 12.9917C18 11.3348 17.3284 9.83482 16.2426 8.74903L17.6568 7.33481C19.1046 8.78253 20 10.7825 20 12.9917C20 17.41 16.4183 20.9917 12 20.9917C7.58172 20.9917 4 17.41 4 12.9917Z"
                          fill="currentColor"
                        />
                      </svg>
                    </span>
                  </a>
                </form>
            </div>
          </nav>
          <div class="px-20 py-4 text-gray-700 bg-gray-200 h-screen w-screen overflow-y-scroll">
                @if (count($errors) > 0)
                    <div id="alert" class="mb-3 pt-2 pb-2 rounded shadow-md px-6 bg-red-400 absolute right-5 text-white">
                        {{ __('history.errors') }}
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    <script>
                        let max_time = 5;
                        let cinterval;
                        const elem = document.querySelector('#alert');
                         
                        function countdown_timer(){
                          max_time--;
                          if(max_time <= 0) {
                            elem.parentNode.removeChild(elem);
                            window.clearInterval(cinterval);
                          }
                        }
                        // 1,000 means 1 second.
                        cinterval = setInterval('countdown_timer()', 1000);
                    </script>
                @endif
                @if ($message = Session::get('success'))
                    <div id="alert" class="mb-3 pt-2 pb-2 rounded shadow-md px-6 bg-green-400 absolute right-5 text-white">
                        <p>{{ $message }}</p>
                    </div>
                    <script>
                        let max_time = 5;
                        let cinterval;
                        const elem = document.querySelector('#alert');
                         
                        function countdown_timer(){
                          max_time--;
                          if(max_time <= 0) {
                            elem.parentNode.removeChild(elem);
                            window.clearInterval(cinterval);
                          }
                        }
                        // 1,000 means 1 second.
                        cinterval = setInterval('countdown_timer()', 1000);
                    </script>
                @endif

                {{ $slot }}
          </div>
        </div>
        @stack('modals')
        @livewireScripts
        @stack('scripts-datatable')
    </body>
</html>
