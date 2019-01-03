            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ADMIN
                            <small>Subheading</small>
                        </h1>

						<?php
<<<<<<< HEAD
            // $found_user = User::find_user_by_id(2);
            //
            // $user = User::instantiation($found_user);
            //
            // echo $user->username;4

            // $users = User::find_all_users();
            // foreach ($users as $user) {
            //   echo $user->id . "<br>";
            // }

            $found_user = User::find_user_by_id(2);
            echo $found_user->username;
=======


						// $users = User::find_all_users();
						// foreach($users as $user){
							// echo $user->id . "<br/>";
						// }
						$found_user = User::find_user_by_id(1);
						echo $found_user->username;

						$pictures = new Pictures();

            echo $pictures->show();
>>>>>>> 866f4bb7b662bd5045c37a9f168e7cab5353c326
						?>

                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
