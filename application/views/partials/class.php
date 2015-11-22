<div class="col-sm-12" id="class">
  <div class="col-sm-6" id="left">
    <h2>Due</h2>
    <div class="col-sm-12" id="due">
      <ng-repeat="person in people">
        <li>{{person.name}}</li>
      </ng-repeat>
      <span><h3>Homework 1: </h3><p>September 1</p><br></span>
      <h3>Homework 2: </h3><p>September 2<br></p>
    </div>
  </div>
  <div class="col-sm-6" id="center">
    <h2>Announcements</h2>
    <div class="col-sm-12" id="messages">
      <p>admin/</p><h3>Welcome to Slate</h3><br>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6" id="right">
      <h2>Grades</h2>
      <div class="col-sm-12" id="grades">
        <h3>Tests:</h3><p> 100%</p><br>
        <h3>Homework: </h3><p> 90%</p><br>
      </div>
    </div>
    <div class="col-sm-6" id="links">
      <h2>Course Content</h2>
      <div class="col-sm-12" id="ccontent">
        <h3>Syllabus</h3><br>
        <h3>Links and stuff</h3><br>
        <h3>More Links</h3><br>
      </div>
    </div>
</div>
</div>