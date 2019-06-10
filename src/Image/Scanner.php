<?php declare(strict_types=1);

namespace Image;

use Symfony\Component\OptionsResolver\OptionsResolver;

final class Scanner
{
    /** @var array */
    private $options;

    public function __construct(array $options)
    {
        $this->options = $this->resolveOptions($options);
    }

    private function resolveOptions(array $options): array
    {
        $resolver = new OptionsResolver();
        $resolver
            ->setRequired(['output_dir'])
            ->setAllowedTypes('output_dir', 'string');

        return $resolver->resolve($options);
    }
}