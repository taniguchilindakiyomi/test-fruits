<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/derail.css') }}" />
    <title>test-fruits</title>
</head>


<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo">mogitate
            </div>
        </div>
    </header>

    <main>
        <div class="container">
    @if($product)
    <table>
        <tr>
            <td>
     <img class="product-image__img" src="{{ asset($product->image) }}" alt="{{ $product->name }}">
            </td>
            <td>
    <p>{{ $product->name }}</p>
            </td>
            <td>
    <p>価格: ¥{{ number_format($product->price) }}</p>
            </td>
    <p>{{ $product->description }}</p>
    @else
    <p>商品が見つかりませんでした。</p>
    @endif
        </tr>
    </table>
        </div>
        <form action=""></form>
    </main>
</body>
