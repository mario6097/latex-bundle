<?php

namespace BobV\LatexBundle\Latex\Element;

use BobV\LatexBundle\Latex\LatexElement;

/**
 * Class Listing
 * Base list element
 *
 * @author BobV
 */
class Listing extends LatexElement
{

  /**
   * Constructor of the listing element, also defines the defaults
   *
   * @param array $list
   * @param bool  $enumerate If set, use enumerate instead of itemize
   */
  public function __construct(array $list, bool $enumerate = false) {
    // Define defaults
    $this->template = '@BobVLatex/Element/listing.tex.twig';
    $this->params   = array(
        'list'           => $list,
        'extra_commands' => array(),
        'enumerate'      => $enumerate,
    );
  }

}
