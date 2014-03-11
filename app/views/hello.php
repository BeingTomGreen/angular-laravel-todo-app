<!doctype html>
<html lang="en" ng-app>
<head>
  <meta charset="UTF-8">
  <title>Angular Todo Demo</title>
</head>

<body ng-controller="TasksController">

  <h1>
    Todos
    <small ng-if="remaining()">({{ remaining() }} remaining)</small>
  </h1>

  <input type="text" placeholder="Sort Tasks" ng-model="searchBox">

  <ul>
    <li ng-repeat="task in tasks | filter:searchBox">
      <input type="checkbox" ng-model="task.completed">
      {{ task.title }}
    </li>
  </ul>

  <form ng-submit="addTask()">
    <input type="text" placeholder="Add new Task" ng-model="newTaskTitle">
    <button type="submit">Add new Task</button>
  </form>

  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.min.js"></script>
  <script src="assets/javascript/main.js"></script>
</body>
</html>