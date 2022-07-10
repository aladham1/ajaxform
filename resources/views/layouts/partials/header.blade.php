
<html class="h-full bg-gray-100">
<body class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
{{--    <script src="/js/app.js"></script>--}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

    {{--    <script>--}}
{{--        $('#search').on('keyup', function(){--}}
{{--            search();--}}
{{--        });--}}
{{--        search();--}}
{{--        function search(){--}}
{{--            var keyword = $('#search').val();--}}
{{--            $.post('{{ route("employee.search") }}',--}}
{{--                {--}}
{{--                    _token: $('meta[name="csrf-token"]').attr('content'),--}}
{{--                    keyword:keyword--}}
{{--                },--}}
{{--                function(data){--}}
{{--                    table_post_row(data);--}}
{{--                    console.log(data);--}}
{{--                });--}}
{{--        }--}}
{{--        // table row with ajax--}}
{{--        function table_post_row(res){--}}
{{--            let htmlView = '';--}}
{{--            if(res.employees.length <= 0){--}}
{{--                htmlView+= `--}}
{{--       <tr>--}}
{{--          <td colspan="4">No data.</td>--}}
{{--      </tr>`;--}}
{{--            }--}}
{{--            for(let i = 0; i < res.employees.length; i++){--}}
{{--                htmlView += `--}}
{{--        <tr>--}}
{{--           <td>`+ (i+1) +`</td>--}}
{{--              <td>`+res.employees[i].name+`</td>--}}
{{--               <td>`+res.employees[i].phone+`</td>--}}
{{--        </tr>`;--}}
{{--            }--}}
{{--            $('tbody').html(htmlView);--}}
{{--        }--}}
{{--    </script>--}}
</head>
<body>
<div class="min-h-full">
    <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">

        <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

        <div class="fixed inset-0 flex z-40">
            <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-white">
                <div class="absolute top-0 right-0 -mr-12 pt-2">
                    <button type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Close sidebar</span>
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex-shrink-0 flex items-center px-4">
                    <img class="h-8 w-auto" src="https://ultimate-uk.com/wp-content/themes/ultimate/assets/images/ultimate-logo-light.svg" alt="Workflow">
                </div>
                <div class="mt-5 flex-1 h-0 overflow-y-auto">
                    <nav class="px-2">
                        <div class="space-y-1">
                            <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:text-gray-900 hover:bg-gray-50" -->
                            <a href="#" class="bg-gray-100 text-gray-900 group flex items-center px-2 py-2 text-base leading-5 font-medium rounded-md" aria-current="page">
                                <svg class="text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Home
                            </a>
                        </div>
                        <div class="mt-8">
                            <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider" id="mobile-teams-headline">Teams</h3>
                            <div class="mt-1 space-y-1" role="group" aria-labelledby="mobile-teams-headline">
                                <a href="#" class="group flex items-center px-3 py-2 text-base leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                    <span class="w-2.5 h-2.5 mr-4 bg-indigo-500 rounded-full" aria-hidden="true"></span>
                                    <span class="truncate"><a href="/">View Contacts </a></span>
                                </a>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>

        </div>
    </div>

    <div class="hidden lg:flex lg:flex-col lg:w-64 lg:fixed lg:inset-y-0 lg:border-r lg:border-gray-200 lg:pt-5 lg:pb-4 bg-gray-900">
        <div class="flex items-center flex-shrink-0 px-6">
            <img class="h-8 w-auto" src="#" alt="Logo">
        </div>
        <div class="mt-6 h-0 flex-1 flex flex-col overflow-y-auto">
            <div class="px-3 mt-5">
                <label for="search" class="sr-only">Search</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none" aria-hidden="true">
                        <svg class="mr-3 h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input type="text" name="search" id="search" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-9 p-2 sm:text-sm border-gray-300 rounded-md" placeholder="Search">
                </div>
            </div>
            <nav class="px-3 mt-6">
                <div class="space-y-1">
                    <a href="/" class="bg-gray-200 text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md" aria-current="page">
                        <svg class="text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        View Contacts
                    </a>
                </div>
                <div class="mt-8">
                </div>
            </nav>
        </div>
    </div>


    <!-- Main column -->
    <div class="lg:pl-64 flex flex-col">
        <!-- Search header -->
        <div class="sticky top-0 z-10 flex-shrink-0 flex h-16 bg-gray-800 border-b border-gray-800 lg:hidden">
            <!-- Sidebar toggle, controls the 'sidebarOpen' sidebar state. -->
            <button type="button" class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-500 lg:hidden">
                <span class="sr-only">Open sidebar</span>
                <!-- Heroicon name: outline/menu-alt-1 -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </button>
            <div class="flex-1 flex justify-between px-4 sm:px-6 lg:px-8">
                <div class="flex-1 flex">
                    <form class="w-full flex md:ml-0" action="#" method="GET">
                        <label for="search-field" class="sr-only">Search</label>
                        <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                            <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                <!-- Heroicon name: solid/search -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input id="search-field" name="search-field" class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-0 focus:border-transparent focus:placeholder-gray-400 sm:text-sm" placeholder="Search" type="search">
                        </div>
                    </form>
                </div>
                <div class="flex items-center">

                    <div class="ml-3 relative">
                        <div>
                            <button type="button" class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main class="flex-1">
            <div class="border-b border-gray-200 px-4 py-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">
                <div class="flex-1 min-w-0">
                    <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">Home</h1>
                </div>
                <div class="mt-4 flex sm:mt-0 sm:ml-4">
                    <a href="/create">
                    <button type="button"
                            class="order-0
                            inline-flex
                            items-center
                            px-4 py-2 border
                            border-transparent
                            shadow-sm
                            text-sm
                            font-medium
                            rounded-md
                            text-white
                            bg-gray-600
                            hover:bg-gray-700
                            focus:outline-none
                            focus:ring-2
                            focus:ring-offset-2
                            focus:ring-gray-500
                            sm:order-1
                            sm:ml-3">Add contact</button>
                    </a>
                </div>
            </div>
