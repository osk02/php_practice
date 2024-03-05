<?php
    class Task {
        public $title;
        public $desc;
        public $status = false;

        public function __construct($title, $desc) {
            $this->title = $title;
            $this->desc = $desc;
            var_dump($desc);
        }
        public function complete() {
            $this->status = true;
        }
        public function __destruct() {
            echo "Desctructor invoked";
        }
    }
    $task = new Task('Constructor', 'Automatically called whenever an object is created.');
    // $task2 = new Task('Constructor2');
?>
<html>
    <head>
        <title>Classes</title>
    </head>
    <body>
        <h2>
            <?php
                var_dump($task->desc);
                // echo $task->desc;
                var_dump($task->status);
                $task->complete();
                var_dump($task->status);
                // var_dump($task2->desc);
                // echo $task2->desc;
            ?>
        </h2>
        <hr>
        <h3>Title: <?php echo $task->title; ?></h3>
        <h3>Desc: <?php echo $task->desc; ?></h3>
        </h1>
    </body>
</html>