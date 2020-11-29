@extends('template_blog.content')
	
@section('isi')
<div class="col-md-8 hot-post-left">
					<!-- post -->
					<div class="post post-thumb">
					<a class="post-img" href="blog-post.html"><img src="{{ asset('public/frontend/img/starwars.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">StarWars</a>
							</div>
							<h3 class="post-title title-lg"><a href="blog-post.html">'Star Wars: The Rise of Skywalker' Pecahkan Rekor Baru di Hari Natal</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">Rico Agustian</a></li>
								<li>20 Desember 2019</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{ asset('public/frontend/img/endgame.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Marvels</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Avengers: Endgame pecahkan rekor box office, raup Rp 17 triliun dalam lima hari</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">Ce</a></li>
								<li>20 Oktober 2019</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{ asset('public/frontend/img/mando.png')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">StarWars</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">The Mandalorian Sesason 2 tayang di Disney +</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">Rico Agustian</a></li>
								<li>20 November 2020</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
	
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Postingan Terbaru</h2>
							</div>
						</div>
						<!-- post -->
						@foreach($data as $post_terbaru)
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{ route('blog.isi', $post_terbaru->slug ) }}"><img src="{{ $post_terbaru->gambar }}" alt="" style="height: 200px"></a>
								<div class="post-body">
									<div class="post-category">
										<a href="#">{{ $post_terbaru->category->name }}</a>
									</div>
									<h3 class="post-title"><a href="#">{{ $post_terbaru->judul }}</a></h3>
									<ul class="post-meta">
										<li><a href="#">{{ $post_terbaru->users->name }}</a></li>
										<li>{{ $post_terbaru->created_at->diffForHumans() }}</li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
			
					</div>
					<!-- /row -->

	
				</div>
				
		
		
			<!-- /row -->
@endsection




