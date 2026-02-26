<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>mogitate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        mogitate
      </a>
    </div>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>商品一覧</h2>
      </div>
      <form class="form">

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--name">キウイ　￥800</span>
          </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--name">ストロベリー　￥1200</span>
          </div>

                  <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--name">オレンジ　￥850</span>
          </div>

                  <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--name">スイカ　￥700</span>
          </div>

                  <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--name">ピーチ　￥1000</span>
          </div>

                  <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--name">シャインマスカット　￥1400</span>
          </div>

          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder="商品名検索"></textarea>
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">検索</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
