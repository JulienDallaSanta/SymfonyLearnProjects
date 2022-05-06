<?php

namespace App\Entity;

use App\Entity\Trait\TimeStampableTrait;
use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\HasLifecycleCallbacks]
#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    use TimeStampableTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $contenu;

    #[ORM\ManyToOne(targetEntity: Topic::class, inversedBy: 'messages')]
    #[ORM\JoinColumn(nullable: false)]
    private $topic;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getTopic(): ?Topic
    {
        return $this->topic;
    }

    public function setTopic(?Topic $topic): self
    {
        $this->topic = $topic;

        return $this;
    }

    #[ORM\PrePersist]
    public function setDateTimePrePersist():void {
        $this->createdAt = new \DateTimeImmutable();
        $this->updatedAt = new \DateTimeImmutable();
    }

    #[ORM\PreUpdate]
    public function setDateTimePreUpdate():void {
        $this->updatedAt = new \DateTimeImmutable();
    }
}
