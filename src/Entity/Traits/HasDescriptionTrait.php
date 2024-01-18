<?php
namespace App\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait HasDescriptionTrait{
     /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;
    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

}
