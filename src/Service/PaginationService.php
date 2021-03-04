<?php 

namespace App\Service;

use Doctrine\Persistence\ObjectManager;

class PaginationService{
    private $entityClass;
    private $limit = 10;
    private $currentPage = 1;
    private $manager;

    public function __construc(ObjectManager $manager){
        $this->manager = $manager;
    }

    public function getPages(){
        //connaitre le total des enregistrements de la table
        $repo = $this->manager->getRepository($this->entityClass);
        $total = count($repo->findAll());

        //faire la division, l'arrondi et le renvoyer
        $pages = ceil($total / $this->limit);

        return $pages;

    }
    public function getData(){
        // calculer l'offset
        $offset = $this->currentPage * $this->limit - $this->limit;

        // demander au repository de trouver les éléments

        $repo = $this->manager->getRepository($this->entityClass);
        $data = $repo->findBy([],[],$this->limit, $offset);

        //renvoyer les éléments en question
        return $data;
    }


    public function getDate(){

    }
    public function setPage($Page){
        $this->currentPage = $Page;

        return $this;
    }

    public function getPage(){
        return $this->currentPage;
    }

    public function setLimit($limit){
        $this->limit = $limit;

        return $this;
    }

    public function getLimit(){
        return $this->limit;
    }

    public function setEntityClass($entityClass){
        $this->entityClass = $entityClass;
        return $this;
    }

    public function getEntityClass(){
        return $this->entityClass;
    }
}