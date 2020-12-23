<div class="header clearfix">
  <ul class="float-right">
    <li>
      <a class="btn login" href="{{ route('login')}}">ログイン/新規登録</a>
    </li>
  </ul>
  <div class="search_wap">
    <form class="user_search" id="user_search" action="/users/search" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="✓"><input placeholder="何かお探しですか？" class="input" type="text" name="q[nickname_or_title_or_profile_or_cando_cont]" id="q_nickname_or_title_or_profile_or_cando_cont">
      <button name="button" type="submit" class="search__button">
        <div class="icon_wap">
          <i class="fas fa-search" aria-hidden="true"></i>
        </div>
      </button></form>
  </div>
  <a class="logo" href="{{ route('posts.index') }}"><img class="logo-image" src="{{ asset('./img/sample/webshare-icon.png') }}">
    <ul class="logo-ul">
      <li class="logo-ul-li_sub">
        <p class="logo-subtitle">影響力をシェアしよう</p>
      </li>
      <li class="logo-ul-li">
        <h1 class="logo-h1">WEBSHARE</h1>
      </li>
    </ul>
  </a>
</div>