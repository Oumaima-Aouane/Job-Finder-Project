<!-- @extends('layout.index')
@section('content')
 <!--Contact section Starts -->
 <!--Contact section ends<div class="section-title"><p> Contact us</p></div>
    
    <section class="contact">
          <div class="box-container">

            <div class="box">
                <i class="fas fa-phone"></i>
                <a href="tel:1234567890">123-456-7890</a>
                <a href="tel:1112223333">111-222-3333</a>
             </div>

             <div class="box">
                <i class="fas fa-envelope"></i>
                <a href="mailto:omaima@gmail.com">omaima@gmail.com</a>
                <a href="mailto:aouane@gmail.com">aouane@gmail.com</a>
             </div>

             <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <a href="#">flat no. 1, a-1 building, jogeshwari, mumbai, india - 400410</a>
             </div>

          </div>
        <form action="" method="post">
            <h3>drop your message</h3>
            <div class="flex">
                <div class="box">
                    <p>name <span>*</span></p>
                    <input type="text" name="name" class="input" maxlength="20"
                    placeholder="enter your name" required>
                </div>

                <div class="box">
                    <p>email <span>*</span></p>
                    <input type="email" name="email" class="input" maxlength="50"
                    placeholder="enter your email" required>
                </div>

                <div class="box">
                    <p>number <span>*</span></p>
                    <input type="number" name="number" class="input" min="0" max="9999999999" maxlength="10"
                    placeholder="enter your number" required>
                </div>

                <div class="box">
                    <p>role <span>*</span></p>
                    <select type="role" name="role" class="input" required>
                        <option value="employee">job seeker (employee)</option>
                        <option value="employeer">job provider (employeer)</option>
                    </select>
                </div>
            </div>

                <p>message <span>*</span></p>
                <textarea type="text" name="massage" class="input" maxlength="1000"
                placeholder="enter your message" cols="30" rows="10" required></textarea>

                <input type="submit" value="send message" name="send" class="btn">
        </form>
    </section>
     -->


@endsection 