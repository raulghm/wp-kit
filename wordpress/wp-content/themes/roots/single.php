@layout('templates/layouts/default')

@section('content')

	@include('templates/partials/header')

  <main class="single">

  	@wpposts
			<div class="top" style="background-image: url({{ resize_image( post_image(), 1280 ) }});">
				<div class="title">
					<div class="inner">
						<div class="title-inner">
							<h1>{{ the_title() }}</h1>
						</div>
					</div>
				</div>
			</div>

			<div class="content">
				<div class="inner">
					{{ the_content() }}
				</div>
			</div>
		@wpempty
			<p>El famoso error 404 :(</p>
		@wpend

  </main>

  @include('templates/partials/footer')

@endsection
