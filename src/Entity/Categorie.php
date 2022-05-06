<?php

namespace App\Entity;

use App\Entity\Trait\TimeStampableTrait;
use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Mapping as ORM;
use Monolog\DateTimeImmutable;

#[ORM\HasLifecycleCallbacks]
#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    use TimeStampableTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $titre;

    #[ORM\Column(type: 'string', length: 255)]
    private $description;

    #[ORM\OneToMany(mappedBy: 'categorie', targetEntity: Topic::class, orphanRemoval: true)]
    private $topics;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'categoriesFilles')]
    private $parent;

    #[ORM\OneToMany(mappedBy: 'parent', targetEntity: self::class)]
    private $categoriesFilles;

    public function __construct()
    {
        $this->topics = new ArrayCollection();
        $this->categoriesFilles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Topic>
     */
    public function getTopics(): Collection
    {
        return $this->topics;
    }

    public function addTopic(Topic $topic): self
    {
        if (!$this->topics->contains($topic)) {
            $this->topics[] = $topic;
            $topic->setCategorie($this);
        }

        return $this;
    }

    public function removeTopic(Topic $topic): self
    {
        if ($this->topics->removeElement($topic)) {
            // set the owning side to null (unless already changed)
            if ($topic->getCategorie() === $this) {
                $topic->setCategorie(null);
            }
        }

        return $this;
    }

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getCategoriesFilles(): Collection
    {
        return $this->categoriesFilles;
    }

    public function addCategoriesFille(self $categoriesFille): self
    {
        if (!$this->categoriesFilles->contains($categoriesFille)) {
            $this->categoriesFilles[] = $categoriesFille;
            $categoriesFille->setParent($this);
        }

        return $this;
    }

    public function removeCategoriesFille(self $categoriesFille): self
    {
        if ($this->categoriesFilles->removeElement($categoriesFille)) {
            // set the owning side to null (unless already changed)
            if ($categoriesFille->getParent() === $this) {
                $categoriesFille->setParent(null);
            }
        }

        return $this;
    }

}
