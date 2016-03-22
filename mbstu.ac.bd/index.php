<?php
include('config/connection.php');
//vc's message
$vc_message = "SELECT * FROM welcome_message WHERE id = 1";
$r_vc = $conn->query($vc_message);
$post_vc = mysqli_fetch_assoc($r_vc);
$post_heading_vc = $post_vc['heading'];
$total_post_vc = $post_vc['message'];
$short_post_vc = substr($total_post_vc, 0, 500);

//Chairman's Message
$chairman_message = "SELECT * FROM welcome_message WHERE id = 2";
$r_chairman = $conn->query($chairman_message);
$post_chairman = mysqli_fetch_assoc($r_chairman);
$post_heading_chairman = $post_chairman['heading'];
$total_post_chairman = $post_chairman['message'];
$short_post_chairman = substr($total_post_chairman, 0, 500);

//Notice Board
$notice = "SELECT *FROM notice ORDER BY id DESC LIMIT 5";
$r_notice = $conn->query($notice);

//News Query
$news = "SELECT *FROM news ORDER BY id DESC LIMIT 5";
$r_news = $conn->query($news);

//Events Query
$events = "SELECT *FROM events ORDER BY id DESC LIMIT 5";
$r_events = $conn->query($events);
?>
<!doctype html>
<!--[if lt IE 7]>      
	<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> 
<![endif]-->
<!--[if IE 7]>         
	<html class="no-js lt-ie9 lt-ie8" lang=""> 
<![endif]-->
<!--[if IE 8]>         
	<html class="no-js lt-ie9" lang=""> 
<![endif]-->
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include('config/css.php') ?>
        <?php include('config/headerjs.php') ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div>

			<?php include('templates/navigation.php') ?>

			<div class="container content_body">
				<div class="content_area col-md-8">
					<div class="slider">
                        <?php
                        $location='pages/uploads/sliders/';
                        $dir = opendir($location);
                        $count = 0;
                        while(($entry = readdir($dir)) !== false){
                            if($entry != '.' && $entry != '..'){
                                $count++;
                            }
                        }
                        ?>
                        <div class="otw_portfolio_manager-slider" data-animation="slide"> <!-- data-animation => slider or fade -->
                            <ul class="slides">
                                <?php
                                for($i=0;$i<$count;$i++) {
                                    echo '<li>
                                    <img class="img" src="pages/uploads/sliders/slider-' . $i . '.jpg" />
                                    </li>';
                                }
                                ?>
                            </ul>
                        </div>
					</div>
					<div class="message_area">
						<div style="padding:5px" class="vc_message_area col-md-6">
							<div class="vc_message single_content">
								<div class="heading">
									<h5><?php echo $post_heading_vc; ?></h5>
								</div>
								<div class="message">
									<img src="pages/uploads/message/vc-img.jpg" alt="" />
									<?php echo $short_post_vc ?>
								</div>
								<div class="buttn_area">
									<a href="message.php?id=1"class="bttn">View More</a>
								</div>
							</div>
						</div>
						<div style="padding:5px" class="vc_message_area col-md-6">
							<div class="vc_message single_content">
								<div class="heading">
									<h5><?php echo $post_heading_chairman; ?></h5>
								</div>
								<div class="message">
									<img src="pages/uploads/message/cm-img.jpg" alt="" />
                                    <?php echo $short_post_chairman ?>
								</div>
								<div class="buttn_area">
									<a href="message.php?id=2"class="bttn">View More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="cse_corner_area col-md-6">
						<div class="cse_corner">
							<div class="heading">
								<h5>CSE Corner</h5>
							</div>
							<ul class="list-group">
								<a href="" class="list-group-item">Programming Contest</a>
								<a href="" class="list-group-item">App Contest</a>
								<a href="" class="list-group-item">Seminar/Conference</a>
								<a href="" class="list-group-item">Workshop</a>
								<a href="" class="list-group-item">IT/Technology Feast</a>
							    <a href="" class="list-group-item">Robotic Contest</a>
							</ul>
						</div>
					</div>
					<div class="academic_corner_area col-md-6">
						<div class="academic_corner">
							<div class="heading">
								<h5>Academic Corner</h5>
							</div>
							<ul class="list-group">
								<a href="" class="list-group-item">Notice From Department</a>
								<a href="" class="list-group-item">Registration Notice</a>
								<a href="" class="list-group-item">Exam Notice</a>
								<a href="" class="list-group-item">Exam Routine</a>
								<a href="" class="list-group-item">Class Schedule</a>
							    <a href="" class="list-group-item">Results</a>
							</ul>
						</div>
					</div>
				</div>
				<div class="sidebar_area col-md-4">
					<div class="col-md-12 notice_board">
						<div class="heading">
							<h5>Notice Board</h5>
						</div>
						<ul class="list-group bg">
							<div class="showing_board">
                                <?php
                                if($r_notice->num_rows > 0){
                                    while($row = $r_notice->fetch_assoc()) {
                                        $id=$row['id'];

                                        $total_notice_heading = $row['notice_heading'];
                                        $short_notice_heading = substr($total_notice_heading, 0, 50);
                                        echo '<a href="notice.php?table=notice&id='.$id.'" class="list-group-item">'.$short_notice_heading.'<p>Date: '.$row['notice_date'].'</p></a>';
                                    }
                                }
                                ?>
							</div>
							<a href="notice-list.php" class="btn list-group-item">View More</a>
						</ul>
					</div>
					<div class="col-md-12 events_news">
						<div class="heading">
							<h5>News & Events</h5>
						</div>

                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a data-toggle="tab" href="#news">News</a></li>
                            <li><a data-toggle="tab" href="#events">Events</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="news" class="tab-pane fade in active">
                                <ul class="list-group bg">
                                    <div class="showing_board">
                                        <?php
                                        if($r_news->num_rows > 0){
                                            while($row = $r_news->fetch_assoc()) {
                                                $id=$row['id'];
                                                $total_news_heading = $row['news_heading'];
                                                $short_news_heading = substr($total_news_heading, 0, 50);
                                                echo '<a href="news.php?table=news&id='.$id.'" class="list-group-item">'.$short_news_heading.'<p>Date: '.$row['news_date'].'</p></a>';
                                            }
                                        }
                                        ?>
                                    </div>
                                    <a href="news-list.php" class="btn list-group-item">View More</a>
                                </ul>
                            </div>
                            <div id="events" class="tab-pane fade">
                                <ul class="list-group bg">
                                    <div class="showing_board">
                                        <?php
                                        if($r_events->num_rows > 0){
                                            while($row = $r_events->fetch_assoc()) {
                                                $id=$row['id'];
                                                $total_event_heading = $row['event_heading'];
                                                $short_event_heading = substr($total_event_heading, 0, 50);
                                                echo '<a href="events.php?table=events&id='.$id.'" class="list-group-item">'.$short_event_heading.'<p>Date: '.$row['event_date'].'</p></a>';
                                            }
                                        }
                                        ?>
                                    </div>
                                    <a href="events-list.php" class="btn list-group-item">View More</a>
                                </ul>
                            </div>
                        </div>
					</div>
					<div class="col-md-12 social_menu">
						<div class="heading">
							<h5>Connect With Us</h5>
						</div>
						<ul class="list-group">
							<a href="" class="list-group-item">MBSTU Official FB Fan Page.</a>
							<a href="" class="list-group-item">Follow Us On Twitter</a>
							<a href="" class="list-group-item">Join Us On Google+</a>
							<a href="" class="list-group-item">Our Youtube Channel</a>
						</ul>
					</div>
				</div>		
			</div>
			<?php include('templates/footer.php') ?>
		</div>

		<!--Script-->
        <?php include('config/footerjs.php')?>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $('#tabs').tab();
            });
        </script>
	</body>
</html>
