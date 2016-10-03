var app = angular.module('todoApp',['ngRoute'],function($interpolateProvider){
  $interpolateProvider.startSymbol('<%');
  $interpolateProvider.endSymbol('%>');
  });
app.controller('todoController',function($scope,$http){
  $scope.todos = [];
  $scope.init = function(){
    $http.get('http://localhost/ng-l5/ngl5/public/api/todos').success(function(data,status,headers,config){
      $scope.todos = data;
    });
  }
  $scope.addTodo = function(){
    $http.post('http://localhost/ng-l5/ngl5/public/api/todos',{
      title:$scope.todo.title,
      done:$scope.todo.done
    }).success(function(data,status,headers,config){
      $scope.todos.push(data);
    });
  }
  $scope.updateTodo = function(todo){
    $http.put('http://localhost/ng-l5/ngl5/public/api/todos/'+todo.id,{
      title:todo.title,
      done:todo.done
    }).success(function(data,status,headers,config){
      todo=data;
    });
  }
  $scope.deleteTodo = function(index){
    var todo = $scope.todos[index];
    $http.delete('http://localhost/ng-l5/ngl5/public/api/todos/'+todo.id).success(function(){
      $scope.todos.splice(index,1);
    });
  }
  $scope.init();
});

$(function(){
  $(".shw-pop").popover({
        html : true,
        trigger:'manual',
        placement:'auto right',
        container: "body",
        content: function() {
          return $(".rating-details").html();
        }
    }).on("mouseenter",function(){
      var _this = this;
      var mm = $(_this).attr('data-mid'); 
        angular.element(document.getElementById("popup-content")).scope().ratepopup(mm);

      $(this).popover("show");
      $(".popover").on("mouseleave", function () {
        $(_this).popover('hide');
    });
    }).on("mouseleave", function () {
        var _this = this;
        setTimeout(function () {
            if (!$(".popover:hover").length) {
                $(_this).popover("hide")
            }
        }, 100);
});
})
