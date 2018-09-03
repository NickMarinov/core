@if($_account->hasPermission("adm/events"))
    <li class="treeview {{ ((Request::is('adm/events*')) ? 'active' : '') }}">
        <a href = "#" >
            <i class="fa fa-calendar"></i> <span>Events</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a >
        <ul class="treeview-menu">
            @if($_account->hasPermission("adm/events/manage"))
                <li {{ (Request::is('adm/events/manage*')) ? 'class="active"' : ''}}>
                    <a href = "{{ URL::route("adm.events.create") }}" >
                        <i class="fa fa-edit"></i>
                        <span>Create Event</span>
                    </a >
                </li>
                @endif
        </ul>

    </li>
@endif