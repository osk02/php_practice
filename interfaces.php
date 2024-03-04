<?php
// functions should be public
// contain only abstract methods (no implementation allowed)
// no constructor allowed
// supports multiple inheritance

    interface Logger {
        public function execute($message);
    }

    class FileLogger implements Logger {
        public function execute($message) {
            var_dump('msg logging to file: ' . $message);
        }
    }
    class DatabaseLogger implements Logger {
        public function execute($message) {
            var_dump('msg logging to database: ' . $message);
        }
    }

    class UserController {
        protected $logger;
        public function __construct(Logger $logger) {
            $this->logger = $logger;
        }
        public function show() {
            $user = 'JohnDoe';
            $this->logger->execute($user);
        }
    }
    $controller = new UserController(new FileLogger);
    $controller->show();
?>