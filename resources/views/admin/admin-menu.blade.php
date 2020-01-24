<div class="menu">
    <ul class="list">
        <li class="header">ГЛАВНОЕ МЕНЮ</li>
        <li>
            <a href="/admin">
                <i class="material-icons">home</i>
                <span>Home</span>
            </a>
        </li>
        {{--@role('superadmin')
            <li>
                <a href="/admin/access">
                    <i class="material-icons">security</i>
                    <span>Пользователи и роли</span>
                </a>
            </li>
        @endrole--}}
        {{--<li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="fa fa-language" aria-hidden="true"></i>
                <span>Мультиязычность</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="/admin/language">Доступные языки</a>
                </li>
                <li>
                    <a href="/admin/language_interface">Интерфейс</a>
                </li>
            </ul>
        </li>--}}
        <li>
            <a href="/admin/seo">
                <i class="material-icons">trending_up</i>
                <span>SEO</span>
            </a>
        </li>
{{--        <li>
            <a href="/admin/config">
                <i class="material-icons">settings</i>
                <span>Конфиг</span>
            </a>
        </li>
        <li>
            <a href="/admin/block">
                <i class="fa fa-file-text-o" aria-hidden="true"></i>
                <span>Текста</span>
            </a>
        </li>--}}
        <li>
            <a href="/admin/services">
                <i class="material-icons">favorite</i>
                <span>Услуги</span>
            </a>
        </li>
        <li>
            <a href="/admin/articles">
                <i class="material-icons">content_copy</i>
                <span>Статий</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">assignment_turned_in</i>
                <span>Фото галлерия</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="/admin/gallery">Галлерия</a>
                </li>
                <li>
                    <a href="/admin/foto">Фото</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="/admin/requests">
                <i class="material-icons">assignment_returned</i>
                <span>Заявки</span>
            </a>
        </li>
    </ul>
</div>
