<h1 class="wine-text "> Login </h1>

<div id="msg" class="stateMSG text-red"><?php echo $message; ?></div><br>

<div class="row">
	<?php echo form_open('authenticate/login', array('class', 'col s12'));?>
		<div class="row">
			<div class="input-field col s12 l6">
				<input id="username" type="text" class="validate" name="username">
				<label for="username">User Name</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12 l6">
				<input id="password" type="password" class="validate" name="password">
				<label for="password">Password</label>
			</div>	
		</div>
		<button class="btn waves-effect waves-light wine" type="submit" name="submit">Login
			<i class="material-icons right">send</i>
		</button>
	</form>
</div>