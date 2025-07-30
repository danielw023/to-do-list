<!DOCTYPE html>
<html lang="en">
<x-head/>
<body>
    <div class="container-md">
        <x-header />
        <x-alerts />
        <main>
            {{ $slot }}
        </main>
    </div>
    <x-footer/>
</body>
</html>
