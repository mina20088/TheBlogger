@props(['category'])

@if($category->name ==='Personal')
    <a
        href="{{route('category.index',$category->slug)}}"
        class="flex basis-1/2 justify-end" href="#">
    <span {{ $attributes->merge(['class' =>' bg-sky-400 text-white text-xs font-medium mr-2 px-6 py-2 rounded-full']) }}>
       {{ $category->name }}
    </span>
    </a>
@elseif($category->name ==='Travel')
    <a
        href="{{route('category.index',$category->slug)}}"
        class="flex basis-1/2 justify-end" href="#">
        <span {{ $attributes->merge(['class' =>'bg-red-400 text-white text-xs font-medium mr-2 px-6 py-2 rounded-full']) }}>
       {{ $category->name }}
    </span>
    </a>
@elseif($category->name ==='Lifestyle')
    <a
        href="{{route('category.index',$category->slug)}}"
        class="flex basis-1/2 justify-end" href="#">
        <span {{ $attributes->merge(['class' =>'bg-teal-400 text-white text-xs font-medium mr-2 px-6 py-2 rounded-full']) }}>
       {{ $category->name }}
    </span>
    </a>
@else
    <a
        href="{{route('category.index',$category->slug)}}"
        class="flex basis-1/2 justify-end" href="#">
        <span {{ $attributes->merge(['class' =>'bg-sky-600 text-white text-xs font-medium mr-2 px-6 py-2 rounded-full']) }}>
       {{ $category->name }}
    </span>
    </a>
@endif

