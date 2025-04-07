 <div class="deznav">
            <div class="deznav-scroll">
				<div class="main-profile">
					<div class="image-bx">
						<img src="{{ asset ('dash/images/kaneta.png') }}" alt="">
						{{-- <a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i></a> --}}
					</div>
					<h5 class="name"><span class="font-w400">Hello,</span>{{auth()->user()->name}}</h5>
					<p class="email"><a href="" class="__cf_email__" data-cfemail="95f8f4e7e4e0f0efefefefd5f8f4fcf9bbf6faf8">{{auth()->user()->email}}</a></p>
				</div>
				
				<ul class="metismenu" id="menu">
					@if (auth()->user()->level=="guru"|| auth()->user()->level == "admin"|| auth()->user()->level == "siswa")
					 <li class="nav-label first"></li>
            <li><a  href="/home" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Home</span>
                </a>
               
            </li>
					 
					@endif
				 
				@if ( auth()->user()->level == "admin")
					<li class="nav-label first">Main Menu</li>
                    <li><a  href="/admin" aria-expanded="false">
							<i class="flaticon-044-file"></i>
							<span class="nav-text">Data Admin</span>
						</a>
                       
                    </li>
					  <li><a  href="/mutasi-keluar" aria-expanded="false">
							<i class="flaticon-044-file"></i>
							<span class="nav-text">Data Mutasi Keluar</span>
						</a>
                       
                    </li>
					<li><a  href="/mutasi-masuk" aria-expanded="false">
							<i class="flaticon-044-file"></i>
							<span class="nav-text">Data Mutasi Masuk</span>
						</a>
                       
                    </li>
					<li><a  href="/mgmp" aria-expanded="false">
							<i class="flaticon-044-file"></i>
							<span class="nav-text">Data MGMP</span>
						</a>
                       
                    </li>
				<li><a  href="/siswa" aria-expanded="false">
							<i class="flaticon-044-file"></i>
							<span class="nav-text">Data Ijin Operasional</span>
						</a>
                       
                    </li>
				@endif
                </ul>
				<div class="copyright">
					<p><strong>E-Vote </strong> © 2024 All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> by Deo Andreas</p>
				</div>
			</div>
        </div>