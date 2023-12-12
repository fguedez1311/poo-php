<?php
    namespace Fguedez\Poo\modelos;

    use Fguedez\Poo\modelos\IPost;

?>

<?php

    class ImagePost extends Post implements IPost {
        public function __construct(private string $mensaje, private string $imagen)
        {
            print_r("Se creó un nuevo ImagePost \n");
            parent::__construct($mensaje);
        }
       public function getImagen():string{
        return $this->imagen;
       }
       public function toString():string {
            $info="id:". $this->getId()."\n";
            $info.="Mensaje:". $this->getMensaje() ."\n\n";
            $info.="Imagen:". $this->getImagen() ."\n\n";
            $info.="likes:".count($this->getLikes()). "\n\n";
            return $info;
       }
    }