<?php
class ProductoCrear 
{
    private string $codigo;
    private string $producto;
    private string $descripcion;
    private string $precio;
    private string $cantidad;
    private string $idcategoria;
    private string $imagen;

    function __construct(string $codigo, string $producto, string $descripcion, string $precio,
     string $cantidad, string $idcategoria, string $imagen)
    {
        $this->codigo = $codigo;
        $this->producto = $producto;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
        $this->idcategoria = $idcategoria;
        $this->imagen = $imagen;
    }

    function getcodigo()
    {
        return $this->codigo;
    }

    function setcodigo(string $codigo)
    {
        $this->codigo = $codigo;
    }

    function getproducto()
    {
        return $this->producto;
    }

    function setproducto(string $producto)
    {
        $this->producto = $producto;
    }

    function getdescripcion()
    {
        return $this->descripcion;
    }

    function setdescripcion(string $descripcion)
    {
        $this->descripcion = $descripcion;
    }

    function getprecio()
    {
        return $this->precio;
    }

    function setprecio(string $precio)
    {
        $this->precio = $precio;
    }
    function getcantidad()
    {
        return $this->cantidad;
    }

    function setcantidad(string $cantidad)
    {
        $this->cantidad = $cantidad;
    }
    
    function getidcategoria()
    {
        return $this->idcategoria;
    }

    function setidcategoria(string $idcategoria)
    {
        $this->idcategoria = $idcategoria;
    }

    function getimagen()
    {
        return $this->imagen;
    }

    function setimagen(string $imagen)
    {
        $this->imagen = $imagen;
    }

}

?>