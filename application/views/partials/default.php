<div class="col-sm-9" id="classes">
        <div id="top" ng-controller="PeopleCtrl">
          <div ng-repeat="person in people">
            <div class="col-sm-4 item" id="item">
              <h2>{{person.className}}</h2>
              <p>{{person.teacherName}}</p>
              <p>{{person.time}}</p>
              <p>{{person.notifications}}</p>
              <button class="btn btn-outline"><a href="#/class">Enter</a></button>
            </div>
          </div>
<!--
            <div class="col-sm-4 item" id="item1">
                <h2>Class 1</h2>
                <p>All the info for the class goes here.</p>
              <button class="btn btn-outline" ng-click="loadPeople()"><a>Enter</a></button>
            </div>
            <div class="col-sm-4 item" id="item2">

            </div>
            <div class="col-sm-4 col-sm-offset- item" id="item3">
                <h2>Class 3</h2>
            </div>
        </div>
        <div id="bottom">
            <div class="col-sm-4 item" id="item4">
                <h2>Class 4</h2>
            </div>
            <div class="col-sm-4 col-sm-offset- item" id="item5">
                <h2>Class 3</h2>
            </div>
            <div class="col-sm-4 item" id="item6">
                <h2>Class 4</h2>
            </div>
-->
        </div>
</div>