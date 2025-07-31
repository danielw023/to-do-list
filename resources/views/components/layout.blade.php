<!DOCTYPE html>
<html lang="en">
<x-head/>
<body>
    <div class="container-md">
        <x-header />
        @if(session()->has(['alert.type', 'alert.message']))
            <x-alert :type="session('alert.type')" :message="session('alert.message')" />
        @endif
        <main>
            {{ $slot }}
        </main>
    </div>
    <x-footer/>
</body>
</html>
