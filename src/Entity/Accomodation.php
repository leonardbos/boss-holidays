<?php

namespace App\Entity;

use App\Repository\AccomodationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: AccomodationRepository::class)]
#[Broadcast]
class Accomodation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Title = null;

    #[ORM\Column(length: 255)]
    private ?string $Description = null;

    #[ORM\Column(length: 255)]
    private ?string $Location = null;

    #[ORM\Column(length: 255)]
    private ?string $Type = null;

    #[ORM\Column(type: 'float')]
    private ?float $PricePerNight = null;

    #[ORM\Column]
    private ?int $NumberOfRooms = null;

    #[ORM\Column(length: 255)]
    private ?string $Capacity = null;

    #[ORM\Column]
    private ?int $Rating = null;

    #[ORM\Column(length: 255)]
    private ?string $ContactInformation = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $CheckInTime = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $CheckOutTime = null;

    #[ORM\Column(length: 255)]
    private ?string $Policies = null;

    #[ORM\Column]
    private ?int $Latitude = null;

    #[ORM\Column]
    private ?int $Longitude = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeInterface $CreatedAt = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeInterface $UpdatedAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setID(int $ID): static
    {
        $this->ID = $ID;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): static
    {
        $this->Title = $Title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->Location;
    }

    public function setLocation(string $Location): static
    {
        $this->Location = $Location;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): static
    {
        $this->Type = $Type;

        return $this;
    }

    public function getPricePerNight(): ?string
    {
        return $this->PricePerNight;
    }

    public function setPricePerNight(string $PricePerNight): static
    {
        $this->PricePerNight = $PricePerNight;

        return $this;
    }

    public function getNumberOfRooms(): ?int
    {
        return $this->NumberOfRooms;
    }

    public function setNumberOfRooms(int $NumberOfRooms): static
    {
        $this->NumberOfRooms = $NumberOfRooms;

        return $this;
    }

    public function getCapacity(): ?string
    {
        return $this->Capacity;
    }

    public function setCapacity(string $Capacity): static
    {
        $this->Capacity = $Capacity;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->Rating;
    }

    public function setRating(int $Rating): static
    {
        $this->Rating = $Rating;

        return $this;
    }

    public function getContactInformation(): ?string
    {
        return $this->ContactInformation;
    }

    public function setContactInformation(string $ContactInformation): static
    {
        $this->ContactInformation = $ContactInformation;

        return $this;
    }

    public function getCheckInTime(): ?\DateTimeInterface
    {
        return $this->CheckInTime;
    }

    public function setCheckInTime(\DateTimeInterface $CheckInTime): static
    {
        $this->CheckInTime = $CheckInTime;

        return $this;
    }

    public function getCheckOutTime(): ?\DateTimeInterface
    {
        return $this->CheckOutTime;
    }

    public function setCheckOutTime(\DateTimeInterface $CheckOutTime): static
    {
        $this->CheckOutTime = $CheckOutTime;

        return $this;
    }

    public function getPolicies(): ?string
    {
        return $this->Policies;
    }

    public function setPolicies(string $Policies): static
    {
        $this->Policies = $Policies;

        return $this;
    }

    public function getLatitude(): ?int
    {
        return $this->Latitude;
    }

    public function setLatitude(int $Latitude): static
    {
        $this->Latitude = $Latitude;

        return $this;
    }

    public function getLongitude(): ?int
    {
        return $this->Longitude;
    }

    public function setLongitude(int $Longitude): static
    {
        $this->Longitude = $Longitude;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->CreatedAt;
    }

    public function setCreatedAt(\DateTimeInterface $CreatedAt): static
    {
        $this->CreatedAt = $CreatedAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->UpdatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $UpdatedAt): static
    {
        $this->UpdatedAt = $UpdatedAt;

        return $this;
    }
}
