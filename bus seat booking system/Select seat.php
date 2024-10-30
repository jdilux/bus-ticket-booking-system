<!DOCTYPE html>
<html>
<head>
  <style>
    .container {
      display: flex;
      align-items: center;
      
    }
    body {
            font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
         }

        .topnav {
            background-color: #333;
            overflow: hidden;
        }
	
        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }
        
        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 30px 0;
            font-size: 14px;
        }
        
        h3 {
            font-size: 18px;
            margin-bottom: 20px;
        }
        

        p {
            margin-bottom: 20px;
        }
        .social-icons {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .social-icons li {
            margin-right: 10px;
        }

        .social-icons li a {
            display: block;
            width: 30px;
            height: 30px;
            background-color: #fff;
            text-align: center;
            line-height: 30px;
            border-radius: 50%;
        }

        .social-icons li a:hover {
            background-color: #f2f2f2;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col {
            flex: 1;
            margin: 0 20px;
        }
        .fa {
            color: #333;
            font-size: 16px;
        }

    .form-container {
      width: 350px;
      margin-right: 20px;
      padding-top:150px;
      padding-left:80px;
    }
    .seat-map {
      font-family: Arial, sans-serif;
      width: 450px;
    }
    .row {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }
    .left-side {
      flex-grow: 1;
    }
    .right-side {
      flex-grow: 1;
      text-align: right;
    }
    .seat {
      display: inline-block;
      width: 30px;
      height: 30px;
      border: 1px solid black;
      text-align: center;
      line-height: 30px;
    }
    .driver-seat {
      background-color: #FFD700;
    }
    .door {
      background-color: #808080;
    }
    .selected {
      background-color: #00FF00;
    }
    .btn-con {
      text-align: center;
    }
    button {
      display: inline-block;
      text-align: center;
      width: 150px;
      height: 40px;
      margin: 10px;
      font-size: 15pt;
      margin-top: 50px;
      background-color: #4CAF50;
      color: black;
      text-decoration: none;
      border-style: none;
      border-radius: 5px;
    }
  </style>
</head>
<body>

     
  <div class="container">
    <div class="form-container">
      <form>
        <label for="journey-date">Journey Date:</label>
        <input type="date" id="journey-date" name="journey-date" required>
        <br><br>
        <label for="pickup-point">Pickup Point:</label>
        <select id="pickup-point" name="pickup-point" required>
          <option value="">Select pickup point</option>
          <option value="A">Point A</option>
          <option value="B">Point B</option>
          <option value="C">Point C</option> 
        </select>
        <br><br>
        <label for="dropping-point">Dropping Point:</label>
        <select id="dropping-point" name="dropping-point" required>
          <option value="">Select dropping point</option>
          <option value="X">Point X</option>
          <option value="Y">Point Y</option>
          <option value="Z">Point Z</option>
        </select>
        <br><br>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
          <option value="">Select gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
        <br><br>
        <button type="submit">Book seat</button>
      </form>
    </div>

    <div class="seat-map">
      <div class="row">
        <div class="left-side">
          <div class="seat door"></div>
        </div>
        <div class="right-side">
          <div class="seat driver-seat">DR</div>
        </div>
      </div>
      <div class="row">
        <div class="left-side">
          <div class="seat">A1</div>
          <div class="seat">A2</div>
        </div>
        <div class="right-side">
          <div class="seat">B1</div>
          <div class="seat">B2</div>
        </div>
      </div>
      <div class="row">
        <div class="left-side">
          <div class="seat">C1</div>
          <div class="seat">C2</div>
        </div>
        <div class="right-side">
          <div class="seat">D1</div>
          <div class="seat">D2</div>
        </div>
      </div>
      <div class="row">
        <div class="left-side">
          <div class="seat">C1</div>
          <div class="seat">C2</div>
        </div>
        <div class="right-side">
          <div class="seat">D1</div>
          <div class="seat">D2</div>
        </div>
      </div>
      <div class="row">
          <div class="left-side">
            <div class="seat">E1</div>
            <div class="seat">E2</div>
          </div>
          <div class="right-side">
            <div class="seat">F1</div>
            <div class="seat">F2</div>
          </div>
        </div>
        <div class="row">
          <div class="left-side">
            <div class="seat">G1</div>
            <div class="seat">G2</div>
          </div>
          <div class="right-side">
            <div class="seat">H1</div>
            <div class="seat">H2</div>
          </div>
        </div>
        <div class="row">
          <div class="left-side">
            <div class="seat">I1</div>
            <div class="seat">I2</div>
          </div>
          <div class="right-side">
            <div class="seat">J1</div>
            <div class="seat">J2</div>
          </div>
        </div>
        <div class="row">
          <div class="left-side">
            <div class="seat">K1</div>
            <div class="seat">K2</div>
          </div>
          <div class="right-side">
            <div class="seat">L1</div>
            <div class="seat">L2</div>
          </div>
        </div>
        <div class="row">
          <div class="left-side">
            <div class="seat">M1</div>
            <div class="seat">M2</div>
          </div>
          <div class="right-side">
            <div class="seat">N1</div>
            <div class="seat">N2</div>
          </div>
        </div>
        <div class="row">
          <div class="left-side">
            <div class="seat">O1</div>
            <div class="seat">O2</div>
          </div>
          <div class="right-side">
            <div class="seat">P1</div>
            <div class="seat">P2</div>
          </div>
        </div>
        <div class="row">
          <div class="left-side">
            <div class="seat">Q1</div>
            <div class="seat">Q2</div>
          </div>
          <div class="right-side">
            <div class="seat">R1</div>
            <div class="seat">R2</div>
          </div>
        </div>
        <div class="row">
          <div class="left-side">
            <div class="seat">S1</div>
            <div class="seat">S2</div>
          </div>
          <div class="right-side">
            <div class="seat">T1</div>
            <div class="seat">T2</div>
          </div>
        </div>
        <div class="row">
          <div class="left-side">
            <div class="seat">U1</div>
            <div class="seat">U2</div>
          </div>
          <div class="right-side">
            <div class="seat">V1</div>
            <div class="seat">V2</div>
          </div>
        </div>
        <div class="row">
          <div class="left-side">
            <div class="seat">W1</div>
            <div class="seat">W2</div>
          </div>
          <div class="right-side">
            <div class="seat">X1</div>
            <div class="seat">X2</div>
          </div>
        </div>
        <div class="row">
          <div class="left-side">
            <div class="seat">Y1</div>
            <div class="seat">Y2</div>
          </div>
          <div class="right-side">
            <div class="seat">Z1</div>
            <div class="seat">Z2</div>
          </div>
        </div>
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col">
          <h3>About Us</h3>
          <p>&copy:E-Bus Ticket Booking</p>
        </div>
        <div class="col">
          <h3>Contact Us</h3>
          <p>Phone: 011-1234567<br>Email: info@busticketbooking.com</p>
        </div>
        <div class="col">
          <h3>Follow Us</h3>
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script>
    // Add click event listeners to the seats
    const seats = document.querySelectorAll('.seat');

    seats.forEach(seat => {
      seat.addEventListener('click', () => {
        seat.classList.toggle('selected');
      });
    });
  </script>
</body>
</html>
