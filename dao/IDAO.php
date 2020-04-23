<?php

/**
 * Interface IDAO DAO Interface pour faire des interactions avec le base des données
 */
abstract class IDAO
{
    //PDO pour faire des queries( pour Dependecy injection )
    protected PDO $connection;
    /**
     * IDAO constructor.
     */
    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public abstract function save($obj) :bool;
    public abstract function findByid($id);
    public abstract function findAll();
    public abstract function deleteById($id): void;
    public abstract function deleteAll(): void;

}