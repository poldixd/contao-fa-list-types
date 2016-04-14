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

$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('FaListTypes\FaListTypesInit', 'initDca');