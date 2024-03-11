<?php

declare(strict_types=1);

namespace App\Entity;

use App\UrlRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

#[Entity(repositoryClass: UrlRepository::class)]
class Url
{
    #[Id]
    #[GeneratedValue]
    #[Column(type: 'integer')]
    private ?int $id;

    #[Column(name: 'short_url', type: Types::STRING, length: 7, nullable: false)]
    private string $shortUrl;

    #[Column(name: 'long_url', type: Types::TEXT, length: 2000, nullable: false)]
    private string $longUrl;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getShortUrl(): string
    {
        return $this->shortUrl;
    }

    public function setShortUrl(string $shortUrl): self
    {
        $this->shortUrl = $shortUrl;

        return $this;
    }

    public function getLongUrl(): string
    {
        return $this->longUrl;
    }

    public function setLongUrl(string $longUrl): self
    {
        $this->longUrl = $longUrl;

        return $this;
    }
}
