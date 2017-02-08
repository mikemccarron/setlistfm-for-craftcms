<?php

namespace Craft;

class Setlistfm_TourdateService extends Setlistfm_CoreService
{
	protected $path = 'artist/';
	protected $ext = '/setlists.json';

	public function getTourDateInfo($options = array()){
		$json = $this->_get( $this->path . $options['mbid'] . $this->ext, $options);

		// $output['page'] = $json['setlists']['@page'];
		// $output['itemsPerPage'] = $json['setlists']['@itemsPerPage'];
		// $output['totalPages'] = ceil( (int)$json['setlists']['@total'] / (int)$json['setlists']['@itemsPerPage']);
		// $output['totalEntries'] = $json['setlists']['@total'];

		return $json;
	}

	public function getTourDates($options = array()){

		$json = $this->_get( $this->path . $options['mbid'] . $this->ext, $options);

		// foreach ($json['setlists']['setlist'] as $attr => $setlist) {
		// 	$output[] = array(
		// 		'id' => (isset( $setlist['@id'] )) ? $setlist['@id'] : '',
		// 		'eventDate' => (isset( $setlist['@eventDate'] )) ? $setlist['@eventDate'] : '',
		// 		'tourName' => (isset( $setlist['@tour'] )) ? $setlist['@tour'] : '',
		// 		'venue' => ( isset($setlist['venue']['@name']) ) ? $setlist['venue']['@name'] : '',
		// 		'city' => ( isset($setlist['venue']['city']['@name']) ) ? $setlist['venue']['city']['@name'] : '',
		// 		'state' => ( isset($setlist['venue']['city']['@state']) ) ? $setlist['venue']['city']['@state'] : '',
		// 		'stateCode' => ( isset($setlist['venue']['city']['@stateCode']) ) ? $setlist['venue']['city']['@stateCode'] : '',
		// 		'hasSetlist' => ( isset($setlist['sets']['set']) ) ? true : false
		// 	);
		// }

		return $json;
	}
}