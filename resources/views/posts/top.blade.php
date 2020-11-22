@extends('layouts.app')

@section('content')

<body>
  <div class="header clearfix">
    <a class="logo" href="/"><img class="logo-image" src="/assets/sample/webshare-icon-bed26559e46c4ffdef0739881c1a92a28fce035eaa0b6ab8ea248c252bd444ab.png">
      <ul class="logo-ul">
        <li class="logo-ul-li_sub">
          <p class="logo-subtitle">影響力をシェアしよう</p>
        </li>
        <li class="logo-ul-li">
          <h1 class="logo-h1">WEBSHARE</h1>
        </li>
      </ul>
    </a></div>
  <div class="main_visual">
    <div class="lp_wrapper clearfix">
      <div class="lp_text">
        <h2>コラボして登録者数をスピードアップ</h2>
        <p>コラボしたくても相手が見つからない悩みを解決。WEBSHAREではコラボ希望のユーザーが登録しているので、効率的にコラボ相手を見つけることができます。報酬の支払いも管理しているので、報酬未払いなどのリスクなく交渉することができます。</p>
        <ul class="blue-Btn_ul">
          <li class="blue-Btn_ul_li">
            <a class="blue-Btn" href="/">サイトをみる</a>
          </li>
          <li class="blue-Btn_ul_li">
            <a class="blue-Btn" href="/users/sign_in">新規登録</a>
          </li>
        </ul>
      </div>
      <div class="lp_image">
        <img alt="イメージ画像" src="/assets/lp/top-image-14694cc4b120e0d5f7d21da3960d7b364e2b4c5988740a2df33bac6fb72ff639.png">
      </div>
    </div>
  </div>
  <section class="main_visual centerbord blue">
    <div class="lp_wrapper">
      <p>YouTubeに動画投稿されているお客様へ</p>
      <h2>こんな事でお困りでは御座いませんか？</h2>
      <ul>
        <li>
          <span>コラボして登録者数を増やしたいけど、相手が見つからない</span>
        </li>
        <li>
          <span>コラボの報酬がちゃんと振り込まれるか不安...</span>
        </li>
        <li>
          <span>チャンネルとマッチした相手を見つけるのに一苦労...</span>
        </li>
        <li>
          <span>チャンネル規模が小さいので企業案件できない。</span>
        </li>
        <li>
          <span>新たな収益化を模索しているが、思いつかない</span>
        </li>
        <li>
          <span>演者が欲しいが、相手がみつからない</span>
        </li>
      </ul>
    </div>
  </section>
  <section class="main_visual centerbord">
    <div class="lp_wrapper">
      <p>このようなお悩みはWEBSHAREで解決出来ます！</p>
      <h2>WEBSHAREが出来ること</h2>
      <ul class="function_ul">
        <li class="function_ul_li">
          <dl>
            <dt>
              <span>SEARCH</span>
              検索
            </dt>
            <dd class="dd-text">
              <span class="dd-text_heading">
                効率的にリサーチ
              </span>
              <span class="dd-text_note">コラボに意欲的なユーザーのみだから効率的</span>
              <span class="dd-text_note">キーワード・タグ検索</span>
              <span class="dd-text_note">チャンネル登録者数で検索結果を絞る</span>
            </dd>
          </dl>
        </li>
        <li class="function_ul_li">
          <dl>
            <dt>
              <span>RECRUITMENT</span>
              募集
            </dt>
            <dd class="dd-text">
              <span class="dd-text_heading">
                共感する演者を募集
              </span>
              <span class="dd-text_note">企画・条件を投稿し、応募者を集う</span>
              <span class="dd-text_note">ニーズに合った応募者を選び、時間短縮</span>
            </dd>
          </dl>
        </li>
        <li class="function_ul_li">
          <dl>
            <dt>
              <span>MONETIZATION</span>
              収益化
            </dt>
            <dd class="dd-text">
              <span class="dd-text_heading">
                コラボの売買
              </span>
              <span class="dd-text_note">コラボ費用を設定し、販売。コラボすることで収益化</span>
              <span class="dd-text_note">料金を支払うことでコラボ実現。登録者を伸ばす</span>
            </dd>
          </dl>
        </li>
        <li class="function_ul_li">
          <dl>
            <dt>
              <span>TRANSACTION</span>
              安心した取引
            </dt>
            <dd class="dd-text">
              <span class="dd-text_heading">
                打ち合わせをサポート
              </span>
              <span class="dd-text_note">国内大手のPAYJPを利用した決済。セキュリティも安心</span>
            </dd>
          </dl>
        </li>
        <li class="function_ul_li">
          <dl>
            <dt>
              <span>SECRETARY</span>
              チャット機能
            </dt>
            <dd class="dd-text">
              <span class="dd-text_heading">
                打ち合わせをサポート
              </span>
              <span class="dd-text_note">支払後の打ち合わせだから、安心</span>
              <span class="dd-text_note">チャットで打ち合わせ</span>
            </dd>
          </dl>
        </li>
      </ul>
      <div class="lp-btn">
        <a class="lp-btn_link" href="/">登録する</a>
      </div>
    </div>
  </section>



</body>
@endsection