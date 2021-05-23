@include('global.header')
@yield('title')
<title>Create A jobs </title>
@yield('body')


<body class="text-gray-800 antialiased">

    <div id="root">
        @include('global.nav2')
        <!-- Header -->
        <div class="relative  md:pt-32 pb-32 pt-12" style="height: 100%;position: relative;top: 60%;">
            <div class="px-4 md:px-10 mx-auto w-full">
                <div>
                    <!-- Card stats -->
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                        </div>
                        <div class="w-full ">
                            <!-- component -->
                            <div class="grid min-h-screen place-items-center">
                                <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
                                    <h1 class="text-xl font-semibold">Hello there 👋, <span class="font-normal">please
                                            fill in your information to continue</span></h1>
                                    <form class="mt-6" method="POST" action="/dashbord" enctype="multipart/form-data">
                                       @include('global.form')
                                        <button type="submit"
                                            class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                                            add Company
                                        </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
