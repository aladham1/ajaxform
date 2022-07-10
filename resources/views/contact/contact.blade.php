@extends('layouts.master')
@section('content')
    <div class="w-full md:w-96 md:max-w-full mx-auto">
        <div class="p-6 border border-gray-300 sm:rounded-md">
            <form method="POST" action="/create">
                @csrf
                <label class="block mb-6">
                    <span class="text-gray-700">Your first name</span>
                    <input
                        type="text"
                        name="first_name"
                        class="
                        block
                        w-full
                        border-gray-300
                        rounded-md
                        shadow-sm
                        focus:border-black
                        focus:ring
                        focus:ring-indigo-200
                        focus:ring-opacity-50
                        p-2
                        mt-4
                      "
                        placeholder="Your first name.."
                    />
                </label>
                <label class="block mt-6">
                    <span class="text-gray-700">Your last name</span>
                    <input
                        type="text"
                        name="last_name"
                        class="
                        block
                        w-full
                        border-gray-300
                        rounded-md
                        shadow-sm
                        focus:border-black
                        focus:ring
                        focus:ring-indigo-200
                        focus:ring-opacity-50
                        p-2
                        mt-4
                      "
                        placeholder="Your last name.."
                    />
                </label>
                <label class="block mt-6">
                    <span class="text-gray-700">Mobile Phone Number</span>
                    <input
                        type="text"
                        name="mobile_phone"
                        class="
                        block
                        w-full
                        border-gray-300
                        rounded-md
                        shadow-sm
                        focus:border-black
                        focus:ring
                        focus:ring-indigo-200
                        focus:ring-opacity-50
                        p-2
                        mt-4
                      "
                        placeholder="Your mobile phone number.."
                    />
                </label>
                <label class="block mt-6">
                    <span class="text-gray-700">Home Phone Number <small>(optional)</small></span>
                    <input
                        type="text"
                        name="mobile_phone"
                        class="
                        block
                        w-full
                        border-gray-300
                        rounded-md
                        shadow-sm
                        focus:border-black
                        focus:ring
                        focus:ring-indigo-200
                        focus:ring-opacity-50
                        p-2
                        mt-4
                      "
                        placeholder="Your mobile phone number.."
                    />
                </label>
                <label class="block mt-6">
                    <span class="text-gray-700">Email address</span>
                    <input
                        name="email_address"
                        type="email"
                        class="
                        block
                        w-full
                        border-gray-300
                        rounded-md
                        shadow-sm
                        focus:border-indigo-300
                        focus:ring
                        focus:ring-indigo-200
                        focus:ring-opacity-50
                        p-2
                        mt-4
                      "
                        placeholder="Your email address.."
                        required
                    />
                </label>

                <label class="block mt-6">
                    <span class="text-gray-700">Comments</span>
                    <textarea
                        name="comments"
                        class="
                        block
                        w-full
                        border-gray-300
                        rounded-md
                        shadow-sm
                        focus:border-indigo-300
                        focus:ring
                        focus:ring-indigo-200
                        focus:ring-opacity-50
                        p-2
                        mt-4
                      "
                        rows="3"
                        placeholder="Your message..."
                    ></textarea>
                </label>
                <div class="mt-6">
                    <button
                        type="submit"
                        class="
                        order-0
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
                            sm:ml-3
                      "
                    >
                        Submit
                    </button>
                </div>
            </form>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

@stop
