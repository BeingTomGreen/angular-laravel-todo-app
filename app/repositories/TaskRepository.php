<?php

class TaskRepository {

  public function all()
  {
    return Task::all();
  }

  public function store($input)
  {
    Task::create($input)->save();
  }

}