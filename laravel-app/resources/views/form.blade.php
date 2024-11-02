<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signing Form</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.docuseal.com/js/form.js"></script>
    </head>
    <body>
        <div class="flex justify-center items-center min-h-screen">
            <docuseal-form
                id="docusealForm"
                data-src="https://docuseal.com/d/LEVGR9rhZYf86M"
                data-email="signer@example.com">
            </docuseal-form>
        </div>
    </body>
</html>
