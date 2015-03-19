<?php

/*
 * Copyright © 2010 - 2014 Modo Labs Inc. All rights reserved.
 *
 * The license governing the contents of this file is located in the LICENSE
 * file located at the root directory of this distribution. If the LICENSE file
 * is missing, please contact sales@modolabs.com.
 *
 */

/**
 *   All module classes will subclass KGOModule
 *   modo_stack_exchange module id will be converted to ModoStackExchangeModule module class
 */

class ModoStackExchangeModule extends KGOModule {

    /**
     *   `initializeForPageConfigObjects_<page>` begins execution when a page is requested
     *   When ConfigObjects are used the page's object definition will come from a YAML configuration
     *       For the index page, this definition is first referenced in module.yaml but by convention will be defined in page-index.yaml
     *   There is also a similar method, `initializeForPage_<page>` which only accepts a $page parameter.
     *       This method can be used to generate a more dynamic set of objects in code and append them to the page manually
     */
    protected function initializeForPageConfigObjects_index(KGOUIPage $page, $objects) {
        if (!($feed = $this->getFeed())) {
            $this->setPageError($page, 'modo_stack_exchange.error.notConfigured');
            return;
        }
    }

}