function TasksController ($scope, $http) {
  // Grab out Task list from the API and assign it to the scope
  $http.get('/api/v1/tasks').success(function (tasks) {
    $scope.tasks = tasks;
  });

  /**
   * Return the number of remaining Tasks
   *
   * @return {int} The number of uncompleted Tasks
   */
  $scope.remaining = function() {
    // Initialize a variable to hold the count of remaining Tasks
    var count = 0;

    // Loop through all of the Tasks
    angular.forEach($scope.tasks, function(task) {
      // If the Task is not completed add 1 to count
      count += task.completed ? 0 : 1;
    });

    // Return the count
    return count;
  };

  /**
   * Add a new Task
   *
   * @return void
   */
  $scope.addTask = function function_name () {
    // Store the new Task object
    var task = {
      title: $scope.newTaskTitle,
      completed: false
    };

    // Push the new Task to the scope
    $scope.tasks.push(task);

    // Push the new task to the API
    $http.post('/api/v1/tasks', task);
  }

}