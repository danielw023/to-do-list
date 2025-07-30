<!DOCTYPE html>
<html lang="en">
<x-head/>
<body>
    <div class="container-md">
        <x-header />
        @if(session()->has(['alert_type', 'alert_message']))
            <x-alert type="{{session('alert_type')}}" message="{{session('alert_message')}}" />
        @endif
        <main>
            {{ $slot }}
        </main>
    </div>
    <x-footer/>
</body>
</html>
