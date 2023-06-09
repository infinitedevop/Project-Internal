<x-app-layout title="Forms">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Forms
        </h2>

        <!-- General elements -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600">
            Elements
        </h4>
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
            <label class="block text-sm">
                <span class="text-gray-700">Name</span>
                <input class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" placeholder="Jane Doe" />
            </label>

            <div class="mt-4 text-sm">
                <span class="text-gray-700">
                    Account Type
                </span>
                <div class="mt-2">
                    <label class="inline-flex items-center text-gray-600">
                        <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple" name="accountType" value="personal" />
                        <span class="ml-2">Personal</span>
                    </label>
                    <label class="inline-flex items-center ml-6 text-gray-600">
                        <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple" name="accountType" value="busines" />
                        <span class="ml-2">Business</span>
                    </label>
                </div>
            </div>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700">
                    Requested Limit
                </span>
                <select class="block w-full mt-1 text-sm form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple">
                    <option>$1,000</option>
                    <option>$5,000</option>
                    <option>$10,000</option>
                    <option>$25,000</option>
                </select>
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700">
                    Multiselect
                </span>
                <select class="block w-full mt-1 text-sm form-multiselect focus:border-purple-400 focus:outline-none focus:shadow-outline-purple" multiple>
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                    <option>Option 4</option>
                    <option>Option 5</option>
                </select>
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700">Message</span>
                <textarea class="block w-full mt-1 text-sm form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple" rows="3" placeholder="Enter some long form content."></textarea>
            </label>

            <div class="flex mt-6 text-sm">
                <label class="flex items-center">
                    <input type="checkbox" class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple" />
                    <span class="ml-2">
                        I agree to the
                        <span class="underline">privacy policy</span>
                    </span>
                </label>
            </div>
        </div>

        <!-- Validation inputs -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600">
            Validation
        </h4>
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
            <!-- Invalid input -->
            <label class="block text-sm">
                <span class="text-gray-700">
                    Invalid input
                </span>
                <input class="block w-full mt-1 text-sm border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input" placeholder="Jane Doe" />
                <span class="text-xs text-red-600">
                    Your password is too short.
                </span>
            </label>

            <!-- Valid input -->
            <label class="block mt-4 text-sm">
                <span class="text-gray-700">
                    Valid input
                </span>
                <input class="block w-full mt-1 text-sm border-green-600 focus:border-green-400 focus:outline-none focus:shadow-outline-green form-input" placeholder="Jane Doe" />
                <span class="text-xs text-green-600">
                    Your password is strong.
                </span>
            </label>

            <!-- Helper text -->
            <label class="block mt-4 text-sm">
                <span class="text-gray-700">
                    Helper text
                </span>
                <input class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" placeholder="Jane Doe" />
                <span class="text-xs text-gray-600">
                    Your password must be at least 6 characters long.
                </span>
            </label>
        </div>

        <!-- Inputs with icons -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600">
            Icons
        </h4>
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
            <label class="block text-sm">
                <span class="text-gray-700">Icon left</span>
                <!-- focus-within sets the color for the icon when input is focused -->
                <div class="relative text-gray-500 focus-within:text-purple-600">
                    <input class="block w-full pl-10 mt-1 text-sm text-black focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" placeholder="Jane Doe" />
                    <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                </div>
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700">Icon right</span>
                <!-- focus-within sets the color for the icon when input is focused -->
                <div class="relative text-gray-500 focus-within:text-purple-600">
                    <input class="block w-full pr-10 mt-1 text-sm text-black focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" placeholder="Jane Doe" />
                    <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                </div>
            </label>
        </div>

        <!-- Inputs with buttons -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600">
            Buttons
        </h4>
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
            <label class="block text-sm">
                <span class="text-gray-700">
                    Button left
                </span>
                <div class="relative">
                    <input class="block w-full pl-20 mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" placeholder="Jane Doe" />
                    <button class="absolute inset-y-0 px-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-l-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Click
                    </button>
                </div>
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700">
                    Button right
                </span>
                <div class="relative text-gray-500 focus-within:text-purple-600">
                    <input class="block w-full pr-20 mt-1 text-sm text-black focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" placeholder="Jane Doe" />
                    <button class="absolute inset-y-0 right-0 px-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-r-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Click
                    </button>
                </div>
            </label>
        </div>
    </div>
</x-app-layout>