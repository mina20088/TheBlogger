

@php
    $attribute = [];

    $name  = isset($name) ?? $attribute['name'] = $name;
    $class = isset($class)? 
             $attribute['class'] = $class : 
             $attribute['class'] = "block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer";
    $id    = isset($id) ?? $attribute['id'] = $id;

    $value = isset($vale) ?? $attribute['value'] = $value;    

    $placeholder = isset($plcaeholder) ?? $attribute['placeholder'] = $placeholder
    

@endphp 


<input type="text" {{ $attributes->merge($attribute) }}/>