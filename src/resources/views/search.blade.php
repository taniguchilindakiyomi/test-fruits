<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <title>test-fruits</title>
</head>


<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo">mogitate
            </div>
        </div>
    </header>

<body>
    <main>
        <div class="section-container">
            <h1>{{ $product->name }}の商品一覧</h1>
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
       @if ($product)
            <div class="product-card">
                <div class="product-card__img">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                </div>
                <div class="card__content">
                    <div class="product-name">{{ $product->name }}</div>
                    <div class="product-price">¥{{ number_format($product->price) }}</div>
                    <p class="product-description">{{ $product->description }}</p>
                </div>
            </div>
        @else
            <p>商品が見つかりませんでした。</p>
        @endif
    </div>

    </main>
</body>