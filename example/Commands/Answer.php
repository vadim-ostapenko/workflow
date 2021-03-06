<?php

namespace WorkflowExample\Commands;


use WorkflowExample\Context\AnswerContext;

class Answer extends LessonCommand
{
    public function handle()
    {
        if (!$this->context instanceof AnswerContext) {
            throw new \InvalidArgumentException('Wrong context for command "Answer"');
        }

        printf(
            '%s executed command: answer. Question #%s, answer: %s ',
            implode(' ', $this->who->getRoles()),
            $this->context->question,
            $this->context->answer
        );
        print PHP_EOL . PHP_EOL;
    }
}