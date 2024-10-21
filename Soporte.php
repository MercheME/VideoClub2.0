

<?php
 class Soporte {
    private const IVA = 0.21;
    public function __construct(
        public string $titulo,
        protected int $numero,
        private float $precio,
    ) {}

    public function getPrecio(): float {
        return $this->precio;
    }

    public function getPrecioConIva(): string {
        return number_format($this->precio * (1 + self::IVA), 2);
        
    }


    public function getNumero(): int {
        return $this->numero;
    }

    public function muestraResumen(){
        echo "<br><em>{$this->titulo}</em>";
        echo "<br>Precio: " . number_format($this->getPrecio(), 2) . " € (IVA no incluido)<br>";
    }

 }

?>