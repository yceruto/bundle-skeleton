<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

/**
 * @link https://symfony.com/doc/current/bundles/best_practices.html#services
 */
return static function (ContainerConfigurator $container): void {
    $container
        ->parameters()
            // ->set('acme_param_name', 'param_value');
    ;
    $container
        ->services()
            // ->set('acme_service_name', 'service_class')
    ;
};
