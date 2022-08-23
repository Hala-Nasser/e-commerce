<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("admin.home") }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/permissions*") ? "menu-open" : "" }} {{ request()->is("admin/roles*") ? "menu-open" : "" }} {{ request()->is("admin/users*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.permission.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.role.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            {{ trans('cruds.user.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('main_menu_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/settings*") ? "menu-open" : "" }} {{ request()->is("admin/pages*") ? "menu-open" : "" }} {{ request()->is("admin/items*") ? "menu-open" : "" }} {{ request()->is("admin/social-links*") ? "menu-open" : "" }} {{ request()->is("admin/contactuses*") ? "menu-open" : "" }} {{ request()->is("admin/attributes*") ? "menu-open" : "" }} {{ request()->is("admin/attribute-values*") ? "menu-open" : "" }} {{ request()->is("admin/categories*") ? "menu-open" : "" }} {{ request()->is("admin/products*") ? "menu-open" : "" }} {{ request()->is("admin/inventories*") ? "menu-open" : "" }} {{ request()->is("admin/countries*") ? "menu-open" : "" }} {{ request()->is("admin/states*") ? "menu-open" : "" }} {{ request()->is("admin/cities*") ? "menu-open" : "" }} {{ request()->is("admin/user-product-favorites*") ? "menu-open" : "" }} {{ request()->is("admin/deliveries*") ? "menu-open" : "" }} {{ request()->is("admin/addresses*") ? "menu-open" : "" }} {{ request()->is("admin/statuses*") ? "menu-open" : "" }} {{ request()->is("admin/orders*") ? "menu-open" : "" }} {{ request()->is("admin/rates*") ? "menu-open" : "" }} {{ request()->is("admin/payment-methods*") ? "menu-open" : "" }} {{ request()->is("admin/order-details*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.mainMenu.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('setting_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.settings.index") }}" class="nav-link {{ request()->is("admin/settings") || request()->is("admin/settings/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.setting.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('page_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.pages.index") }}" class="nav-link {{ request()->is("admin/pages") || request()->is("admin/pages/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-file-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.page.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('item_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.items.index") }}" class="nav-link {{ request()->is("admin/items") || request()->is("admin/items/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.item.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('social_link_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.social-links.index") }}" class="nav-link {{ request()->is("admin/social-links") || request()->is("admin/social-links/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-phone-square">

                                        </i>
                                        <p>
                                            {{ trans('cruds.socialLink.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('contact_us_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.contactuses.index") }}" class="nav-link {{ request()->is("admin/contactuses") || request()->is("admin/contactuses/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.contactUs.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('attribute_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.attributes.index") }}" class="nav-link {{ request()->is("admin/attributes") || request()->is("admin/attributes/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-tag">

                                        </i>
                                        <p>
                                            {{ trans('cruds.attribute.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('attribute_value_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.attribute-values.index") }}" class="nav-link {{ request()->is("admin/attribute-values") || request()->is("admin/attribute-values/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-tags">

                                        </i>
                                        <p>
                                            {{ trans('cruds.attributeValue.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('category_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.categories.index") }}" class="nav-link {{ request()->is("admin/categories") || request()->is("admin/categories/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-th">

                                        </i>
                                        <p>
                                            {{ trans('cruds.category.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('product_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.products.index") }}" class="nav-link {{ request()->is("admin/products") || request()->is("admin/products/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-parking">

                                        </i>
                                        <p>
                                            {{ trans('cruds.product.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('inventory_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.inventories.index") }}" class="nav-link {{ request()->is("admin/inventories") || request()->is("admin/inventories/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-boxes">

                                        </i>
                                        <p>
                                            {{ trans('cruds.inventory.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('country_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.countries.index") }}" class="nav-link {{ request()->is("admin/countries") || request()->is("admin/countries/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-flag">

                                        </i>
                                        <p>
                                            {{ trans('cruds.country.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('state_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.states.index") }}" class="nav-link {{ request()->is("admin/states") || request()->is("admin/states/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-hotel">

                                        </i>
                                        <p>
                                            {{ trans('cruds.state.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('city_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.cities.index") }}" class="nav-link {{ request()->is("admin/cities") || request()->is("admin/cities/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-building">

                                        </i>
                                        <p>
                                            {{ trans('cruds.city.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_product_favorite_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.user-product-favorites.index") }}" class="nav-link {{ request()->is("admin/user-product-favorites") || request()->is("admin/user-product-favorites/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-heart">

                                        </i>
                                        <p>
                                            {{ trans('cruds.userProductFavorite.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('delivery_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.deliveries.index") }}" class="nav-link {{ request()->is("admin/deliveries") || request()->is("admin/deliveries/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-truck">

                                        </i>
                                        <p>
                                            {{ trans('cruds.delivery.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('address_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.addresses.index") }}" class="nav-link {{ request()->is("admin/addresses") || request()->is("admin/addresses/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-map-marker-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.address.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('status_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.statuses.index") }}" class="nav-link {{ request()->is("admin/statuses") || request()->is("admin/statuses/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-tasks">

                                        </i>
                                        <p>
                                            {{ trans('cruds.status.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('order_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.orders.index") }}" class="nav-link {{ request()->is("admin/orders") || request()->is("admin/orders/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-box">

                                        </i>
                                        <p>
                                            {{ trans('cruds.order.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('rate_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.rates.index") }}" class="nav-link {{ request()->is("admin/rates") || request()->is("admin/rates/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-star">

                                        </i>
                                        <p>
                                            {{ trans('cruds.rate.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('payment_method_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.payment-methods.index") }}" class="nav-link {{ request()->is("admin/payment-methods") || request()->is("admin/payment-methods/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fab fa-cc-amazon-pay">

                                        </i>
                                        <p>
                                            {{ trans('cruds.paymentMethod.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('order_detail_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.order-details.index") }}" class="nav-link {{ request()->is("admin/order-details") || request()->is("admin/order-details/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-info">

                                        </i>
                                        <p>
                                            {{ trans('cruds.orderDetail.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                                <i class="fa-fw fas fa-key nav-icon">
                                </i>
                                <p>
                                    {{ trans('global.change_password') }}
                                </p>
                            </a>
                        </li>
                    @endcan
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon">

                            </i>
                            <p>{{ trans('global.logout') }}</p>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>