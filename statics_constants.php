<?php
    class BankAccount {
        const TAX = 0.09;
    }
?>
<html>
    <head>
        <title>Statics and Constants</title>
    </head>
    <body>
        <h2><?php echo BankAccount::TAX; ?></h2>
    </body>
</html>