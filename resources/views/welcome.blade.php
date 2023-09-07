<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div x-data="{first: 0, second: 0}">
        <input type="text" x-model.number="first" />
        +
        <input type="text" x-model.number="second" />
        =
        <output x-text="first + second"></output>
    </div>
</body>
</html>
