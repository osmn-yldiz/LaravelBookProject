<div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text">
            Yönetim Panel
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Request::routeIs('admin.index') ? 'active' : '' }}">
                <a href="{{route("admin.index")}}">
                    <i class="material-icons">dashboard</i>
                    <p>Anasayfa</p>
                </a>
            </li>
            <li class="{{ Request::routeIs('admin.yayinevi.index') ? 'active' : '' }}">
                <a href="{{route("admin.yayinevi.index")}}">
                    <i class="material-icons">storage</i>
                    <p>Yayın Evleri</p>
                </a>
            </li>
            <li class="{{ Request::routeIs('admin.yazar.index') ? 'active' : '' }}">
                <a href="{{route("admin.yazar.index")}}">
                    <i class="material-icons">people</i>
                    <p>Yazarlar</p>
                </a>
            </li>
            <li class="{{ Request::routeIs('admin.kategori.index') ? 'active' : '' }}">
                <a href="{{route("admin.kategori.index")}}">
                    <i class="material-icons">reorder</i>
                    <p>Kategoriler</p>
                </a>
            </li>
            <li class="{{ Request::routeIs('admin.kitap.index') ? 'active' : '' }}">
                <a href="{{route("admin.kitap.index")}}">
                    <i class="material-icons">library_books</i>
                    <p>Kitaplar</p>
                </a>
            </li>
            <li class="{{ Request::routeIs('admin.slider.index') ? 'active' : '' }}">
                <a href="{{route("admin.slider.index")}}">
                    <i class="material-icons">photo_library
                    </i>
                    <p>Slider</p>
                </a>
            </li>
        </ul>
    </div>
</div>
