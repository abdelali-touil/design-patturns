<?php

class Post {
    
    /**
     * Attributs of class
     */
    private $id;
    private $title;
    private $slug;
    private $comment;

    /**
     * @return $id
     */
    public function getId(): Int {
        return $this->id;
    }

    /**
     * @return $title
     */
    public function getTitle(): String {
        return $this->title;
    }

    /**
     * @param String $title
     * @return Post
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * @return $slug
     */
    public function getSlug(): String {
        return $this->slug;
    }

    /**
     * @param String $slug
     * @return Post
     */
    public function setSlug($slug): String {
        $this->slug = $slug;

        return $this;
    }
    
    /**
     * @return $comment
     */
    public function getComment(): String {
        return $this->comment;
    }

    /**
     * @param String $comment
     * @return Post
     */
    public function setComment($comment) {
        $this->comment = $comment;

        return $this;
    }
}