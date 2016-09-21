@extends('templates.default')
@section('content')
  <div ng-app="todoApp" ng-controller="todoController">
    <h1>Todo App</h1>
    <div class="row">
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Title" ng-model="todo.title">
        <button class="btn primary" ng-click="addTodo()">Add</button>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <table class="table table-striped">
          <tr ng-repeat="todo in todos">
            <td><input type="checkbox" name="" id="" ng-true-value="1" ng-false-value="0" ng-model="todo.done" ng-change="updateTodo(todo)"></td>
            <td><% todo.title %></td>
            <td><button class="btn btn-danger btn-xs" ng-click="deleteTodo($index)"><span class="glyphicon glyphicon-trash" ></span></button></td>
          </tr>
        </table>

      </div>
    </div>
  </div>
@stop
