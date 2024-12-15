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
    <form class=""></form>
    <table>
        <tr>
            <td>
     <img class="product-image__img" src="{{ asset($product->image) }}" alt="{{ $product->name }}">
     <p class="">
        <input type="file" name="image" placeholder="ファイルを選択">
     </p>
            </td>
            <td>
    <p>{{ $product->name }}</p>
    <p>価格: ¥{{ number_format($product->price) }}</p>
            </td>
    @else
    <p>商品が見つかりませんでした。</p>
    @endif
        </tr>
    </table>
        </div>
        <form class="description-form">
            <textarea name="description" cols="100"  rows="10" placeholder="商品の説明を入力">{{ $product->description }}</textarea>
        </form>
        <form class="return-form" action="{{ route('products.index') }}" method="get">
            <div class="return-form__button">
                <button class="return-form__button-submit" type="submit">戻る</button>
            </div>
        </form>
        <form class="update-form" action="/products/{:productId}/update" method="post">
            @csrf
            @method('PATCH')
            <div class="update-form__button">
                <button class="update-form__button-submit">変更を保存</button>
            </div>
        </form>
        <form class="delete-form" action="{{ route('products.delete', ['productId' => $product->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <div>
            </div>
        </form>
    </main>
</body>
