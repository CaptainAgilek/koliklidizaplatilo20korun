<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Kolik lidi zaplatilo 20 korun, aby videli, kolik lidi zaplatilo 20 korun?</title>
    <meta name="description" content="20korun">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">

</head>

<body>
    <div class="content-wrapper">
        <div class="title">
            <h2>Chcete vidět</h2>
            <h1>Kolik lidí zaplatilo 20 korun,<br> aby viděli, kolik lidí zaplatilo 20 korun?</h1>
            <h2>Zjistěte nyní!</h2>
        </div>
        <form action="/paid" method="POST" id='checkout-form'>
            <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="pk_test_TYooMQauvdEDq54NiTphI7jx"
                    data-amount="999"
                    data-name="Stripe.com"
                    data-description="Widget"
                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                    data-locale="auto"
                    data-zip-code="true">
            </script>
        </form>
    </div>
<?php
echo '<p>Hello World</p>';
?>
</body>
</html>