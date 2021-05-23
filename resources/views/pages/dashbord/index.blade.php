@include('global.header')
@yield('title')
<title>Home </title>
@yield('body')


<body class="text-gray-800 antialiased">

    <div id="root">
        @include('global.nav2')

        <div class="relative  md:pt-32 pb-32 pt-12" style="height: 100%;position: relative;top: 60%;">
            <div class="px-4 md:px-10 mx-auto w-full">
                <div>
                    <button
                        class="p-2 my-2 bg-blue-500 text-white rounded-md focus:outline-none focus:ring-2 ring-blue-300 ring-offset-2">
                        <a href="{{ route('pages.dashbord.create') }}">Add
                            Job</a>
                    </button>
                 
                    <!-- Card stats -->
                    <div class="flex flex-wrap">
                        <div class="w-full">
                        </div>
                        <div class="w-full ">

                            <p class="text-lg text-center font-bold mx-5 bg-white">ِAll Companies</p>
                            <table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-800 text-gray-200 mt-5">

                                <tr class="text-left border-b border-gray-300">
                                    <th class="px-4 py-3">#</th>
                                    <th class="px-4 py-3">Logo</th>
                                    <th class="px-4 py-3">Company name</th>
                                    <th class="px-4 py-3"> Company Email</th>
                                    <th class="px-4 py-3">state</th>
                                   

                                </tr>
                                @foreach ($companies as $company)
                                    <tr class="bg-gray-700 border-b border-gray-600">
                                        <td class="px-4 py-3">{{ $company->id }}</td>
                                        <td class="px-4 py-3">
                                            <img style="width: 195px;margin: 5px 5px 0;" src="{{$company->logo}}"alt="logo"
                                            class="logo-default">
                                        </td>
                                        <td class="px-4 py-3 text-blue-500"> <a
                                                href="/dashbord/{{ $company->id }}">{{ $company->name }}</a></td>
                                        <td class="px-4 py-3">{{ $company->email }}</td>
                                        <td class="px-4 py-3">{{ $company->state }}</td>
        
                                @endforeach

                            </table>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
