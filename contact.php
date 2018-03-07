<html>
	<body>
		<?php
			$name=$_POST['name'];
			$email=$_POST['email'];
			$subject=$_POST['subject'];
			$message=$_POST['message'];

			$to="ami99b@gmail.com";

			$message="From:$name <br />".$message;

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

			// More headers
			$headers .= 'From: Admin Teknologi Informasi <ami99b@gmail.com>'."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
			@mail($to,$subject,$message,$headers);
			if(@mail)
			{
			echo "Email sent successfully !!";	
			}
			?>
			
				<form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Nama">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="subject" placeholder="Judul"></textarea>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="3" placeholder="Pesan"></textarea>
                    </div>

                    <button type="submit" class="btn btn-info">Kirim Pesan</button>
                </form>
	</body>
</html>