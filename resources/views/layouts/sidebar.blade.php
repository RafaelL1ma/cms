<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <!--- Sidemenu -->
    <div id="sidebar-menu">

        <ul class="metismenu" id="side-menu">
            <li class="menu-title">Navegação</li>

            <li>
                <a href="home/thing">
                    <i class="fe-airplay"></i>
                    <span class="newuser">Coisa</span>
                </a>
            </li>



            <li>
                <a href="/home/users">
                    <i class="fe-users"></i>
                    <span class="newuser">Usuários</span>
                </a>
            </li>

            <li>
                <a href="home/new/users">
                    <i class="fe-users"></i>
                    <span class="newuser">Novo Usuário</span>
                </a>
            </li>



            @can('isAdmin')
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Navegação</li>
                <li>
                    <a href="/home/users">
                        <i class="fe-users"></i>
                        <span class="newuser">Usuários</span>
                    </a>
                </li>

                <li>
                    <a href="/home/courses">
                        <i class="fe-users"></i>
                        <span>Cursos</span>
                    </a>
                </li>
            </ul>
            @endcan

            @can('isCoordinator')
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Navegação</li>
                <li>
                    <a href="/home/users">
                        <i class="fe-airplay"></i>
                        <span class="newuser">Usuários</span>
                    </a>
                </li>

                <li>
                    <a href="/home/subjects">
                        <i class="fe-users"></i>
                        <span>Disciplinas</span>
                    </a>
                </li>
            </ul>

            @endcan

            @can('isTeacher')
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Navegação</li>
                <li>
                    <a href="/home/groups">
                        <i class="fe-users"></i>
                        <span>Classes</span>
                    </a>
                </li>

                <li>
                    <a href="/home/questions">
                        <i class="fe-pocket"></i>
                        <span>Questões</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fe-users"></i>
                        <span>Gerar Prova</span>
                    </a>
                </li>
            </ul>
            @endcan


    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
