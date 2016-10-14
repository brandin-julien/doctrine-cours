<?php
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="films")
 **/
class Film{
  /**
   * @var integer
   * @Id @Column(type="integer") @GeneratedValue
   */
  protected $id;
  /**
   * @var string
   * @Column(type="string")
   */
  protected $title;
  /**
   * @var DateTime
   * @Column(type="date")
   */
  protected $release_date;
  /**
   * @var int
   * @Column(type="integer")
   */
  protected $duration;

  /**
   * @var Seance[]
   * @OneToMany(targetEntity="Seance", mappedBy="film")
   **/
  protected $seances;

  public function __construct(){
    $this->seances = new ArrayCollection();
  }

  public function getId(){
    return $this->id;
  }
  public function getTitle(){
    return $this->title;
  }
  public function setTitle($title){
    $this->title = $title;
  }
  public function getReleaseDate(){
    return $this->release_date;
  }
  public function setReleaseDate($release_date){
    $this->release_date = $release_date;
  }
  public function getDuration(){
    return $this->duration;
  }
  public function setDuration($duration){
    $this->duration = $duration;
  }

  public function getSeances(){
    return $this->seances;
  }
  public function addSeance($seance){
    $this->seances[] = $seance;
  }
  
}