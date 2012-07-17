<div style="width: 430px; float: left; margin-right: 20px;">
	<div id="contact_form">
		<?= form_open('email/sendcalc'); ?>
		<h3>Your Details</h3>
		<p class="form_name">
			<?= form_label('Full Name') ?>
			<br />
			<?= form_input('name', set_value('name')) ?>
		</p>

		<p class="form_phone">
			<?= form_label('Contact Tel No') ?>
			<br />
			<?= form_input('phone', set_value('phone')) ?>
		</p>



		<p class="form_email">
			<?= form_label('Email') ?>
			<br />
			<?= form_input('email', set_value('email')) ?>
		</p>
		<hr />
		<h3>Business Ltd and Non Ltd</h3>
		<p class="business_name">
			<?= form_label('Name') ?>
			<br />
			<?= form_input('businessname', set_value('businessname')) ?>
		</p>
		<p class="turnover">
			<?= form_label('Annual Turnover') ?>
			<br />
			<?= form_input('turnover', set_value('turnover')) ?>
		</p>
		<p class="website">
			<?= form_label('Web site') ?>
			<br />
			<?= form_input('website', set_value('website')) ?>
		</p>
		<p class="nature">
			<?= form_label('Nature of Business') ?>
			<br />
			<?= form_input('nature', set_value('nature')) ?>
		</p>
		<p class="banker">
			<?= form_label('Current Banker') ?>
			<br />
			<?= form_input('banker', set_value('banker')) ?>
		</p>
		<hr />
		<h3>Asset Based Lending Facility</h3>
		<p class="banker">
			<?= form_label('Yes/No') ?>
			<br />
			<?php $options = array(
					'yes'  => 'Yes',
					'no'    => 'No'

			);

			?>


			<?= form_dropdown('assetlendingYesNo', $options) ?>
		</p>
		<p class="banker">
			<?= form_label('Name of Lender') ?>
			<br />
			<?= form_input('assetlendingLender', set_value('assetlendingLender')) ?>
		</p>
		<p class="banker">
			<?= form_label('Amount') ?>
			<br />
			<?= form_input('assetlendingAmount', set_value('assetlendingAmount')) ?>
		</p>
		<hr />
		<p class="banker">
			<?= form_label('Total Monthly Incomings') ?>
			<br />
			<?= form_input('monthlyIn', set_value('monthlyIn')) ?>
		</p>
		<p class="banker">
			<?= form_label('Total Monthly Outgoings') ?>
			<br />
			<?= form_input('monthlyOut', set_value('monthlyOut')) ?>
		</p>
		<hr />
		<h3>Court Action</h3>
		<p class="banker">
			<?= form_label('Creditor Petition for winding up/bankruptcy Yes/No') ?>
			<br />



			<?= form_dropdown('CreditorPetition', $options) ?>
		</p>
		<p class="banker">
			<?= form_label('Winding Up/Bankruptcy Order Made Yes/No') ?>
			<br />



			<?= form_dropdown('WindingUp', $options) ?>
		</p>
		<p class="banker">
			<?= form_label('Names of Petitioning Creditor') ?>
			<br />
			<?= form_input('creditorNames', set_value('creditorNames')) ?>
		</p>
		<p class="banker">
			<?= form_label('Petitioning Solicitor') ?>
			<br />
			<?= form_input('petitioningSolicitor', set_value('petitioningSolicitor')) ?>
		</p>
		<p class="banker">
			<?= form_label('Reference') ?>
			<br />
			<?= form_input('PetitionReferece', set_value('PetitionReferece')) ?>
		</p>

		<p class="banker">
			<?= form_label('Amount of Debt') ?>
			<br />
			<?= form_input('AmountOfDebt', set_value('AmountOfDebt')) ?>
		</p>




	</div>
</div>
<div style="width: 430px; float: left">
	<div id="contact_form">

		<h3>Secured Liabilities</h3>

		<p class="banker">
			<?= form_label('Name of Lender') ?>
			<br />

			<?= form_input('lendername', set_value('lendername')) ?>
		</p>
		<p class="banker">
			<?= form_label('Secured Liability') ?>
			<br />

			<?= form_input('liability1', set_value('liability1')) ?>
		</p>
		<p class="banker">
			<?= form_label('Unsecured Liability') ?>
			<br />

			<?= form_input('liability2', set_value('liability2')) ?>
		</p>
		<p class="banker">
			<?= form_label('Reference') ?>
			<br />

			<?= form_input('ref', set_value('ref')) ?>
		</p>
		<p class="banker">
			<?= form_label('Total Amount') ?>
			<br />

			<?= form_input('SLtotal', set_value('SLtotal')) ?>
		</p>

		<div id="addLiability" class="formButton">add</div>
		<div style="display: none" id="liabilityDiv">
			<table id="liabilityTable" class="invoicetable">

				<thead>
					<th>Name of Lender</th>

					<th>Secured Liability</th>

					<th>Unsecured Liability</th>

					<th>Reference</th>
					<th>Total Amount</th>
					<th></th>
				</thead>
				<tbody>

				</tbody>
			</table>

			<div id="liabilityTotal2"></div>
		</div>
		<textarea style="display: none" name="liabilityentry"
			id="liabilityentry">

</textarea>
		<hr />
		<h3>Un-Secured Liabilities</h3>
		<p class="banker">
			<?= form_label('Name of Creditor') ?>
			<br />

			<?= form_input('creditorname', set_value('creditorname')) ?>
		</p>
		<p class="banker">
			<?= form_label('Reference') ?>
			<br />

			<?= form_input('USLref', set_value('USLref')) ?>
		</p>
		<p class="banker">
			<?= form_label('Amount') ?>
			<br />

			<?= form_input('USLamount', set_value('USLamount')) ?>
		</p>

		<div id="addUSLiability" class="formButton">add</div>

		<div style="display: none" id="USliabilityDiv">
			<table id="USliabilityTable" class="invoicetable">

				<thead>
					<th>Name of Creditor</th>

					<th>Reference</th>

					<th>Amount</th>

					<th></th>
				</thead>
				<tbody>

				</tbody>
			</table>

			<div id="USliabilityTotal2"></div>

		</div>


		<textarea style="display: none" name="USliabilityentry"
			id="USliabilityentry">

</textarea>
		<hr />

		<h3>Assets</h3>

		<p class="banker">
			<?= form_label('Description') ?>
			<br />

			<?= form_input('assetDescription', set_value('assetDescription')) ?>
		</p>
		<p class="banker">
			<?= form_label('Value') ?>
			<br />

			<?= form_input('assetValue', set_value('assetValue')) ?>
		</p>
		<p class="banker">
			<?= form_label('Finance/mortgage outstanding amount') ?>
			<br />

			<?= form_input('assetOutstanding', set_value('assetOutstanding')) ?>
		</p>

		<p class="banker">
			<?= form_label('Equity') ?>
			<br />

			<?= form_input('assetEquity', set_value('assetEquity')) ?>
		</p>

		<p class="banker">
			<?= form_label('Asset in sole name') ?>
			<br />

			<?= form_input('assetSole', set_value('assetSole')) ?>
		</p>

		<div id="addasset" class="formButton">add</div>

		<div style="display: none" id="assetDiv">
			<table id="assetTable" class="invoicetable">

				<thead>
					<th>Description</th>

					<th>Value</th>

					<th>Finance/mortgage<br /> outstanding amount
					</th>

					<th>Equity</th>

					<th>Asset in <br />sole name
					</th>
					<th></th>
				</thead>
				<tbody>

				</tbody>
			</table>


		</div>


		<textarea style="display: none" name="assetentry" id="assetentry">

</textarea>
		<hr />
		<h3>CCJ's</h3>

		<p class="banker">
			<?= form_label('Court') ?>
			<br />

			<?= form_input('CCJcourt', set_value('CCJcourt')) ?>
		</p>
		<p class="banker">
			<?= form_label('Court Ref') ?>
			<br />

			<?= form_input('CCJcourtref', set_value('CCJcourtref')) ?>
		</p>
		<p class="banker">
			<?= form_label('Amount') ?>
			<br />

			<?= form_input('CCJamount', set_value('CCJamount')) ?>
		</p>
		<p class="banker">
			<?= form_label('Claimant') ?>
			<br />

			<?= form_input('CCJclaimant', set_value('CCJclaimant')) ?>
		</p>
		<p class="banker">
			<?= form_label('Solicitor') ?>
			<br />

			<?= form_input('CCJsolicitor', set_value('CCJsolicitor')) ?>
		</p>
		<p class="banker">
			<?= form_label('Reference') ?>
			<br />

			<?= form_input('CCJref', set_value('CCJref')) ?>
		</p>
		<div id="addCCJ" class="formButton">add</div>

		<div style="display: none" id="CCJDiv">
			<table id="CCJTable" class="invoicetable">

				<thead>
					<th>Court</th>

					<th>Court Ref</th>

					<th>Amount</th>

					<th>Claimant</th>

					<th>Solicitor</th>

					<th>Reference</th>
					<th></th>
				</thead>
				<tbody>

				</tbody>
			</table>


		</div>


		<textarea style="display: none" name="CCJentry" id="CCJentry">

</textarea>
	</div>
</div>

<div style="clear: both;"></div>

<p class="form_subject">
	Tick if you do not wish to receive future promotions from us<br />
	<?= form_checkbox('mailinglist', 'I do not wish to be on your mailing list', set_checkbox('mailinglist', 'I do not wish to be on your mailing list')) ?>


</p>

Enter the word you see below
<br />



<input type="text" name="captcha" value="" />
<br />
<br />
<?= form_label($captcha['image']) ?>

<?= form_hidden('ip_address', $this->input->ip_address()) ?>
<?= form_hidden('time', $captcha['time']) ?>
<div id="contact_submit">
	<?= form_submit('submit', 'Submit') ?>
</div>
<br />
<?=
form_close()?>