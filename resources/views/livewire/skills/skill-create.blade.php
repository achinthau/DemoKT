<div>
    <div class="space-y-4">
        <label for="title" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Skill Title</label>
        <input type="text"
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full"
            wire:model='title' />
        @error('title')
            <div class="text-sm text-red-600 dark:text-red-400 space-y-1 mt-2">
                {{ $message }}
            </div>
        @enderror
        <input type="button" value="Create"
            class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
            wire:click='save'>

    </div>
</div>
