<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Factories\FeedbackFactory;
use App\Domain\Repositories\FeedbackRepository;

class FeedbackController extends Controller
{
    protected $feedbackRepository;

    // Инъекция репозитория через конструктор
    public function __construct(FeedbackRepository $feedbackRepository)
    {
        $this->feedbackRepository = $feedbackRepository;
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Создание экземпляра Feedback с помощью фабрики
        $feedback = FeedbackFactory::create(
            $validated['name'],
            $validated['phone'],
            $validated['message']
        );

        // Сохранение сущности Feedback с помощью репозитория
        $this->feedbackRepository->save($feedback);

        return back()->with('success', 'Feedback has been sent successfully!');
    }
}
