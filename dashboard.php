<?php include 'includes/header-2.php'?>

<!-- Page Content -->
<!-- <div class="row "> -->
<div id="wrapper" class="dashboard col-md-12 col-sm-12  d-flex justify-content-center ">
    <div class="col-md-12 col-sm-12 align-content-center ">
        <button type="button" class="btn btn-success btn-lg d-flex justify-content-end float-right">Logout</button>

        <div class="row" id="tabs">
            <div class="col-md-12 ui-tabs"  >
                <ul class="ui-tabs-nav top-tabs-dash">
                    <li class="ui-tabs-collapsible text-center"><a href="#tabs-1">Schedule</a></li>
                    <li class="ui-tabs-collapsible text-center"><a href="#tabs-2">Profile</a></li>
                    <li class="ui-tabs-collapsible text-center"><a href="#tabs-3">Large button</a></li>
                </ul>
                <div id="tabs-1" class="ui-tabs-panel">                       
                    <iframe id="calendar" src="http://www.dsc.blackmirrordesign.com/calendar.php">
                    <p>Your browser does not support iframes.</p>
                    </iframe>
                </div>
                <div id="tabs-2" class="ui-tabs-panel">
                    <div id="accordion">
                        <h3 class="mb-2">GENERAL</h3>
                        <div class="col-md-10 align-self-end accordion-content ">
                            <form clsss="row">
                                <div class=" col-md-8 float-left p-0 m-0">
                                    <div class="form-group row mt-1 mb-0">
                                        <label for="exampleInputName" class="col-2 col-form-label">Name</label>
                                        <div class="col-md-10 float-right ">
                                            <input type="text" class="form-control" id="NameInput" aria-describedby="Full Name">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1 mb-0">
                                        <label for="exampleTextarea"  class="col-2 col-form-label">Professional Title</label>
                                        <div class="col-md-10 float-right ">
                                            <textarea class="form-control" id="exampleTextarea" rows="1"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1 mb-0">
                                        <label for="exampleSelect1"  class="col-2 col-form-label">Gender Identity</label>
                                        <div class="col-md-10 float-right ">
                                            <select class="form-control" id="exampleSelect1">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1 mb-0">
                                        <label for="exampleTextarea"  class="col-2 col-form-label">Quote(Optional)</label>
                                        <div class="col-md-10 float-right ">
                                            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1 mb-0">
                                        <label for="Telephone" class="col-2 col-form-label">Phone</label>
                                        <input type="telephone" class="form-control col-md-5 ml-3" id="Phone" aria-describedby="Phone">
                                        <label for="exampleTextarea " class="col-1 ml-2">EXT</label>
                                        <input type="telephone" class="form-control col-md-3  " id="phoneEXT" aria-describedby="EXT">
                                    </div>
                                    <div class="form-group row mt-1 mb-0">
                                        <label for="Telephone" class="col-2 col-form-label">Fax:</label>
                                        <div class="col-10 float-right">
                                            <input type="telephone" class="form-control" id="Phone" aria-describedby="Phone">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1 mb-0">
                                        <label for="exampleInputEmail1"  class="col-2 col-form-label">Email: </label>
                                        <div class="col-10 float-right">
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1 mb-0">
                                        <label for="exampleInputEmail1"  class="col-2 col-form-label">Website: </label>
                                        <div class="col-10 float-right">
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 float-right ">
                                    <div class="form-group">
                                        <img class="card-img-top" src="images/counselor.jpg" alt="">
                                        <!-- <label for="exampleInputFile">Edit</label> -->
                                        <button type="Edit" class="btn btn-secondary text-center">Edit</button>
                                        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                    </div>
                                </div>
                                <div class="saveButton float-right">
                                    <button type="submit" class="btn btn-secondary justify-content-end  mt-4">Save</button>
                                </div>
                            </form>
                        </div>
                        <h3 class="mb-2">OPERATIONS</h3>
                        <div class="col-md-10 align-self-end accordion-content ">
                            <div class="row">
                                <div class=" col-md-7 float-left">
                                    <div class="form-group row ">
                                        <label for="exampleFormControlSelect1" class=" col-md-2 col-form-label">Monday</label>
                                        <div class="col-md-4 float-right ml-4">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>12</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                            </select>
                                        </div>
                                        <label for="exampleFormControlSelect1" class=" col-md-1 col-form-label">to</label>
                                        <div class="col-md-4 float-right">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>12</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="exampleFormControlSelect1" class="col-md-2  col-form-label">Tuesday</label>
                                        <div class="col-md-4 float-right ml-4">
                                            <select class="form-control " id="exampleFormControlSelect1">
                                                <option>12</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                            </select>
                                        </div>
                                        <label for="exampleFormControlSelect1" class=" col-md-1  col-form-label">to</label>
                                        <div class="col-md-4 float-right">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>12</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="exampleFormControlSelect1" class="col-md-2 col-form-label">Wednesday</label>
                                        <div class="col-md-4 float-right  ml-4">
                                            <select class="form-control m-auto" id="exampleFormControlSelect1">
                                                <option>12</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                            </select>
                                        </div>
                                        <label for="exampleFormControlSelect1" class="col-md-1 col-form-label">to</label>
                                        <div class="col-md-4 float-right">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>12</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="exampleFormControlSelect1" class="col-md-2 col-form-label">Thursday</label>
                                        <div class="col-md-4 float-right  ml-4">
                                            <select class="form-control m-auto" id="exampleFormControlSelect1">
                                                <option>12</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                            </select>
                                        </div>
                                        <label for="exampleFormControlSelect1" class="col-md-1 col-form-label">to</label>
                                        <div class="col-md-4 float-right">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>12</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="exampleFormControlSelect1" class="col-md-2  col-form-label pr-3">Friday</label>
                                        <div class="col-md-4 float-righ  ml-4">
                                            <select class="form-control m-auto" id="exampleFormControlSelect1">
                                                <option>12</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                            </select>
                                        </div>
                                        <label for="exampleFormControlSelect1" class="col-md-1 col-form-label">to</label>
                                        <div class="col-md-4 float-right">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>12</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="exampleFormControlSelect1" class="col-md-2 col-form-label">Saturday</label>
                                        <div class="col-md-4 float-right ml-4">
                                            <select class="form-control m-auto" id="exampleFormControlSelect1">
                                                <option>12</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                            </select>
                                        </div>
                                        <label for="exampleFormControlSelect1" class="col-md-1 col-form-label">to</label>
                                        <div class="col-md-4 float-right">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>12</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="exampleFormControlSelect1" class="col-md-2 col-form-label">Sunday</label>
                                        <div class="col-md-4 float-right ml-4">
                                            <select class="form-control m-auto" id="exampleFormControlSelect1">
                                                <option>12</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                            </select>
                                        </div>
                                        <label for="exampleFormControlSelect1" class="col-md-1 col-form-label">to</label>
                                        <div class="col-md-4 float-right ">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>12</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 text-right float-right">
                                    <div class="form-check  row">
                                        <label class="form-check-label col-md-6 text-left  float-left mb-2" for="defaultCheck1">
                                        cash
                                        </label>
                                        <input class="form-check-input col-md-4 float-right mb-2" type="checkbox" value="" id="defaultCheck1">
                                    </div>
                                    <div class="form-check  row">
                                        <label class="form-check-label col-md-6  text-left float-left mb-2" for="defaultCheck1"> Money Order
                                        </label>
                                        <input class="form-check-input col-md-4 float-right mb-2" type="checkbox" value="" id="defaultCheck1">
                                    </div>
                                    <div class="form-check row ">
                                        <label class="form-check-label col-md-6  text-left float-left mb-2 " for="defaultCheck1">
                                        Visa
                                        </label>
                                        <input class="form-check-input col-md-4 float-right mb-2" type="checkbox" value="" id="defaultCheck1">
                                    </div>
                                    <div class="form-check  row ">
                                        <label class="form-check-label col-md-6  text-left float-left mb-2" for="defaultCheck1">
                                        MasterCard  </label>
                                        <input class="form-check-input col-md-4 float-right mb-2" type="checkbox" value="" id="defaultCheck1">
                                    </div>
                                    <div class="form-check  row">
                                        <label class="form-check-label col-md-6  text-left float-left mb-2" for="defaultCheck1">
                                        AmericanExpress
                                        </label>
                                        <input class="form-check-input col-md-4 float-right mb-2" type="checkbox" value="" id="defaultCheck1">
                                    </div>
                                    <div class="form-check  row">
                                        <label class="form-check-label col-md-6  text-left float-left mb-2" for="defaultCheck1">
                                        PayPal  </label>
                                        <input class="form-check-input col-md-4 float-right mb-2" type="checkbox" value="" id="defaultCheck1">
                                    </div>
                                    <div class="form-check row ">
                                        <label class="form-check-label col-md-6  text-left float-left mb-2" for="defaultCheck1">
                                        Bitcoin
                                        </label>
                                        <input class="form-check-input col-md-4 float-right mb-2" type="checkbox" value="" id="defaultCheck1">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-1 mb-4">
                                <label for="exampleTextarea"  class="col-2 col-form-label">Quote(Optional)</label>
                                <div class="col-md-12 float-right ">
                                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                </div>
                            </div>
                            <!-- <div class="form-group row mt-1 mb-0">
                                <select class="custom-select">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div> -->
                            <div class="col-md-12 mb-4">
                                    <div class="dropdown-container">
                                        <div class="dropdown-button noselect">
                                            <div class="dropdown-label">States</div>
                                            <div class="dropdown-quantity">(<span class="quantity">Any</span>)</div>
                                            <i class="fa fa-filter"></i>
                                        </div>
                                        <div class="dropdown-list" style="display: none;">
                                            <input type="search" placeholder="Search states" class="dropdown-search"/>
                                            <ul class="multi"></ul>
                                        </div>
                                    </div>
                                </div>
                            <div class="saveButton float-right">
                                <button type="submit" class="btn btn-secondary justify-content-end mt-4">Save</button>
                            </div>
                        </div>
                        <h3 class="mb-2">EDUCATION</h3>
                        <div class="col-md-10 align-self-end accordion-content ">
                            <form>
                                <div class="form-group row">
                                    <label for="exampleTextarea"  class="col-form-label">Degree</label>
                                    <div class="col-md-4 ">  
                                        <input class="form-control form-control-sm" type="text" type="text" id="degree" >
                                    </div>
                                    <label for="exampleTextarea"  class=" col-form-label">institution</label>
                                    <div class="col-md-3">   
                                        <input class="form-control form-control-sm" type="text" id="institution">
                                    </div>
                                    <label for="exampleTextarea"  class="col-form-label">Year</label>
                                    <div class="col-md-2 "> 
                                        <input class="form-control form-control-sm" type="text" id="year">
                                    </div>
                                    <input type="button" class=" bt btn-secondary btn-sm add-row-degree" value="+">
                                </div>
                            </form>
                            <table class="col-md-12">
                                <tbody >
                                    <tr class="card col-md-12 m-2">
                                        <td class=" card-body p-1">
                                            <input type="checkbox"  class="float-left mr-2" name="record" required>   
                                            <p class="card-text float-left m-auto"> Master of Arts - Sociology, Columbia University 2018</p>
                                            <a href="#" class="btn btn-outline-secondary float-right  justify-content-end delete-row-degree">X</a> 
                                        </td>
                                    </tr>
                                    <tr class="card col-md-12 m-2">
                                        <td class=" card-body p-1">
                                            <input type="checkbox"  class="float-left mr-2" name="record">   
                                            <p class="card-text float-left"> Degree 2 entered</p>
                                            <a href="#" class="btn btn-outline-secondary float-right  justify-content-end delete-row-degree">X</a> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="saveButton float-right">
                                <button type="submit" class="btn btn-secondary justify-content-end  mt-4">Save</button>
                            </div>
                        </div>
                        <h3 class="mb-2">LICENSES</h3>
                        <div class="col-md-10 align-self-end accordion-content ">
                            <form>
                                <div class="form-group row">
                                    <label for="exampleTextarea"  class="col-form-label">License Name:</label>
                                    <div class="col-md-5 ">  
                                        <input class="form-control form-control-sm" type="text" type="text" id="licenseName" >
                                    </div>
                                    <label for="exampleTextarea"  class=" col-form-label">Licenses#:</label>
                                    <div class="col-md-4">   
                                        <input class="form-control form-control-sm" type="text" id="licenses">
                                    </div>
                                    <input type="button" class=" bt btn-secondary btn-sm add-row-license" value="+">
                                </div>
                            </form>
                            <table class="col-md-12">
                                <tbody >
                                    <tr class="card col-md-12 m-2">
                                        <td class=" card-body p-1">
                                            <input type="checkbox"  class="float-left mr-2" name="record" required>   
                                            <p class="card-text float-left"> Mental Health Counselors License , License: LH 00011332</p>
                                            <a href="#" class="btn btn-outline-secondary float-right  justify-content-end delete-row-licenses">X</a> 
                                        </td>
                                    </tr>
                                    <tr class="card col-md-12 m-2">
                                        <td class=" card-body p-1">
                                            <input type="checkbox"  class="float-left mr-2" name="record">   
                                            <p class="card-text float-left"> License 2 entered </p>
                                            <a href="#" class="btn btn-outline-secondary float-right  justify-content-end delete-row-licenses">X</a> 
                                        </td>
                                    </tr>
                                    <tr class="card col-md-12 m-2">
                                        <td class=" card-body p-1">
                                            <input type="checkbox"  class="float-left mr-2" name="record">   
                                            <p class="card-text float-left"> License 3 entered </p>
                                            <a href="#" class="btn btn-outline-secondary float-right  justify-content-end delete-row-licenses">X</a> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="saveButton float-right">
                                <button type="submit" class="btn btn-secondary justify-content-end  mt-4 ">Save</button>
                            </div>
                        </div>
                        <h3 class="mb-2">MEMBERSHIPS</h3>
                        <div class="col-md-10 align-self-end accordion-content ">
                            <form>
                                <div class="form-group row">
                                    <label for="exampleTextarea"  class="col-form-label">Membership Name:</label>
                                    <div class="col-md-4 ">  
                                        <input class="form-control form-control-sm" type="text" type="text" id="membershipName" >
                                    </div>
                                    <label for="exampleTextarea"  class=" col-form-label">Year</label>
                                    <div class="col-md-2">   
                                        <input class="form-control form-control-sm" type="text" id="year">
                                    </div>
                                    <label for="exampleTextarea"  class="col-form-label">to</label>
                                    <div class="col-md-2 "> 
                                        <input class="form-control form-control-sm" type="text" id="to">
                                    </div>
                                    <input type="button" class=" bt btn-secondary btn-sm add-row-membership" value="+">
                                </div>
                            </form>
                            <table class="col-md-12">
                                <tbody >
                                    <tr class="card col-md-12 m-2">
                                        <td class=" card-body p-1">
                                            <input type="checkbox"  class="float-left mr-2" name="record" required>   
                                            <p class="card-text float-left"> Evergreen Art Therapy Association,  2018 - Present </p>
                                            <a href="#" class="btn btn-outline-secondary float-right  justify-content-end delete-row-membership">X</a> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="saveButton float-right">
                                <button type="submit" class="btn btn-secondary justify-content-end  mt-4 ">Save</button>
                            </div>
                        </div>
                        <h3 class="mb-2">REGISTRATIONS</h3>
                        <div class="col-md-10 align-self-end accordion-content ">
                            <form>
                                <div class="form-group row">
                                    <label for="exampleTextarea"  class="col-form-label">Registration Name:</label>
                                    <div class="col-md-4 ">  
                                        <input class="form-control form-control-sm" type="text" type="text" id="registrationName" >
                                    </div>
                                    <label for="exampleTextarea"  class=" col-form-label">Year</label>
                                    <div class="col-md-2">   
                                        <input class="form-control form-control-sm" type="text" id="year">
                                    </div>
                                    <label for="exampleTextarea"  class="col-form-label">to</label>
                                    <div class="col-md-2 "> 
                                        <input class="form-control form-control-sm" type="text" id="to">
                                    </div>
                                    <input type="button" class=" bt btn-secondary btn-sm add-row-registration" value="+">
                                </div>
                            </form>
                            <table class="col-md-12">
                                <tbody >
                                    <tr class="card col-md-12 m-2">
                                        <td class=" card-body p-1">
                                            <input type="checkbox"  class="float-left mr-2" name="record" required>   
                                            <p class="card-text float-left"> Registration Detail 1,  2018 - Present </p>
                                            <a href="#" class="btn btn-outline-secondary float-right  justify-content-end delete-row-registration">X</a> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="saveButton float-right">
                                <button type="submit" class="btn btn-secondary justify-content-end  mt-4">Save</button>
                            </div>
                        </div>
                        <h3 class="mb-2">FOCUS</h3>
                        <div class="col-md-10 align-self-end accordion-content ">
                        <div class="form-group row ">
                            <label for="exampleFormControlSelect1" class="col-form-label">Category  Name:</label>
                                <div class="col-md-10">
                                    <div class="dropdown-container">
                                        <div class="dropdown-button noselect">
                                            <div class="dropdown-label">States</div>
                                            <div class="dropdown-quantity">(<span class="quantity">Any</span>)</div>
                                            <i class="fa fa-filter"></i>
                                        </div>
                                        <div class="dropdown-list" style="display: none;">
                                            <input type="search" placeholder="Search states" class="dropdown-search"/>
                                            <ul class="multi"></ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="saveButton float-right">
                                <button type="submit" class="btn btn-secondary justify-content-end ">Submit</button>
                            </div>
                        </div>
                        <h3 >PRACTICE</h3>
                        <div class="col-md-10 align-self-end accordion-content" id="practice">
                            <div class="input-group mt-3">
                                <div class="input-group-prepend col-md-2 p-0 ">
                                    <span class="input-group-text">Scope of  Practice</span>
                                </div>
                                <textarea class="form-control" aria-label="Scope of Practice" rows="6"></textarea>
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend col-md-2 p-0">
                                    <span class="input-group-text">Values & Philosophy:</span>
                                </div>
                                <textarea class="form-control" aria-label="ValuesPhilosophy" rows="6"></textarea>
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend col-md-2 p-0">
                                    <span class="input-group-text">Technique & Methodology:</span>
                                </div>
                                <textarea class="form-control col-md-10" aria-label="TechniqueMethodology"  rows="6"></textarea>
                            </div>
                            <div class="saveButton float-right">
                                <button type="submit" class="btn btn-secondary justify-content-end  mt-4 ">save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tabs-3" class="ui-tabs-panel">
                    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
                </div>
            </div>
            <section class="col-md-10 col-sm-12">
        </div>
        </section>
    </div>
</div>
</div>
</div>
</div>
<!-- /.container -->
<?php include 'includes/footer-2.php'?>