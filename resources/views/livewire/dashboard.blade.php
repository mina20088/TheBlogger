<div>
    <h2 class="text-2xl font-semibold dark:text-white">Dashboard Widgets</h2>
    <div class="grid gap-4 xs:grid-cols-1 sm:grid-cols-2 sm-grid-cols-2 xl:grid-cols-2 2xl:grid-cols-2 overflow-hidden">
        <a href="#" class="mx-auto mt-8 w-full">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4">Sessions</h2>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-blue-500 text-white rounded-full flex items-center justify-center mr-4" wire:poll.30s >
                        <span class="text-2xl">{{ $this->sessionsCount }}</span>
                    </div>
                    <p class="text-gray-600">Total Sessions</p>
                </div>
            </div>
        </a>
        <a href="#" class="mx-auto mt-8 w-full">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4">Posts</h2>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-blue-500 text-white rounded-full flex items-center justify-center mr-4">
                        <span class="text-2xl">0</span>
                    </div>
                    <p class="text-gray-600">Total Sessions</p>
                </div>
            </div>
        </a>
    </div>
</div>