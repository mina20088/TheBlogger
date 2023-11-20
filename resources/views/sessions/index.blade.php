<x-layouts.dashboard-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <x-dashboard.dashboard-content-header :title="$title"/>
    <div class=" bg-white p-12 table-responsive">
        <table id="mytable" class=" table table-hover" style="width:100%">
            <thead>
            <tr>
                <th>ip-address</th>
                <th>user-agent</th>
                <th>last-active</th>
            </tr>
            </thead>
            <tbody>
               @foreach($sessions as $session)
                   <tr>
                       <td>{{ $session->ip_address }}</td>
                       <td>{{ $session->user_agent }}</td>
                       <td>{{ \Carbon\Carbon::parse($session->last_activity)->diffForHumans() }}</td>
                   </tr>
               @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.dashboard-layout>
