<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body>

<div class="super_container">

    <!-- Header -->

@include('includes.header')

<!-- Menu -->

{{--@   @include('includes.menu')--}}
 @yield('content')

    <!-- Newsletter -->
    @include('includes.footer')
</div>
    @include('includes.foot')
</body>
</html>