<?php
namespace App\Domain\Entities;

class Feedback
{
    private int $id;
    private string $name;
    private string $phone;
    private string $message;

    /**
     *
     * @param string $name
     * @param string $phone
     * @param string $message
     */
    public function __construct(string $name, string $phone, string $message)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->message = $message;
    }

    /**
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     *
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     *
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     *
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }
}
