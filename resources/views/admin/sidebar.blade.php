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

    <ul class="nav nav-sidebar">
        <li><a href="{{ route('admin.categories.index') }}"><i class="glyphicon glyphicon-folder-open"></i> &nbsp;Catégories</a></li>
        <li><a href="{{ route('admin.uploads.index') }}"><i class="glyphicon glyphicon-indent-left"></i> &nbsp;Hiérarchie</a></li>
        <li><a href="{{ route('admin.uploads.create') }}"><i class="glyphicon glyphicon-cloud-upload"></i> &nbsp;Upload</a></li>
    </ul>
</div>