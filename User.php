<?php 

declare(strict_types=1);

namespace App;

class User {
    /** array<Document> $documents */
    private array $documents;

    /**
     * @param string $name
     * 
     * @return void
     */
    public function createNewDocument(string $name): void {
        $this->documents[] = new Document($name);
    }

    /**
     * @return array<Documents>
     */
    public function getMyDocuments(): array {       
        return $this->documents;
    }

}