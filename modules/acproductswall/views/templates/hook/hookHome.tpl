{if !empty($AC_TITRE_PAGE)}
	<h2 id="ac_pw_maintitle">{l s=$AC_TITRE_PAGE|upper}</h2>
{/if}

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4" id="ac_pw_leftcolumn">

			{if !empty($AC_URL_BLOC_1)}
			<div class="ac_pw_blocleftsmall" style="background-image: url('{$AC_IMG_BLOC_1}');">
				<center class="ac_pw_center_lien">
					<a href="{$AC_URL_BLOC_1}" class="ac_pw_lien" style="background:{$AC_COLOR_BLOC_1};">
					{l s='DISCOVER MORE' mod='acproductswall'}
					</a>
				</center>
			</div>
			{/if}

			{if !empty($AC_URL_BLOC_2)}
			<div class="ac_pw_blocleftbig" style="background-image: url('{$AC_IMG_BLOC_2}');">
				<center class="ac_pw_center_lien">
					<a href="{$AC_URL_BLOC_2}" class="ac_pw_lien" style="background:{$AC_COLOR_BLOC_2};">
					{l s='DISCOVER MORE' mod='acproductswall'}
					</a>
				</center>
			</div>
			{/if}

		</div>

		<div class="col-md-8" id="ac_pw_rightcolumn">
			{if !empty($AC_URL_BLOC_3)}
			<div class="ac_pw_blocrightbig" style="background-image: url('{$AC_IMG_BLOC_3}');">
				<center class="ac_pw_center_lien">
					<a href="{$AC_URL_BLOC_3}" class="ac_pw_lien" style="background:{$AC_COLOR_BLOC_3};">
					{l s='DISCOVER MORE' mod='acproductswall'}
					</a>
				</center>
			</div>
			{/if}

			{if !empty($AC_URL_BLOC_4)}
			<div class="ac_pw_blocrightsmall" style="background-image: url('{$AC_IMG_BLOC_4}');">
				<center class="ac_pw_center_lien">
					<a href="{$AC_URL_BLOC_4}" class="ac_pw_lien" style="background:{$AC_COLOR_BLOC_4};">
					{l s='DISCOVER MORE' mod='acproductswall'}
					</a>
				</center>
			</div>
			{/if}

		</div>
	</div>
</div>