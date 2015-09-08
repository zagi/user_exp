<?php

namespace UserExpirance\Abstracts;

abstract User_Expirance_Abstract
{
    /**
     * Name of the user
     * @var string $name;
     */
    protected $name;
    /**
     * Surname of the user
     * @var string $surname;
     */
    protected $surname;
    /**
     * Email of the user
     * @var string $email
     */
    protected $email;
    /**
     * Message of the user
     * @var string $message
     */
    protected $message;
    /**
     * Rating of the user
     * @var int $rating
     */
    protected $rating;

    /**
     * Sets the name of the user
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        /**
         * if the given value is not empty we assign it to param
         */
        if(!empty($name)) {
            $this->name = $name;
        }
    }

    /**
     * Gets the name of the user
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the surname of the user
     * @param string $surname
     * @return void
     */
    public function setSurname(string $surname)
    {
        if(!empty($surname)) {
            $this->surname = $surname;
        }
    }

    /**
     * Gets the surname of the user
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the email of the user
     * @param string $email
     * @return void
     */
    public function setEmail(string $email)
    {
        if(!empty($email)) {
            $this->email = $email;
        }
    }

    /**
     * Gets the email of the user
     * @return string
     */
     public function getEmail()
     {
        return $this->email;
     }

     /**
      * Set the massage of the user
      * @param string $massage
      * @return void
      */
      public function setMassage(string $massage)
      {
          if(!empty($massage)) {
              $this->massage = $massage;
          }
      }

      /**
       * Get the massage of the user
       * @return string
       */
      public function getMassage()
      {
          return $this->massage;
      }

      /**
       * Set the rating of the user
       * @param int $rating
       * @return void
       */
      public function setRating($rating)
      {
          if(!empty($rating)) {
              $this->rating = $rating;
          }
      }

      /**
       * Get the rating of the user
       * @return int
       */
      public function getRating()
      {
          return $this->rating;
      }
}
