<li class="nav-item dropdown-language dropdown me-2 me-xl-0">
    <a class="nav-link" href="javascript:void(0);" data-toggle="dropdown" href="#" aria-expanded="false">
        @if($useFlags)
        <i class="flag-icon flag-icon-{!! $current_locale !!}"></i>
        @else
            <i class='fa {{ $icon }}'></i>
        @endif
    </a>
    <ul class="dropdown-menu dropdown-menu-end shadow-200">
        @foreach($locales as $key => $lang)
        <a href="{{ admin_route(Dcat\Admin\Enums\RouteAuth::LOCALE(), ['key' => $key] ) }}?url={{ $current_url }}" class="dropdown-item {{ $current_locale == $key ? 'active' : '' }}" data-language="{{ $key }}" data-text-direction="{{ $lang['dir'] }}">
            @if($useFlags)
                <i class="flag-icon flag-icon-{!! $key !!} mr-1 ml-1 ">
            @endif
            <span class="align-middle">{!! $lang['title'] !!}</span>
        </a>
        @endforeach
    </ul>
</li>
