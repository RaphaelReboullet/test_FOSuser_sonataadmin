<?php
/**
 * Created by PhpStorm.
 * User: raphael
 * Date: 16/12/18
 * Time: 15:36
 */

namespace App\Entity;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $name;
    /**
     * @ORM\Column(type="string", length=255)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $firstname;
    /**
     * @ORM\Column(type="date")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $birthdate;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    public function getName(): ?string
    {
        return $this->name;
    }
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }
    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;
        return $this;
    }
    public function getBirthdate(): ?\DateTimeInterface
    {
        return $this->birthdate;
    }
    public function setBirthdate(\DateTimeInterface $birthdate): self
    {
        $this->birthdate = $birthdate;
        return $this;
    }


}