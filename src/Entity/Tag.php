<?php

namespace App\Entity;

use App\Entity\Traits\HasDescriptionTrait;
use App\Entity\Traits\HasIdTrait;
use App\Entity\Traits\HasNameTrait;
use App\Entity\Traits\HasPriorityTrait;
use App\Repository\TagRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TagRepository::class)
 */
class Tag
{
    use HasIdTrait;
    use HasDescriptionTrait;
    use HasNameTrait;
    use HasDescriptionTrait;
    use HasPriorityTrait;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $menu;

    /**
     * @ORM\ManyToMany(targetEntity=Recipe::class, inversedBy="tags")
     */
    private $recipes;

    public function __construct()
    {
        $this->recipes = new ArrayCollection();
    }


    public function isMenu(): ?bool
    {
        return $this->menu;
    }

    public function setMenu(?bool $menu): self
    {
        $this->menu = $menu;

        return $this;
    }

    /**
     * @return Collection<int, Recipe>
     */
    public function getRecipes(): Collection
    {
        return $this->recipes;
    }

    public function addRecipe(Recipe $recipe): self
    {
        if (!$this->recipes->contains($recipe)) {
            $this->recipes[] = $recipe;
        }

        return $this;
    }

    public function removeRecipe(Recipe $recipe): self
    {
        $this->recipes->removeElement($recipe);

        return $this;
    }
}
