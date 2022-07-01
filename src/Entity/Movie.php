<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MovieRepository::class)]
class Movie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    public $id;

    #[ORM\Column(type: 'float', nullable: true)]
    public $score;

    #[ORM\Column(type: 'integer', nullable: true)]
    public $show_id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    public $show_url;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    public $show_name;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    public $show_type;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    public $show_language;

    #[ORM\Column(type: 'integer', nullable: true)]
    public $show_runtime;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    public $show_offical_site;

    #[ORM\Column(type: 'float', nullable: true)]
    public $show_rating_average;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    public $show_network_name;

    #[ORM\Column(type: 'text', nullable: true)]
    public $show_summary;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    public $show_image_medium;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    public $show_image_original;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScore(): ?float
    {
        return $this->score;
    }

    public function setScore(?float $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getShowId(): ?int
    {
        return $this->show_id;
    }

    public function setShowId(?int $show_id): self
    {
        $this->show_id = $show_id;

        return $this;
    }

    public function getShowUrl(): ?string
    {
        return $this->show_url;
    }

    public function setShowUrl(?string $show_url): self
    {
        $this->show_url = $show_url;

        return $this;
    }

    public function getShowName(): ?string
    {
        return $this->show_name;
    }

    public function setShowName(?string $show_name): self
    {
        $this->show_name = $show_name;

        return $this;
    }

    public function getShowType(): ?string
    {
        return $this->show_type;
    }

    public function setShowType(?string $show_type): self
    {
        $this->show_type = $show_type;

        return $this;
    }

    public function getShowLanguage(): ?string
    {
        return $this->show_language;
    }

    public function setShowLanguage(?string $show_language): self
    {
        $this->show_language = $show_language;

        return $this;
    }

    public function getShowRuntime(): ?int
    {
        return $this->show_runtime;
    }

    public function setShowRuntime(?int $show_runtime): self
    {
        $this->show_runtime = $show_runtime;

        return $this;
    }

    public function getShowOfficalSite(): ?string
    {
        return $this->show_offical_site;
    }

    public function setShowOfficalSite(?string $show_offical_site): self
    {
        $this->show_offical_site = $show_offical_site;

        return $this;
    }

    public function getShowRatingAverage(): ?float
    {
        return $this->show_rating_average;
    }

    public function setShowRatingAverage(?float $show_rating_average): self
    {
        $this->show_rating_average = $show_rating_average;

        return $this;
    }

    public function getShowNetworkName(): ?string
    {
        return $this->show_network_name;
    }

    public function setShowNetworkName(?string $show_network_name): self
    {
        $this->show_network_name = $show_network_name;

        return $this;
    }

    public function getShowSummary(): ?string
    {
        return $this->show_summary;
    }

    public function setShowSummary(?string $show_summary): self
    {
        $this->show_summary = $show_summary;

        return $this;
    }

    public function getShowImageMedium(): ?string
    {
        return $this->show_image_medium;
    }

    public function setShowImageMedium(?string $show_image_medium): self
    {
        $this->show_image_medium = $show_image_medium;

        return $this;
    }

    public function getShowImageOriginal(): ?string
    {
        return $this->show_image_original;
    }

    public function setShowImageOriginal(?string $show_image_original): self
    {
        $this->show_image_original = $show_image_original;

        return $this;
    }
}
