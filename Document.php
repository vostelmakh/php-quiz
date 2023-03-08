<?php

declare(strict_types=1);

namespace App;

class Document {
    /**
     * @param string $name
     */
    public function __construct(
        private string $name
    ) {
    }

    /**
     * @return string
     */
    public function getTitle(): string 
    {
        $db = $this->getDatabaseInstance();
        
        $query = $db->prepare('SELECT title FROM document WHERE name = ?');
        $query->execute([$this->name]);

        return $query->fetchColumn();
    }

    /**
     * @return string
     */
    public function getContent(): string {
        $db = $this->getDatabaseInstance();

        $query = $db->prepare('SELECT content FROM document WHERE name = ?');
        $query->execute([$this->name]);

        return $query->fetchColumn();
    }

    /**
     * @return Database
     */
    private function getDatabaseInstance(): Database
    {
        return Database::getInstance();
    }
}
