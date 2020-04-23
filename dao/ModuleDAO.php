<?php
include 'connection/Connection.php';
include 'IDAO.php';

/**
 * Class ModuleDAO model of IoT.class Module device
 */
class ModuleDAO extends IDAO
{
    /**
     * Creer ou sauvergarder Module IOT a la base des donnees
     * @param $obj l'objet pour sauvergarder ou creer
     */
    public function save($obj): bool
    {
        if($obj instanceof IoT){
            //Protection de SQL injection
            $data = [
                'name' => $obj->getName(),
                'number' => $obj->getNumber(),
                'description' => $obj->getDescription(),
                'type' => $obj->getType(),
                'temperature_start' => $obj->getTemperatureStart(),
                'temperature_end' => $obj->getTemperatureEnd(),
                'function_duration' => $obj->getFunctionDuration(),
                'status' => $obj->getStatus(),
                'number_of_data_send' => $obj->getNumberOfDataSent()
            ];
            $stmt = $this->connection->prepare("INSERT INTO `iot`(`name`, `number`, `description`, `type`, `temperature_start`, `temperature_end`, `function_duration`, `status`, `number_of_data_sent`) VALUES (:name, :number, :description,:type, :temperature_start, :temperature_end, :function_duration, :status, :number_of_data_send)");
            $stmt->execute($data);
            return true;
        }
        else{
            //Do nothing
            return false;
        }
    }

    /**
     * Trouver un Iot objet grace a id de cette objet dans la base de données
     * @param $id id de l'objet a trouver
     * @return IoT type de l'objet a trouver
     */
    public function findByid($id): IoT
    {
        $data = [
            'id' => $id
        ];
        $statement = "";
        $stmt = $this->connection->prepare("SELECT * FROM `iot` WHERE id=:id");
        $result = $stmt->execute($data);
        $iot = new IoT();
        while ($row = $stmt->fetch()) {
            $iot->setName($row["name"]);
            $iot->setType($row["type"]);
            $iot->setFunctionDuration($row["function_duration"]);
            $iot->setNumber($row["number"]);
            $iot->setStatus($row["status"]);
            $iot->setTemperatureStart($row["temperature_start"]);
            $iot->setTemperatureEnd($row["temperature_end"]);
            $iot->setNumberOfDataSent($row["number_of_data_sent"]);

        }
        return $iot;
    }

    /**
     * Trouver tous les Iot objets dans la base de données
     */
    public function findAll()
    {
        // TODO: Implement findAll() method.
        return null;
    }

    /**
     * Supprimer un Iot objet grace a id de cette objet dans la base de données
     * @param $id id de l'objet pour supprimer
     * @return IoT type de l'objet pour supprimer
     */
    public function deleteById($id): void
    {
        // TODO: Implement deleteById() method.
    }

    /**
     * Supprimer tous les Iot objets  dans la base de données
     */
    public function deleteAll(): void
    {
        // TODO: Implement deleteAll() method.
    }
}