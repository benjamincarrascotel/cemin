				<!--aside open-->
				<aside class="app-sidebar">
					<div class="app-sidebar__logo">
						@if(auth()->user()->admin)
							<a class="header-brand" href="{{route('admin.index')}}">
						@elseif(auth()->user()->superadmin)
							<a class="header-brand" href="{{route('superadmin.index')}}">
						@endif
							<img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Azea logo">
							<img src="{{asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Azea logo">
							<img src="{{asset('assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Azea logo">
							<img src="{{asset('assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="Azea logo">
						</a>
					</div>

					<ul class="side-menu app-sidebar3">
						<li class="side-item side-item-category">Principal</li>

						@if(auth()->user()->superadmin)
						<li class="slide">
							<a class="side-menu__item"  href="{{route('superadmin.index')}}">
							<span class="side-menu__label">Dashboard SuperAdmin</span></a>
						</li>
						@endif
						
						@if(auth()->user()->admin)
						<li class="slide">
							<a class="side-menu__item"  href="{{route('admin.index')}}">
							<span class="side-menu__label">Dashboard Admin</span></a>
						</li>
						@endif

						
						@if(auth()->user()->superadmin)
						<li class="side-item side-item-category">Administracion</li>
						<li class="slide">
							<a class="side-menu__item"  href="{{route('usuarios.index')}}">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M9.36264 3.53846C7.60261 3.53846 6.17582 4.96525 6.17582 6.72528C6.17582 8.4853 7.60261 9.91209 9.36264 9.91209C11.1227 9.91209 12.5494 8.4853 12.5494 6.72528C12.5494 4.96525 11.1227 3.53846 9.36264 3.53846ZM4.63736 6.72528C4.63736 4.11558 6.75294 2 9.36264 2C11.9723 2 14.0879 4.11558 14.0879 6.72528C14.0879 9.33497 11.9723 11.4506 9.36264 11.4506C6.75294 11.4506 4.63736 9.33497 4.63736 6.72528Z" />
									<path fill-rule="evenodd" clip-rule="evenodd" d="M7.41153 15.4066C5.27249 15.4066 3.53846 17.1406 3.53846 19.2797C3.53846 19.3861 3.55682 19.4596 3.57526 19.5013C3.59011 19.5348 3.60106 19.5412 3.60591 19.544C4.13353 19.8541 5.65133 20.4615 9.36264 20.4615C13.0739 20.4615 14.5913 19.8543 15.1189 19.5443C15.1238 19.5414 15.1352 19.5348 15.15 19.5013C15.1685 19.4596 15.1868 19.3861 15.1868 19.2797C15.1868 17.1406 13.4528 15.4066 11.3137 15.4066H7.41153ZM2 19.2797C2 16.291 4.42282 13.8681 7.41153 13.8681H11.3137C14.3024 13.8681 16.7253 16.291 16.7253 19.2797C16.7253 19.7944 16.5513 20.4869 15.8984 20.8706C15.0381 21.3763 13.2089 22 9.36264 22C5.51639 22 3.68722 21.3763 2.82683 20.8706C2.17398 20.4869 2 19.7944 2 19.2797Z" />
									<path fill-rule="evenodd" clip-rule="evenodd" d="M15.5431 3.88721C15.654 3.47709 16.0763 3.23448 16.4864 3.34532C18.1832 3.80392 19.3626 5.47949 19.3626 7.38461C19.3626 9.39763 17.9829 11.2126 16.0478 11.4451C15.626 11.4957 15.243 11.1949 15.1923 10.7731C15.1416 10.3513 15.4425 9.96824 15.8643 9.91758C16.8962 9.79362 17.8242 8.75741 17.8242 7.38461C17.8242 6.08213 17.0256 5.0847 16.085 4.8305C15.6749 4.71966 15.4323 4.29733 15.5431 3.88721Z" />
									<path fill-rule="evenodd" clip-rule="evenodd" d="M17.8384 14.4901C17.9197 14.0731 18.3237 13.801 18.7407 13.8824C20.6337 14.2516 22 15.91 22 17.8388V18.3735C22 18.8469 21.858 19.5212 21.2404 19.9159C20.8246 20.1817 20.1798 20.4649 19.1855 20.666C18.7691 20.7503 18.3633 20.481 18.279 20.0646C18.1948 19.6482 18.464 19.2424 18.8804 19.1581C19.7287 18.9865 20.1871 18.7633 20.4118 18.6197L20.4136 18.6179C20.4153 18.6158 20.4213 18.6077 20.4287 18.5896C20.4451 18.5498 20.4615 18.4784 20.4615 18.3735V17.8388C20.4615 16.6462 19.6167 15.6207 18.4462 15.3924C18.0292 15.311 17.7571 14.9071 17.8384 14.4901Z" />
								</svg>
							<span class="side-menu__label">Usuarios</span></a>
						</li>
						@endif

					</ul>
				</aside>
				<!--aside closed-->