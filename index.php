<?php

/**
 * @defgroup plugins_generic_advancedSearch Advanced Search plugin
 */

/**
 * @file index.php
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file LICENSE.
 *
 * @ingroup plugins_generic_advancedSearch
 * @brief Wrapper for the Advanced Search plugin
 *
 */

require_once('AdvancedSearchPlugin.inc.php');
return new AdvancedSearchPlugin();
