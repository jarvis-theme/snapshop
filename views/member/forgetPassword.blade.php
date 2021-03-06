	<div class="full_page">
		<h1>Member Area</h1>
		<div class="checkout_steps contact_page">
			<ol id="checkoutSteps">
				<li class="section allow active" id="opc-login">
					<div class="step-title">
						<h2>Lupa Password</h2>
					</div>
					<div id="checkout-step-login">
						<div class="col2-set mt20">
							<div class="col-1 mb20">
								<h3><b>Pendaftaran</b></h3>
								<p>Daftar untuk mendapatkan keuntungan :</p>
								<ul class="ul">
									<li>Cepat dan Mudah dalam bertransaksi</li>
									<li>Mudah untuk mengetahui Order Histori dan Status</li>
								</ul>
								<div class="buttons-set">
									<button onClick="parent.location='{{url('member/create')}}'" class="button brown_btn" type="button">Daftar</button>
								</div>
							</div>
							<div class="col-2 form-login mb20">
								<h3><b>Lupa Password</b></h3>
								<form class="form-horizontal" action="{{url('member/forgetpassword')}}" method="post">
									<fieldset>
										<ul class="form-list">
											<li>
												<label class="required"><em>*</em>Email Address</label>
												<div class="input-box">
													<input type="email" name="recoveryEmail" required>
												</div>
											</li>
										</ul>
										<br/>
									</fieldset>
									<div class="buttons-set">
										<a class="fl_right" href="{{url('member/')}}">&larr; Login</a>
										<button  class="button brown_btn" type="submit">Reset Password</button>
									</div>
								</form>
							</div>
						</div>
						<br>
						<div class="col2-set">
							<div class="col-1"></div>
							<div class="col-2"></div>
						</div>
					</div>
				</li>
			</ol>
		</div>
	</div>