<?php
declare(strict_types=1);

namespace SetBased\Abc\Test;

use SetBased\Abc\Helper\Html;
use SetBased\Abc\HtmlElement;

class TestElement extends HtmlElement
{
  //--------------------------------------------------------------------------------------------------------------------
  public function generateElement()
  {
    return Html::generateElement('test', $this->attributes);
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
