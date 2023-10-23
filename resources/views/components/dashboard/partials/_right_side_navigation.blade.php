<ul class=" flex w-full navbar-nav max-sm:justify-end">
    <li class="nav-item  basis-9/12 max-sm:hidden max-xl:basis-2/3">
        <x-dashboard.dashboard-search/>
    </li>
    <li class=" flex justify-center items-center basis-3/12 flex-row nav-item max-xl:basis-1/3">
        <div class="flex max-sm:hidden">
            <!--notification button -->
            <x-dashboard.dashboard-notification-button/>
            <!-- Dropdown menu -->
            <x-dashboard.dashboard-notification-dropdown>
                <x-dashboard.dashboard-notification-items/>
                <x-dashboard.dashboard-notification-items path="resources/images/profile-picture-2.jpg"/>
                <x-dashboard.dashboard-notification-items path="resources/images/profile-picture-3.jpg"/>
                <x-dashboard.dashboard-notification-items path="resources/images/profile-picture-4.jpg"/>
                <x-dashboard.dashboard-notification-items path="resources/images/profile-picture-5.jpg"/>
            </x-dashboard.dashboard-notification-dropdown>
        </div>
        <div class="flex max-sm:basis-full">
            <!--user avatar-menus-button-->
            <x-dashboard.dashboard-user-avatar-button/>
            <!-- Dropdown menu -->
            <x-dashboard.dashboard-user-dropdown>
                <x-dashboard-user-dropdown-items />
                <x-dashboard-user-dropdown-items title="Settings" />
            </x-dashboard.dashboard-user-dropdown>
        </div>

    </li>
</ul>
