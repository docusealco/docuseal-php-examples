<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form Builder</title>
        <script src="https://cdn.docuseal.com/js/builder.js"></script>
    </head>
    <body>
        <?php
        require_once '../vendor/autoload.php';
        use Firebase\JWT\JWT;

        $payload = [
            'user_email' => 'pete+php@docuseal.com',
            'integration_email' => 'signer@example.com',
            'name' => 'Integration W-9 Test Form',
            'document_urls' => ['https://www.irs.gov/pub/irs-pdf/fw9.pdf'],
        ];

        $apiToken = 'i2U5jn69VgZALd4anfQd9iGoUiBY1CAtSDujYUqSMme';
        $token = JWT::encode($payload, $apiToken, 'HS256');
        ?>
        <docuseal-builder data-token="<?php echo $token; ?>"></docuseal-builder>
    </body>
</html>
