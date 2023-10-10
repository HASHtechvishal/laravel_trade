@extends('admin.layout.layout')
@section('content')
<section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> Form elements</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Forms</li>
            <li><i class="fa fa-file-text-o"></i>Form elements</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Form Elements
            </header>


              
              <div class="col-lg-12">
                <section class="panel">
                  <div class="panel-body">
                    <input type="text" class="form-control">
                  </div>
                </section>
              </div>
            <div class="panel-body">


              <form class="form-horizontal" method="get">
                <button type="submit" class="btn btn-primary mx-auto">Delete</button>
              </form>
            </div>
          </section>




        




          

            


          <section class="panel">
            <div class="panel-body">
              <form class="form-horizontal " method="get">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Control sizing</label>
                  <div class="col-lg-10">
                    <input class="form-control input-lg m-bot15" type="text" placeholder=".input-lg">
                    <input class="form-control m-bot15" type="text" placeholder="Default input">
                    <input class="form-control input-sm m-bot15" type="text" placeholder=".input-sm">

                    <select class="form-control input-lg m-bot15">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                    <select class="form-control m-bot15">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                    <select class="form-control input-sm m-bot15">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                  </div>
                </div>
              </form>
            </div>
          </section>
          <section class="panel">
            <div class="panel-body">
              <form class="form-horizontal " method="get">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Checkboxes and radios</label>
                  <div class="col-lg-10">
                    <div class="checkbox">
                      <label>
                                                <input type="checkbox" value="">
                                                Option one is this and that&mdash;be sure to include why it's great
                                            </label>
                    </div>

                    <div class="checkbox">
                      <label>
                                                <input type="checkbox" value="">
                                                Option one is this and that&mdash;be sure to include why it's great option one
                                            </label>
                    </div>

                    <div class="radio">
                      <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                Option one is this and that&mdash;be sure to include why it's great
                                            </label>
                    </div>
                    <div class="radio">
                      <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                Option two can be something else and selecting it will deselect option one
                                            </label>
                    </div>

                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Inline checkboxes</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                                        </label>
                    <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                                        </label>
                    <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                                        </label>

                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Selects</label>
                  <div class="col-lg-10">
                    <select class="form-control m-bot15">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>

                    <select multiple class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Column sizing</label>
                  <div class="col-lg-10">
                    <div class="row">
                      <div class="col-lg-2">
                        <input type="text" class="form-control" placeholder=".col-lg-2">
                      </div>
                      <div class="col-lg-3">
                        <input type="text" class="form-control" placeholder=".col-lg-3">
                      </div>
                      <div class="col-lg-4">
                        <input type="text" class="form-control" placeholder=".col-lg-4">
                      </div>
                    </div>

                  </div>
                </div>

              </form>
            </div>
          </section>
        </div>
      </div>
      <!-- Basic Forms & Horizontal Forms-->

      <div class="row">
        <div class="col-lg-6">
          <section class="panel">
            <header class="panel-heading">
              Basic Forms
            </header>
            <div class="panel-body">
              <form role="form">
                <div class="form-group">
                  <label for="exampleInputEmail1">User Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">
                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

            </div>
          </section>
        </div>
        <div class="col-lg-6">
          <section class="panel">
            <header class="panel-heading">
              Horizontal Forms
            </header>
            <div class="panel-body">
              <form class="form-horizontal" role="form">
                <div class="form-group">
                  <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                  <div class="col-lg-10">
                    <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                    <p class="help-block">Example block-level help text here.</p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                  <div class="col-lg-10">
                    <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <div class="checkbox">
                      <label>
                                                <input type="checkbox"> Remember me
                                            </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-danger">Sign in</button>
                  </div>
                </div>
              </form>
            </div>
          </section>
          <section class="panel">

            <div class="panel-body">
              <a href="#myModal" data-toggle="modal" class="btn btn-primary">
                                Form in Modal
                            </a>
              <a href="#myModal-1" data-toggle="modal" class="btn  btn-warning">
                                Form in Modal 2
                            </a>
              <a href="#myModal-2" data-toggle="modal" class="btn  btn-danger">
                                Form in Modal 3
                            </a>

              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                      <h4 class="modal-title">Form Tittle</h4>
                    </div>
                    <div class="modal-body">

                      <form role="form">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">File input</label>
                          <input type="file" id="exampleInputFile3">
                          <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="checkbox">
                          <label>
                                                        <input type="checkbox"> Check me out
                                                    </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-1" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                      <h4 class="modal-title">Form Tittle</h4>
                    </div>
                    <div class="modal-body">

                      <form class="form-horizontal" role="form">
                        <div class="form-group">
                          <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                          <div class="col-lg-10">
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                          <div class="col-lg-10">
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                            <div class="checkbox">
                              <label>
                                                                <input type="checkbox"> Remember me
                                                            </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-info">Sign in</button>
                          </div>
                        </div>
                      </form>

                    </div>

                  </div>
                </div>
              </div>
              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-2" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                      <h4 class="modal-title">Form Tittle</h4>
                    </div>
                    <div class="modal-body">
                      <form class="form-inline" role="form">
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputEmail2">Email address</label>
                          <input type="email" class="form-control sm-input" id="exampleInputEmail5" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputPassword2">Password</label>
                          <input type="password" class="form-control sm-input" id="exampleInputPassword5" placeholder="Password">
                        </div>
                        <div class="checkbox">
                          <label>
                                                        <input type="checkbox"> Remember me
                                                    </label>
                        </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                      </form>

                    </div>

                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      

      <div class="row">
        <div class="col-lg-12">

          <div class="row">
            <div class="col-lg-6">
              <section class="panel">
                <header class="panel-heading">
                  Color Pickers & Date Pickers
                </header>
                <div class="panel-body">
                  <form class="form-horizontal " action="#">
                    <!--date picker start-->

                    <div class="form-group">
                      <label class="control-label col-sm-4">Default Datepicker</label>
                      <div class="col-sm-6">
                        <input id="dp1" type="text" value="28-10-2013" size="16" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Starts with years view</label>
                      <div class="col-sm-6">


                        <div class="input-append date" id="dpYears" data-date="18-06-2013" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                          <input class="form-control" size="16" type="text" value="28-06-2013" readonly>
                          <span class="add-on"><i class="icon-calendar"></i></span>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4"> Date Ranges</label>
                      <div class="col-sm-6">
                        <div class="input-prepend">
                          <input id="reservation" type="text" class=" form-control" />
                        </div>
                      </div>
                    </div>
                    <!--date picker end-->

                    <!--color picker start-->
                    <div class="form-group">
                      <label class="control-label col-sm-4">Default</label>

                      <div class="col-sm-5">
                        <input type="text" value="#CCCCCC" class="cp1 form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">RGBA</label>

                      <div class="col-sm-5">
                        <input type="text" data-color-format="rgba" value="rgb(255,255,255,1)" class="cp2 form-control">
                      </div>
                    </div>

                    <!--color picker end-->

                  </form>


                </div>
              </section>
              <section class="panel">
                <header class="panel-heading">
                  Tags Input
                </header>
                <div class="panel-body">
                  <input name="tagsinput" id="tagsinput" class="tagsinput" value="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal" />
                </div>
              </section>
            </div>
            <div class="col-lg-6">
              <section class="panel">
                <header class="panel-heading">
                  Custom Checkbox & Radio
                </header>
                <div class="panel-body">
                  <form action="#" method="get" accept-charset="utf-8">
                    <div class="checkboxes">
                      <label class="label_check" for="checkbox-01">
                                                <input name="sample-checkbox-01" id="checkbox-01" value="1" type="checkbox" checked /> I agree to the terms &#38; conditions.
                                            </label>
                      <label class="label_check" for="checkbox-02">
                                            <input name="sample-checkbox-02" id="checkbox-02" value="1" type="checkbox" /> Please send me regular updates. </label>
                      <label class="label_check" for="checkbox-03">
                                            <input name="sample-checkbox-02" id="checkbox-03" value="1" type="checkbox" /> This is nice checkbox.</label>

                    </div>
                    <div class="radios">
                      <label class="label_radio" for="radio-01">
                                                <input name="sample-radio" id="radio-01" value="1" type="radio" checked /> This is option A...
                                            </label>
                      <label class="label_radio" for="radio-02">
                                                <input name="sample-radio" id="radio-02" value="1" type="radio" /> and this is option B...
                                            </label>
                      <label class="label_radio" for="radio-03">
                                                <input name="sample-radio" id="radio-03" value="1" type="radio" /> or simply choose option C
                                            </label>
                    </div>
                  </form>
                </div>

              </section>

              <section class="panel">
                <header class="panel-heading">
                  Switch
                </header>
                <div class="panel-body">
                  <div class="row m-bot15">
                    <div class="col-sm-6 text-center">
                      <input type="checkbox" checked="" data-toggle="switch" />
                    </div>
                    <div class="col-sm-6 text-center">
                      <input type="checkbox" data-toggle="switch" />
                    </div>
                  </div>
                  <div class="row m-bot15">
                    <div class="col-sm-6 text-center">
                      <div class="switch switch-square" data-on-label="<i class=' icon-ok'></i>" data-off-label="<i class='icon-remove'></i>">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="col-sm-6 text-center">
                      <div class="switch switch-square" data-on-label="<i class=' icon-ok'></i>" data-off-label="<i class='icon-remove'></i>">
                        <input type="checkbox" checked="" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 text-center">
                      <input type="checkbox" disabled data-toggle="switch" />
                    </div>
                    <div class="col-sm-6 text-center">
                      <input type="checkbox" checked disabled data-toggle="switch" />
                    </div>
                  </div>
                </div>
              </section>


            </div>
          </div>

          <div class="row">
            <!-- Bootsrep Editor -->
            <div class="col-lg-12">
              <section class="panel">
                <header class="panel-heading">
                  Bootsrep Editor
                </header>
                <div class="panel-body">
                  <div id="editor" class="btn-toolbar" data-role="editor-toolbar" data-target="#editor"></div>
                </div>
              </section>
            </div>
            <!-- CKEditor -->
            <div class="col-lg-12">
              <section class="panel">
                <header class="panel-heading">
                  CKEditor
                </header>
                <div class="panel-body">
                  <div class="form">
                    <form action="#" class="form-horizontal">
                      <div class="form-group">
                        <label class="control-label col-sm-2">CKEditor</label>
                        <div class="col-sm-10">
                          <textarea class="form-control ckeditor" name="editor1" rows="6"></textarea>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
      <!-- page end-->
    </section>
  </section>

  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-th"></i>Button</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="fa fa-desktop"></i>UI Fitures</li>
            <li><i class="fa fa-th"></i>button</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <section class="panel">
            <header class="panel-heading">
              <h3>Buttons</h3>

            </header>
            <div class="panel-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Button</th>
                    <th>Large Button</th>
                    <th>Small Button</th>
                    <th>Disabled Button</th>
                    <th>Button with Icon</th>
                    <th>Split Button</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a class="btn btn-default" href="" title="Bootstrap 3 themes generator">Default</a></td>
                    <td><a class="btn btn-default btn-lg" href="" title="Bootstrap 3 themes generator">Default</a></td>
                    <td><a class="btn btn-default btn-sm" href="" title="Bootstrap 3 themes generator">Default</a></td>
                    <td><a class="btn btn-default disabled" href="" title="Bootstrap 3 themes generator">Default</a></td>
                    <td><a class="btn btn-default" href="" title="Bootstrap 3 themes generator">
                                      <span class="icon_cloud-upload_alt"></span> Default</a></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-default" href="" title="Bootstrap 3 themes generator">Default</a>
                        <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="" title="Bootstrap 3 themes generator"><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="" title="Bootstrap 3 themes generator">Action</a></li>
                          <li><a href="" title="Bootstrap 3 themes generator">Another action</a></li>
                          <li><a href="" title="Bootstrap 3 themes generator">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="" title="Bootstrap 3 themes generator">Separated link</a></li>
                        </ul>
                      </div>
                      <!-- /btn-group -->
                    </td>
                  </tr>
                  <tr>
                    <td><a class="btn btn-primary" href="" title="Bootstrap 3 themes generator">Primary</a></td>
                    <td><a class="btn btn-primary btn-lg" href="" title="Bootstrap 3 themes generator">Primary</a></td>
                    <td><a class="btn btn-primary btn-sm" href="" title="Bootstrap 3 themes generator">Primary</a></td>
                    <td><a class="btn btn-primary disabled" href="" title="Bootstrap 3 themes generator">Primary</a></td>
                    <td><a class="btn btn-primary" href="" title="Bootstrap 3 themes generator"><span class="icon_lightbulb_alt"></span> Primary</a></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="" title="Bootstrap 3 themes generator">Primary</a>
                        <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="" title="Bootstrap 3 themes generator"><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="" title="Bootstrap 3 themes generator">Action</a></li>
                          <li><a href="" title="Bootstrap 3 themes generator">Another action</a></li>
                          <li><a href="" title="Bootstrap 3 themes generator">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="" title="Bootstrap 3 themes generator">Separated link</a></li>
                        </ul>
                      </div>
                      <!-- /btn-group -->
                    </td>
                  </tr>
                  <tr>
                    <td><a class="btn btn-info" href="" title="Bootstrap 3 themes generator">Info</a></td>
                    <td><a class="btn btn-info btn-lg" href="" title="Bootstrap 3 themes generator">Info</a></td>
                    <td><a class="btn btn-info btn-sm" href="" title="Bootstrap 3 themes generator">Info</a></td>
                    <td><a class="btn btn-info disabled" href="" title="Bootstrap 3 themes generator">Info</a></td>
                    <td><a class="btn btn-info" href="" title="Bootstrap 3 themes generator"><span class="icon_house_alt"></span> Info</a></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-info" href="" title="Bootstrap 3 themes generator">Info</a>
                        <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="" title="Bootstrap 3 themes generator"><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="" title="Bootstrap 3 themes generator">Action</a></li>
                          <li><a href="" title="Bootstrap 3 themes generator">Another action</a></li>
                          <li><a href="" title="Bootstrap 3 themes generator">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="" title="Bootstrap 3 themes generator">Separated link</a></li>
                        </ul>
                      </div>
                      <!-- /btn-group -->
                    </td>
                  </tr>
                  <tr>
                    <td><a class="btn btn-success" href="" title="Bootstrap 3 themes generator">Success</a></td>
                    <td><a class="btn btn-success btn-lg" href="" title="Bootstrap 3 themes generator">Success</a></td>
                    <td><a class="btn btn-success btn-sm" href="" title="Bootstrap 3 themes generator">Success</a></td>
                    <td><a class="btn btn-success disabled" href="" title="Bootstrap 3 themes generator">Success</a></td>
                    <td><a class="btn btn-success" href="" title="Bootstrap 3 themes generator"><span class="icon_mic_alt"></span> Success</a></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-success" href="" title="Bootstrap 3 themes generator">Success</a>
                        <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="" title="Bootstrap 3 themes generator"><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="" title="Bootstrap 3 themes generator">Action</a></li>
                          <li><a href="" title="Bootstrap 3 themes generator">Another action</a></li>
                          <li><a href="" title="Bootstrap 3 themes generator">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="" title="Bootstrap 3 themes generator">Separated link</a></li>
                        </ul>
                      </div>
                      <!-- /btn-group -->
                    </td>
                  </tr>
                  <tr>
                    <td><a class="btn btn-warning" href="" title="Bootstrap 3 themes generator">Warning</a></td>
                    <td><a class="btn btn-warning btn-lg" href="" title="Bootstrap 3 themes generator">Warning</a></td>
                    <td><a class="btn btn-warning btn-sm" href="" title="Bootstrap 3 themes generator">Warning</a></td>
                    <td><a class="btn btn-warning disabled" href="" title="Bootstrap 3 themes generator">Warning</a></td>
                    <td><a class="btn btn-warning" href="" title="Bootstrap 3 themes generator"><span class="icon_pin_alt"></span> Warning</a></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-warning" href="" title="Bootstrap 3 themes generator">Warning</a>
                        <a class="btn btn-warning dropdown-toggle" data-toggle="dropdown" href="" title="Bootstrap 3 themes generator"><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="" title="Bootstrap 3 themes generator">Action</a></li>
                          <li><a href="" title="Bootstrap 3 themes generator">Another action</a></li>
                          <li><a href="" title="Bootstrap 3 themes generator">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="" title="Bootstrap 3 themes generator">Separated link</a></li>
                        </ul>
                      </div>
                      <!-- /btn-group -->
                    </td>
                  </tr>
                  <tr>
                    <td><a class="btn btn-danger" href="" title="Bootstrap 3 themes generator">Danger</a></td>
                    <td><a class="btn btn-danger btn-lg" href="" title="Bootstrap 3 themes generator">Danger</a></td>
                    <td><a class="btn btn-danger btn-sm" href="" title="Bootstrap 3 themes generator">Danger</a></td>
                    <td><a class="btn btn-danger disabled" href="" title="Bootstrap 3 themes generator">Danger</a></td>
                    <td><a class="btn btn-danger" href="" title="Bootstrap 3 themes generator"><span class="icon_target"></span> Danger</a></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-danger" href="" title="Bootstrap 3 themes generator">Danger</a>
                        <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="" title="Bootstrap 3 themes generator"><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="" title="Bootstrap 3 themes generator">Action</a></li>
                          <li><a href="" title="Bootstrap 3 themes generator">Another action</a></li>
                          <li><a href="" title="Bootstrap 3 themes generator">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="" title="Bootstrap 3 themes generator">Separated link</a></li>
                        </ul>
                      </div>
                      <!-- /btn-group -->
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>
      <!-- page start-->

      <div class="row">
        <div class="col-sm-6">
          <section class="panel">
            <header class="panel-heading">
              Group Checkbox
            </header>
            <div class="panel-body">
              <div class="btn-row">
                <div class="btn-group" data-toggle="buttons">
                  <label class="btn btn-primary">
                                        <input type="checkbox"> Option 1
                                    </label>
                  <label class="btn btn-primary active">
                                        <input type="checkbox"> Option 2
                                    </label>
                  <label class="btn btn-primary">
                                        <input type="checkbox"> Option 3
                                    </label>
                </div>
              </div>
              <div class="btn-row">
                <div class="btn-group" data-toggle="buttons">
                  <label class="btn btn-danger active">
                                        <input type="checkbox"> Option 1
                                    </label>
                  <label class="btn btn-danger">
                                        <input type="checkbox"> Option 2
                                    </label>
                  <label class="btn btn-danger">
                                        <input type="checkbox"> Option 3
                                    </label>
                </div>
              </div>
              <div class="btn-row">
                <div class="btn-group" data-toggle="buttons">
                  <label class="btn btn-info">
                                        <input type="checkbox"> Option 1
                                    </label>
                  <label class="btn btn-info">
                                        <input type="checkbox"> Option 2
                                    </label>
                  <label class="btn btn-info active">
                                        <input type="checkbox"> Option 3
                                    </label>
                </div>
              </div>
            </div>
          </section>
          <section class="panel">
            <header class="panel-heading">
              Group Radio
            </header>
            <div class="panel-body">
              <div class="btn-row">
                <div class="btn-group" data-toggle="buttons">
                  <label class="btn btn-default active">
                                        <input type="radio" name="options" id="option1"> Option 1
                                    </label>
                  <label class="btn btn-default">
                                        <input type="radio" name="options" id="option2"> Option 2
                                    </label>
                  <label class="btn btn-default">
                                        <input type="radio" name="options" id="option3"> Option 3
                                    </label>
                </div>
              </div>
              <div class="btn-row">
                <div class="btn-group" data-toggle="buttons">
                  <label class="btn btn-primary">
                                        <input type="radio" name="options" id="option1"> Option 1
                                    </label>
                  <label class="btn btn-primary active">
                                        <input type="radio" name="options" id="option2"> Option 2
                                    </label>
                  <label class="btn btn-primary">
                                        <input type="radio" name="options" id="option3"> Option 3
                                    </label>
                </div>
              </div>
              <div class="btn-row">
                <div class="btn-group" data-toggle="buttons">
                  <label class="btn btn-danger">
                                        <input type="radio" name="options" id="option1"> Option 1
                                    </label>
                  <label class="btn btn-danger">
                                        <input type="radio" name="options" id="option2"> Option 2
                                    </label>
                  <label class="btn btn-danger active">
                                        <input type="radio" name="options" id="option3"> Option 3
                                    </label>
                </div>
              </div>
              <div class="btn-row">
                <div class="btn-group" data-toggle="buttons">
                  <label class="btn btn-info">
                                        <input type="radio" name="options" id="option1"> Option 1
                                    </label>
                  <label class="btn btn-info active">
                                        <input type="radio" name="options" id="option2"> Option 2
                                    </label>
                  <label class="btn btn-info">
                                        <input type="radio" name="options" id="option3"> Option 3
                                    </label>
                </div>
              </div>
            </div>
          </section>
          <section class="panel">
            <header class="panel-heading">
              Block level button
            </header>
            <div class="panel-body">
              <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
              <button type="button" class="btn btn-warning btn-block">Block level button</button>
              <button type="button" class="btn btn-danger btn-xs btn-block">Block level button</button>
            </div>
          </section>
          <section class="panel">
            <header class="panel-heading">
              Justified Button groups
            </header>
            <div class="panel-body">
              <div class="btn-group btn-group-justified">
                <a class="btn btn-primary" href="#">Left</a>
                <a class="btn btn-success" href="#">Left</a>
                <a class="btn btn-info" href="#">Middle</a>
                <a class="btn btn-warning" href="#">Middle</a>
                <a class="btn btn-danger" href="#">Right</a>
              </div>
            </div>
          </section>
        </div>
        <div class="col-sm-6">
          <section class="panel">
            <header class="panel-heading">
              Group Buttons
            </header>
            <div class="panel-body">
              <div class="btn-row">
                <div class="btn-group">
                  <button type="button" class="btn btn-default">Left</button>
                  <button type="button" class="btn btn-default">Middle</button>
                  <button type="button" class="btn btn-default">Right</button>
                </div>
              </div>
              <div class="btn-row">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Left</button>
                  <button type="button" class="btn btn-primary">Middle</button>
                  <button type="button" class="btn btn-primary">Right</button>
                </div>
              </div>
              <div class="btn-row">
                <div class="btn-group">
                  <button type="button" class="btn btn-danger">Left</button>
                  <button type="button" class="btn btn-danger">Middle</button>
                  <button type="button" class="btn btn-danger">Right</button>
                </div>
              </div>
              <p class="">Vertical button groups</p>
              <div class="btn-row">
                <div class="btn-group-vertical">
                  <button class="btn btn-default" type="button">Top</button>
                  <button class="btn btn-default" type="button">Middle</button>
                  <button class="btn btn-default" type="button">Bottom</button>
                </div>
              </div>
              <div class="btn-row">
                <div class="btn-group-vertical">
                  <button class="btn btn-primary" type="button">Top</button>
                  <button class="btn btn-primary" type="button">Middle</button>
                  <button class="btn btn-primary" type="button">Bottom</button>
                </div>
              </div>
              <p class="">Nested button groups</p>
              <div class="btn-row">
                <div class="btn-group">
                  <button class="btn btn-default" type="button">1</button>
                  <button class="btn btn-primary" type="button">2</button>
                  <button class="btn btn-default" type="button">3</button>
                  <button class="btn btn-default" type="button">4</button>
                  <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"> Dropdown <span class="caret"></span> </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Dropdown link 1</a></li>
                      <li><a href="#">Dropdown link 2</a></li>
                      <li><a href="#">Dropdown link 3</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <p class="">Vertical variation</p>
              <div class="btn-group-vertical">
                <button type="button" class="btn btn-default">Button</button>
                <div class="btn-group">
                  <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                  Dropdown
                                  <span class="caret"></span>
                                </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop1">
                    <li><a href="#">Dropdown link</a></li>
                    <li><a href="#">Dropdown link</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-default">Button</button>
                <div class="btn-group">
                  <button id="btnGroupVerticalDrop3" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                  Dropdown
                                  <span class="caret"></span>
                                </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop3">
                    <li><a href="#">Dropdown link</a></li>
                    <li><a href="#">Dropdown link</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button id="btnGroupVerticalDrop4" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                  Dropdown
                                  <span class="caret"></span>
                                </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop4">
                    <li><a href="#">Dropdown link</a></li>
                    <li><a href="#">Dropdown link</a></li>
                  </ul>
                </div>
              </div>

              <p class="">Multiple button groups</p>
              <div class="btn-row">
                <div class="btn-toolbar">
                  <div class="btn-group">
                    <button class="btn btn-info" type="button">1</button>
                    <button class="btn btn-info active" type="button">2</button>
                    <button class="btn btn-info" type="button">3</button>
                    <button class="btn btn-info" type="button">4</button>
                  </div>
                  <div class="btn-group">
                    <button class="btn btn-success" type="button">5</button>
                    <button class="btn btn-success" type="button">6</button>
                    <button class="btn btn-success" type="button">7</button>
                  </div>
                  <div class="btn-group">
                    <button class="btn btn-warning" type="button">8</button>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <!-- page end-->
    </section>
@endsection