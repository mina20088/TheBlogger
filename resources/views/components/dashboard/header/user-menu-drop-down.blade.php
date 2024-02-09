<div {{ $attributes->merge(['class'=> 'z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded
  shadow dark:bg-gray-700 dark:divide-gray-600'])}}
  id="dropdown2">
  <div class="px-4 py-3" role="none">
    <p class="text-sm text-gray-900 dark:text-white" role="none">
      {{ Auth::user()->first_name ." ". Auth::user()->last_name}}
    </p>
    <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
       {{ Auth::user()->email }}
    </p>
  </div>
  <ul class="py-1" role="none">

    {{-- user-drop-down-item (default) --}}
    <x-dashboard.header.user-menu-drop-down-item content="Profile" :slotted="false" />

    {{-- user-drop-down-item (with parameters) --}}
    <x-dashboard.header.user-menu-drop-down-item path="#" content="Settings" :slotted="false" />


    <div class="divide-gray-500 dark:divide-gray-300">
      <x-dashboard.header.user-menu-drop-down-item :slotted="true">

        <form method="POST" action="{{route('logout')}}"
          class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">
          @csrf
          <button class="" role=" menuitem">Sign out</button>
        </form>

      </x-dashboard.header.user-menu-drop-down-item>
    </div>



  </ul>
</div>