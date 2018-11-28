<?php
    class Main {
        private $idx;
        private $query;
        private $recent;
        private $subject;
        private $content;
        private $date;

        function __construct($idx) {
            $this->idx = $idx;
            if (isset($this->idx)) {
                include ('config.php');
                $this->query = "SELECT X FROM X WHERE X = '$this->idx'";
                $this->recent = $sql_connection->query($this->query)->fetch_assoc();
                $sql_connection->close();
            } else {
                include ('config.php');
                $this->query = "SELECT X FROM open WHERE X = 'javascript' ORDER BY X DESC";
                $this->recent = $sql_connection->query($this->query)->fetch_assoc();
                $sql_connection->close();
            }
            $this->subject = $this->recent['X'];
            $this->content = $this->recent['X'];
            $this->date = $this->recent['X'];
        }

        function load() {
            echo "<div id='subject'><p>$this->subject</p><p>$this->date</p></div>";
            echo "<div id='content'>$this->content</div>";
        }
    }
?>