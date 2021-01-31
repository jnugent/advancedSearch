<?php

/**
 * @file AdvancedSearchPlugin.inc.php
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file LICENSE.
 *
 * @class AdvancedSearchPlugin
 *
 * @brief This plugin provides additional filters for searching submissions within OJS.
 */


import('lib.pkp.classes.plugins.GenericPlugin');

class AdvancedSearchPlugin extends GenericPlugin {
	/**
	 * @copydoc Plugin::register()
	 */
	function register($category, $path, $mainContextId = null) {
		if (parent::register($category, $path, $mainContextId)) {
			if ($this->getEnabled()) {
				HookRegistry::register('TemplateManager::display', array($this, 'includeAdvancedSearchCSS'));
				HookRegistry::register('Templates::Search::SearchResults::AdditionalFilters', array($this, 'handleAdditionalFilters'));
			}
			return true;
		}
		return false;
	}

	/**
	 * Return the location of the plugin's CSS file
	 * @return string
	 */
	function getStyleSheet() {
		return $this->getPluginPath() . '/css/advancedSearch.css';
	}

	/**
	 * Get the name of the settings file to be installed on new press
	 * creation.
	 * @return string
	 */
	function getContextSpecificPluginSettingsFile() {
		return $this->getPluginPath() . '/settings.xml';
	}

	/**
	 * @copydoc PKPPlugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.generic.advancedSearch.displayName');
	}

	/**
	 * @copydoc PKPPlugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.generic.advancedSearch.description');
	}

	/**
	 * Hook to add CSS when it is required.
	 * @param $hookName string
	 * @param $params array
	 */
	 function includeAdvancedSearchCSS($hookName, $params) {
		$templateMgr =& $params[0];
		$template =& $params[1];
		$request = PKPApplication::get()->getRequest();

		// Assign our private stylesheet, for front ends only.
		switch ($template) {
			case 'frontend/pages/search.tpl':
				$templateMgr->addStyleSheet(
					'advancedSearch',
					$request->getBaseUrl() . '/' . $this->getStyleSheet(),
					array(
							'contexts' => array('frontend')
						)
				);
			break;
		}

		return false;
	}

	/**
	 * Hook against the original search template and inject additional filters.
	 * @param $hookName string
	 * @param $params array
	 */
	 function handleAdditionalFilters($hookName, $params) {
		$templateMgr =& $params[1];
		$request = PKPApplication::get()->getRequest();
		$templateMgr->display($this->getTemplateResource('frontend/pages/search.tpl'));
		return false;
	}
}
