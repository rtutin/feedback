<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Feedback;

interface FeedbackRepository
{
    /**
    *
    * @param Feedback $feedback
    * @return Feedback
    */
    public function save(Feedback $feedback): Feedback;

    /**
    *
    * @param int $id
    * @return Feedback|null
    */
    public function find(int $id): ?Feedback;

    /**
    *
    * @return iterable<Feedback>
        */
    public function findAll(): iterable;

    /**
    *
    * @param Feedback $feedback
    * @return bool
    */
    public function delete(Feedback $feedback): bool;
}
