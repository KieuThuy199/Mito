@extends('user.layout.layout')
@section('content')

    <section class="order-form">
        <div class="container">
            <div class="form-order">
                <h1>Cake Order Form</h1>
                <h5>informations</h5>
                <form>
                    <div class="form-row">
                        <div class="col-md-4">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="col-md-4">
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone" required>
                        </div>
                        <div class="col-md-4">
                            <input type="text" onfocus="(this.type='date')" onblur="(this.value == '' ? this.type='text' : this.type='date')" name="date" class="form-control" placeholder="Order Date" required>
                        </div>

                        <div class="col-md-4">
                            <input type="text" name="event" class="form-control" placeholder="Event Type"required>
                        </div>
                        <div class="col-md-4">
                            <input type="text" onfocus="(this.type='date')" onblur="(this.value == '' ? this.type='text' : this.type='date')" class="form-control" placeholder="Order Taken Date"required>
                        </div>
                        <div class="col-md-4">
                            <input type="text" onfocus="(this.type='time')" onblur="(this.value == '' ? this.type='text' : this.type='time')" name="time" class="form-control" placeholder="Order Taken Time"required>
                        </div>

                        <div class="col-md-4">
                            <input type="text" name="takenby" class="form-control" placeholder="Order Taken By"required>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="address" class="form-control" placeholder="Delivery Address" required>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-7 pb-5">
                            <h5>cake details</h5>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <select class="custom-select form-control" id="size" required>
                                        <option selected disabled value="">Size</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="custom-select form-control" id="shape" required>
                                        <option selected disabled value="">Shape</option>
                                        <option>...</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <select class="custom-select form-control" id="flavor" required>
                                        <option selected disabled value="">Flavor</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="custom-select form-control" id="color" required>
                                        <option selected disabled value="">Color</option>
                                        <option>...</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <select class="custom-select form-control" id="filling" required>
                                        <option selected disabled value="">Filling</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="custom-select form-control" id="icing" required>
                                        <option selected disabled value="">Icing</option>
                                        <option>...</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" name="writing" class="form-control" placeholder="Writing">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="instruc" rows="7" cols="50" placeholder="Special Instructions"></textarea>
                                </div>
                            </div>

                            <button class="col-md-6 btn-send">SEND</button>

                        </div>

                        <div class="col-md-5">
                            <h5>style</h5>
                            <img src="img/03_MitoSweets_Orders_17.jpg" width="100%">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
