    <div class="title">
        <a href="{{ url('/') }}"><img src="{{ asset('images/logo.jpg') }}"></a>
    </div>
    <div class="header links-h">
        <br>
        <a href="{{ route('chefs.create') }}">新增廚師</a>
        <a href="{{ route('chefs.index') }}">在職廚師</a>
        <a href="{{ route('chefs.quit') }}">離職廚師</a>
        |
        <a href="{{ route('cookbooks.create') }}">新增食譜</a>
        <a href="{{ route('cookbooks.index') }}">食譜</a>
        <a href="{{ route('cookbooks.deleted') }}">已刪除食譜</a>
        <hr>
    </div>