<?php
/**
 * Block: RSVP
 * Form base
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/tickets/v2/rsvp/form/form.php
 *
 * See more documentation about our Blocks Editor templating system.
 *
 * @link https://m.tri.be/1amp Help article for RSVP & Ticket template files.
 *
 * @since 4.12.3
 * @since 5.0.0 Updated the input name used for submitting.
 *
 * @version 5.0.0
 */

$going = $this->get( 'going' );
?>

<form
	name="tribe-tickets-rsvp-form"
	data-rsvp-id="<?php echo esc_attr( $rsvp->ID ); ?>"
>
	<input type="hidden" name="tribe_tickets[<?php echo esc_attr( absint( $rsvp->ID ) ); ?>][ticket_id]" value="<?php echo esc_attr( absint( $rsvp->ID ) ); ?>">
	<input type="hidden" name="tribe_tickets[<?php echo esc_attr( absint( $rsvp->ID ) ); ?>][attendees][0][order_status]" value="<?php echo esc_attr( $going ); ?>">
	<input type="hidden" name="tribe_tickets[<?php echo esc_attr( absint( $rsvp->ID ) ); ?>][attendees][0][optout]" value="1">

	<div class="tribe-tickets__rsvp-form-wrapper">

		<?php $this->template( 'v2/rsvp/form/title', [ 'rsvp' => $rsvp, 'going' => $going ] ); ?>

		<div class="tribe-tickets__rsvp-form-content tribe-tickets__form">

			<?php $this->template( 'v2/rsvp/form/fields', [ 'rsvp' => $rsvp, 'going' => $going ] ); ?>

<div class="tribe-common-b1 tribe-tickets__form-field tribe-tickets__form-field--required GDPR_consent">
	<label class="tribe-common-b2--min-medium tribe-tickets__form-field-label" for="GDPR_consent">
		Datenschutz<span class="screen-reader-text">(required)</span>
		<span class="tribe-required" aria-hidden="true" role="presentation">*</span>
	</label>
	<input type="checkbox" name="GDPR_consent" class="tribe-common-form-control-checkbox__input tribe-tickets__form-field-input tribe-tickets__rsvp-form-input-checkbox" value="Ja, Datenschutzerklaerung akzeptiert" required=""> <label class="GDPR_text" for="GDPR_consent">Ja, ich habe die <a href="/datenschutzerklaerung">Datenschutzerklaerung</a> zur Kenntnis genommen und bin mit der Speicherung und Verarbeitung meiner Daten einverstanden.
</div>

			<?php $this->template( 'v2/rsvp/form/buttons', [ 'rsvp' => $rsvp, 'going' => $going ] ); ?>

		</div>

	</div>

</form>
