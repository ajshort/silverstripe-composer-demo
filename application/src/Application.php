<?php
/**
 *
 */
class Application extends \SilverStripe\Framework\Core\Application {

	/**
	 * Gets the absolute base path to the application.
	 */
	public function getBasePath() {
		return dirname(dirname(__DIR__));
	}

	/**
	 * Registers the modules for this application.
	 */
	protected function registerModules() {
		parent::registerModules();

		$base = $this->getBasePath();
		$app = dirname(__DIR__);

		$this->getModules()->addFromDetails('application', $app);
		$this->getModules()->addFromYaml("$app/modules.yml");
		$this->getModules()->addThemesFromDirectory("$base/themes");
	}

}
