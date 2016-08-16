@extends('backend/layout/clip')

@section('topscripts')
	<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
	<link href="{!! asset('/clip/bower_components/select2/dist/css/select2.min.css') !!}" rel="stylesheet" />
	<link href="{!! asset('/clip/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') !!}" rel="stylesheet" />
	<link href="{!! asset('/clip/assets/plugin/bootstrap-timepicker.min.css') !!}" rel="stylesheet" />
	<link href="{!! asset('/clip/bower_components/bootstrap-daterangepicker/daterangepicker.css') !!}" rel="stylesheet" />
	<link href="{!! asset('/clip/bower_components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') !!}" rel="stylesheet" />
	<link href="{!! asset('/clip/bower_components/jquery.tagsinput/dist/jquery.tagsinput.min.css') !!}" rel="stylesheet" />
	<link href="{!! asset('/clip/bower_components/summernote/dist/summernote.css') !!}" rel="stylesheet" />
	<link href="{!! asset('/clip/bower_components/bootstrap-fileinput/css/fileinput.min.css') !!}" rel="stylesheet" />

	<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
@endsection

@section('pagetitle')
	<div class="row">
		<div class="col-sm-12">
			<!-- start: PAGE TITLE & BREADCRUMB -->
			<ol class="breadcrumb">
				<li><a href="{!! url(getLang() . '/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li class="active">Categories</li>
			</ol>
			<div class="page-header">
				<h1 class="pull-left">Create New Categoy</h1>
			</div>
			<!-- end: PAGE TITLE & BREADCRUMB -->
		</div>
	</div>
@endsection

@section('content')
<div class="categories">


	<div class="space12">
		<div class="btn-group btn-group-lg">
			<a class="btn btn-default active" href="javascript:;">
				Categories
			</a>
			<a class="btn btn-default hidden-xs" href="{!!  route('admin.category.create') !!}">
				<i class="fa fa-plus"></i>   Add Category
			</a>
			<a target="_blank" class="btn btn-default" href="{!! route('admin.sections.create') !!}">
            Add Section
            </a>
		</div>


<a class="fa fa-plus add-btn" href="{{ url('/admin/category/create') }}">Add Category</a>
<table class="table">
	<tr id="table-header">
		<td>#</td>
		<td>Name</td>
		<td>Products</td>
		<td>Section</td>
		<td>Edit</td>
		<td>Delete</td>
	</tr>
	@foreach($categories as $category)
	<tr>
		<td>{{ $category->id }}</td>
		<td>{{ $category->name }}</td>
		<td>{{ $category->products->count() }}</td>
		<td>{{ $category->section ? $category->section->name : '' }}</td>
		<td><a href="{{ url('/admin/category/'.$category->id.'/edit') }}" class="fa fa-pencil-square-o"></a></td>
    	<td><a href="{{ url('/category/'.$category->id.'/delete') }}" class="fa fa-times"></a></td>
    </tr>
	@endforeach
</table>
{!! $categories->render() !!}
</div>

	@endsection

	@section('bottomscripts')
		<script>
			$(document).ready(function(){
				$('.sidebar #categories').addClass('active-section');
			});
		</script>
	@endsection

	@section('clipinline')
		TableData.init();
@endsection