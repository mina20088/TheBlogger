@if($errors->has('fail') || $errors->has('limit'))
    <div class="mb-5 p-8">
        <ul class="space-y-1 text-white list-disc list-inside dark:text-gray-400 text-center bg-red-400 p-5">
            @if($errors->has('fail'))
                <li>{{ $errors->first('fail') }}</li>
            @endif
            @if($errors->has('limit'))
                <li>{{ $errors->first('limit') }}</li>
            @endif
        </ul>
    </div>
@endif
