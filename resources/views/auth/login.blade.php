@extends('layouts.admin')

@section('content')
<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3 class="widget_title">Sing In</h3>
				</div>
				<div class="card-body">
					<aside class="single_sidebar_widget newsletter_widget">
						<form action="#">
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" class="form-control" placeholder="username">
							</div>
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" class="form-control" placeholder="password">
							</div>
							<div class="button_cont" align="center"><a class="btn_1 d-block" href="add-website-here" target="_blank" rel="nofollow noopener">Sign In</a></div>
						</form>
						</aside>
					</div>
					<div class="card-footer">
						<div class="d-flex justify-content-center links">
							Don't have an account?<a href="#">Sign Up</a>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection