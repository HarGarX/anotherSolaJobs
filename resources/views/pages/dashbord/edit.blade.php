@include('global.header')
@yield('title')
<title>Edit A company </title>
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
                                            edit your information to continue</span></h1>
                                    <form class="mt-6" method="POST" action="/dashbord/{{ $company->id }}" enctype="multipart/form-data">
                                        @method('PATCH')
                                        @csrf
                                        <div class="flex justify-between gap-3">
                                            <span class="w-1/2">
                                                <label for="name"
                                                    class="block text-xs font-semibold text-gray-600 uppercase">Company
                                                    Name</label>
                                                <input id="name" type="text" name="name" placeholder="Zain"
                                                    autocomplete="given-name"
                                                    value="{{ old('name') ?? $company->name }}" class=" block w-full p-3 mt-2 text-gray-700 bg-gray-200
                                                    appearance-none focus:outline-none focus:bg-gray-300
                                                    focus:shadow-inner" required />
                                            </span>
                                        </div>
                                        <label for="email"
                                            class="block mt-2 text-xs font-semibold text-gray-600 uppercase">email</label>
                                        <input id="email" type="text" name="email" placeholder="admin@admin.com"
                                            autocomplete="email" value="{{ old('email') ?? $company->email }}"
                                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                                            required />

                                        <label for="state"
                                            class="block mt-2 text-xs font-semibold text-gray-600 uppercase">state</label>
                                        <input id="state" type="text" name="state" placeholder="Red Nile"
                                            autocomplete=" given-state" value="{{ old('state') ?? $company->state }}"
                                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                                            required />

                                        <img style="width: 195px;margin: 5px 5px 0;" src="{{$company->logo}}"alt="logo"
                                        class="logo-default my-4">

                                        <label for="logo" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">logo</label>
                                        <input id="logo" type="file" name="logo" 
                                        class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                                             />
                                            
                                        <button type="submit"
                                            class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-green-500 shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                                            edit company
                                        </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
