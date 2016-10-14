<?php

/**
 * @Entity @Table(name="seances")
 **/
class Seance{
  /**
   * @var integer
   * @Id @Column(type="integer") @GeneratedValue
   */
  protected $id;

  /**
   * @var DateTime
   * @Column(type="datetime")
   */
  protected $showing;

  /**
   * @var Film
   * @ManyToOne(targetEntity="Film", inversedBy="seances")
   **/
  protected $film;

  public function getId(){
    return $this->id;
  }
  public function getShowing(){
    return $this->showing;
  }
  public function setShowing($showing){
    $this->showing = $showing;
  }
  public function setFilm($film){
    $this->film = $film;
  }


}