<?php namespace Kepler12\Bad;

/**
*  A sample class
*
*  Use this section to define what this class is doing, the PHPDocumentator will use this
*  to automatically generate an API documentation using this information.
*
*  @author yourname
*/
class Result {

   /**  @var string $result define here what this variable is for, do this for every instance variable */
   public $results;
   public $rules;
   public $success;
   public $data;

   public function __construct($rules, $results, $data) {
       $this->results = $results;
       $this->rules = $rules;
       $this->data = $data;
       $this->success = false;
   }

}
