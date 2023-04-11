<x-base-layout>
    @section('custom-head')
    @vite(['resources/css/plans.css'])
    @endsection
    <x-nav.user-nav/>
    <div class="container my-10 px-6 mx-auto">   
        <section class="mb-32 text-gray-800">
            <style>
              
            </style>
        
            <div id="pricing-block-5" class="background-radial-gradient text-center text-white">
              <h2 class="text-4xl font-bold text-center mb-12">Available Plans - Demo</h2>
            </div>
        
            <div class="grid lg:grid-cols-3 px-6 md:px-12 xl:px-32" style="margin-top: -400px">
              <div class="p-0 py-12">
                <div class="block rounded-lg shadow-lg bg-white h-full lg:rounded-tr-none lg:rounded-br-none">
                  <div class="p-6 border-b border-gray-300 text-center">
                    <p class="uppercase mb-4 text-2xl">
                      <strong>Basic</strong>
                    </p>
                    <h3 class="text-2xl mb-6">
                      <strong>$ 15</strong>
                      <small class="text-gray-500 text-sm">/month </small>
                    </h3>
        
                    <form  method="post" action="{{url('subscribe')}}">
                        @csrf
                        <input type="text" value="basic" name="plan" hidden>
                        <button type="submit"
                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full">
                            Buy
                        </button>
                    </form>
                  </div>
                  <div class="p-6">
                    <ol class="list-inside">
                      <li class="mb-4 flex items-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check"
                          class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                          </path>
                        </svg>Basic Feature 1
                      </li>
                      <li class="mb-4 flex items-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check"
                          class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                          </path>
                        </svg>Basic Feature 2
                      </li>
                      <li class="mb-4 flex items-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check"
                          class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                          </path>
                        </svg>Basic Feature 3
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
        
              <div class="p-0">
                <div class="block rounded-lg shadow-lg bg-white h-full z-10">
                  <div class="p-6 border-b border-gray-300 text-center">
                    <p class="uppercase mb-4 text-2xl">
                      <strong>PREMIUM</strong>
                    </p>
                    <h3 class="text-2xl mb-6">
                      <strong>$ 50</strong>
                      <small class="text-gray-500 text-sm">/month</small>
                    </h3>
                    <form  method="post" action="{{url('subscribe')}}">
                        @csrf
                        <input type="text" value="premium" name="plan" hidden>
                        <button type="submit"
                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full">
                            Buy
                        </button>
                    </form>
                  </div>
                  <div class="p-6">
                    <ol class="list-inside">
                      <li class="mb-4 flex items-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check"
                          class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                          </path>
                        </svg>Premium Feature 1
                      </li>
                      <li class="mb-4 flex items-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check"
                          class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                          </path>
                        </svg>Premium Feature 2
                      </li>
                      <li class="mb-4 flex items-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check"
                          class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                          </path>
                        </svg>Premium Feature 3
                      </li>
                      <li class="mb-4 flex items-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check"
                          class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                          </path>
                        </svg>Premium Feature 4
                      </li>
                      <li class="mb-4 flex items-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check"
                          class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                          </path>
                        </svg>Premium Feature 5
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
        
              <div class="p-0 py-12">
                <div class="block rounded-lg shadow-lg bg-white h-full lg:rounded-tl-none lg:rounded-bl-none">
                  <div class="p-6 border-b border-gray-300 text-center">
                    <p class="uppercase mb-4 text-2xl">
                      <strong>PLUS</strong>
                    </p>
                    <h3 class="text-2xl mb-6">
                      <strong>$ 30</strong>
                      <small class="text-gray-500 text-sm">/month</small>
                    </h3>
        
                    <form  method="post" action="{{url('subscribe')}}">
                        @csrf
                        <input type="text" value="plus" name="plan" hidden>
                        <button type="submit"
                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full">
                            Buy
                        </button>
                    </form>
                  </div>
                  <div class="p-6">
                    <ol class="list-inside">
                      <li class="mb-4 flex items-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check"
                          class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                          </path>
                        </svg>Plus Feature 1
                      </li>
                      <li class="mb-4 flex items-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check"
                          class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                          </path>
                        </svg>Plus Feature 2
                      </li>
                      <li class="mb-4 flex items-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check"
                          class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                          </path>
                        </svg>Plus Feature 3
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </div>
</x-base-layout>