<!DOCTYPE html>
<html lang="ja">
<!-- 最初の設定は終わっています　必要な方は触ってください -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ダンボオクトパスの進路相談(仮)</title>
  <!-- reset.cssとはブラウザが標準搭載ているcssを打ち消すために以下の記述を行う -->
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<!-- 最初の設定は終わっています　必要な方は触ってください -->

<body>
  
  <div class="header">
    <h1 class="logo">
      <img src="img/header_logo.png" alt="画像が見つかりません。">
    </h1>
  <!-- ULタグ。横並びのリスト型のタグ。 -->
    <ul class="header__nav">
      <!-- li*5 でショートカット作成 -->
      <li><a href="index.html">ホーム</a></li>
      <li><a href="aboutUs.html">ダンボオクトパスの進路相談について</a></li>
      <li><a href="news.php">記事一覧</a></li>
      <li><a href="activities.php">活動実績</a></li>
      <li><a href="form.php">お問い合わせ</a></li>
    </ul>
  </div>

  <div class="mainvisual">
    <h2 class="mainvisual__title">ダンボオクトパスの進路相談(仮)
    </h2>
    <p class="mainvisual__subtitle">～進路に悩める中高生向けサイト～
    </p>
  </div>
<!-- ここからcontact -->
<div class="contact">
  <h3 class="contact_title">お問い合わせ</h3>
  <p class="contact_subtitle">講演のご依頼・各種お問い合わせ</p>
  <p class="contact_text">中高生のみなさんへ<br>ー－－－－－－－－
  <br>ー－－－－－－－－
  <br><br>教職員の方へ<br>ー－－－－－－－－<br>－ー－－－－－－－－
  </p>
  <!-- お問い合わせフォーム -->
  <div class="contact__form">
    <table>
      <tr>
        <td class="contact__form__title">名前</td>
        <td>
          <input type="text" name="hoge" class="contact__form__text1">
        </td>
      </tr>
      <tr>
        <td class="contact__form__title">カナ</td>
        <td>
          <input type="text" name="hoge" class="contact__form__text1">
        </td>
      </tr>
      <tr>
        <td class="contact__form__title">メールアドレス</td>
        <td>
          <input type="text" name="hoge" class="contact__form__text1">
        </td>
      </tr>
      <tr>
      <td class="contact__form__title">肩書</td>
      <td class="contact__form__checkbox">
          <input type="checkbox"name="chugakusei" value="hoge1">中学生
          <br>
          <input type="checkbox"name="koukousei" value="hoge2">高校生
          <br>
          <input type="checkbox"name="kyoushokuin" value="hoge3">教職員
          <br>
          <input type="checkbox"name="sonota" value="hoge4">その他
        </td>
      </tr>
      <tr>
        <td class="contact__form__title">私たちを知ったきっかけ</td>
        <td>
          <select name="hoge" >
            <option value="hoge1">
              google検索
            </option>
            <option value="hoge2">
              動画配信を見て
            </option>
            <option value="hoge3">
              ラジオ配信を聞いて
            </option>
            <option value="hoge4">
            SNS
            </option>
            <option value="hoge5">
            誰かからの紹介
            </option>
            <option value="hoge6">
            たまたま通りかかった
            </option>
            <option value="hoge7">
              その他
            </option>
          </select>
        </td>
      </tr>
      <tr>
        <td class="contact__form__title">お問い合わせ種類</td>
        <td class="contact__form__checkbox">
          <input type="checkbox"name="hoge1" value="hoge1">コンテンツへの要望
          <br>
          <input type="checkbox"name="hoge2" value="hoge2">相談
          <br>
          <input type="checkbox"name="hoge3" value="hoge3">企画・お仕事の依頼
          <br>
          <input type="checkbox"name="hoge4" value="hoge4">その他
        </td>
      </tr>
      <tr>
        <td class="contact__form__title">お問い合わせ詳細</td>
        <td class="contact__form__text2">
          <br>
          <textarea name="hoge1"></textarea>
          <br>
          <br>
        </td>
      </tr>
    </table>
    <div class="contact__submit">
      <button class="contact__submit__button">
        送信
      </button>
    </div>
  </div>
</div>
</body>