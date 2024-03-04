<?php
// autoloading concept -> used to automatically include class files
// namespace -> allow better organization of code
use PHP_Practice\Person;
use PHP_Practice\Staff;
use PHP_Practice\Business;

    $osk = new Person('John Doe');
    $staff = new Staff([$osk]);
    $bsf = new Business($staff);

    $bsf->hire(new Person('Jane Doe'));
?>
<html>
    <head>
        <title>Messages</title>
    </head>
    <body>
        <h2><?php var_dump($bsf->getStaffMembers()); ?></h2>
    </body>
</html>