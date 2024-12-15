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
    <main>
        <div class="section-container">
        <h1>商品登録</h1>
        <form class="form" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-item">
                <p class="form-item_label">商品名<span class="form-tem_label-required">必須</span>
                </p>
                <input class="form-item-input" type="text" name="name" style="width: 720px;" placeholder="商品名を入力">
                @error('name')
             <div class="form__error">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-item">
                <p class="form-item_label">値段<span class="form-tem_label-required">必須</span>
                </p>
                <input class="form-item-input" type="text" name="price" style="width: 720px;" placeholder="値段を入力">
            </div>
            <div class="form-item">
                <p class="form-item_label">商品画像<span class="form-tem_label-required">必須</span>
                </p>
                <input class="form-item-input" type="file" name="image" placeholder="ファイルを選択">
            </div>
            <div class="form-item">
                <p class="form-item_label">季節<span class="form-tem_label-required">必須</span>
                </p>
                <input class="form-item-input" type="checkbox" name="season[]" value="春">春
                <input class="form-item-input" type="checkbox" name="season[]" value="夏">夏
                <input class="form-item-input" type="checkbox" name="season[]" value="秋">秋
                <input class="form-item-input" type="checkbox" name="season[]" value="冬">冬
            </div>
             <div class="form-item">
                <p class="form-item_label">商品説明<span class="form-tem_label-required">必須</span>
                </p>
                <textarea class="form-item-textarea" type="text" name="description" cols="100"  rows="10" placeholder="商品の説明を入力"></textarea>
            </div>
            <div class="form-actions">
            <div class="return-form__button">
                <button class="return-form__button-submit" type="button" onclick="window.location='{{ route('products.index') }}'">戻る</button>
            </div>
                <button class="register-button" type="submit">登録</button>
            </div>
        </form>
        </div>
    </main>
</body>