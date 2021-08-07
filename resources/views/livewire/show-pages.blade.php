<div wire:poll.visible>
    @forelse($pages as $i)
    <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
        <a href="/edit/{{$i->id}}" class="nav-link">
            <i class="nav-icon fas fa-tablet"></i>
            <p>
                {{$i->page_name}}
            </p>
        </a>
    </ul>
    @empty
    <p class="text-white">No Page</p>
    @endforelse
</div>