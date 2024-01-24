<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4">
                <livewire:user-profile-card :firstName="$user->first_name" :lastName="$user->last_name">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8">
               
            </div>
        </div>
    </div>

</x-app-layout>