<?php

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\DowngradeLevelSetList;

return RectorConfig::configure()
    ->withPaths(['src'])
    ->withSets([
        DowngradeLevelSetList::DOWN_TO_PHP_71,
    ])
    // A. whole set
//    ->withPreparedSets(typeDeclarations: true)
//    // B. or few rules
//    ->withRules([
//        TypedPropertyFromAssignsRector::class
//    ])
;
