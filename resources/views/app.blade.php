<x-base-layout>

    <!--Nav-->
    <x-nav.user-nav/>

    <div class="" style="max-width:1600px;">
        <div class="">
            <!--Slide 1-->
            <div class="" style="height:50vh;">
                <div class=" h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('https://images.unsplash.com/photo-1422190441165-ec2956dc9ecc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">

                    <div class="container mx-auto">
                        <div class="flex flex-col w-full  md:ml-16 items-center px-6 tracking-wide">
                            <p class="text-black text-5xl my-4 font-bold">Single Charge Checkouts - Demo</p>
                            <a class="text-2xl inline-block no-underline   leading-relaxed hover:text-black hover:border-black" href="{{ url('products') }}">
                                <button
                                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-md">
                                    TRY
                                </button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            
            <!--Slide 2-->
            <div class=" my-5 " style="height:50vh;">
                <div class=" h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('https://images.unsplash.com/photo-1533090161767-e6ffed986c88?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjM0MTM2fQ&auto=format&fit=crop&w=1600&q=80');">

                    <div class="container mx-auto">
                        <div class="flex flex-col w-full md:ml-16 items-center  px-6 tracking-wide">
                            <p class="text-black text-5xl my-4 font-bold">Subcriptions payment - Demo</p> 
                            <a class="text-2xl inline-block leading-relaxed hover:text-black hover:border-black" href="{{ url('plans') }}">
                                <button
                                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-md">
                                TRY
                            </button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            

        </div>
    </div>

    <section class="bg-white py-8">

        <div class="container py-8 px-6 mx-auto">

            <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl mb-8" href="#">
			About
		</a>

            <p class="mb-8">Lorem ipsum dolor sit amet, consectetur <a href="#">random link</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel risus commodo viverra maecenas accumsan lacus vel facilisis volutpat. Vitae aliquet nec ullamcorper sit. Nullam eget felis eget nunc lobortis mattis aliquam. In est ante in nibh mauris. Egestas congue quisque egestas diam in. Facilisi nullam vehicula ipsum a arcu. Nec nam aliquam sem et tortor consequat. Eget mi proin sed libero enim sed faucibus turpis in. Hac habitasse platea dictumst quisque. In aliquam sem fringilla ut. Gravida rutrum quisque non tellus orci ac auctor augue mauris. Accumsan lacus vel facilisis volutpat est velit egestas dui id. At tempor commodo ullamcorper a. Volutpat commodo sed egestas egestas fringilla. Vitae congue eu consequat ac.</p>

        </div>

    </section>

    <footer class="container mx-auto bg-white py-8 border-t border-gray-400">
        <div class="container flex px-3 py-8 ">
            <div class="w-full mx-auto flex flex-wrap">
                <div class="flex w-full lg:w-1/2 ">
                    <div class="px-3 md:px-0">
                        <h3 class="font-bold text-gray-900">About</h3>
                        <p class="py-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi ut felis tempus commodo nec id erat. Suspendisse consectetur dapibus velit ut lacinia.
                        </p>
                    </div>
                </div>
                <div class="flex w-full lg:w-1/2 lg:justify-end lg:text-right">
                    <div class="px-3 md:px-0">
                        <h3 class="font-bold text-gray-900">Social</h3>
                        <ul class="list-reset items-center pt-3">
                            <li>
                                <a class="inline-block no-underline hover:text-black hover:underline py-1" href="#">Add social links</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</x-base-layout>
