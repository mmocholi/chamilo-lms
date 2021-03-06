<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity
 */
class Session
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_coach", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $idCoach;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=150, precision=0, scale=0, nullable=false, unique=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_courses", type="smallint", precision=0, scale=0, nullable=false, unique=false)
     */
    private $nbrCourses;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_users", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $nbrUsers;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_classes", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $nbrClasses;

    /**
     * @var integer
     *
     * @ORM\Column(name="session_admin_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $sessionAdminId;

    /**
     * @var integer
     *
     * @ORM\Column(name="visibility", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $visibility;

    /**
     * @var integer
     *
     * @ORM\Column(name="session_category_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $sessionCategoryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="promotion_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $promotionId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="display_start_date", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $displayStartDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="display_end_date", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $displayEndDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="access_start_date", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $accessStartDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="access_end_date", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $accessEndDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="coach_access_start_date", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $coachAccessStartDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="coach_access_end_date", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $coachAccessEndDate;

    /**
     * @ORM\OneToMany(targetEntity="CItemProperty", mappedBy="session")
     **/
    private $items;

    /**
     *
     */
    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idCoach
     *
     * @param integer $idCoach
     * @return Session
     */
    public function setIdCoach($idCoach)
    {
        $this->idCoach = $idCoach;

        return $this;
    }

    /**
     * Get idCoach
     *
     * @return integer
     */
    public function getIdCoach()
    {
        return $this->idCoach;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Session
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set nbrCourses
     *
     * @param integer $nbrCourses
     * @return Session
     */
    public function setNbrCourses($nbrCourses)
    {
        $this->nbrCourses = $nbrCourses;

        return $this;
    }

    /**
     * Get nbrCourses
     *
     * @return integer
     */
    public function getNbrCourses()
    {
        return $this->nbrCourses;
    }

    /**
     * Set nbrUsers
     *
     * @param integer $nbrUsers
     * @return Session
     */
    public function setNbrUsers($nbrUsers)
    {
        $this->nbrUsers = $nbrUsers;

        return $this;
    }

    /**
     * Get nbrUsers
     *
     * @return integer
     */
    public function getNbrUsers()
    {
        return $this->nbrUsers;
    }

    /**
     * Set nbrClasses
     *
     * @param integer $nbrClasses
     * @return Session
     */
    public function setNbrClasses($nbrClasses)
    {
        $this->nbrClasses = $nbrClasses;

        return $this;
    }

    /**
     * Get nbrClasses
     *
     * @return integer
     */
    public function getNbrClasses()
    {
        return $this->nbrClasses;
    }

    /**
     * Set sessionAdminId
     *
     * @param integer $sessionAdminId
     * @return Session
     */
    public function setSessionAdminId($sessionAdminId)
    {
        $this->sessionAdminId = $sessionAdminId;

        return $this;
    }

    /**
     * Get sessionAdminId
     *
     * @return integer
     */
    public function getSessionAdminId()
    {
        return $this->sessionAdminId;
    }

    /**
     * Set visibility
     *
     * @param integer $visibility
     * @return Session
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Get visibility
     *
     * @return integer
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set sessionCategoryId
     *
     * @param integer $sessionCategoryId
     * @return Session
     */
    public function setSessionCategoryId($sessionCategoryId)
    {
        $this->sessionCategoryId = $sessionCategoryId;

        return $this;
    }

    /**
     * Get sessionCategoryId
     *
     * @return integer
     */
    public function getSessionCategoryId()
    {
        return $this->sessionCategoryId;
    }

    /**
     * Set promotionId
     *
     * @param integer $promotionId
     * @return Session
     */
    public function setPromotionId($promotionId)
    {
        $this->promotionId = $promotionId;

        return $this;
    }

    /**
     * Get promotionId
     *
     * @return integer
     */
    public function getPromotionId()
    {
        return $this->promotionId;
    }

    /**
     * Set displayStartDate
     *
     * @param \DateTime $displayStartDate
     * @return Session
     */
    public function setDisplayStartDate($displayStartDate)
    {
        $this->displayStartDate = $displayStartDate;

        return $this;
    }

    /**
     * Get displayStartDate
     *
     * @return \DateTime
     */
    public function getDisplayStartDate()
    {
        return $this->displayStartDate;
    }

    /**
     * Set displayEndDate
     *
     * @param \DateTime $displayEndDate
     * @return Session
     */
    public function setDisplayEndDate($displayEndDate)
    {
        $this->displayEndDate = $displayEndDate;

        return $this;
    }

    /**
     * Get displayEndDate
     *
     * @return \DateTime
     */
    public function getDisplayEndDate()
    {
        return $this->displayEndDate;
    }

    /**
     * Set accessStartDate
     *
     * @param \DateTime $accessStartDate
     * @return Session
     */
    public function setAccessStartDate($accessStartDate)
    {
        $this->accessStartDate = $accessStartDate;

        return $this;
    }

    /**
     * Get accessStartDate
     *
     * @return \DateTime
     */
    public function getAccessStartDate()
    {
        return $this->accessStartDate;
    }

    /**
     * Set accessEndDate
     *
     * @param \DateTime $accessEndDate
     * @return Session
     */
    public function setAccessEndDate($accessEndDate)
    {
        $this->accessEndDate = $accessEndDate;

        return $this;
    }

    /**
     * Get accessEndDate
     *
     * @return \DateTime
     */
    public function getAccessEndDate()
    {
        return $this->accessEndDate;
    }

    /**
     * Set coachAccessStartDate
     *
     * @param \DateTime $coachAccessStartDate
     * @return Session
     */
    public function setCoachAccessStartDate($coachAccessStartDate)
    {
        $this->coachAccessStartDate = $coachAccessStartDate;

        return $this;
    }

    /**
     * Get coachAccessStartDate
     *
     * @return \DateTime
     */
    public function getCoachAccessStartDate()
    {
        return $this->coachAccessStartDate;
    }

    /**
     * Set coachAccessEndDate
     *
     * @param \DateTime $coachAccessEndDate
     * @return Session
     */
    public function setCoachAccessEndDate($coachAccessEndDate)
    {
        $this->coachAccessEndDate = $coachAccessEndDate;

        return $this;
    }

    /**
     * Get coachAccessEndDate
     *
     * @return \DateTime
     */
    public function getCoachAccessEndDate()
    {
        return $this->coachAccessEndDate;
    }
}
