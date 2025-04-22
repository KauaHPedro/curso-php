<div class="titulo">Interface</div>

<?php

interface Animal {
    public function fazerBarulho();
}



class Cachorro implements Animal {

    public function fazerBarulho() {
        echo "Au Au";
    }
}
