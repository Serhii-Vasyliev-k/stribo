<!-- Heading -->
<div class="sidebar-heading">
Данные
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Пользователи</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{{ route('admin.buttons') }}">Администраторы</a>
            <a class="collapse-item" href="{{ route('admin.cards') }}">Покупатели</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Товары</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="{{ route('admin.colors') }}">Категории</a>
            <a class="collapse-item" href="{{ route('admin.borders') }}">Товары</a>
            <a class="collapse-item" href="{{ route('admin.animations') }}">Характеристики товаров</a>
            <a class="collapse-item" href="{{ route('admin.other') }}">Other</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
