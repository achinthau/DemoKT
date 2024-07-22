<div>
    <select wire:model.live='option'
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="">Please Select Option</option>
        <option value="1">Inbound</option>
        <option value="2">Outbound</option>
    </select>

    @if ($option == 2)
        <select wire:model.live='campaign'
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="">Please Select Campagin</option>
            <option value="1">Campaign 1</option>
            <option value="2">Campaign 2</option>
        </select>
    @endif

    @dump($option,$campaign)


</div>
