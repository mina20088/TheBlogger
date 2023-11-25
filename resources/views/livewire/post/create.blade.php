<div class="max-w-full mx-auto p-10">
    <x-alerts/>
    <form wire:submit.prevent='save'>
        <div class="mb-6">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">title</label>
            <input type="text" id="title" wire:model='form.title' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('form.title')
              <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <input type="hidden" wire:model='form.user_id'>

        <div class="mb-6">  
            <livewire:category.categorydropdown wire:model='form.category_id' :$categories />
            @error('form.category')
            <span class="text-red-600">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-6">
            <label for="excrept" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">excrept</label>
            <input type="text" id="form.excrept" wire:model='form.excrept' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('form.excrept')
              <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-6">
            <input id="x" value="Editor content goes here" type="hidden" name="content">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
            <trix-editor wire:model='form.content' class='block h-[30rem] p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' input="x"></trix-editor>
            @error('form.content')
             <span class="text-red-600">{{ $message }}</span>
           @enderror
        </div>
   
        <button type="submit" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">post</button>
      </form>
</div>


