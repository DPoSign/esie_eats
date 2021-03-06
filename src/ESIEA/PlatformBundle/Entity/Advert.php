<?php
namespace ESIEA\PlatformBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
// N'oubliez pas ce use :

/**
 * @ORM\Table(name="esiea_advert")
 * @ORM\Entity(repositoryClass="ESIEA\PlatformBundle\Repository\AdvertRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Advert
{
  /**
   * @var int
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;
  /**
   * @var \DateTime
   *
   * @ORM\Column(name="date", type="datetime")
   */
  private $date;
  /**
   * @var string
   *
   * @ORM\Column(name="title", type="string", length=255)
   */
  private $title;
  /**
   * @var string
   *
   * @ORM\Column(name="author", type="string", length=255)
   */
  private $author;
  /**
   * @var string
   *
   * @ORM\Column(name="content", type="string", length=2550)
   */
  private $content;
  /**
   * @ORM\Column(name="published", type="boolean")
   */
  private $published = true;
  /**
   * @ORM\OneToOne(targetEntity="ESIEA\PlatformBundle\Entity\Image", cascade={"persist", "remove"})
   */
  private $image;
    /**
   * @ORM\Column(name="updated_at", type="datetime", nullable=true)
   */
  private $updatedAt;
 

  public function __construct()
  {
    $this->date         = new \Datetime();

  }
  /**
   * @ORM\PreUpdate
   */
  public function updateDate()
  {
    $this->setUpdatedAt(new \Datetime());
  }



  /**
   * @return int
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param \DateTime $date
   */
  public function setDate($date)
  {
    $this->date = $date;
  }
  /**
   * @return \DateTime
   */
  public function getDate()
  {
    return $this->date;
  }
  /**
   * @param string $title
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
  /**
   * @param string $author
   */
  public function setAuthor($author)
  {
    $this->author = $author;
  }
  /**
   * @return string
   */
  public function getAuthor()
  {
    return $this->author;
  }
  /**
   * @param string $content
   */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /**
   * @return string
   */
  public function getContent()
  {
    return $this->content;
  }
  /**
   * @param bool $published
   */
  public function setPublished($published)
  {
    $this->published = $published;
  }
  /**
   * @return bool
   */
  public function getPublished()
  {
    return $this->published;
  }
  public function setImage(Image $image = null)
  {
    $this->image = $image;
  }
  public function getImage()
  {
    return $this->image;
  }
  
   /**
   * @param \DateTime $updatedAt
   */
  public function setUpdatedAt(\Datetime $updatedAt = null)
  {
      $this->updatedAt = $updatedAt;
  }

  /**
   * @return \DateTime
   */
  public function getUpdatedAt()
  {
      return $this->updatedAt;
  }
 
  
 
}
