<?php
namespace App\Domain\Factories;

use App\Domain\Entities\Feedback;

class FeedbackFactory
{
    /**
     *
     * @param string $name
     * @param string $phone
     * @param string $message
     * @return Feedback
     */
    public static function create(string $name, string $phone, string $message): Feedback
    {
        return new Feedback($name, $phone, $message);
    }
}
