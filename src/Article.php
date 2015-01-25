<?php
/**
 * Created by PhpStorm.
 * User: AntoineEisele
 * Date: 05/01/15
 * Time: 10:37
 */

namespace Unitato\Init;
/**
 * Class Article
 *
 * @package Unitato\Init
 *
 * @Entity
 *
 * @Table (name="article")
 */

class Article
{
    /**
     * @var int
     *
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="title", type="string", length=60)
     */
    private $title;

    /**
     * @var string
     *
     * @Column(name="slug", type="string", length=60)
     *
     */
    private $slug;

    /**
     * @var int
     *
     * @Column(name="status", type="smallint", length=1)
     */
    private $status;

    const STATUS_PENDING = 0;

    const STATUS_VALIDATED = 1;

    const STATUS_REMOVED = 2;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @throws Exception
     * @return $this
     */
    public function setTitle($title)
    {
        if (is_string($title))
        $this->title = $title;
        else
            throw new Exception ('Title must be STRING');
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @throws Exception
     * @return Article
     */
    public function setStatus($status)
    {
        if(in_array($status,[
            self::STATUS_PENDING,
            self::STATUS_REMOVED,
            self::STATUS_VALIDATED,
        ]))
        $this->status = $status;
        else
            throw new Exception('Status Not Valid !');

        return $this;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     * @return Article
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

}
