@extends('admin.layout.template')
@section('page_title')
    Color Admin | Basic Tables
@endsection

@section('content')
<div id="content" class="content">

    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Tables</a></li>
        <li class="breadcrumb-item active">Basic Tables</li>
    </ol>


    <h1 class="page-header">Basic Tables <small>header small text goes here...</small></h1>


    <div class="row">

        <div class="col-xl-6 ui-sortable">

            <div class="panel panel-inverse" data-sortable-id="table-basic-1">

                <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title">Default Table</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                           data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                           data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                           data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                           data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>


                <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table m-b-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Email Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Nicky Almera</td>
                                <td>nicky@hotmail.com</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Edmund Wong</td>
                                <td>edmund@yahoo.com</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Harvinder Singh</td>
                                <td>harvinder@gmail.com</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="hljs-wrapper">
<pre><code class="html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span
                class="hljs-attr">class</span>=<span class="hljs-string">"table"</span>&gt;</span>
  ...
<span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span></code></pre>
                </div>

            </div>


            <div class="panel panel-inverse" data-sortable-id="table-basic-2">

                <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title">Hover Table</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                           data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                           data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                           data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                           data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>


                <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table table-hover m-b-0 text-inverse">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Email Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Nicky Almera</td>
                                <td>nicky@hotmail.com</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Edmund Wong</td>
                                <td>edmund@yahoo.com</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Harvinder Singh</td>
                                <td>harvinder@gmail.com</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="hljs-wrapper">
<pre><code class="html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span
                class="hljs-attr">class</span>=<span class="hljs-string">"table table-hover"</span>&gt;</span>
  ...
<span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span></code></pre>
                </div>

            </div>


            <div class="panel panel-inverse" data-sortable-id="table-basic-3">

                <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title">Table Small</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                           data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                           data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                           data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                           data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>


                <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table table-sm m-b-0 text-inverse">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Email Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Nicky Almera</td>
                                <td>nicky@hotmail.com</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Edmund Wong</td>
                                <td>edmund@yahoo.com</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Harvinder Singh</td>
                                <td>harvinder@gmail.com</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="hljs-wrapper">
<pre><code class="html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span
                class="hljs-attr">class</span>=<span class="hljs-string">"table table-sm"</span>&gt;</span>
  ...
<span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span></code></pre>
                </div>

            </div>


            <div class="panel panel-inverse" data-sortable-id="table-basic-4">

                <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title">Responsive Table</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                           data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                           data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                           data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                           data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>


                <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th nowrap="">Table heading</th>
                                <th nowrap="">Table heading</th>
                                <th nowrap="">Table heading</th>
                                <th nowrap="">Table heading</th>
                                <th nowrap="">Table heading</th>
                                <th nowrap="">Table heading</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="hljs-wrapper">
<pre><code class="html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span
                class="hljs-string">"table-responsive"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span
          class="hljs-string">"table"</span>&gt;</span>
    ...
  <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
                </div>

            </div>


            <div class="panel panel-inverse" data-sortable-id="table-basic-5">

                <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title">Table Striped</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                           data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                           data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                           data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                           data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>


                <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table table-striped m-b-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Email Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Nicky Almera</td>
                                <td>nicky@hotmail.com</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Edmund Wong</td>
                                <td>edmund@yahoo.com</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Harvinder Singh</td>
                                <td>harvinder@gmail.com</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="hljs-wrapper">
<pre><code class="html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span
                class="hljs-attr">class</span>=<span class="hljs-string">"table table-striped"</span>&gt;</span>
  ...
<span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span></code></pre>
                </div>

            </div>


            <div class="panel panel-inverse" data-sortable-id="table-basic-6">

                <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title">Bordered Table</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                           data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                           data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                           data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                           data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>


                <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table table-bordered m-b-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Email Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Nicky Almera</td>
                                <td>nicky@hotmail.com</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Edmund Wong</td>
                                <td>edmund@yahoo.com</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Harvinder Singh</td>
                                <td>harvinder@gmail.com</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="hljs-wrapper">
<pre><code class="html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span
                class="hljs-attr">class</span>=<span class="hljs-string">"table table-bordered"</span>&gt;</span>
  ...
<span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span></code></pre>
                </div>

            </div>

        </div>


        <div class="col-xl-6 ui-sortable">

            <div class="panel panel-inverse" data-sortable-id="table-basic-7">

                <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title">UI Elements in Table <span
                            class="label label-success m-l-5 t-minus-1">NEW</span>
                    </h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                           data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                           data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                           data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                           data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>


                <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table table-striped m-b-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Email Address</th>
                                <th width="1%"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="with-img">
                                    <img src="{{asset("assets/admin/images/user-1.jpg")}}"
                                         class="img-rounded height-30">
                                </td>
                                <td>Nicky Almera</td>
                                <td>nicky@hotmail.com</td>
                                <td class="with-btn" nowrap="">
                                    <a href="https://seantheme.com/color-admin/admin/html/table_basic.html#"
                                       class="btn btn-sm btn-primary width-60 m-r-2">Edit</a>
                                    <a href="https://seantheme.com/color-admin/admin/html/table_basic.html#"
                                       class="btn btn-sm btn-white width-60">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="with-img">
                                    <img src="{{asset("assets/admin/images/user-2.jpg")}}"
                                         class="img-rounded height-30">
                                </td>
                                <td>Edmund Wong</td>
                                <td>edmund@yahoo.com</td>
                                <td class="with-btn-group" nowrap="">
                                    <div class="btn-group">
                                        <a href="https://seantheme.com/color-admin/admin/html/table_basic.html#"
                                           class="btn btn-white btn-sm width-90">Settings</a>
                                        <a href="https://seantheme.com/color-admin/admin/html/table_basic.html#"
                                           class="btn btn-white btn-sm dropdown-toggle width-30 no-caret"
                                           data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="https://seantheme.com/color-admin/admin/html/table_basic.html#"
                                               class="dropdown-item">Action 1</a>
                                            <a href="https://seantheme.com/color-admin/admin/html/table_basic.html#"
                                               class="dropdown-item">Action 2</a>
                                            <a href="https://seantheme.com/color-admin/admin/html/table_basic.html#"
                                               class="dropdown-item">Action 3</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="https://seantheme.com/color-admin/admin/html/table_basic.html#"
                                               class="dropdown-item">Action 4</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="with-img">
                                    <img src="{{asset("assets/admin/images/user-13.jpg")}}"
                                         class="img-rounded height-30">
                                </td>
                                <td>Harvinder Singh</td>
                                <td>harvinder@gmail.com</td>
                                <td class="with-btn" nowrap="">
                                    <a href="https://seantheme.com/color-admin/admin/html/table_basic.html#"
                                       class="btn btn-sm btn-primary width-60 m-r-2">Edit</a>
                                    <a href="https://seantheme.com/color-admin/admin/html/table_basic.html#"
                                       class="btn btn-sm btn-white width-60">Delete</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="hljs-wrapper">
<pre><code class="html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span
                class="hljs-attr">class</span>=<span class="hljs-string">"table"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
      <span class="hljs-comment">&lt;!-- with image --&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span
              class="hljs-string">"with-img"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span
                class="hljs-name">td</span>&gt;</span>

      <span class="hljs-comment">&lt;!-- with button --&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span
              class="hljs-string">"with-btn"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span
                class="hljs-name">td</span>&gt;</span>

      <span class="hljs-comment">&lt;!-- with button group --&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span
              class="hljs-string">"with-btn-group"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span
                class="hljs-name">td</span>&gt;</span>
     <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span></code></pre>
                </div>

            </div>


            <div class="panel panel-inverse" data-sortable-id="table-basic-8">

                <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title">Form Elements in Table <span
                            class="label label-success m-l-5 t-minus-1">NEW</span></h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                           data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                           data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                           data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                           data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>


                <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table table-striped table-th-valign-middle table-td-valign-middle m-b-0">
                            <thead>
                            <tr>
                                <th class="with-checkbox">
                                    <div class="checkbox checkbox-css">
                                        <input type="checkbox" value="" id="table_checkbox_1">
                                        <label for="table_checkbox_1">&nbsp;</label>
                                    </div>
                                </th>
                                <th>Username</th>
                                <th>Email Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="with-checkbox">
                                    <div class="checkbox checkbox-css">
                                        <input type="checkbox" value="" id="table_checkbox_2" checked="">
                                        <label for="table_checkbox_2">&nbsp;</label>
                                    </div>
                                </td>
                                <td>Nicky Almera</td>
                                <td>nicky@hotmail.com</td>
                            </tr>
                            <tr>
                                <td class="with-radio">
                                    <div class="radio radio-css">
                                        <input type="radio" id="table_radio_1" name="table_radio" checked="">
                                        <label for="table_radio_1">&nbsp;</label>
                                    </div>
                                </td>
                                <td>Edmund Wong</td>
                                <td>edmund@yahoo.com</td>
                            </tr>
                            <tr>
                                <td class="with-radio">
                                    <div class="radio radio-css">
                                        <input type="radio" id="table_radio_2" name="table_radio">
                                        <label for="table_radio_2">&nbsp;</label>
                                    </div>
                                </td>
                                <td class="with-form-control"><input type="text" class="form-control"
                                                                     value="Harvinder Singh"></td>
                                <td>harvinder@gmail.com</td>
                            </tr>
                            <tr>
                                <td class="with-radio">
                                    <div class="radio radio-css">
                                        <input type="radio" id="table_radio_3" name="table_radio">
                                        <label for="table_radio_3">&nbsp;</label>
                                    </div>
                                </td>
                                <td class="with-input-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Terry">
                                    </div>
                                </td>
                                <td>terry@gmail.com</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="hljs-wrapper">
<pre><code class="html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span
                class="hljs-attr">class</span>=<span
                class="hljs-string">"table table-td-valign-middle"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
      <span class="hljs-comment">&lt;!-- with checkbox --&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span
              class="hljs-string">"with-checkbox"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span
                class="hljs-name">td</span>&gt;</span>

      <span class="hljs-comment">&lt;!-- with radio --&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span
              class="hljs-string">"with-radio"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span
                class="hljs-name">td</span>&gt;</span>

      <span class="hljs-comment">&lt;!-- with form input --&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span
              class="hljs-string">"with-form-control"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span
                class="hljs-name">td</span>&gt;</span>

      <span class="hljs-comment">&lt;!-- with input group --&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span
              class="hljs-string">"with-input-control"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span
                class="hljs-name">td</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span></code></pre>
                </div>

            </div>


            <div class="panel panel-inverse" data-sortable-id="table-basic-9">

                <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title">Table Row Classes</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                           data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                           data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                           data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                           data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>


                <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table m-b-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Email Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="table-active">
                                <td>1</td>
                                <td>Nicky Almera</td>
                                <td>nicky@hotmail.com</td>
                            </tr>
                            <tr class="table-info">
                                <td>2</td>
                                <td>Terry Khoo</td>
                                <td>terry@gmail.com</td>
                            </tr>
                            <tr class="table-success">
                                <td>3</td>
                                <td>Edmund Wong</td>
                                <td>edmund@yahoo.com</td>
                            </tr>
                            <tr class="table-warning">
                                <td>4</td>
                                <td>Harvinder Singh</td>
                                <td>harvinder@gmail.com</td>
                            </tr>
                            <tr class="table-danger">
                                <td>5</td>
                                <td>Terry Khoo</td>
                                <td>terry@gmail.com</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="hljs-wrapper">
<pre><code class="html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span
                class="hljs-attr">class</span>=<span class="hljs-string">"table"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span> <span class="hljs-attr">class</span>=<span
            class="hljs-string">"table-active"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span
                class="hljs-name">tr</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span> <span class="hljs-attr">class</span>=<span
            class="hljs-string">"table-info"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span
                class="hljs-name">tr</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span> <span class="hljs-attr">class</span>=<span
            class="hljs-string">"table-success"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span
                class="hljs-name">tr</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span> <span class="hljs-attr">class</span>=<span
            class="hljs-string">"table-warning"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span
                class="hljs-name">tr</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span> <span class="hljs-attr">class</span>=<span
            class="hljs-string">"table-danger"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span
                class="hljs-name">tr</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span></code></pre>
                </div>

            </div>

        </div>

    </div>

</div>
@endsection
