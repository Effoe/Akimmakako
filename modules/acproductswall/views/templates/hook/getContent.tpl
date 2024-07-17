
{if isset($ok)}
	<div class="alert alert-success">
		{l s='Settings saved' mod='monmodule'}
	</div>
{/if}

<div class="panel">
	<form action="" method="post">
		<div class="form-group clearfix">
			<label class="col-lg-3">Option 1</label>
			<div class="col-lg-9">
				<img src="../img/admin/enabled.gif">
				<input type="radio" id="option1_oui" name="option1" value="1" {if $option1 eq '1'} checked {/if} />
				<label>Oui</label>
				<img src="../img/admin/disabled.gif">
				<input type="radio" id="option1_non" name="option1" value="0" {if $option1 eq '0'} checked {/if} />
				<label>Non</label>
			</div>
		</div>

		<div class="form-group clearfix">
			<label class="col-lg-3">Option 2</label>
			<div class="col-lg-9">
				<img src="../img/admin/enabled.gif">
				<input type="radio" id="option2_oui" name="option2" value="1" {if $option2 eq '1'} checked {/if} />
				<label>Oui</label>
				<img src="../img/admin/disabled.gif">
				<input type="radio" id="option2_non" name="option2" value="0" {if $option2 eq '0'} checked {/if} />
				<label>Non</label>
			</div>
		</div>

		<div class="panel-footer">
			<input class="btn btn-default pull-right" type="submit" name="monmondule_form" value="Enregistrer" />
		</div>
	</form>	
</div>