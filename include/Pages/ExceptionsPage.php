<?php
namespace ScummVM\Pages;

class ExceptionsPage extends \ScummVM\Controller
{
    private $_template;

    /* Constructor. */
    public function __construct()
    {
        parent::__construct();
        $this->_template = 'components/exception.tpl';
    }

    /* Display the index page. */
    public function index($exception)
    {
        global $Smarty;

        return $this->renderPage(
            array(
                'title' => $Smarty->getConfigVars('exceptionsTitle'),
                'content_title' => $Smarty->getConfigVars('exceptionsContentTitle'),
                'exception' => $exception,
            ),
            $this->_template
        );
    }
}
