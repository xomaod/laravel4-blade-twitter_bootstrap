@extends('twitter_bootstrap.layout')

@section('content1')
<strong>Learn more about Twitter Bootstrap.</strong>
<br />
<p>
    <a class="btn btn-primary btn-large" href="http://twitter.github.io/bootstrap">Learn Twitter Boostrap »</a>
</p>
@stop

@section('modal1')
<strong>Modal popup.</strong>
<br />
<!-- Button to trigger modal -->
<a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">Launch demo modal</a>

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel">Modal header</h3>
</div>
<div class="modal-body">
<p>One fine body…</p>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button class="btn btn-primary">Save changes</button>
</div>
</div>
@stop

@section('navbar1')
<strong>Nav. Menu bar</strong>
<br />
<div class="navbar">
    <div class="navbar-inner">
    <a class="brand" href="#">Title</a>
    <ul class="nav">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
    </ul>
    </div>
</div>
@stop

@section('buttongroup1')
<strong>Button Group.</strong>
<br />
<div class="btn-group">
    <button class="btn">Action</button>
    <button class="btn dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        <li><a tabindex="-1" href="#">Action</a></li>
        <li><a tabindex="-1" href="#">Another action</a></li>
        <li><a tabindex="-1" href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a tabindex="-1" href="#">Separated link</a></li>
    </ul>
</div>

<div class="btn-group">
    <button class="btn btn-warning">Warning</button>
    <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        <li><a tabindex="-1" href="#">Action</a></li>
        <li><a tabindex="-1" href="#">Another action</a></li>
        <li><a tabindex="-1" href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a tabindex="-1" href="#">Separated link</a></li>
    </ul>
</div>

<div class="btn-group">
    <button class="btn btn-danger">Danger</button>
    <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        <li><a tabindex="-1" href="#">Action</a></li>
        <li><a tabindex="-1" href="#">Another action</a></li>
        <li><a tabindex="-1" href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a tabindex="-1" href="#">Separated link</a></li>
    </ul>
</div>
@stop
