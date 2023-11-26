<div class="sidebar">
    <x-dashboard.treeview>
        <x-dashboard.treeview-items-wrapper>
            <x-dashboard.treeview-items class="fas fa-tachometer-alt" :href="route('dashboard')" title="Dashboard"/>
        </x-dashboard.treeview-items-wrapper>

        <x-dashboard.treeview-items-wrapper>
            <x-dashboard.treeview-items class="far fa-comments" :href="route('notification.index')" title="Notification"/>
        </x-dashboard.treeview-items-wrapper>

        <x-dashboard.menu-open title="Posts" class="fab fa-usps">
            <x-dashboard.treeview-items-wrapper>
                <x-dashboard.treeview-items class="fas fa-plus" :href="route('post.create')" title="create"/>
            </x-dashboard.treeview-items-wrapper>
            <x-dashboard.treeview-items-wrapper>
                <x-dashboard.treeview-items class="fas fa-eye" :href="route('dashboard')" title="show"/>
            </x-dashboard.treeview-items-wrapper>
        </x-dashboard.menu-open>


        <x-dashboard.menu-open title="Sessions" class="fas fa-sign-in-alt">
            <x-dashboard.treeview-items-wrapper>
                <x-dashboard.treeview-items class="fas fa-chart-line" :href="route('sessions.index')" title="Active"/>
            </x-dashboard.treeview-items-wrapper>

            <x-dashboard.treeview-items-wrapper>
                <x-dashboard.treeview-items class="fas fa-history" :href="route('active-login.index.index')" title="History"/>
            </x-dashboard.treeview-items-wrapper>
        </x-dashboard.menu-open>



    </x-dashboard.treeview>
</div>
