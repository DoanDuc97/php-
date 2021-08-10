<html>
 <style>
     </style>

    <body>
        <form>
            <div class="QuadraticEquation">
                <h2>QuadraticEquation</h2>
                <input type="text" name="a" size="5" />
                <input type="text" name="b" size="5" />
                <input type="text" name="c" size="5" />
                <input type="submit" name="giai" value="Giải phương trình"/>
            </div>
        </form>
    </body>
</html>



<?php
class QuadraticEquation {
    private $a;
    private $b;
    private $c;

}
public function _construct(a,b,c) {
    $this-> a = a;
    $this-> b = b;
    $this-> c = c;

}
public function geta() {
    return $this->a = a;
}
public function getb() {
    return $this->b = b;
}
public function getc() {
    return $this->c = c;
}

public function delta() {
    return pow(($this->b,2) - 4 * ($this->a * $this->c))
}
public function getRoot1() {
    
}


            