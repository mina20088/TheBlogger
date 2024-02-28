<div>


    <div class="flex">
        @if(count($checked) !== 0)

        <button type="submit" wire:click.prevent="deleteSelected"
            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete({{
            count($checked) }})</button>
        @endif
    </div>


    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" <thead
        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <td colspan="10">
                <x-auth-session-status status="{{ session('message') }}" />
            </td>
        </tr>
        <tr>
            <th scope="col" class="p-4">
                <div class="flex items-center">
                    <input id="checkbox-all-search" type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checkbox-all-search" class="sr-only">checkbox</label>

                </div>
            </th>
            <th scope="col" class="px-6 py-3">
                session_id
            </th>
            <th scope="col" class="px-6 py-3">
                user_id
            </th>
            <th scope="col" class="px-6 py-3">
                ip_address
            </th>
            <th scope="col" class="px-6 py-3">
                operating system

            </th>
            <th scope="col" class="px-6 py-3">
                distribution
            </th>
            <th scope="col" class="px-6 py-3">
                Browser/version
            </th>
            <th scope="col" class="px-6 py-3">
                current
            </th>
            <th scope="col" class="px-6 py-3">
                last_active
            </th>
            <th scope="col" class="px-6 py-3">
                action
            </th>
        </tr>
        </thead>
        <tbody>

            @foreach ($this->sessions as $session )

            <tr wire:key='{{ $session->number_id }}'>
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" value="{{ $session->number_id }}"
                            wire:model.live='checked'
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" />
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <td scope="row" class="px-6 py-4">
                    <div class="ps-3">
                        <div class="text-base font-semibold">{{ $session->id }}</div>
                    </div>
                </td>
                <td class="px-6 py-4">{{ $session->user_id }}</td>
                <td class="px-6 py-4">{{ $session->ip_address }}</td>
                <td class="px-6 py-4">{{ $session->user_agent[2] }}</td>
                <td class="px-6 py-4">{{ $session->user_agent[3] }}</td>
                <td class="px-6 py-4">{{ $session->user_agent[7] }}</td>
                <td class="px-6 py-4">{{ $session->id === session()->getId() ? 'yes' : 'no' }}</td>
                <td class="px-6 py-4">{{ $session->last_activity->diffForHumans()}}</td>
                <td class="px-6 py-4">
                    <form wire:submit.prevent='delete("{{ $session->id  }}")'>
                        <button type="submit"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Close</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>


    {{ $this->sessions->links() }}
</div>