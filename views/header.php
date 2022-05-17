<header>
        <div class="side__bar p-0 d-flex flex-column justify-content-start">
            <div class="logo d-flex flex-column justify-content-center align-items-center">
                <a class="logo-1" href="<?php echo URL; ?>"><img src="<?php echo URL."app/image/dds.png"?>" width="140" alt="logo"></a>
                <a class="logo-2 flex-column justify-content-center align-items-center" href="<?php echo URL; ?>"><img
                        src="<?php echo URL."app/image/svg/class.png" ?>" width="40" alt="logo"></a>
            </div>
            <nav class="mt-0">
                <ul class="p-0">
                    <li class="ms-0 mb-2 me-3 nav-item 
                    <?php if(isset($_SESSION['link']) && $_SESSION['link'] == 'Dashboard') echo 'link__active' ?> 
                    d-flex justify-content-start align-items-center">
                        <a title="Dashboard" href="<?php echo URL; ?>"
                            class="nav-link me-2 d-flex justify-content-center align-items-center gap-3">
                            <img src="<?php echo URL."app/image/svg/home.png"?>" width="30" alt="Dashboard">
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="ms-0 mb-2 me-3 nav-item
                    <?php if(isset($_SESSION['link']) && $_SESSION['link'] == 'Students') echo 'link__active' ?> 
                     d-flex justify-content-start align-items-center">
                        <a title="Students" href="<?php echo URL."student"; ?>"
                            class="nav-link me-2 d-flex justify-content-center align-items-center gap-3">
                            <img src="<?php echo URL."app/image/svg/student.png"?>" width="30" alt="students">
                            <span>Students</span>
                        </a>
                    </li>
                    <li class="ms-0 mb-2 me-3 nav-item
                    <?php if(isset($_SESSION['link']) && $_SESSION['link'] == 'Teachers') echo 'link__active' ?> 
                     d-flex justify-content-start align-items-center">
                        <a title="Teachers" href="<?php echo URL."teacher"; ?>"
                            class="nav-link me-2 d-flex justify-content-center align-items-center gap-3">
                            <img src="<?php echo URL."app/image/svg/teachers.png"?>" width="30" alt="teachers">
                            <span>Teachers</span>
                        </a>
                    </li>
                    <li class="ms-0 mb-2 me-3 nav-item
                    <?php if(isset($_SESSION['link']) && $_SESSION['link'] == 'Parents') echo 'link__active' ?> 
                     d-flex justify-content-start align-items-center">
                        <a title="Parents" href="<?php echo URL."parent"; ?>"
                            class="nav-link me-2 d-flex justify-content-center align-items-center gap-3">
                            <img src="<?php echo URL."app/image/svg/family.png"?>" width="30" alt="parents">
                            <span>Parents</span>
                        </a>
                    </li>
                    <li class="ms-0 mb-2 me-3 nav-item
                    <?php if(isset($_SESSION['link']) && $_SESSION['link'] == 'Classes') echo 'link__active' ?> 
                     d-flex justify-content-start align-items-center">
                        <a title="Classes" href="<?php echo URL."classe"; ?>"
                            class="nav-link me-2 d-flex justify-content-center align-items-center gap-3">
                            <img src="<?php echo URL."app/image/svg/class.png"?>" width="30" alt="Classes">
                            <span>Classes</span>
                        </a>
                    </li>
                    <li class="ms-0 mb-2 me-3 nav-item d-flex justify-content-start align-items-center">
                        <a title="LogOut" href="<?php echo URL."logout"; ?>"
                            class="nav-link me-2 d-flex justify-content-center align-items-center gap-3">
                            <img src="<?php echo URL."app/image/svg/logout.png"?>" width="30" alt="logout">
                            <span>LogOut</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <nav class="nav__bar d-flex justify-content-between px-4 align-items-center">
            <div class="toogle pointer">
                <img src="<?php echo URL."app/image/svg/toogle.svg"?>" alt="toogle">
            </div>
            <div class="item-admin d-flex justify-content-between gap-3 align-items-center">
                <a class="adminName nav-link text-black pointer m-0">
                    <img src="<?php echo URL."app/image/user.png"?>" width="33" height="33" alt="user">
                    <span><?php echo $_SESSION['user']->nom; ?></span>
                </a>
                <a href="nav-lick">
                    <img src="<?php echo URL."app/image/svg/param.svg"?>" alt="param">
                </a>
            </div>
        </nav>
    </header>