<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
#[ORM\Table(name: 'client')]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'client_id', type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(name: 'client_name', type: 'string', length: 100)]
    private ?string $name = null;

    #[ORM\Column(name: 'client_email', type: 'string', length: 100)]
    private ?string $email = null;

    #[ORM\Column(name: 'client_pass', type: 'string', length: 100)]
    private ?string $password = null;

    #[ORM\Column(name: 'client_gender', type: 'string', length: 100)]
    private ?string $gender = null;

    #[ORM\Column(name: 'client_phone', type: 'integer')]
    private ?int $phone = null;

    #[ORM\Column(type: 'string', length: 100)]
    private ?string $image = null;

    #[ORM\Column(type: 'string', length: 100)]
    private ?string $status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(int $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }
}
