<?php declare(strict_types=1);

namespace Image;

final class Scanner
{
    /** @var array */
    private $options;

    public function __construct(array $options)
    {


        $this->options = $options;
    }
}