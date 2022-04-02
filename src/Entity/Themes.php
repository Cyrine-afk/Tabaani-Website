<?php

namespace App\Entity;

use App\Repository\ThemesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * @ORM\Entity(repositoryClass=ThemesRepository::class)
 */
class Themes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Your event's name must be at least {{ limit }} characters long",
     *      maxMessage = "Your event's name cannot be longer than {{ limit }} characters"
     * )
     */
    private $themename;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imagetheme;

    /**
     * @ORM\OneToMany(targetEntity=Events::class, mappedBy="eventtheme", cascade={"all"}, orphanRemoval=true)
     */
    private $events;

    private $file;

    public function __construct()
    {
        $this->events = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getThemename(): ?string
    {
        return $this->themename;
    }

    public function setThemename(string $themename): self
    {
        $this->themename = $themename;

        return $this;
    }

    public function getImagetheme()
    {
        return $this->imagetheme;
    }

    public function setImagetheme($imagetheme)
    {
        $this->imagetheme = $imagetheme;

        return $this;
    }

    /**
     * @return Collection|Events[]
     */
    public function getEvents(): Collection
    {
        return $this->events;
    }

    public function addEvent(Events $event): self
    {
        if (!$this->events->contains($event)) {
            $this->events[] = $event;
            $event->setEventtheme($this);
        }

        return $this;
    }

    public function removeEvent(Events $event): self
    {
        if ($this->events->removeElement($event)) {
            // set the owning side to null (unless already changed)
            if ($event->getEventtheme() === $this) {
                $event->setEventtheme(null);
            }
        }

        return $this;
    }

    public function __toString(): string {
        return $this->getThemename();
    }


    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile(UploadedFile $file)
    {
        $this->file = $file;
    }

    public function getUploadDir()
    {
        return 'imagesThemes';
    }

    public function getAbsolutRoot()
    {
        return $this->getUploadRoot().$this->imagetheme ;
    }

    public function getWebPath()
    {
        return $this->getUploadDir().'/'.$this->imagetheme;
    }

    public function getUploadRoot()
    {
        return __DIR__.'/../../public/pics/'.$this->getUploadDir().'/';
    }

    public function upload()
    {

        if($this->file === null){
            return;

        }
        $this->imagetheme = $this->file->getClientOriginalName();
        if(!is_dir($this->getUploadRoot()))
        {
            mkdir($this->getUploadRoot(),'0777',true);
        }

        $this->file->move($this->getUploadRoot(),$this->imagetheme);
        unset($this->file);
    }
}
