<?php

/**
 * This file is part of the ApiGen (http://apigen.org)
 *
 * For the full copyright and license information, please view
 * the file license.md that was distributed with this source code.
 */

namespace ApiGen\Generator\TemplateGenerators;

use ApiGen\Configuration\Theme\ThemeConfigOptions as TCO;
use ApiGen\Generator\TemplateGenerator;
use ApiGen\Templating\TemplateFactory;


class OverviewGenerator implements TemplateGenerator
{

	/**
	 * @var TemplateFactory
	 */
	private $templateFactory;


	public function __construct(TemplateFactory $templateFactory)
	{
		$this->templateFactory = $templateFactory;
	}


	public function generate()
	{
		$template = $this->templateFactory->createForType(TCO::OVERVIEW);
		$template->save();
	}

}
