{{-- ナビゲーション --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light container">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('event.index') }}">{{ 'もくもく会' }}</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#Navber"
            aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="Navber">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('event.index') }}">{{
                        'もくもく会一覧'
                        }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('category.index') }}">{{
                        'カテゴリ一覧'
                        }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('event.register') }}">{{ '開催する' }}</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>