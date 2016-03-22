<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../admin-panel.php">Admin Pane</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> Profile</a>
                </li>
                <li class="divider"></li>
                <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">

            <ul class="nav" id="side-menu">
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> User Approval<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="teacher-approval.php?table=temp_teacher">Teachers</a>
                        </li>
                        <li>
                            <a href="student-approval.php?table=temp_student">Students</a>
                        </li>
                        <li>
                            <a href="officestaffs-approval.php?table=temp_officestaff">Office Staffs</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> View Contents<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="notices.php">Notices</a>
                        </li>
                        <li>
                            <a href="news.php">News</a>
                        </li>
                        <li>
                            <a href="events.php">Events</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Post Contents<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="post-notices.php">Notices</a>
                        </li>
                        <li>
                            <a href="post-news.php">News</a>
                        </li>
                        <li>
                            <a href="post-events.php">Events</a>
                        </li>
                        <li>
                            <a href="post-vc-msg.php">VC's Message</a>
                        </li>
                        <li>
                            <a href="post-cm-msg.php">CM's Messages</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Home Posts<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="home-post.php?id=1">History</a>
                        </li>
                        <li>
                            <a href="home-post.php?id=2">Our Vision</a>
                        </li>
                        <li>
                            <a href="home-post.php?id=3">About Bhashani</a>
                        </li>
                        <li>
                            <a href="home-post.php?id=4">About Campus</a>
                        </li>
                        <li>
                            <a href="home-post.php?id=5">Dept. Info</a>
                        </li>
                        <li>
                            <a href="home-post.php?id=6">Facilities</a>
                        </li>
                        <li>
                            <a href="home-post.php?id=7">CSE Acts</a>
                        </li>
                        <li>
                            <a href="home-post.php?id=8">Research</a>
                        </li>
                        <li>
                            <a href="home-post.php?id=9">E-Library</a>
                        </li>
                        <li>
                            <a href="home-post.php?id=10">Seminar Library</a>
                        </li>
                        <li>
                            <a href="home-post.php?id=11">Internet Facilities</a>
                        </li>
                        <li>
                            <a href="home-post.php?id=12">Digital Classroom</a>
                        </li>
                        <li>
                            <a href="home-post.php?id=13">Scholarship</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Exam Routines<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="exam-routines-11.php">First Year First Sem.</a>
                        </li>
                        <li>
                            <a href="exam-routines-12.php">First Year Second Sem.</a>
                        </li>
                        <li>
                            <a href="exam-routines-21.php">Second Year First Sem.</a>
                        </li>
                        <li>
                            <a href="exam-routines-22.php">Second Year Second Sem.</a>
                        </li>
                        <li>
                            <a href="exam-routines-31.php">Third Year First Sem.</a>
                        </li>
                        <li>
                            <a href="exam-routines-32.php">Third Year Second Sem.</a>
                        </li>
                        <li>
                            <a href="exam-routines-41.php">Fourth Year First Sem.</a>
                        </li>
                        <li>
                            <a href="exam-routines-42.php">Fourth Year Second Sem.</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> View Course Curriculum<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="course-curriculum-view.php?table=course11">First Year First Sem.</a>
                        </li>
                        <li>
                            <a href="course-curriculum-view.php?table=course12">First Year Second Sem.</a>
                        </li>
                        <li>
                            <a href="course-curriculum-view.php?table=course21">Second Year First Sem.</a>
                        </li>
                        <li>
                            <a href="course-curriculum-view.php?table=course22">Second Year Second Sem.</a>
                        </li>
                        <li>
                            <a href="course-curriculum-view.php?table=course31">Third Year First Sem.</a>
                        </li>
                        <li>
                            <a href="course-curriculum-view.php?table=course32">Third Year Second Sem.</a>
                        </li>
                        <li>
                            <a href="course-curriculum-view.php?table=course41">Fourth Year First Sem.</a>
                        </li>
                        <li>
                            <a href="course-curriculum-view.php?table=course42">Fourth Year Second Sem.</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Add Course Curriculum<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="course-curriculum-add.php?table=course11">First Year First Sem.</a>
                        </li>
                        <li>
                            <a href="course-curriculum-add.php?table=course12">First Year Second Sem.</a>
                        </li>
                        <li>
                            <a href="course-curriculum-add.php?table=course21">Second Year First Sem.</a>
                        </li>
                        <li>
                            <a href="course-curriculum-add.php?table=course22">Second Year Second Sem.</a>
                        </li>
                        <li>
                            <a href="course-curriculum-add.php?table=course31">Third Year First Sem.</a>
                        </li>
                        <li>
                            <a href="course-curriculum-add.php?table=course32">Third Year Second Sem.</a>
                        </li>
                        <li>
                            <a href="course-curriculum-add.php?table=course41">Fourth Year First Sem.</a>
                        </li>
                        <li>
                            <a href="course-curriculum-add.php?table=course42">Fourth Year Second Sem.</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Class Schedules<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="class-schedule-view.php?table=routine11">First Year First Sem.</a>
                        </li>
                        <li>
                            <a href="class-schedule-view.php?table=routine12">First Year Second Sem.</a>
                        </li>
                        <li>
                            <a href="class-schedule-view.php?table=routine21">Second Year First Sem.</a>
                        </li>
                        <li>
                            <a href="class-schedule-view.php?table=routine22">Second Year Second Sem.</a>
                        </li>
                        <li>
                            <a href="class-schedule-view.php?table=routine31">Third Year First Sem.</a>
                        </li>
                        <li>
                            <a href="class-schedule-view.php?table=routine32">Third Year Second Sem.</a>
                        </li>
                        <li>
                            <a href="class-schedule-view.php?table=routine41">Fourth Year First Sem.</a>
                        </li>
                        <li>
                            <a href="class-schedule-view.php?table=routine42">Fourth Year Second Sem.</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Sliders<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="post-sliders.php">Slider Images</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Image Gallery<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="post-gallery-dept.php">Department</a></li>
                        <li><a href="post-gallery-contest.php">Contest/Workshop</a></li>
                        <li><a href="post-gallery-seminar.php">Conference/Seminar</a></li>
                        <li><a href="post-gallery-cultural.php">Cultural Program</a></li>
                        <li><a href="post-gallery-ragday.php">Rag Day</a></li>
                        <li><a href="post-gallery-freshersreception.php">Freshers Reception</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
