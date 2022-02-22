<x-app-layout>
    <div class="lg:mx-8">

        <!--contenct section-->
        <section class="grid grid-cols-4 gap-4 mt-8 ">

            <div class="col-span-4 p-4 lg:col-span-3">

                <!-- time section-->
                <div class="flex max-w-3xl p-8 mt-8 bg-white rounded-lg shadow-md lg:mt-0">
                    <div class="">
                        <p class="text-lg text-gray-800 lg:text-2xl">
                            Sunday, February 6th
                        </p>
                        <h1 class="text-2xl font-bold text-gray-900 lg:text-4xl">
                            Good Evening, <br>
                            Abraham M.
                        </h1>
                    </div>
                    <div class="mt-4 ml-8 lg:ml-80 lg:mt-0">
                        <img src="{{ asset('images/icons/clock.png') }}" alt="clock" class="w-16 h-16 lg:w-28 lg:h-28">
                    </div>
                </div>
             <!--end of time section-->

                <!--  posts-->
                <div class="p-4 mt-8 bg-white rounded-lg">
                    <h2 class="flex text-2xl font-semibold text-gray-700">
                        Recent Rentals
                        <a href="" class="ml-4 ">
                            <img src="{{ asset('images/icons/filter.png') }}" alt="filter" class="w-8 h-8">
                        </a>
                    </h2>
                    <div class="mt-4 border-b border-gray-300"></div>

                    <!--posts-->
                    <div class="flex my-4 flex-nowrap">
                        <div class="mr-4">
                            <img src="{{ asset('images/nyumba.jpeg') }}" alt="house" class="rounded lg:w-60 w-36">
                        </div>

                        <div class="text-gray-700">
                            <a href="" class="hover:text-blue-500 hover:underline">
                                <p class="text-lg font-semibold lg:text-3xl"> Kinondoni, Dar es Salaam</p>
                            </a>
                            <p class="text-base lg:pt-2 lg:text-xl"> 2,500,000 Tshs /month</p>
                            <p class="text-base lg:pt-2 lg:text-xl"> Apartments</p>
                            <p class="text-base font-light lg:pt-1 lg:text-lg"> <b>Bids</b> 5-10</p>
                            <p class="text-sm font-light lg:pt-1 italice">5 mins ago</p>
                        </div>
                        <div class="ml-8 ">
                            <div class="p-3 border border-gray-500 rounded-full">
                                <img src="{{ asset('images/icons/heart.png') }}" alt="save-post"
                                    class="w-8 lg:h-4 lg:w-4">
                            </div>

                        </div>
                    </div>
                    <div class="mt-6 border-b-2 border-gray-300 border-dashed"></div>


                    <div class="flex my-4 flex-nowrap">
                        <div class="mr-4">
                            <img src="{{ asset('images/nyumba1a.jpeg') }}" alt="house" class="rounded lg:w-60 w-36">
                        </div>

                        <div class="text-gray-700">
                            <a href="" class="hover:text-blue-500 hover:underline">
                                <p class="text-lg font-semibold lg:text-3xl"> Ujiji, Kigoma </p>
                            </a>
                            <p class="text-base lg:pt-2 lg:text-xl"> 2,500,000 Tshs /month</p>
                            <p class="text-base lg:pt-2 lg:text-xl"> Apartments</p>
                            <p class="text-base font-light lg:pt-1 lg:text-lg"> <b>Bids</b> 5-10</p>
                            <p class="text-sm font-light lg:pt-1 italice">5 mins ago</p>
                        </div>
                        <div class="ml-8 ">
                            <div class="p-3 border border-blue-500 rounded-full">
                                <img src="{{ asset('images/icons/heart-fill.png') }}" alt="save-post"
                                    class="w-8 lg:h-4 lg:w-4">

                            </div>

                        </div>
                    </div>
                    <div class="mt-6 border-b-2 border-gray-300 border-dashed"></div>

                    <div class="flex my-4 flex-nowrap">
                        <div class="mr-4">
                            <img src="{{ asset('images/nyumba1.jpeg') }}" alt="house" class="rounded lg:w-60 w-36">
                        </div>

                        <div class="text-gray-700">
                            <a href="" class="hover:text-blue-500 hover:underline">
                                <p class="text-lg font-semibold lg:text-3xl"> Mbezi Goba, Dar es Salaam </p>
                            </a>
                            <p class="text-base lg:pt-2 lg:text-xl"> 1,500,000 Tshs /month</p>
                            <p class="text-base lg:pt-2 lg:text-xl"> Apartments</p>
                            <p class="text-base font-light lg:pt-1 lg:text-lg"> <b>Bids</b> 0-5</p>
                            <p class="text-sm font-light lg:pt-1 italice">2 mins ago</p>
                        </div>
                        <div class="ml-8 ">
                            <div class="p-3 border border-blue-500 rounded-full">
                                <img src="{{ asset('images/icons/heart-fill.png') }}" alt="save-post"
                                    class="w-8 lg:h-4 lg:w-4">

                            </div>

                        </div>
                    </div>
                    <div class="mt-6 border-b-2 border-gray-300 border-dashed"></div>


                </div>
                <!-- end of posts-->
            </div>

             <!--side navbar -->
            <div class="hidden col-span-1 p-4 bg-white rounded-lg lg:block">

                <div class="profile">
                    <div class="flex flex-nowrap">
                        <div class="mr-4">
                            <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"
                                class="object-cover w-20 h-20 rounded-full">
                        </div>
                        <div>
                            <p class="pt-3 pb-1 text-lg font-bold text-gray-700">
                                {{ Auth::user()->name }}
                            </p>
                            <a href="#" class="text-sm text-blue-500 underline">
                                <p>
                                    Post your first rental
                                </p>
                            </a>
                        </div>

                    </div>
                    <div class="my-8 border border-gray-300 border-dashed"></div>
                </div>

                <div class="mt-4 saved-posts">
                    <div class="flex flex-wrap">
                        <div class="">
                            <img src="{{ asset('images/icons/message.png') }}" alt="messages"
                                class="rounded h-14 w-14">
                        </div>
                        <div class="ml-4">
                            <a href="#" class="text-lg font-bold text-gray-700 underline hover:text-blue-500 ">
                                <p>
                                    Messages (15)
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="my-8 border border-gray-300 border-dashed"></div>
                </div>


                <div class="mt-4 saved-posts">
                    <div class="flex flex-wrap">
                        <div class="">
                            <img src="{{ asset('images/icons/asset.png') }}" alt="saved-posts"
                                class="rounded h-14 w-14">
                        </div>
                        <div class="ml-4">
                            <a href="#" class="text-lg font-bold text-gray-700 underline hover:text-blue-500 ">
                                <p>
                                    Saved Rentals (5)
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="my-8 border border-gray-300 border-dashed"></div>
                </div>

                <div class="mt-4 bids">
                    <div class="flex flex-wrap">
                        <div class="">
                            <img src="{{ asset('images/icons/auction.png') }}" alt="bids" class="rounded h-14 w-14">
                        </div>
                        <div class="ml-4">
                            <a href="#" class="text-lg font-bold text-gray-700 underline hover:text-blue-500 ">
                                <p>
                                    No bids made yet
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="my-8 border border-gray-300 border-dashed"></div>
                </div>

            </div>
            <!-- end of side bar -->

        </section>

    </div>
</x-app-layout>
