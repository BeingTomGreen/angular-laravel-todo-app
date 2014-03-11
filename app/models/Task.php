<?php

class Task extends Eloquent {

  // Attributes which can be mass assigned
  protected $fillable = ['title', 'completed'];

  /** Accessors **/

  /**
   * Force the completed attribute to return as a boolean
   *
   * @param int $value The completed attribute of this model
   *
   * @return bool Is the Task completed
   */
  public function getCompletedAttribute($value)
  {
    return (boolean) $value;
  }

}