<?php

/**
 * poldixd/contao-fa-list-types
 *
 * Copyright (c) 2016 Nils Poltmann
 *
 * @copyright 2016 Nils Poltmann
 * @author Nils Poltmann
 * @package contao-fa-list-types
 * @license MIT
 */

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'poldixd',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'poldixd\FaListTypes\FaListTypesInit' => 'system/modules/fa-list-types/classes/FaListTypesInit.php',
));
