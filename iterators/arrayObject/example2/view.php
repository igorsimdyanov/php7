<?php


class View extends ArrayObject
{
    const DEFAULT_TEMPLATE_FILE = 'default_template.php';
    protected $_templateFile;
    
    /**
     * Constructor
     */ 
    public function __construct(array $fields = array(), $templateFile = self::DEFAULT_TEMPLATE_FILE)
    {
        parent::__construct($fields, ArrayObject::ARRAY_AS_PROPS);
        $this->setTemplateFile($templateFile);
    }
    
    /**
     * Set the template file
     */
    public function setTemplateFile($templateFile)
    {
        if (!file_exists($templateFile) || !is_readable($templateFile)) {
            throw new InvalidArgumentException('The specified template file is invalid.');
        }
        $this->_templateFile = $templateFile;
    }
    
    /**
     * Get the template file
     */
    public function getTemplateFile()
    {
        return $this->_templateFile;
    }
    
    /**
     * Reset the template file to the default one
     */
    public function resetTemplateFile()
    {
        $this->_templateFile = self::DEFAULT_TEMPLATE_FILE;
    }
      
    /**
     * Render the template file
     */
    public function render()
    {
        $fields = $this->getArrayCopy();
        /**
         * Imports variables into the current symbol table from an array
         */
        extract($fields);
        include $this->_templateFile;
        /**
         * Получить содержимое текущего буфера и удалить его
         * ob_get_clean() по сути выполняет ob_get_contents() и ob_end_clean().
         */
        return ob_get_clean();
    }     
}