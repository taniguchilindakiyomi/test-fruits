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
            <form class="form__button" action="/products/register" method="get">
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
            @foreach ($products->chunk(3) as $chunk)
        <tr class="row">
            @foreach ($chunk as $product)
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
        @endforeach
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