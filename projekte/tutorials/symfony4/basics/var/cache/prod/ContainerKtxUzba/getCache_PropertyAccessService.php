<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cache.property_access' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/property-access/PropertyAccessorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/property-access/PropertyAccessor.php';

return $this->privates['cache.property_access'] = \Symfony\Component\PropertyAccess\PropertyAccessor::createCache('Xqdzoy+S2j', NULL, $this->getParameter('container.build_id'), ($this->privates['monolog.logger.cache'] ?? $this->load('getMonolog_Logger_CacheService.php')));
