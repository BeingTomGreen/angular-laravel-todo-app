<?php

class TaskAPIController extends BaseController {

  public function __construct(TaskRepository $taskRepo)
  {
    $this->taskRepo = $taskRepo;
  }

  public function index()
  {
    return Response::json($this->taskRepo->all(), 200);
  }

  public function store()
  {
    return Response::json($this->taskRepo->store(Input::all()), 200);
  }

}