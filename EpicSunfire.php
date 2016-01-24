<?php

namespace EpicSunfire;

use \Arya\Request as Request;
use \Arya\Response as Response;

class EpicSunfire {
	private $allowedImageExtensions = ['png', 'gif', 'jpg', 'svg'];
	private $db;

	public function __construct(\PDO $db) {
		$this->db = $db;
	}

	public function main(Request $request, Response $response) {
		$css = file_get_contents(__DIR__ . '/style.css');

		foreach(glob(__DIR__ . '/cmp/*.css') as $filename) {
			if($request->hasQueryParameter("san"))
				$css.= file_get_contents($filename);
		}
		// TODO: Change default to $classic
		// TODO: custom handling
		// TODO: modern_bwobei_style(TM)
	background: linear-gradient(to bottom, ,,) !important;

		$miranda =	[
						"<MAIN_TONE>" => "orange",
						"<CONTRAST_MAIN>" => "#2980b9",
						"<MAIN_FONT>" => "#000",
						"<MAIN_EMPHASIS>" => "#FFA54F",
						"<SND_FONT>" => "#000",
						"<AKA_LINK>" => "#3498db",
						"<INV_LINK>" => "#2980b9",
						"<POSITION_TEXT>" => "#000",
						"<POSITION_HOVER>" => "#000",
						"<POSITION_LINK>" => "#2980b9",						
						"<PHASE_FULL_BOT>" => "#ffb76b 0%",
						"<PHASE_FULL_MID>" => "#ffa73d 50%",
						"<PHASE_FULL_TOP>" => "#ff7f04 100%",
					];		
		$powerade =	[
						"<MAIN_TONE>" => "#2980b9",
						"<CONTRAST_MAIN>" => "#2980b9",
						"<MAIN_FONT>" => "#eee",
						"<MAIN_EMPHASIS>" => "#3498db",
						"<SND_FONT>" => "#eee",
						"<AKA_LINK>" => "#eee",
						"<INV_LINK>" => "#eee",
						"<POSITION_TEXT>" => "#eee",
						"<POSITION_HOVER>" => "#eee",
						"<POSITION_LINK>" => "#2980b9",						
						"<PHASE_FULL_BOT>" => "#7db9e8 0%",
						"<PHASE_FULL_MID>" => "#2989d8 50%",
						"<PHASE_FULL_TOP>" => "#1e5799 100%",						
						];
		$classic =	[
						"<MAIN_TONE>" => "red"
					];		
					
		$themes = ["miranda" => $miranda, "powerade" => $powerade, "classic" => $flatlight];
		$theme = "classic";
		foreach($themes as $name => $theme_data) {
			if($request->hasQueryParameter($name))
				$theme = $theme_data;
		}
					
		$css = $this->skin_it($css, $theme);
		
		$body = $response->getBody();
		$response->setBody($body . $css);
	}
	
	public function skin_it($css, $theme) {
			foreach($theme as $param => $val)
				$css = str_replace($param, $val, $css);
			return $css;
	}

	public function image(Request $request, $name, $extension) {
		if(!in_array($extension, $this->allowedImageExtensions)) {
			return ['status' => 404];
		}

		$response = new Response;
		$response->setHeader('Content-Type', 'image/' . $extension);
		$file = __DIR__ . '/i/' . $name . '.' . $extension;

		if (file_exists($file)) {
			$exp_gmt = gmdate("D, d M Y H:i:s", time() + 86400) ." GMT";
			$mod_gmt = gmdate("D, d M Y H:i:s", filemtime($file)) ." GMT";

			$response->setHeader('Expires', $exp_gmt);
			$response->setHeader('Last-Modified', $mod_gmt);
			$response->setHeader('Cache-Control', 'private, max-age=86400');
			$response->addHeader('Cache-Control', 'pre-check=86400');
			$response->setBody(file_get_contents($file));

			return $response;
		} else {
			return ['status' => 404];
		}
	}

	public function event(Request $request) {
		$response = new Response;

		$exp_gmt = gmdate("D, d M Y H:i:s", time() - time() % 1800 + 1801) ." GMT";
		$mod_gmt = gmdate("D, d M Y H:i:s", time() - time() % 1800) ." GMT";

		$response->setHeader('Expires', $exp_gmt);
		$response->setHeader('Last-Modified', $mod_gmt);
		$response->setHeader('Cache-Control', 'private, max-age='.(1801 - time() % 1800));
		$response->addHeader('Cache-Control', 'pre-check='.(1801 - time() % 1800));
		
		include(__DIR__ . "core.php");

		srand((integer) (time() / 1800) + 1184);
		if (rand(1, 3) == 1) {
			return $response->setBody('');
		} else {
			$response->setHeader('Content-Type', 'text/css; charset=utf-8');
			$response->setBody('.positiontext:after{content:"\f134"}');
			return $response;
		}
	}
}
