<?php

namespace Workflow\Contracts;


/**
 * Interface QueryFactory
 * @package Workflow\Contracts
 */
interface QueryFactory
{
    /**
     * QueryFactory constructor.
     *
     * @param Subject $subject
     */
    public function __construct(Subject $subject);

    /**
     * @param string       $query
     * @param Who|null     $who
     * @param Context|null $context
     *
     * @return Query
     */
    public function create(string $query, Who $who = null, Context $context = null): Query;
}