<?php
/**
 * complimentTuesday SpecialPage for ComplimentTuesday extension
 *
 * @file
 * @ingroup Extensions
 */
class SpecialComplimentTuesday extends SpecialPage {
	public function __construct() {
		parent::__construct( 'complimentTuesday' );
	}

	/**
	 * Show the page to the user
	 *
	 * @param string $sub The subpage string argument (if any).
	 */
	public function execute( $sub ) {
		$out = $this->getOutput();
		$out->setPageTitle( $this->msg( 'special-complimentTuesday-title' ) );
		$out->addHelpLink( 'How to become a MediaWiki hacker' );
		$out->addWikiMsg( 'special-complimentTuesday-intro' );
	}

	protected function getGroupName() {
		return 'other';
	}
}
