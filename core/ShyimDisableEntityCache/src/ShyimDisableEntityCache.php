<?php declare(strict_types=1);

namespace ShyimDisableEntityCache;

use Shopware\Core\Framework\DataAbstractionLayer\Cache\CachedEntityAggregator;
use Shopware\Core\Framework\DataAbstractionLayer\Cache\CachedEntityReader;
use Shopware\Core\Framework\DataAbstractionLayer\Cache\CachedEntitySearcher;
use Shopware\Core\Framework\Plugin;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ShyimDisableEntityCache extends Plugin
{
    public function build(ContainerBuilder $container): void
    {
        $container->removeDefinition(CachedEntitySearcher::class);
        $container->removeDefinition(CachedEntityAggregator::class);
        $container->removeDefinition(CachedEntityReader::class);
    }

}
