<x-layouts.dashboard-layout>
    <x-slot:title>
        {{ $title }} Profile
    </x-slot:title>

    <div class="card card-widget widget-user mt-6">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header text-white" style="background: url( {{ Vite::asset('resources/images/photo1.png') }}) center center;">
          <h3 class="widget-user-username text-right">{{ auth()->user()->FullName() }}</h3>
          <h5 class="widget-user-desc text-right">Web Designer</h5>
        </div>
        <div class="widget-user-image">
            <img class="img-circle" src="{{ Vite::asset('resources/images/profile-picture-3.jpg') }}" alt="User Avatar">
            <livewire:profile-pictures-upload/>


        </div>
        <div class="card-footer">
          <div class="row">
            <div class="col-sm-4 border-right">
              <div class="description-block">
                <h5 class="description-header">{{ count(auth()->user()->posts) }}</h5>
                <span class="description-text">POSTS</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-4 border-right">
              <div class="description-block">
                <h5 class="description-header">{{ count(auth()->user()->follower) }}</h5>
                <span class="description-text">FOLLOWERS</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-4">
              <div class="description-block">
                <h5 class="description-header">35</h5>
                <span class="description-text">LIKES</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
      </div>


</x-layouts.dashboard-layout>