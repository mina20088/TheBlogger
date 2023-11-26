<x-layouts.dashboard-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <x-dashboard.dashboard-content-header :title="$title"/>
    <div class="flex flex-col mx-5">
        <h1 class="text-bold mb-4">All activity</h1>
        <div class="table-responsive">
            <table id="mytable" class=" table  bg-white" style="width:100%">
                <thead>
                <tr>
                    <th>id</th>
                    <th>session_id</th>
                    <th>Login-From</th>
                    <th>login</th>
                    <th>logout</th>
                    <th>login-time</th>
                    <th>logout-time</th>
                    <th>Login-For</th>
                    <th>ip_address</th>
                    <th>status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($active_logins as $login)
                    @if($login->user_id == auth()->user()->id)
                    <tr>
                        <td>{{ $login->id }}</td>
                        <td>{{ $login->session_id }}</td>
                        <td>{{ $login->created_at->diffForHumans() }}</td>
                        <td>{{ $login->created_at }}</td>
                        <td>{{ $login->logout}}</td>
                        <td>{{ Str::after($login->created_at,' ') }}</td>
                        <td>{{ Str::after($login->logout,' ') }}</td>
                        <td>{{  \Carbon\Carbon::parse($login->logout)->diff(\Carbon\Carbon::parse($login->created_at))->format('%H:%I:%S') }}</td>
                        <td>{{ $login->ip_address }}</td>
                        <td>{{ $login->status }}</td>
                    </tr>
                    @endif
 
                @endforeach
                </tbody>
            </table>
        </div>


        <h1 class="text-bold mt-9 mb-9">Active</h1>
        <div class="table-responsive">
            <table id="active" class=" table table-responsive table-hover bg-white" style="width:100%">
                <thead>
                <tr>
                    <th>id</th>
                    <th>session_id</th>

                    <th>Login-From</th>
                    <th>login</th>
                    <th>logout</th>
                    <th>login-time</th>
                    <th>logout-time</th>
                    <th>ip_address</th>
                    <th>status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($active_logins as $login)
                    @if($login->status == 'active' && $login->user_id == auth()->user()->id)
                        <tr>
                            <td>{{ $login->id }}</td>
                            <td>{{ $login->session_id }}</td>
                            <td>{{ $login->created_at->diffForHumans() }}</td>
                            <td>{{ $login->created_at }}</td>
                            <td>{{ $login->logout}}</td>
                            <td>{{ Str::after($login->created_at,' ') }}</td>
                            <td>{{ Str::after($login->logout,' ') }}</td>
                            <td>{{ $login->ip_address }}</td>
                            <td>{{ $login->status }}</td>
                        </tr>
                    @endif

                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-layouts.dashboard-layout>
