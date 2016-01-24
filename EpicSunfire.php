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

		// TODO: modern_bwobei_style
		
		$cmps = ["ais", "ans", "cid", "cnr", "com", "csd", "cwd", "erwin", "rpz", "san", "san_n", "smn", "vti", "vti2", "wcv", "wcv_csd", "xxx" ];

		$originals = [
						"o" => [], 
						"o2" => ["ais", "ans", "cid", "cnr", "com", "csd", "cwd", "rpz", "san", "smn", "vti", "vti2", "xxx"], 
						"o3" => [], 
						"o4" => []
					 ];
		
		foreach($originals as $name => $original) {
			if($request->hasQueryParameter($name) {
				foreach($original as $cmp)
					$css.= file_get_contents(__DIR__ . "/cmp/" . $cmp . ".css");
				break;
			}
		}
		
		foreach($cmps as $cmp) {
			if($request->hasQueryParameter($cmp))
				$css.= file_get_contents(__DIR__ . "/cmp/" . $cmp . ".css");
		}
		// TODO: Change default to $classic
		// TODO: custom handling
		// TODO: modern_bwobei_style(TM)

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
						"<PHASE_CUR_BOT>" => "#7db9e8 0%",
						"<PHASE_CUR_MID>" => "#2989d8 50%",
						"<PHASE_CUR_TOP>" => "#1e5799 100%",
						"<PHASE_FULL_BOT>" => "#ffb76b 0%",
						"<PHASE_FULL_MID>" => "#ffa73d 50%",
						"<PHASE_FULL_TOP>" => "#ff7f04 100%",
						"<BACKGROUND_LINK>" => "#2980b9",
						"<SZ_INACTIVE_BG>" => "#3498db",
						"<SZ_ACTIVE_BG>" => "white",
						"<PERSON_LIST_BG>" => "#2980b9",
						"<PERSON_LIST>" => "#FFF",
						"<PLANT_LIST_BG>" => "green",
						"<PLANT_LIST>" => "FFF",
						"<ITEM_LIST_BG>" => "orange",
						"<ITEM_LIST>" => "#000",
						"<MAIN_HEADER>" => "orange",
						"<TEXT_SHADOW>" => "0 2px 1px rgba(0,0,0,.2)",
						"<TEXT_SIZE>" => "13px",
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
						"<POSITION_LINK>" => "#eee",						
						"<PHASE_FULL_BOT>" => "#7db9e8 0%",
						"<PHASE_FULL_MID>" => "#2989d8 50%",
						"<PHASE_FULL_TOP>" => "#1e5799 100%",
						"<PHASE_CUR_BOT>" => "#ffb76b 0%",
						"<PHASE_CUR_MID>" => "#ffa73d 50%",
						"<PHASE_CUR_TOP>" => "#ff7f04 100%",
						"<BACKGROUND_LINK>" => "#CC3300",
						"<SZ_INACTIVE_BG>" => "#3498db",
						"<SZ_ACTIVE_BG>" => "white",
						"<PERSON_LIST_BG>" => "#2980b9",
						"<PERSON_LIST>" => "#eee",
						"<PLANT_LIST_BG>" => "#2980b9",
						"<PLANT_LIST>" => "#eee",
						"<ITEM_LIST_BG>" => "#2980b9",
						"<ITEM_LIST>" => "#eee",
						"<MAIN_HEADER>" => "#2980b9",
						"<TEXT_SHADOW>" => "0 2px 1px rgba(0,0,0,.2)",
						"<TEXT_SIZE>" => "13px",
						];	
						
		$lefizz =	[
						"<MAIN_TONE>" => "linear-gradient(to top, #BBB 0%, white 100%)",
						"<CONTRAST_MAIN>" => "#CC3300",
						"<MAIN_FONT>" => "#000",
						"<MAIN_EMPHASIS>" => "#eee",
						"<SND_FONT>" => "#000",
						"<AKA_LINK>" => "#CC3300",
						"<INV_LINK>" => "#CC3300",
						"<POSITION_TEXT>" => "#000",
						"<POSITION_HOVER>" => "#CC3300",
						"<POSITION_LINK>" => "#000",						
						"<PHASE_CUR_BOT>" => "#7db9e8 0%",
						"<PHASE_CUR_MID>" => "#2989d8 50%",
						"<PHASE_CUR_TOP>" => "#1e5799 100%",
						"<PHASE_FULL_BOT>" => "#ffb76b 0%",
						"<PHASE_FULL_MID>" => "#ffa73d 50%",
						"<PHASE_FULL_TOP>" => "#ff7f04 100%",
						"<BACKGROUND_LINK>" => "#CC3300",
						"<SZ_INACTIVE_BG>" => "#000",
						"<SZ_ACTIVE_BG>" => "white",
						"<PERSON_LIST_BG>" => "linear-gradient(to top, #AAF 0%, white 100%)",
						"<PERSON_LIST>" => "#000",
						"<ITEM_LIST_BG>" => "linear-gradient(to top, gold 0%, white 100%)",
						"<ITEM_LIST>" => "#000",
						"<PLANT_LIST_BG>" => "linear-gradient(to top, green 0%, white 100%)",
						"<PLANT_LIST>" => "#000",
						"<MAIN_HEADER>" => "linear-gradient(to right, orange 0%, white 100%)",
						"<TEXT_SHADOW>" => "none",
						"<TEXT_SIZE>" => "unset",
						];	
						
		$themes = ["miranda" => $miranda, "powerade" => $powerade, "lefizz" => $lefizz];
		$theme = "lefizz";
		foreach($themes as $name => $theme_data) {
			if($request->hasQueryParameter($name)) {
				$theme = $theme_data;
				break;
			}
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
