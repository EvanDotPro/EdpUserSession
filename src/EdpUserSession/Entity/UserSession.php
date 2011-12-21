<?php

namespace EdpUserSession\Entity;

use Doctrine\ORM\Mapping as ORM,
    EdpCommon\Model\ModelAbstract;

/**
 * @ORM\Entity
 */
class UserSession extends ModelAbstract
{
    /**
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="EdpUser\Model\UserInterface")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     */
    private $user;

    /**
     * @ORM\Column(name="session_data", type="string")
     */
    private $sessionData;

    /**
     * Get user.
     *
     * @return user
     */
    public function getUser()
    {
        return $this->user;
    }
 
    /**
     * Set user.
     *
     * @param $user the value to be set
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }
 
    /**
     * Get session data.
     *
     * @return string
     */
    public function getSessionData()
    {
        return $this->sessionData;
    }
 
    /**
     * Set sessin data.
     *
     * @param string $sessionData the value to be set
     */
    public function setTwitterUsername($sessionData)
    {
        $this->sessionData = $sessionData;
        return $this;
    }
}
