@extends('templates.admin.master')
@section('content')
<!--main-container-part-->
	<div id="content">
	<!--breadcrumbs-->
	  <div id="content-header">
	    <div id="breadcrumb"> <a href="{{route('admin.index.index')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>Trang chủ</a></div>
	  </div>
	<!--End-breadcrumbs-->

	<!--Action boxes-->
	  <div class="container-fluid">
	    <div class="quick-actions_homepage">
	        <ul class="quick-actions">
		        <li class="bg_lr"> <a href="{{route('admin.category.index')}}"> <i class="icon-dashboard"></i> Danh mục</a> </li>
		        <li class="bg_ly"> <a href="widgets.html"> <i class="icon-inbox"></i>Câu chuyện</a> </li>
		        <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i>Admin</a> </li>
		        <li class="bg_lb"> <a href="form-common.html"> <i class="icon-th-list"></i>Liên hệ</a> </li>
		        <li class="bg_dg"> <a href="buttons.html"> <i class="icon-tint"></i>Phản hồi</a> </li>
		        <li class="bg_lh span5"> <a href="charts.html"> <i class="icon-signal"></i>Tin tức</a> </li>
		        <li class="bg_lv span5"> <a href="tables.html"> <i class="icon-th"></i><span class="label label-important">10</span>Đặt lịch hẹn</a> </li>
	        </ul>
	    </div>
	<!--End-Action boxes-->    

	<!--End-Chart-box--> 
	    <hr/>
	    <div class="row-fluid">
	      <div class="span12">
	        <div class="widget-box">
	          <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"></i></span>
	            <h5>Bài viết mới nhất</h5>
	          </div>
	          <div class="widget-content nopadding collapse in" id="collapseG2">
	            <ul class="recent-posts">
	              <li>
	                <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av1.jpg"> </div>
	                <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
	                  <p><a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a> </p>
	                </div>
	              </li>
	              <li>
	                <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av2.jpg"> </div>
	                <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
	                  <p><a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a> </p>
	                </div>
	              </li>
	              <li>
	                <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av4.jpg"> </div>
	                <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
	                  <p><a href="#">This is a much longer one that will go on for a few lines.Itaffle to pad out the comment.</a> </p>
	                </div>
	              <li>
	                <a href="/" class="btn btn-warning btn-mini">View All</a>
	              </li>
	            </ul>
	          </div>
	        </div>
	        <div class="widget-box">
	          <div class="widget-title bg_lo"  data-toggle="collapse" href="#collapseG3" > <span class="icon"> <i class="icon-chevron-down"></i> </span>
	            <h5>Lịch hẹn mới nhất</h5>
	          </div>
	          <div class="widget-content nopadding updates collapse in" id="collapseG3">
	            <div class="new-update clearfix"><i class="icon-ok-sign"></i>
	              <div class="update-done"><a title="" href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></a> <span>dolor sit amet, consectetur adipiscing eli</span> </div>
	              <div class="update-date"><span class="update-day">20</span>jan</div>
	            </div>
	            <div class="new-update clearfix"> <i class="icon-gift"></i> <span class="update-notice"> <a title="" href="#"><strong>Congratulation Maruti, Happy Birthday </strong></a> <span>many many happy returns of the day</span> </span> <span class="update-date"><span class="update-day">11</span>jan</span> </div>
	            <div class="new-update clearfix"> <i class="icon-move"></i> <span class="update-alert"> <a title="" href="#"><strong>Maruti is a Responsive Admin theme</strong></a> <span>But already everything was solved. It will ...</span> </span> <span class="update-date"><span class="update-day">07</span>Jan</span> </div>
	            <div class="new-update clearfix"> <i class="icon-leaf"></i> <span class="update-done"> <a title="" href="#"><strong>Envato approved Maruti Admin template</strong></a> <span>i am very happy to approved by TF</span> </span> <span class="update-date"><span class="update-day">05</span>jan</span> </div>
	            <div class="new-update clearfix"> <i class="icon-question-sign"></i> <span class="update-notice"> <a title="" href="#"><strong>I am alwayse here if you have any question</strong></a> <span>we glad that you choose our template</span> </span> <span class="update-date"><span class="update-day">01</span>jan</span> </div>
	          </div>
	        </div>
	        
	      </div>
	      
	    </div>
	  </div>
	</div>
@stop