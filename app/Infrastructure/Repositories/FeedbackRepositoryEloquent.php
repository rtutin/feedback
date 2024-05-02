<?php
namespace App\Infrastructure\Repositories;

use App\Domain\Entities\Feedback;
use App\Domain\Repositories\FeedbackRepository;

class FeedbackRepositoryEloquent implements FeedbackRepository
{
    /**
     *
     * @param Feedback $feedback
     * @return Feedback
     */
    public function save(Feedback $feedback): Feedback
    {
        $model = new \App\Models\Feedback([
            'name' => $feedback->getName(),
            'phone' => $feedback->getPhone(),
            'message' => $feedback->getMessage()
        ]);

        $model->save();
        $feedback->setId($model->id);

        return $feedback;
    }

    /**
     *
     * @param int $id
     * @return Feedback|null
     */
    public function find(int $id): ?Feedback
    {
        $model = \App\Models\Feedback::find($id);
        if ($model === null) {
            return null;
        }

        return new Feedback($model->name, $model->phone, $model->message);
    }

    /**
     *
     * @return iterable<Feedback>
     */
    public function findAll(): iterable
    {
        $models = \App\Models\Feedback::all();
        $feedbacks = [];

        foreach ($models as $model) {
            $feedbacks[] = new Feedback($model->name, $model->phone, $model->message);
        }

        return $feedbacks;
    }

    /**
     *
     * @param Feedback $feedback
     * @return bool
     */
    public function delete(Feedback $feedback): bool
    {
        $result = \App\Models\Feedback::destroy($feedback->getId());
        return $result > 0;
    }
}
