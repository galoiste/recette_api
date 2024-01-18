<?php
namespace App\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait HasPriorityTrait{
    /**
     * @ORM\Column(type="smallint")
     */
    private $priority;

    
    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }


}