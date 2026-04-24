<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Guardian Dashboard
        </h2>


        <x-dropdown-link :href="route('student.profile.index')">
            {{ __('Profile') }}
        </x-dropdown-link>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    {{-- Student Info --}}
                    <div class="mb-6">
                        <h3 class="mb-2 text-lg font-semibold text-gray-700">Student Info</h3>
                        <p><strong>Name:</strong> John Doe</p>
                        <p><strong>Class:</strong> 10</p>
                        <p><strong>Section:</strong> A</p>
                    </div>

                    {{-- Today Class --}}
                    <div class="relative mb-8 overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500">
                            <caption class="p-3 text-lg font-semibold text-gray-700 bg-gray-100 rounded-t-md">
                                Today Class
                            </caption>
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3">Teacher</th>
                                    <th class="px-6 py-3">Subject</th>
                                    <th class="px-6 py-3">Day</th>
                                    <th class="px-6 py-3">Start</th>
                                    <th class="px-6 py-3">End</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4">Mr. Rahman</td>
                                    <td class="px-6 py-4">Math</td>
                                    <td class="px-6 py-4">Sunday</td>
                                    <td class="px-6 py-4">10:00 AM</td>
                                    <td class="px-6 py-4">11:00 AM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    {{-- Next Day Class --}}
                    <div class="relative mb-8 overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500">
                            <caption class="p-3 text-lg font-semibold text-gray-700 bg-gray-100 rounded-t-md">
                                Next Day Class
                            </caption>
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3">Teacher</th>
                                    <th class="px-6 py-3">Subject</th>
                                    <th class="px-6 py-3">Day</th>
                                    <th class="px-6 py-3">Start</th>
                                    <th class="px-6 py-3">End</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4">Ms. Karim</td>
                                    <td class="px-6 py-4">English</td>
                                    <td class="px-6 py-4">Monday</td>
                                    <td class="px-6 py-4">9:00 AM</td>
                                    <td class="px-6 py-4">10:00 AM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    {{-- Pending Tasks --}}
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500">
                            <caption class="p-3 mt-5 text-lg font-semibold text-gray-700 bg-gray-100 rounded-t-md">
                                Pending Task
                            </caption>
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3">Subject</th>
                                    <th class="px-6 py-3">Task</th>
                                    <th class="px-6 py-3">Last Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4">Science</td>
                                    <td class="px-6 py-4">Complete Chapter 5</td>
                                    <td class="px-6 py-4">30 April 2026</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
