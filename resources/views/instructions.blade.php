<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $article['title'] ?? 'Инструкции' }} | База Бизнеса</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; background: #fff; color: #202124; font: 16px/1.6 Arial, sans-serif; letter-spacing: 0; }
        a { color: #86002d; text-underline-offset: 3px; overflow-wrap: anywhere; }
        a:focus-visible { outline: 3px solid #16806a; outline-offset: 4px; }
        header { border-bottom: 1px solid #dedfe1; padding: 18px 24px; }
        .brand { display: flex; gap: 14px; align-items: center; max-width: 1140px; margin: auto; text-decoration: none; color: #202124; }
        .brand img { width: 48px; height: 48px; object-fit: contain; }
        .brand strong { display: block; font-size: 18px; }
        .brand span { font-size: 13px; color: #666; }
        .layout { display: grid; grid-template-columns: 250px minmax(0, 1fr); gap: 48px; max-width: 1140px; padding: 32px 24px 64px; margin: auto; }
        nav a { display: block; padding: 9px 12px; margin-bottom: 3px; border-radius: 4px; font-size: 14px; text-decoration: none; color: #444; }
        nav a[aria-current] { background: #f6edf0; color: #86002d; font-weight: bold; }
        nav a:hover { background: #f3f4f4; }
        h1 { font-size: 30px; line-height: 1.25; margin: 0 0 18px; }
        h2 { font-size: 20px; line-height: 1.4; margin: 30px 0 8px; }
        p { margin: 0 0 14px; }
        .intro { color: #50545a; font-size: 17px; }
        ol { padding-left: 24px; }
        ol li { padding-left: 8px; margin-bottom: 24px; }
        li h2 { margin-top: 0; }
        .result { border-left: 3px solid #16806a; padding-left: 18px; }
        .warning { border-left: 3px solid #86002d; padding-left: 18px; }
        .directory { margin-top: 28px; }
        .directory a { display: block; padding: 18px 0; border-top: 1px solid #dedfe1; text-decoration: none; font-weight: bold; }
        .sources { font-size: 14px; padding-left: 20px; }
        footer { border-top: 1px solid #dedfe1; padding: 20px 24px; font-size: 13px; color: #666; }
        footer p { max-width: 1092px; margin: auto; }
        @media (max-width: 760px) { .layout { grid-template-columns: 1fr; gap: 28px; padding: 24px 18px 40px; } nav { border-bottom: 1px solid #dedfe1; padding-bottom: 16px; } h1 { font-size: 26px; } }
        @media print { header, nav, footer { display: none; } .layout { display: block; padding: 0; } a { color: #202124; } }
    </style>
</head>
<body>
<header><a class="brand" href="{{ route('instructions.index') }}"><img src="{{ asset('brand/business-base-logo.png') }}" alt="Логотип База Бизнеса"><div><strong>База Бизнеса</strong><span>Инструкции по настройке среды</span></div></a></header>
<div class="layout">
    <nav aria-label="Инструкции">
        <a href="{{ route('instructions.index') }}" @if($slug === null) aria-current="page" @endif>Все инструкции</a>
        @foreach($instructions as $key => $item)
            <a href="{{ route('instructions.show', $key) }}" @if($slug === $key) aria-current="page" @endif>{{ $item['title'] }}</a>
        @endforeach
    </nav>
    <main>
        @if($article)
            <h1>{{ $article['title'] }}</h1>
            <p class="intro">{{ $article['intro'] }}</p>
            <h2>Порядок действий</h2>
            <ol>@foreach($article['steps'] as [$title, $description])<li><h2>{{ $title }}</h2><p>{{ $description }}</p></li>@endforeach</ol>
            <section class="result"><h2>Что должно получиться</h2><p>{{ $article['result'] }}</p></section>
            <section class="warning"><h2>Важно</h2><p>{{ $article['warning'] }}</p></section>
            @if($slug === 'bitrix24')<p><a href="{{ asset('instructions/bitrix24-local-app-instruction.docx') }}" download>Скачать инструкцию в DOCX</a></p>@endif
            <h2>Официальная документация</h2>
            <ul class="sources">@foreach($article['sources'] as $label => $url)<li><a href="{{ $url }}" target="_blank" rel="noopener noreferrer">{{ $label }}</a></li>@endforeach</ul>
        @else
            <h1>Инструкции</h1>
            <p class="intro">Подготовка проекта, сервера и приложения Битрикс24.</p>
            <div class="directory">@foreach($instructions as $key => $item)<a href="{{ route('instructions.show', $key) }}">{{ $item['title'] }}</a>@endforeach</div>
        @endif
    </main>
</div>
<footer><p>База Бизнеса · Публичные инструкции. Доступ к самому приложению остается только из Битрикс24.</p></footer>
</body>
</html>
