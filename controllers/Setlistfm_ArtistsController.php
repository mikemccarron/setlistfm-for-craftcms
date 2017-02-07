<?php

	namespace Craft;

	class Setlistfm_ArtistsController extends BaseController {

		public function actionSaveArtist(){
			Craft::log('Saving Arists.');
			$this->redirect(craft()->getSiteUrl() . 'admin/settings/plugins/setlistfm');
		}
	}