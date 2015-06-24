<div class="col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li><a href="{{ route('dashboard') }}"><i class="glyphicon glyphicon-th"></i> Dashboard</a></li>
    </ul>

    <ul class="nav nav-sidebar">
        <li><a href="{{ route('admin.users.index') }}"><i class="glyphicon glyphicon-user"></i> Utilisateurs</a></li>
        <li><a href="{{ route('admin.roles.index') }}"><i class="glyphicon glyphicon-tags"></i> &nbsp;Rôles</a></li>
        <li><a href="{{ route('admin.permissions.index') }}"><i class="glyphicon glyphicon-adjust"></i> Permissions</a></li>
    </ul>

    <ul class="nav nav-sidebar">
        <li><a href="{{ route('admin.poles.index') }}"><i class="glyphicon glyphicon-bookmark"></i> Pôles</a></li>
    </ul>
</div>