<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-named-route')
    ->usePackage('larakit/sf-angular')
    ->ngModule('ngNamedRoute')
    ->setSourceDir('public')
    ->jsPackage('angular-named-route.js');
