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

namespace poldixd\FaListTypes;

/**
 *
 */
class FaListTypesInit  extends \BackendModule
{
    /**
     * [$instance description]
     * @var null
     */
    protected static $instance = null;

    /**
     * [__construct description]
     */
    public function __construct()
    {
        $this->import('BackendUser', 'User');
        parent::__construct();
    }


    /**
     * [compile description]
     * @return [type] [description]
     */
    protected function compile(){}


    /**
     * [getInstance description]
     * @return [type] [description]
     */
    public static function getInstance()
    {
        if (self::$instance === null)
        {
            self::$instance = new FaListTypesInit();
        }
        return self::$instance;
    }

    /**
     * [initDca description]
     * @param  [type] $strDcaName [description]
     * @return [type]             [description]
     */
    public function initDca($strDcaName)
    {
        if ($strDcaName == 'tl_layout')
        {
            array_push(
                $GLOBALS['TL_DCA']['tl_layout']['fields']['framework']['options'],
                'fa-list-types-v321.min.css'
            );
        }
    }
}