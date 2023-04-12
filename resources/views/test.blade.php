{{-- <div class="panel-body">
    Check admin view:
    <a href="{{route('admin/dashbord')}}">Admin View</a>
  </div> --}}

  <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>
</div>