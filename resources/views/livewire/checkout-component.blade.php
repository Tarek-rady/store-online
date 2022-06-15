<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>checkout</span></li>
            </ul>
        </div>

        <div class=" main-content-area">
           <form wire:submit.prevent="PlaceOrder" >
                <div class="wrap-address-billing">
                    <h3 class="box-title">Billing Address</h3>
                    <div class="billing-address" name="frm-billing">
                        <p class="row-in-form">
                            <label for="FirstName">FirstName <span>*</span></label>

                           <input  type="text" name="FirstName" value="{{old('FirstName')}}" placeholder="Your name" wire:model="FirstName">
                             @error('FirstName')
                               <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="LastName">LastName<span>*</span></label>
                            <input  type="text" name="LastName" value="{{old('LastName')}}" placeholder="Your last name" wire:model="LastName">
                             @error('LastName')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="email">Email Addreess:</label>

                           <input  type="email" name="email" value="{{old('email')}}" placeholder="Type your email" wire:model="email">
                             @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="mopile">mopile<span>*</span></label>

                           <input  type="number" name="mopile" value="{{old('mopile')}}" placeholder="11 digits format" wire:model="mopile">
                             @error('mopile')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="line1">line1:</label>

                           <input  type="text" name="line1" value="{{old('line1')}}" placeholder="Street at apartment number" wire:model="line1">
                             @error('line1')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </p>

                        <p class="row-in-form">
                            <label for="line2">line2:</label>

                           <input  type="text" name="line2" value="{{old('line2')}}" placeholder="Street at apartment number" wire:model="line2">
                             @error('line2')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </p>

                        <p class="row-in-form">
                            <label for="country">country<span>*</span></label>

                           <input  type="text" name="country" value="{{old('country')}}" placeholder="United States" wire:model="country">
                             @error('country')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </p>

                        <p class="row-in-form">
                            <label for="city">Town / City<span>*</span></label>

                           <input  type="text" name="city" value="{{old('city')}}" placeholder="City name" wire:model="city">
                             @error('city')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </p>

                        <p class="row-in-form">
                            <label for="province">province<span>*</span></label>

                           <input  type="text" name="province" value="{{old('province')}}" placeholder="province name" wire:model="province">
                             @error('province')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="zipcode">Postcode / ZIP:</label>

                           <input  type="number" name="zipcode" value="{{old('zipcode')}}" placeholder="Your postal code" wire:model="zipcode">
                             @error('zipcode')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </p>


                    </div>
                </div>
                <div class="summary summary-checkout">
                    <div class="summary-item payment-method">
                        <h4 class="title-box">Payment Method</h4>
                        <p class="summary-info"><span class="title">Check / Money order</span></p>
                        <p class="summary-info"><span class="title">Credit Cart (saved)</span></p>
                        <div class="choose-payment-methods">
                            <label class="payment-method">

                               <input name="payment-method" id="payment-method-bank" value="bank" type="radio" wire:model="paymentmethod">

                               <span>Cash on delivery</span>
                                <span class="payment-desc">order now pay o delivery</span>
                            </label>
                            <label class="payment-method">

                               <input name="payment-method" id="payment-method-visa" value="card" type="radio" wire:model="paymentmethod">

                               <span>Debit / Cretid cart</span>
                                <span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
                            </label>
                            <label class="payment-method">

                               <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio" wire:model="paymentmethod">

                               <span>Paypal</span>
                                <span class="payment-desc">You can pay with your credit</span>
                                <span class="payment-desc">card if you don't have a paypal account</span>
                            </label>
                        </div>

                           @if ( Session::has('checkout'))
                             <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">${{  session()->get('checkout')['total'] }}</span></p>
                           @endif
                             <button type="submit" class="btn btn-medium">Place order now</button>
                    </div>
                    <div class="summary-item shipping-method">
                        <h4 class="title-box f-title">Shipping method</h4>
                        <p class="summary-info"><span class="title">Flat Rate</span></p>
                        <p class="summary-info"><span class="title">Fixed $0.00</span></p>
                    </div>
                </div>
           </form>

        </div><!--end main content area-->
    </div><!--end container-->

</main>
