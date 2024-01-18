<?php
namespace App\Entity\Traits;
use Doctrine\ORM\Mapping as ORM;

trait HasIdTrait{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    public function getId(): ?int
    {
        return $this->id;
    }

}
