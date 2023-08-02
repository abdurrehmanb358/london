 @include('layouts.header')

<main class="home">
    <div class="contanier">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-8">

                <h2>Flight Detail</h2>

                <table style="width: 80%; border-collapse: collapse; border: 1px solid #ddd;">
                    <tr>
                        <th
                            style="width: 20%; padding: 8px; text-align: center; background-color: rgb(0,6,84); color: white;">
                            Airline</th>
                        <th
                            style="width: 20%; padding: 8px; text-align: center; background-color: rgb(0,6,84); color: white;">
                            Departure</th>
                        <th
                            style="width: 21%; padding: 8px; text-align: center; background-color: rgb(0,6,84); color: white;">
                        </th>
                        <th
                            style="width: 20%; padding: 8px; text-align: center; background-color: rgb(0,6,84); color: white;">
                            Arrive</th>
                        <th
                            style="width: 30%; padding-left: -3px; text-align: center; background-color: rgb(0,6,84); color: white;">
                            Fare</th>
                    </tr>
                    <tr>
                        <td style="padding: 8px;  text-align: center;">yguj</td>
                        <td style="padding: 8px;  text-align: center;">
                                             {{$flight->flying_from}}
                                             <p style="margin: 0; font-size: 12px;"><?php echo date('F j, Y', strtotime($flight->departing)); ?></p>


                            </p>
                        </td>
                        <td style="padding: 8px;  text-align: center;">
                            <i class="fas fa-exchange-alt"></i>
                        </td>
                        <td style="padding: 8px;  text-align: center;">
                          {{$flight->flying_to}}                            <p style="margin: 0; font-size: 12px;"> <?php echo date('F j, Y', strtotime( $flight->returning )); ?></p>
                        </td>
                        <td style="padding: 8px;  text-align: center;">{{$flight->price}}</td>
                    </tr>
                </table>
                <p style="width: 78%;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat maxime iure
                    excepturi sequi dolor quod id, dolores voluptatem accusantium, consectetur error? Impedit iste
                    nostrum quaerat deleniti, ab voluptate, praesentium maiores modi ducimus fuga dolor repudiandae,
                    nihil blanditiis facilis recusandae deserunt?</p>
                <div>

                    <h5>Flight Inquery</h5>

                    <form action="">

                        <div class="">
                            <div style="margin-bottom: 20px;">
                                <input type="text" name="first_name"
                                    style="width: 240px; height: 47px; margin-right: 10px; margin-bottom: 10px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="First Name">
                                <input type="text" name="last_name" id=""
                                    style="width: 240px; height: 47px; margin-left: 20px; margin-bottom: 10px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="Last Name">
                                <input type="email" name="email" id=""
                                    style="width: 240px; height: 47px; margin-bottom: 10px;  margin-left: 20px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="Email">
                            </div>

                            <div style="margin-bottom: 20px;">
                                <input type="email" name="Email"
                                    style="width: 240px; height: 47px; margin-right: 10px; margin-bottom: 10px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="Email">
                                <input type="text" name="phone_number" id=""
                                    style="width: 240px; height: 47px; margin-bottom: 10px;  margin-left: 20px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="Phone Number">
                                <input type="text" name="destination" id=""
                                    style="width: 240px; height: 47px; margin-bottom: 10px;  margin-left: 20px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="Destination">
                            </div>
                            <div style="margin-bottom: 20px;">
                                <input type="text" name="form"
                                    style="width: 240px; height: 47px; margin-right: 10px; margin-bottom: 10px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="Form">
                                <input type="text" name="date of departure" id=""
                                    style="width: 240px; height: 47px; margin-left: 20px; margin-bottom: 10px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="Date of Departure">
                                <input type="text" name="date of arrivel" id=""
                                    style="width: 240px; height: 47px; margin-bottom: 10px;  margin-left: 20px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="Date of Arrivel">


                            </div>
                            <div style="margin-bottom: 20px;">
                                <input type="text" name="airline"
                                    style="width: 240px; height: 47px; margin-right: 10px; margin-bottom: 10px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="Airline">
                                <input type="text" name="number of passenger" id=""
                                    style="width: 240px; height: 47px; margin-left: 20px; margin-bottom: 10px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="Number of passenger">
                                <input type="text" name="class" id=""
                                    style="width: 240px; height: 47px; margin-bottom: 10px;  margin-left: 20px; border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    placeholder="Class">


                            </div>
                            <div>
                                <textarea name="message" id=""
                                    style="width: 79%; height: 139px; margin-top: -11px;  border: none; border-bottom: 2px solid red; background-color: rgb(248, 248, 248); outline: none;"
                                    rows="30" cols="50" placeholder="Message"></textarea>

                            </div>
                            <div class="button-group">
                                <button>SUBMIT</button>

                            </div>



                    </form>

                </div>

            </div>
        </div>

    </div>

</main>
@include('layouts.footer')
