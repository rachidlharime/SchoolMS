<nav id="sidebar">
    <div class="sidebar-header">
        <h3>SchoolMS</h3>
        <hr>
    </div>
    <ul class="list-unstyled components">
        <li> 
            <a href={{url('/')}}>
                <i class="fas fa-home mr-2"></i>
                Home
            </a>
        </li>
        @if (Auth::user()->isAdmin !== null)
        <li> 
            <a href="#teachersMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-user-tie mr-2"></i>
                Teachers
            </a>
            <ul class="collapse list-unstyled" id="teachersMenu">
                <li> 
                    <a href={{url('/teachers/new')}}>
                        <i class="fas fa-plus mr-2"></i>
                        New teacher
                    </a>
                </li>
                <li> 
                    <a href={{url('/teachers')}}>
                        <i class="fas fa-tasks mr-2"></i>
                        Manage teachers
                    </a>
                </li>
            </ul>
        </li>
        <li> 
            <a href="#studentsMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-user-graduate mr-2"></i>
                Students
            </a>
            <ul class="collapse list-unstyled" id="studentsMenu">
                <li> 
                    <a href={{url('/students/new')}}>
                        <i class="fas fa-plus mr-2"></i>
                        New student
                    </a>
                </li>
                <li> 
                    <a href={{url('/students')}}>
                        <i class="fas fa-tasks mr-2"></i>
                        Manage students
                    </a>
                </li>
            </ul>
        </li>
        <li> 
            <a href="#subjectsMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-book mr-2"></i>    
                Subjects
            </a>
            <ul class="collapse list-unstyled" id="subjectsMenu">
                <li> 
                    <a href={{url('/subjects/new')}}>
                        <i class="fas fa-plus mr-2"></i>
                        New subject
                    </a>
                </li>
                <li> 
                    <a href={{url('/subjects')}}>
                        <i class="fas fa-tasks mr-2"></i>
                        Manage subjects
                    </a>
                </li>
            </ul>
        </li>
        <li> 
            <a href={{url('/grades')}}>
                <i class="fas fa-graduation-cap mr-2"></i>
                Grades
            </a>
        </li>
        @endif

        @if (Auth::user()->isTeacher !== null)
        {{-- Teacher section --}}
        <li> 
            <a href={{url('/students')}}>
                <i class="fas fa-user-graduate mr-2"></i>
                Your students
            </a>
        </li>
        <li> 
            <a href="#gradesMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-graduation-cap mr-2"></i>    
                Grades
            </a>
            <ul class="collapse list-unstyled" id="gradesMenu">
                <li> 
                    <a href={{url('/grades/new')}}>
                        <i class="fas fa-plus mr-2"></i>
                        New grade
                    </a>
                </li>
                <li> 
                    <a href={{url('/grades')}}>
                        <i class="fas fa-tasks mr-2"></i>
                        Manage grades
                    </a>
                </li>
            </ul>
        </li>
        @endif

        @if (Auth::user()->isStudent !== null)
        {{-- Student section --}}
        <li> 
            <a href={{url('/grades')}}>
                <i class="fas fa-graduation-cap mr-2"></i>
                Your grades
            </a>
        </li>
        @endif

        @if (Auth::user()->isAdmin !== null)
        <hr>
        <li> 
            <a href="#settingsMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-cog mr-2"></i>    
                Settings
            </a>
            <ul class="collapse list-unstyled" id="settingsMenu">
                <li> 
                    <a href={{url('/settings/username')}}>
                        <i class="far fa-edit mr-2"></i>
                        Edit your username
                    </a>
                </li>
                <li> 
                    <a href={{url('/settings/password')}}>
                        <i class="fas fa-key mr-2"></i>
                        Change your password
                    </a>
                </li>
            </ul>
        </li>
        @endif
    </ul>
    <p class="text-center mt-3">
        &copy; 
        <a href="https://github.com/rachidlharime" style="color: #cccccc" target="_blank">
            Rachid L'harime
        </a>
    </p>
</nav>