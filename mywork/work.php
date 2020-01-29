<?php 
 class works
{
	//connection
	public function con()
	{
		$con=mysqli_connect("localhost","root","","agala") or die("error connection");
		return $con;
	}
	
	// function login in to admin panal
	public function login($a,$b)
	{
		//$b=md5($b);
		$q=mysqli_query($this->con()," 
		SELECT * FROM truckowner WHERE username='$a'and password='$b';

		 ") or die("error login");
		 
		 $i=mysqli_num_rows($q);
		 return $i;
	}
	
	// دالة تاتمين من الاختراق 
	function check($n)
	{
		return mysqli_real_escape_string($this->con(),$n);
	}
		
		
	public function forgetTruckOwnerPassword($a)
	{
		$a=$this->check($a);
		 $q = mysqli_query($this->con(),"SELECT * FROM `truckowner` WHERE  email='$a'") or die("error connect truckowner");
		 $i=mysqli_num_rows($q);
		return $i;
	}
		
		//  تسجسل الاشتراك
		
		function signUp($a,$b,$c,$d,$e,$f,$i,$j,$k)
		{
			/*$a=$this->check($a);
		    $b=$this->check($b);
			$c=$this->check($c);
			$d=$this->check($d);
			$e=$this->check($e);
			$f=$this->check($f);
			$i=$this->check($i);
			$j=$this->check($j);
			$k=$this->check($k);*/
			
			$q=mysqli_query($this->con(), 
			"INSERT INTO `truckowner`(`first_name`, `last_name`, `username`, `password`, `phone`, `email`, `company_name`, `company_no`, `company_reg`) VALUES 
			 ('$a','$b','$c','$d','$e','$f','$i','$j','$k')") or die("Error inserting to table protrackowner");
			
			
		}
		
			function addDriver($a,$b,$c,$d,$e,$f,$i,$j)
		{
			$a=$this->check($a);
		    $b=$this->check($b);
			$c=$this->check($c);
			$d=$this->check($d);
			$e=$this->check($e);
			$f=$this->check($f);
			$i=$this->check($i);
			$j=$this->check($j);
			
			$q=mysqli_query($this->con(), 
			"INSERT INTO `driver`(`username`, `password`, `truckowner_id`, `truck_id`, `address`, `phone`, `email`, `img`) 
			VALUES ('$a','$b','$c','$d','$e','$f','$i','$j')") or die("Error inserting to table Truckowner");
			
			
		}
		
		//add truckowner image
		function addImages($img,$id)
		{
			$img=$this->check($img);
			$id=$this->check($pid);
			$q=mysqli_query($this->con() ,
			"INSERT INTO `truckownerimage`(`img`, `truckowner_id`) VALUES('$img','$id')" ) or die("error add Truckowner  images");
			return $q;
		}
		
		// دالة اضافة الشاحنه
	  function addTruck($a,$b,$c,$d)
		{
			$a=$this->check($a);
		    $b=$this->check($b);
			$c=$this->check($c);
			$d=$this->check($d);
			
			$q=mysqli_query($this->con(), 
			"INSERT INTO `truck`(`truck_no`, `truckowner_id`, `truck_type`, `price`) 
			VALUES  ('$a','$b','$c','$d')") or die("Error inserting to table truck");
			
			
		}
		
		 //select admin information 
			function getTruckonerinformation($a)
			
			{
					$q=mysqli_query($this->con() ,"SELECT * FROM truckowner WHERE username='$a';") 
					 or die("error retrive from information Truckowner");
							
							return $q;
					
			}
		
		
	
	// select 
			function getAllDriver()	
				{
					$q=mysqli_query($this->con() , "SELECT * FROM `vdriver`") or die("error retrive from information driver");
						
						return $q;
				}
				
				// select income chart
				function getSummaryDriverIncom()	
				{
					$q=mysqli_query($this->con(),"SELECT * FROM `chartDriverIncom`") or die("error retrive from chart report driverIncome");
						
						return $q;
				}
				
					//show chart 
				function getSummaryDriversActivity()
				{
					$q=mysqli_query($this->con(),"SELECT d.username , ord.order_price ,ord.order_id ,dl.id from rate r 
					JOIN driver d ON d.drive_id = r.drive_id 
					JOIN order_customer ord ON ord.order_id = r.order_id 
					JOIN driverlog dl ON dl.driverId=r.drive_id WHERE MONTH(ord.date_trip) = MONTH(CURRENT_DATE());") or die("error retrive from chart report driverActivity");
				}
				
				
				function getDriverPayment ()
				{
					$q=mysqli_query($this->con(),"SELECT * FROM `getdriverpayment`;");
					return $q;
				}
				
				
					function getmanagecustomer()
				{
				$q=mysqli_query($this->con(),"SELECT oc.order_id ,c.username ,c.img ,c.address, oc.date_trip,tr.location_from ,tr.location_to ,c.phone from order_customer oc 
                      JOIN customer c ON c.customer_id = oc.customer_id JOIN trip_record tr on tr.trip_id = oc.trip_id order by oc.date_trip desc ;") or die ("error retrive from information customer");
										
					return $q;

				}
				
				function getvieworder()
				{
					$q=mysqli_query($this->con(),"SELECT oc.order_id ,d.username driver,d.phone dphone ,d.img dimg,c.username customer ,c.img cimg ,c.address, oc.date_trip,tr.location_from ,tr.location_to from order_customer oc 
                                                   JOIN customer c ON c.customer_id = oc.customer_id JOIN driver d ON d.drive_id = oc.drive_id JOIN trip_record tr on tr.trip_id = oc.trip_id
                                                       order by oc.date_trip desc;") or die("error retrive from order");
					 return $q;
				}
				function getowner()
				{
					$q=mysqli_query($this->con(),"SELECT truckowner_id, username, phone, email, company_name,company_no, img  FROM truckowner;") or die("error retrive from truckowner");
					return $q;
				}
	

	
   }  // نهاية الكلاس 

?>