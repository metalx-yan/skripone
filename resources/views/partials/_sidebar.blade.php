<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> <img src=" https://component-creator.com/images/testimonials/defaultuser.png"
                    alt="user" /> </div>
            <!-- User profile text-->
            <br>
            <div class="profile-text"> <a href="#" role="button" aria-haspopup="true"
                    aria-expanded="true">{{ ucfirst(Auth::user()->name) }}<span class="caret"></span></a>
                <br>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @if (Auth::user()->role->name == 'administrator')
                    <li class="nav-small-cap">PERSONAL</li>

                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><i
                                class="mdi mdi-account-outline"></i><span class="hide-menu">Master Data</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{ route('users.index') }}">Account</a></li>
                            <li><a href="{{ route('students.index') }}">Data Siswa</a></li>
                            <li><a href="{{ route('psikotest.index') }}">Test Pendaftaran</a></li>
                            <li><a href="{{ route('student.result') }}">Hasil Pendaftaran</a></li>
                        </ul>
                    </li>
                @endif

                @if (Auth::user()->role->name == 'siswa')
                    <li class="nav-small-cap">PERSONAL</li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><i
                                class="mdi mdi-account-outline"></i><span class="hide-menu">Master Data</span></a>
                        <ul aria-expanded="false" class="collapse">
                            {{-- <li>
                                <a class="" href="" aria-expanded="false"></i><span class="hide-menu">Dashboard</span></a>
                            </li> --}}
                            <li><a href="{{ route('student.view.id', Auth::user()->id) }}">Data Siswa</a></li>
                            <li>
                                <a class="" href="{{ route('psikotest.soal') }}" aria-expanded="false"><span class="hide-menu">Test Pendaftaran</span></a>
                            </li>
        
                            {{-- <li><a href="">Test Pendaftaran</a></li> --}}
                            <li><a href="{{ route('student.result.id',Auth::user()->id) }}">Hasil Pendaftaran</a></li>
                        </ul>
                    </li>
                @endif

                @if (Auth::user()->role->name == 'kepsek')
                <li class="nav-small-cap">PERSONAL</li>
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false"><i
                            class="mdi mdi-account-outline"></i><span class="hide-menu">Master Data</span></a>
                    <ul aria-expanded="false" class="collapse">
                        {{-- <li>
                            <a class="" href="" aria-expanded="false"></i><span class="hide-menu">Dashboard</span></a>
                        </li> --}}
                        <li><a href="{{ route('student.get.all') }}">Data Siswa</a></li>
                        
                    </ul>
                </li>
            @endif
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
</aside>
