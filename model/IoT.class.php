<?php


/**
 * Class IoT.class IOT model
 */
class IoT
{
    //Variables
    private int $id;
    private string $name;
    private string $description;
    private string $number;
    private string $type;
    private float $price;
    private float $temperatureStart = 0;
    private float $temperatureEnd = 0;
    private int $function_duration = 0;
    private int $status = 1;
    private float $number_of_data_sent = 0;


    /**
     * IoT.class constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getTemperatureStart(): float
    {
        return $this->temperatureStart;
    }

    /**
     * @param float $temperatureStart
     */
    public function setTemperatureStart(float $temperatureStart): void
    {
        $this->temperatureStart = $temperatureStart;
    }

    /**
     * @return float
     */
    public function getTemperatureEnd(): float
    {
        return $this->temperatureEnd;
    }

    /**
     * @param float $temperatureEnd
     */
    public function setTemperatureEnd(float $temperatureEnd): void
    {
        $this->temperatureEnd = $temperatureEnd;
    }

    /**
     * @return int
     */
    public function getFunctionDuration(): int
    {
        return $this->function_duration;
    }

    /**
     * @param int $function_duration
     */
    public function setFunctionDuration(int $function_duration): void
    {
        $this->function_duration = $function_duration;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return float
     */
    public function getNumberOfDataSent(): float
    {
        return $this->number_of_data_sent;
    }

    /**
     * @param float $number_of_data_sent
     */
    public function setNumberOfDataSent(float $number_of_data_sent): void
    {
        $this->number_of_data_sent = $number_of_data_sent;
    }



}