
<h1>hello</h1>
<?php
  foreach ($moviedata as $mvdata) {
      var_dump($mvdata);
  }
?>
<ul ng-init="positions = <?php echo htmlspecialchars(json_encode($mvdata)); ?>">
    <li ng-repeat="position in positions | filter:query">
       <p>{{position.name}}</p>
    </li>
</ul>
