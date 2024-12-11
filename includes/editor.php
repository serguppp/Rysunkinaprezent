    <?php
    class Site {
        private $phpFile;
        private $cssFile;

        public function __construct($phpFile, $cssFile){
            $this->phpFile = $phpFile;
            $this->cssFile = $cssFile;
        }

        public function render(){
            require_once $this->phpFile;
        }
        public function setColor($color){
            $cssContent = file_get_contents($this->cssFile);
            $newCssContent = preg_replace('/\.nav-color\s*{\s*background-color:\s*#[a-fA-F0-9]{6};\s*}/', '.nav-color{ background-color: ' . $color . '; }', $cssContent);
            file_put_contents($this->cssFile, $newCssContent);
        }
    }

    ?>