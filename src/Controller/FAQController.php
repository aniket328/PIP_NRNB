<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


/**
 * FAQ controller.
 *

 */
class FAQController extends AbstractController
{
	
	/**
	 * about
	 * @Route("/faq/", name="faq")
	 * @Route("/admin/faq/", name="admin_faq")
	 *
	 */
	public function faqAction(Request $request)
	{
	
		/*
		$admin_settings = $this->getDoctrine()
		->getRepository('AppBundle:Admin_Settings')
		->find(1);
		
		$title = $admin_settings->getTitle();
		$short_title = $admin_settings->getShortTitle();
		$faq = $admin_settings->getFaq();
		$footer = $admin_settings->getFooter();
		$main_color_scheme = $admin_settings->getMainColorScheme();
        $header_color_scheme = $admin_settings->getHeaderColorScheme();
        $logo_color_scheme = $admin_settings->getLogoColorScheme();
        $button_color_scheme = $admin_settings->getButtonColorScheme();
		*/

		$title = "title";
		$short_title = "short title";
		$faq = "faq comes here";
		$footer = "footer here";
		$main_color_scheme = "black";
		$header_color_scheme = "brown";
		$logo_color_scheme = "black";
		$button_color_scheme = "red";

		$login_status = false;

		/*
		$is_fully_authenticated = $this->get('security.context')
		->isGranted('IS_AUTHENTICATED_FULLY');
		
		if($is_fully_authenticated){
		    $login_status =  true;
		}
		*/

		$admin_status = false;

		/*
		if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
			$admin_status = true;
		}
		*/

		return $this->render('faq.html.twig', array(
		        'title' => $title,
		        'faq' => $faq,
		        'main_color_scheme' => $main_color_scheme,
                'header_color_scheme' => $header_color_scheme,
                'logo_color_scheme' => $logo_color_scheme,
                'button_color_scheme' => $button_color_scheme,
		        'short_title' => $short_title,
		        'footer' => $footer,
				'login_status' => $login_status,
				'admin_status' => $admin_status
		));
	

	}


}

?>
