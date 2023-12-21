@extends('layouts.master')
@section('content')
    <section class="section bg-light">
		<div class="container">
			<div class="row align-items-stretch retro-layout">

                @foreach ($posts as $post )

                <div class="col-md-4">

					<a href="{{route('post.single',$post->id)}}" class="h-entry v-height gradient">

						<div class="featured-img" style="background-image: url('{{asset($post->image)}}');"></div>

						<div class="text">
							<span class="date">{{$post->created_at}}</span>
							<h2>{{$post->title}}</h2>
						</div>
					</a>

				</div>
                @endforeach



				{{-- <div class="col-md-4">
					<a href="single.html" class="h-entry img-5 h-100 gradient">

						<div class="featured-img" style="background-image: url('images/img_1_vertical.jpg');"></div>

						<div class="text">
							<span class="date">Apr. 14th, 2022</span>
							<h2>Why is my internet so slow?</h2>
						</div>
					</a>
				</div> --}}

				{{-- <div class="col-md-4">
					<a href="single.html" class="h-entry v-height gradient">

						<div class="featured-img" style="background-image: url('images/img_4_horizontal.jpg');"></div>

						<div class="text">
							<span class="date">Apr. 14th, 2022</span>
							<h2>Thought you loved Python? Wait until you meet Rust</h2>
						</div>
					</a>
				</div> --}}
			</div>
		</div>
	</section>
	<!-- End retroy layout blog posts -->

	<!-- Start posts-entry -->
	<section class="section posts-entry">
		<div class="container">
			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Business</h2>
				</div>
				{{-- <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div> --}}
			</div>
			<div class="row g-3">
				<div class="col-md-12">
					<div class="row g-3">

                        @foreach ($postCat as $post )
                        <div class="col-md-6">
							<div class="blog-entry">
								<a href="{{route('post.single',$post->id)}}" class="img-link">
									<img  src="{{asset($post->image)}}" alt="Image" class="img-fluid">
								</a>
								<span class="date">{{$post->created_at}}</span>
								<h2><a href="{{route('post.single',$post->id)}}">{!!$post->title!!}</a></h2>
								<p>{!!$post->content!!}</p>
								<p><a href="{{route('post.single',$post->id)}}" class="btn btn-sm btn-outline-primary">Read More</a></p>
							</div>
						</div>
                        @endforeach


					</div>
				</div>
				{{-- <div class="col-md-3">
					<ul class="list-unstyled blog-entry-sm">


						<li>
							<span class="date">Apr. 14th, 2022</span>
							<h3><a href="single.html">Meta unveils fees on metaverse sales</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</li>


					</ul>
				</div> --}}
			</div>
		</div>
	</section>
	<!-- End posts-entry -->

	<!-- Start posts-entry -->

<section class="section posts-entry posts-entry-sm bg-light">
    <div class="container">
        <div class="row">
            @foreach ( $postnormal as $postNor)
            <div class="col-md-6 col-lg-3">
                <div class="blog-entry">
                    <a href="{{route('post.single',$postNor->id)}}" class="img-link">
                        <img src="{{asset($postNor->image)}}" alt="Image" class="img-fluid">
                    </a>
                    <span class="date">{{$postNor->created_at}}</span>
                    <h2><a href="{{route('post.single',$postNor->id)}}">{!!limitText($postNor->title, 45)!!}</a></h2>
                    <p>{!!limitText($postNor->content)!!}</p>
                    <p><a href="{{route('post.single',$postNor->id)}}" class="read-more">Continue Reading</a></p>
                </div>
            </div>
            @endforeach

            <div class="mx-auto pb-10 w-4/5"> {{$postnormal->links()}}</div>



        </div>

    </div>

</section>
	<!-- End posts-entry -->

	<!-- Start posts-entry -->
	{{-- <section class="section posts-entry">
		<div class="container">
			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Culture</h2>
				</div>
				<div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
			</div>
			<div class="row g-3">
				<div class="col-md-9 order-md-2">
					<div class="row g-3">
						<div class="col-md-6">
							<div class="blog-entry">
								<a href="single.html" class="img-link">
									<img src="images/img_1_sq.jpg" alt="Image" class="img-fluid">
								</a>
								<span class="date">Apr. 14th, 2022</span>
								<h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
								<p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="blog-entry">
								<a href="single.html" class="img-link">
									<img src="images/img_2_sq.jpg" alt="Image" class="img-fluid">
								</a>
								<span class="date">Apr. 14th, 2022</span>
								<h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
								<p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<ul class="list-unstyled blog-entry-sm">
						<li>
							<span class="date">Apr. 14th, 2022</span>
							<h3><a href="single.html">Don’t assume your user data in the cloud is safe</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</li>

						<li>
							<span class="date">Apr. 14th, 2022</span>
							<h3><a href="single.html">Meta unveils fees on metaverse sales</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</li>

						<li>
							<span class="date">Apr. 14th, 2022</span>
							<h3><a href="single.html">UK sees highest inflation in 30 years</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section> --}}



@endsection
