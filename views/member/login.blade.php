			<div class="full_page">
				<h1>Member Area</h1>
				<div class="checkout_steps contact_page">
					<ol id="checkoutSteps">
						<li class="section allow active" id="opc-login">
							<div class="step-title">
								<h2>Login Area</h2>
							</div>
							<div id="checkout-step-login">
								<div class="col2-set mt20">
									<div class="col-1 mb20">
										<h3><b>Pendaftaran</b></h3>
										<p>Daftar untuk mendapatkan keuntungan :</p>
										<ul class="benefits">
											<li>Cepat dan Mudah dalam bertransaksi</li>
											<li>Mudah untuk mengetahui Order Histori dan Status</li>
										</ul>
										<div class="buttons-set">
											<button onClick="parent.location='{{URL::to('member/create')}}'" class="button brown_btn" type="button">Daftar</button>
										</div>
									</div>
									<div class="col-2 form-login mb20">
										<h3><b>Login</b></h3>
										<form class="form-horizontal" action="{{URL::to('member/login')}}" method="post">
											<fieldset>
												<ul class="form-list">
													<li>
														<label class="required"><em>*</em>Email</label>
														<div class="input-box">
															<input type="email" name="email" id="inputEmail" placeholder="Email" required>
														</div>
													</li>
													<li>
														<label class="required" for="login-password"><em>*</em>Password</label>
														<div class="input-box">
															<input type="password" name="password" id="inputPassword" placeholder="Password" required>
														</div>
													</li>
												</ul>
												<br/>
												<div class="buttons-set"> 
													<a class="fl_right" href="{{URL::to('member/forget-password')}}">Lupa password?</a>
													<button  class="button brown_btn" type="submit">Login</button>
												</div>
											</fieldset>
										</div>
									</div>
									<div class="col2-set">
										<div class="col-1"></div>
										<div class="col-2"></div>
									</div>
								</form>
							</div>
						</li>
					</ol>
				</div>
			</div>