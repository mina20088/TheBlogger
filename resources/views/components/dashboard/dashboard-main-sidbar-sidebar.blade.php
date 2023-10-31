<div class="sidebar">
    <x-dashboard.treeview>
        <x-dashboard.treeview-items-wrapper>
            <x-dashboard.treeview-items class="fas fa-tachometer-alt" :href="route('dashboard')" title="Dashboard"/>
        </x-dashboard.treeview-items-wrapper>

        <x-dashboard.treeview-items-wrapper>
            <x-dashboard.treeview-items class="far fa-comments" :href="route('dashboard')" title="Notification"/>
        </x-dashboard.treeview-items-wrapper>

        <x-dashboard.treeview-items-wrapper>
            <x-dashboard.treeview-items class="fas fa-blog" :href="route('dashboard')" title="Posts"/>
        </x-dashboard.treeview-items-wrapper>

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
