<div id="contact_form">
    <?= form_open('email/send'); ?>
    <br/>
    <p class="form_name">
        <?= form_label('Full Name') ?><br/>
        <?= form_input('name', set_value('name')) ?>
    </p>

    <p class="form_phone">
        <?= form_label('Phone Number') ?><br/>
        <?= form_input('phone', set_value('phone')) ?>
    </p>



    <p class="form_email">
        <?= form_label('Email') ?><br/>
        <?= form_input('email', set_value('email')) ?>
    </p>

    <p class="form_subject">
        <?= form_label('Subject') ?><br/>
        <?= form_input('subject', set_value('subject')) ?>
    </p>




    <p class="form_message">
        <?= form_label('Message') ?><br/>
        <?= form_textarea('message', set_value('message')) ?>
    </p>
    
      <p class="form_subject">
         Tick if you do not wish to receive future promotions from us<br/>
        <?= form_checkbox('mailinglist', 'I do not wish to be on your mailing list', set_checkbox('mailinglist', 'I do not wish to be on your mailing list')) ?>
     
       
    </p>

    Enter the word you see below<br/>



    <input type="text" name="captcha" value="" /><br/><br/><?= form_label($captcha['image']) ?>
</div>
<?= form_hidden('ip_address', $this->input->ip_address()) ?>
<?= form_hidden('time', $captcha['time']) ?>
<div id="contact_submit"><?= form_submit('submit', 'Submit') ?></div><br/>
<?=
form_close()?>