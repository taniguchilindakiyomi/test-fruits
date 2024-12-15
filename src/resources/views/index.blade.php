<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <title>test-fruits</title>
</head>

<style>
  svg.w-5.h-5 {
    width: 30px;
    height: 30px;
  }
</style>


<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo">mogitate
            </div>
        </div>
    </header>

    <main>
        <div class="product_list">

          <div class="section-container">
            <h1>商品一覧</h1>
            <form class="form__button" action="/product/register" method="get">
              <button class="addition_button" type="submit"><span class="button-text">+ 商品を追加</span></button>
            </form>
          </div>

       <form class="form" action="{{ route('products.search') }}" method="get">
        @csrf
          <div class="search-form">
            <div class="search_container">
                <input class="search-input" type="text"
                name="keyword" placeholder="商品名で検索">
                <input class="search-button" type="submit" value="検索">
                  <select class="price_order" name="product_id"><span class="price_order_text">価格順で表示</span>

                        <option value="price" {{ request('product_id') == 'price' ? 'selected' : '' }}>値段安い順</option>
                        <option value="-price" {{ request('product_id') == '-price' ? 'selected' : '' }}>値段高い順</option>
                  </select>
            </div>
          </div>
        </form>

        <div class="table-container">
        <table class="product-table">
            @foreach ($products as $product)
        <tr class="row">
        <td>
            <a href="{{ route('products.detail', ['productId' => $product->id]) }}">
        <div class="product-card">
            <div class="product-card__img">
                <img src="{{ $product->image }}" alt="{{ $product->name }}" />
              <div class="card__content">
                <div class="product-name">{{ $product->name }}</div>
                <div class="product-price">¥{{ number_format($product->price) }}</div>
              </div>
            </div>
        </div>
            </a>
        </td>
        <td>
        <div class="product-card">
            <div class="product-card__img">
                <img src="/images/strawberry.png" alt="ストロベリー" />
                <div class="product-name">ストロベリー</div>
                <div class="product-price">¥1200</div>
            </div>
            </td>
            <td>
            <div class="product-card">
            <div class="product-card__img">
                <img src="/images/orange.png" alt="オレンジ" />
                <div class="product-name">オレンジ</div>
                <div class="product-price">¥850</div>
            </div>
        </div>
        </td>
        </tr>

        <tr class="row">
        <td>
        <div class="product-card">
            <div class="product-card__img">
                <img src="/images/watermelon.png" alt="スイカ" />
                <div class="product-name">スイカ</div>
                <div class="product-price">¥700</div>
            </div>
        </div>
        </td>
        <td>
        <div class="product-card">
            <div class="product-card__img">
                <img src="/images/peach.png" alt="ピーチ" />
                <div class="product-name">ピーチ</div>
                <div class="product-price">¥1000</div>
            </div>
        </div>
        </td>
        <td>
        <div class="product-card">
            <div class="product-card__img">
                <img src="/images/muscat.png" alt="シャインマスカット" />
                <div class="product-name">シャインマスカット</div>
                <div class="product-price">¥1400</div>
            </div>
        </div>
        </td>
        </tr>

        <tr class="row">
        <td>
        <div class="product-card">
            <div class="product-card__img">
                <img src="/images/pineapple.png" alt="パイナップル" />
                <div class="product-name">パイナップル</div>
                <div class="product-price">¥800</div>
            </div>
        </div>
        </td>
        <td>
        <div class="product-card">
            <div class="product-card__img">
                <img src="/images/grapes.png" alt="ブドウ" />
                <div class="product-name">ブドウ</div>
                <div class="product-price">¥1100</div>
            </div>
        </div>
        </td>
        <td>
        <div class="product-card">
            <div class="product-card__img">
                <img src="/images/banana.png" alt="バナナ" />
                <div class="product-name">バナナ</div>
                <div class="product-price">¥600</div>
            </div>
        </div>
        </td>
        </tr>

        <tr class="row">
        <td>
        <div class="product-card">
            <div class="product-card__img">
                <img src="/images/melon.png" alt="メロn" />
                <div class="product-name">メロン</div>
                <div class="product-price">¥900</div>
            </div>
        </div>
        </td>
        </tr>

        </div>
        @endforeach
        </table>
        <div class="pagination">
        {{ $products->links() }}
        </div>
        </div>
    </main>
</body>
</html>