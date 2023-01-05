<?php 

namespace Model;

Class AdminCita extends ActiveRecord {
    protected static $tabla = 'citasservicios';
    protected static $columnasDB = ['id', 'hora', 'cliente', 'email', 'telefono', 'servicio', 'precio'];

    public $id;
    public $hora;
    public $cliente;
    public $email;
    public $telefono;
    public $servicio;
    public $precio;

    public function __construct()
    {
        $this->id = $agrs['id'] ?? null;
        $this->hora = $agrs['hora'] ?? '';
        $this->cliente = $agrs['cliente'] ?? '';
        $this->email = $agrs['email'] ?? '';
        $this->email = $agrs['telefono'] ?? '';
        $this->email = $agrs['servicio'] ?? '';
        $this->email = $agrs['precio'] ?? '';
    }
}