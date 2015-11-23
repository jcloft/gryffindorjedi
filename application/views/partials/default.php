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
        </div>
</div>