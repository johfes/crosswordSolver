<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(indexes={@ORM\Index(name="word_idx", columns={"word"})})
 */
class Word
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $word;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set word
     *
     * @param string $word
     *
     * @return Word
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    /**
     * Get word
     *
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }
    /**
     * @var string
     */
    private $begins_with;


    /**
     * Set beginsWith
     *
     * @param string $beginsWith
     *
     * @return Word
     */
    public function setBeginsWith($beginsWith)
    {
        $this->begins_with = $beginsWith;

        return $this;
    }

    /**
     * Get beginsWith
     *
     * @return string
     */
    public function getBeginsWith()
    {
        return $this->begins_with;
    }
}
